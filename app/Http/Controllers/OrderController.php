<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use App\Models\contract;
use App\Models\contract_detail;
use App\Models\brand;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Session;
use Auth;

class OrderController extends Controller
{
    public function BookCar(){
        if(Auth::check()):
        $carlist = car::all();
        $brandlist = brand::all();
        return view ('booking.bookingindex',array('carlist' => $carlist, 'brandlist' => $brandlist))->with('car','Car');
        else:
        return redirect('login')->with('status','Please login to continue!');
        endif;
    }

    public function BookACar($id){
        if(Auth::check()):
        $carlist = car::where('CarID',$id)->get();
        return view ('booking.bookcar',compact('carlist'));
        else:
        return redirect('login')->with('status','Please login to continue!');
        endif;
    }

    public function filterCar($id){
        $car = $id;
        $carlist = car::where('CarBrand',$id)->get();
        $brandlist = brand::all();
        return view ('booking.bookingindex',array('carlist' => $carlist, 'brandlist' => $brandlist))->with('car',$car);

    }


    public function cart()
    {
        if(Auth::check()):
        return view('booking.cart');
        else:
        return redirect('login')->with('status','Please login to continue!');
        endif;
    }


    public function addToCart(Request $request, $id)
    
    {   $request->validate([
        'departure' => 'required|after:yesterday',
        'arrival' => 'required|after_or_equal:departure',
        ],[
        'departure.after' => 'Departure date cannot be in the past',
        'arrival.after_or_equal' => 'Arrival date must be equal or later than departure date',
        ]);


        $car = car::find($id);
        $departure = $request->input('departure');
        $arrival = $request->input('arrival');
        $datetime1 = new DateTime($departure);
        $datetime2 = new DateTime($arrival);
        $interval = $datetime1->diff($datetime2);
        $days = ($interval->format('%a'))+1;//now do whatever you like with $days

        if(!$car) {
             abort(404);
        }
        $cart = Session::get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "CarBrand" => $car->CarBrand,
                        "CarModel" => $car->CarModel,
                        "CarPlate" => $car->CarPlate,
                        "CarPrice" => $car->CarPrice,
                        "Departure" => $departure,
                        "Arrival" => $arrival,
                        "quantity" => $days,
                        "CarPic" => $car->CarPic
                    ]
            ];
            Session::put('cart',$cart);
            return redirect('booking')->with('status', 'Car added to cart successfully!');
        }
        // if cart not empty then check if this product exist then gicing warning
        if(isset($cart[$id])) {
            return redirect()->back()->with('status', 'You already book this car!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "CarBrand" => $car->CarBrand,
            "CarModel" => $car->CarModel,
            "CarPlate" => $car->CarPlate,
            "CarPrice" => $car->CarPrice,
            "Departure" => $departure,
            "Arrival"  => $arrival,
            "quantity" => $days,
            "CarPic" => $car->CarPic
        ];
        session()->put('cart', $cart);
        return redirect('booking')->with('status', 'Car added to cart successfully!');
    }

    



    // public function update(Request $request)
    // {
    //     if($request->id and $request->quantity)
    //     {
    //         $cart = session()->get('cart');
    //         $cart[$request->id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //         session()->flash('success', 'Cart updated successfully');
    //     }
    // }


    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout(){
        
        //Create Contract Number
        $cusID = Auth::id();
        $date = Carbon::now();
        $cartdate = $date->toDateString();
        $dd = $date->day;
        $hh = $date->month;
        $mm =  $date->minute;
        $ss = $date->second;
        $time = $dd.$hh.$mm.$ss;
        $contractNo = "CUS00".$cusID."_".$time;
        
        //Add data to contract table
        $cart = Session::get('cart');

        if($cart){
        $contract = new contract;
        $contract->ContractNo = $contractNo;
        $contract->ContractDate = $cartdate;
        $contract->CusID = $cusID;
        $contract->ContractStatus = 1;
        $contract->save();
        
        //Add data to contract details table
        foreach($cart as $id => $detail): 
        $contract_detail = new contract_detail;
        $contract_detail->ContractNo  = $contract->ContractNo;
        $contract_detail->CarPlate    = $detail['CarPlate'];
        $contract_detail->Departure   = $detail['Departure'];
        $contract_detail->Arrival     = $detail['Arrival'];
        $contract_detail->SubTotal    = $detail['CarPrice']*$detail['quantity'];
        $contract_detail->save();  
        endforeach;


        Session::forget('cart');
        return redirect('booking')->with('status','Your booking is completed!!!');
        }
        return redirect()->back()->with('status','Your cart is empty!!!');
        
    }
}

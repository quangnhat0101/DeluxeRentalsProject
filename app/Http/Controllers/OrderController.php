<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use App\Models\contract;
use App\Models\contract_detail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function BookCar(){
        $carlist = car::all();
        return view ('booking.booking',compact('carlist'));
    }


    public function cart()
    {
        return view('booking.cart');
    }


    public function addToCart($id)
    {
        $car = car::find($id);
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
                        "quantity" => 1,
                        "CarPic" => $car->CarPic
                    ]
            ];
            Session::put('cart',$cart);
            return redirect()->back()->with('status', 'Product added to cart successfully!');
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
            "quantity" => 1,
            "CarPic" => $car->CarPic
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
        $date = Carbon::now();
        $cartdate = $date->toDateString();
        //$dd = $date->day;
        //$hh = $date->month;
        //$mm =  $date->minute;
        //$ss = $date->second;
        //$time = $dd.$hh.$mm.$ss;

        //$contractNo = $time. "/" . $cartdate;
        $contractNo = $date->toDateTimeString();

        $cart = Session::get('cart');

        if($cart){
        $contract = new contract;
        $contract->ContractNo = $contractNo;
        $contract->ContractDate = $cartdate;
        $contract->ContractStatus = 1;
        $contract->save();

        $cartitemno = count((array) $cart);

        for($i=1; $i<$cartitemno; $i++):
           
            $contract_detail = new contract_detail;

            $contract_detail->ContractID  = $contract->ContractID;
            $contract_detail->CarPlate    = $cart[$i]->CarPlate;
            // $subPrice   = $cart[$i]->CarPrice * $cart[$i]->quantity;
            $contract_detail->save();           
           
        endfor;

        Session::forget('cart');
        return redirect('booking');
        }
        return redirect()->back()->with('status','Your cart is empty!!!');
        
    }
}

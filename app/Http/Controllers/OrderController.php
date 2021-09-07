<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

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
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "CarBrand" => $car->CarBrand,
                        "CarModel" => $car->CarModel,
                        "CarPrice" => $car->CarPrice,
                        "quantity" => 1,
                        "CarPic" => $car->CarPic
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then gicing warning
        if(isset($cart[$id])) {
            return redirect()->back()->with('notice', 'You already book this car!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "CarBrand" => $car->CarBrand,
            "CarModel" => $car->CarModel,
            "CarPrice" => $car->CarPrice,
            "quantity" => 1,
            "CarPic" => $car->CarPic
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }


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
}

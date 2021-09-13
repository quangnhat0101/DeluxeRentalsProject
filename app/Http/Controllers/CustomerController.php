<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    //READ
    public function customerindex(){
        $customerlist = customer::all();
        return view ('customer.index',compact('customerlist'));
    }

    //PROFILE
        public function customerprofile(){
            $customerlist = customer::all();
            return view ('customer.profile',compact('customerlist'));
        }

    //CREATE
    public function customercreate(){
        return view ('customer.create');
    }

    public function customercreateprocess(Request $request){

        $customer = new customer;
        $customer->CusName = $request->input('txtcName');
        $customer->CusDOB = $request->input('txtcDOB');
        $customer->CusAdd = $request->input('txtcAdd');
        $customer->CusMail = $request->input('txtcMail');
        $customer->CusPass = $request->input('txtcPass');
        $customer->CusPhone = $request->input('txtcPhone');
        $customer->save();
        
        return redirect()->back()->with('success','Customer Account Successfully created');
    }

    //UPDATE
    public function UpdateCustomer($cid){
        $customerlist = customer::find($cid);
        return view('customer.update',compact('customerlist'));    
    }

    public function UpdateCustomerProcess(Request $request, $cid){
        $customerlist = customer::find($cid);
        $customerlist->CusName = $request -> input('txtcName');
        $customerlist->CusDOB = $request -> input('txtcDOB');
        $customerlist->CusAdd = $request -> input('txtcAdd');
        $customerlist->CusMail = $request -> input('txtcMail');
        $customerlist->CusPhone = $request -> input('txtcPhone');
        $customerlist->update();
        
        return redirect()->back()->with('success','Customer Information updated successfully'); 
    }

    //UPDATE PASSWORD
    public function UpdatePassword($cid){
        $customerlist = customer::find($cid);
        return view('customer.updatepass',compact('customerlist'));    
    }

    public function UpdatePasswordProcess(Request $request, $cid){
        $customerlist = customer::find($cid);
        $customerlist->CusPass = $request -> input('txtcPass');
        $customerlist->update();

        return redirect()->back()->with('success','Customer Password Updated Successfully'); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\contract;
use App\Models\contract_detail;
use App\Models\User;

class ContractController extends Controller
{
    public function contractIndex(){
        $adminid = Auth::id();
        $admincheck = User::where('id',$adminid)->value('email');
        if($admincheck=='admin@admin.com'):
        $contractlist = contract::all();
        return view ('contract.index',compact('contractlist'));
        else:
        return redirect('Homepage.homepage');
        endif;
    }

    public function SeeContractDetail($id){

    }


    public function contractDelete($id){
        $contract = contract::find($id);
        $contract->delete();

        return redirect()->back()->with('status','Contract deleted successfully');
    }
}

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
        return redirect('homepage');
        endif;
    }

    public function seeContractDetail($id){
        $contract = contract::where('ContractNo',$id)->get();
        $detail = contract_detail::where('ContractNo',$id)->get();
        return view ('contract.contractdetails', array('contract' => $contract, 'detail' => $detail));
    }


    public function contractDelete($id){
        $contract = contract::find($id);
        $contractdetail = $contract->ContractNo;
        $detaildelete = contract_detail::where('ContractNo',$contractdetail);
        $detaildelete->delete();
        $contract->delete();



        return redirect()->back()->with('status','Contract deleted successfully');
    }
}

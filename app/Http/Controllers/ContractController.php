<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\contract;
use App\Models\contract_detail;
use App\Models\User;
Use App\Models\driver;
Use App\Models\car;
Use App\Models\management_staff;

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

    public function detailUpdate($id){
        $detail = contract_detail::find($id);
        $driverlist = driver::where('DriverStatus',1)->get();
        $carlist = car::all();
        return view('contract.detailupdate',array('detail' => $detail, 'driverlist' => $driverlist, 'carlist' => $carlist));
    }

    public function detailUpdateProcess(Request $request, $id){
        $detail = contract_detail::find($id);
        $detail->DriverName = $request->input('txtDriverName');
        $detail->CarPlate = $request->input('txtCarPlate');
        $detail->Departure = $request->input('txtDeparture');
        $detail->Arrival = $request->input('txtArrival');
        $detail->SubTotal = $request->input('txtSubtotal');
        $detail->update();
        
        return redirect('contractdetail/'.$detail->ContractNo)->with('status','Contract detail updated successfully');
    }

    public function detailDelete($id){
        $detail = contract_detail::find($id);
        $detail->delete();

        return redirect()->back()->with('status','Contract detail deleted successfully');
    }       
    

    public function contractStaffEdit($id){
        $contract = contract::find($id);
        $stafflist = management_staff::where('CurrentStaff',1)->get();
        return view('contract.contractstaffedit',array('contract' => $contract, 'stafflist' => $stafflist));
    }

    public function contractStaffUpdate(Request $request, $id){
        $contract = contract::find($id);
        $contract->StaffID = $request->input('txtStaffID');
        $contract->update();
        return redirect('contractdetail/'.$contract->ContractNo)->with('status','Staff updated successfully');
    }

}
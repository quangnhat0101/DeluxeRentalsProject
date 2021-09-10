<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\management_staff;
use Illuminate\Support\Facades\File;
class StaffController extends Controller
{
    //READ
    public function index(){
        //select all records in table
        $rs = management_staff::all();
        return view('staff.Index') -> with(['rs' => $rs]);
    }

    //CREATE
    public function create(){
        return view('staff.Create');
    }

    public function createProcess(Request $rqst){
        $rqst->validate([
           'txtsPic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        
        //Read data from textfield
        $staff= new management_staff;

        $staff->StaffName = $rqst -> input('txtsName');
        $staff->StaffPass = $rqst -> input('txtsPass');
        $staff->StaffDOB = $rqst -> input('txtsDOB');
        $staff->StaffPhone = $rqst -> input('txtsPhone');
        $staff->StaffAdd = $rqst -> input('txtsAdd');
        $staff->StaffMail = $rqst -> input('txtsMail');
        $staff->StaffSalary = $rqst -> input('txtsSalary');    
        
        if($rqst->hasfile('txtsPic')){  
            $sfpic = $rqst->file('txtsPic');
            $extension = $sfpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $sfpic->move('uploads/stafflist/', $filename);  
            $staff->StaffPic = $filename;
        }

        $staff->CurrentStaff = $rqst -> input('txtsCurrent');
        $staff->save();

        return redirect('staffindex')->with('status','Staff Created Successfully');
    }

    //UPDATE
    public function update($sfid){
        $staff = management_staff::find($sfid);
        return view('staff.Update', compact('staff'));
    }

    public function updateProcess(Request $rqst, $sfid){
        //Read data from textfield
        $staff = management_staff::find($sfid);
      
        $staff->StaffName = $rqst -> input('txtsName');
        $staff->StaffPass = $rqst -> input('txtsPass');
        $staff->StaffDOB = $rqst -> input('txtsDOB');
        $staff->StaffPhone = $rqst -> input('txtsPhone');
        $staff->StaffAdd = $rqst -> input('txtsAdd');
        $staff->StaffMail = $rqst -> input('txtsMail');
        $staff->StaffSalary = $rqst -> input('txtsSalary');
        $staff->CurrentStaff = $rqst -> input('txtsCurrent');

        if($rqst->hasfile('txtsPic')){
            $destination = 'uploads/stafflist/'.$staff->StaffPic;
            if(File::exists($destination)){
                File::delete($destination);
            } 
            $sfpic = $rqst->file('txtsPic');
            $extension = $sfpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $sfpic->move('uploads/stafflist/', $filename);  
            $staff->StaffPic = $filename;
        }


        $staff->update();

        return redirect('staffindex')->with('status','Staff Updated Successfully');
    }

    //DELETE
    public function delete($sfid){
        $staff = management_staff::find($sfid);
        $staff->delete();
        return redirect() -> action('staffindex');
    }

    
}

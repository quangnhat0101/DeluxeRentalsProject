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
            'txtsName' => 'required|min:3|max:20',
            'txtsPass' => 'required|min:6',  
            'txtsMail' => 'required|email',  
            'txtsDOB' => 'required|after:1980-01-01|before:2002-01-01',
            'txtsSalary' => 'required|integer',
            'txtsPhone' => 'required|digits_between:10,20|numeric',
        ], [
            'txtsPic.required' => 'Please upload staff picture',
            'txtsName.required' => 'Please enter staff name',
            'txtsName.max' => 'Staff name cannot more than 20 character',
            'txtsPass.required' => 'Please enter staff password',
            'txtsPass.min' => 'Password cannot be less than 6 character',
            'txtsPass.max' => 'Password cannot be more than 20 character',
            'txtsMail.required' => 'Please enter staff email',
            'txtsMail.email' => 'Please enter an appropriate staff email',
            'txtsDOB.required' => 'Please enter staff birthday',
            'txtsDOB.after' => 'Staff must be younger than 41',
            'txtsDOB.before' => 'Staff must be older than 19',
            'txtsSalary.required' => 'Please enter staff salary',
            'txtsSalary.integer' => 'Please enter numeric value only',
            'txtsPhone.required' => 'Please enter staff phone number',
            'txtsPhone.digits_between' => 'Staff phone number must be at least 10 digits',
            'txtsPhone.numeric' => 'Please enter numeric value only',
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

        $rqst->validate([
            'txtsPic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'txtsName' => 'required|min:3|max:20',
            'txtsPass' => 'required|min:6',  
            'txtsMail' => 'required|email',  
            'txtsDOB' => 'required|after:1980-01-01|before:2002-01-01',
            'txtsSalary' => 'required|integer',
            'txtsPhone' => 'required|digits_between:10,20|numeric',
        ], [
            'txtsPic.required' => 'Please upload staff picture',
            'txtsName.required' => 'Please enter staff name',
            'txtsName.max' => 'Staff name cannot more than 20 character',
            'txtsPass.required' => 'Please enter staff password',
            'txtsPass.min' => 'Password cannot be less than 6 character',
            'txtsPass.max' => 'Password cannot be more than 20 character',
            'txtsMail.required' => 'Please enter staff email',
            'txtsMail.email' => 'Please enter an appropriate staff email',
            'txtsDOB.required' => 'Please enter staff birthday',
            'txtsDOB.after' => 'Staff must be younger than 41',
            'txtsDOB.before' => 'Staff must be older than 19',
            'txtsSalary.required' => 'Please enter staff salary',
            'txtsSalary.integer' => 'Please enter numeric value only',
            'txtsPhone.required' => 'Please enter staff phone number',
            'txtsPhone.digits_between' => 'Staff phone number must be at least 10 digits',
            'txtsPhone.numeric' => 'Please enter numeric value only',
        ]);
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


    //VIEW DETAIL
    public function viewdetail($id){
        $staff = management_staff::find($id);
        return view('staff.Detail', compact('staff'));
    }
    
}

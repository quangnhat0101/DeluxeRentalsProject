<?php

namespace App\Http\Controllers;
use App\Models\driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DriverController extends Controller
{
    //READ
    public function index(){
        //select all records in table
        $rs = driver::all();
        return view('driver.Index',compact('rs'));
    }

    //CREATE
    public function create(){
        return view('driver.Create');
    }

    public function createProcess(Request $rqst){
        $rqst->validate([
            'txtdPic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'txtdName' => 'required|min:3|max:20',
            'txtdMail' => 'required|email',  
            'txtdDOB' => 'required|after:1980-01-01|before:2002-01-01',
            'txtdPhone' => 'required|digits_between:10,20|numeric',
            'txtdLicense' => 'required',
        ], [
            'txtdPic.required' => 'Please upload driver picture ',
            'txtdName.required' => 'Please enter driver name',
            'txtdName.max' => 'Driver name cannot more than 20 character',
            'txtdMail.required' => 'Please enter driver email',
            'txtdMail.email' => 'Please enter an appropriate email',
            'txtdDOB.required' => 'Please enter driver birthday',
            'txtdDOB.after' => 'Driver must be younger than 41',
            'txtdDOB.before' => 'Driver must be younger than 19',
            'txtdLicense' => 'Please enter driver license number',
            'txtdPhone.required' => 'Please enter driver phone number', 
            'txtdPhone.digits_between' => 'Driver phone number must be at least 10 digits',          
            'txtdPhone.numeric' => 'Please enter only numeric value',
        ]);

        //Read data from textfield
        $driver= new driver;

        $driver->DriverName = $rqst -> input('txtdName');
        $driver->DriverLicense = $rqst -> input('txtdLicense');
        $driver->DriverDOB = $rqst -> input('txtdDOB');
        $driver->DriverPhone = $rqst -> input('txtdPhone');
        $driver->DriverAdd = $rqst -> input('txtdAdd');
        $driver->DriverMail = $rqst -> input('txtdMail');
        
        
        if($rqst->hasfile('txtdPic')){  
            $dpic = $rqst->file('txtdPic');
            $extension = $dpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $dpic->move('uploads/driverlist/', $filename);  
            $driver->DriverPic = $filename;
        }
                
        $driver->DriverStatus = $rqst -> input('txtdStatus');
        $driver->CurrentDriver = $rqst -> input('txtdCurrent');

        $driver->save();
        return redirect('driverindex')->with('status','Driver Added Successfully');
    }

    //UPDATE
    public function update($did){
        $driver= driver::find($did);
        return view('driver.Update', compact('driver'));
    }

    public function updateProcess(Request $rqst, $did){

        $rqst->validate([
            'txtdPic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'txtdName' => 'required|min:3|max:20',
            'txtdMail' => 'required|email',  
            'txtdDOB' => 'required|after:1980-01-01|before:2002-01-01',
            'txtdPhone' => 'required|digits_between:10,20|numeric',
            'txtdLicense' => 'required',
        ], [
            'txtdPic.required' => 'Please upload driver picture ',
            'txtdName.required' => 'Please enter driver name',
            'txtdName.max' => 'Driver name cannot more than 20 character',
            'txtdMail.required' => 'Please enter driver email',
            'txtdMail.email' => 'Please enter an appropriate email',
            'txtdDOB.required' => 'Please enter driver birthday',
            'txtdDOB.after' => 'Driver must be younger than 41',
            'txtdDOB.before' => 'Driver must be younger than 19',
            'txtdLicense' => 'Please enter driver license number',
            'txtdPhone.required' => 'Please enter driver phone number', 
            'txtdPhone.digits_between' => 'Driver phone number must be at least 10 digits',          
            'txtdPhone.numeric' => 'Please enter only numeric value',
        ]);
        
        $driver= driver::find($did);

        $driver->DriverName = $rqst -> input('txtdName');
        $driver->DriverLicense = $rqst -> input('txtdLicense');
        $driver->DriverDOB = $rqst -> input('txtdDOB');
        $driver->DriverPhone = $rqst -> input('txtdPhone');
        $driver->DriverAdd = $rqst -> input('txtdAdd');
        $driver->DriverMail = $rqst -> input('txtdMail');
        
        if($rqst->hasfile('txtdPic')){
            $destination = 'uploads/driverlist/'.$driver->DriverPic;
            if(File::exists($destination)){
                File::delete($destination);
            } 
            $dpic = $rqst->file('txtdPic');
            $extension = $dpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $dpic->move('uploads/driverlist/', $filename);  
            $driver->DriverPic = $filename;
        }
                        
        $driver->DriverStatus = $rqst -> input('txtdStatus');
        $driver->CurrentDriver = $rqst -> input('txtdCurrent');
        $driver->update();

        return redirect('driverindex')->with('status','Driver Updated Successfully');
    }

    //DELETE
    public function delete($did){
        $driver = driver::find($did);
        $driver->delete();
        return redirect('driverindex')->with('status','Driver Deleted Successfully');
    }
}

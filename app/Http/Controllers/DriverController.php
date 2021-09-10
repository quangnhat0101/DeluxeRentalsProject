<?php

namespace App\Http\Controllers;
use App\Models\driver;
use Illuminate\Http\Request;

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
        //Read data from textfield
        $driver= driver::find($did);

        $driver->DriverName = $rqst -> input('txtdName');
        $driver->DriverLicense = $rqst -> input('txtdLicense');
        $driver->DriverDOB = $rqst -> input('txtdDOB');
        $driver->DriverPhone = $rqst -> input('txtdPhone');
        $driver->DriverAdd = $rqst -> input('txtdAdd');
        $driver->DriverMail = $rqst -> input('txtdMail');
        
        if($rqst->hasfile('txtsPic')){
            $destination = 'uploads/driverlist/'.$driver->DriverPic;
            if(File::exists($destination)){
                File::delete($destination);
            } 
            $dpic = $rqst->file('txtdPic');
            $extension = $dpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $dpic->move('upload/driverlist/', $filename);  
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

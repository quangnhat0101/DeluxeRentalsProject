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
        $driver->DriverLience = $rqst -> input('txtdLience');
        $driver->DriverDOB = $rqst -> input('txtdDOB');
        $driver->DriverPhone = $rqst -> input('txtdPhone');
        $driver->DriverAdd = $rqst -> input('txtdAdd');
        $driver->DriverMail = $rqst -> input('txtdMail');
        
        
        if($rqst->hasfile('txtdPic')){  
            $dpic = $rqst->file('txtdPic');
            $extension = $dpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $dpic->move('img/', $filename);  
            $driver->DriverPic = $filename;
        }
                
        $driver->DriverStatus = $rqst -> input('txtdStatus');
        $driver->CurentDriver = $rqst -> input('txtdCurent');

        $driver->save();
        return redirect() -> action('DriverController@index',['msgCreate']);
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
        $driver->DriverLience = $rqst -> input('txtdLience');
        $driver->DriverDOB = $rqst -> input('txtdDOB');
        $driver->DriverPhone = $rqst -> input('txtdPhone');
        $driver->DriverAdd = $rqst -> input('txtdAdd');
        $driver->DriverMail = $rqst -> input('txtdMail');
        
        if($rqst->hasfile('txtsPic')){
            $destination = 'img/'.$driver->DriverPic;
            if(File::exists($destination)){
                File::delete($destination);
            } 
            $dpic = $rqst->file('txtdPic');
            $extension = $dpic->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $dpic->move('img/', $filename);  
            $driver->DriverPic = $filename;
        }
                        
        $driver->DriverStatus = $rqst -> input('txtdStatus');
        $driver->CurentDriver = $rqst -> input('txtdCurent');
        $driver->update();

        return redirect() -> action('DriverController@index');
    }

    //DELETE
    public function delete($did){
        $driver = driver::find($did);
        $driver->delete();
        return redirect() -> action('DriverController@index');
    }
}

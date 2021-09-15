<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\maintenance;
use DB;
use Session;
class MaintenanceController extends Controller
{
    public function MaintenanceIndex(){
        $maintenancelist = maintenance::all();
        return view ('maintenance.index',compact('maintenancelist'));
    }

    public function CreateMaintenance(){
        return view ('maintenance.create');
    }

    public function StoreMaintenance(Request $request){

        $maintenance = new maintenance;
        $maintenance->MaintenanceDate = $request->input('txtDate');
        $maintenance->CarPlate = $request->input('txtCarPlate');
        $maintenance->Comment = $request->input('txtComment');

        $maintenance->save();
        
        return redirect('maintenanceindex')->with('status','Maintenance added successfully');
    }

    public function EditMaintenance($id){
        $maintenancelist = maintenance::find($id);
        return view('maintenance.edit',compact('maintenancelist'));
        
    }
    
    public function UpdateMaintenance(Request $rqst, $MaintenanceID){
        $Maintenance = array();
        $Maintenance['MaintenanceDate'] = $rqst->txtDate;
        $Maintenance['CarPlate'] = $rqst->txtCarPlate;                        
        $Maintenance['Comment'] = $rqst->txtComment;

        DB::table('maintenances')
            ->where('MaintenanceID', $MaintenanceID)
            ->update($Maintenance);

        return redirect('maintenanceindex')->with('status','Maintenance updated successfully');;
    }  
    
    public function DeleteMaintenance($MaintenanceID){
        DB::table('maintenances')
            ->where('MaintenanceID', $MaintenanceID)
            ->delete();
        //Session::put('message', 'Delete Maintenance successfully!!');
        return redirect('maintenanceindex')->with('status','Delete Maintenance successfully!!' );
    }    



}


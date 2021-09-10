<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    public function BrandIndex(){
        $brandlist = brand::all();
        return view ('brand.index',compact('brandlist'));
    }

    public function CreateBrand(){
        return view ('brand.create');
    }
    public function StoreBrand(Request $request){

        $brand = new brand;
        $brand->BrandName = $request->input('txtName');
        $brand->BrandAdd = $request->input('txtAddress');
        $brand->BrandPhone = $request->input('txtPhone');
        $brand->BrandFax = $request->input('txtFax');
        $brand->BrandMail = $request->input('txtEmail');
        if($request->hasfile('logoPic')){  
            $file = $request->file('logoPic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/brandlist/', $filename);  
            $brand->BrandLogo = $filename;
        }
        $brand->save();
        
        return redirect('brandindex')->with('status','Brand added successfully');
    }
        
        

    public function EditBrand($id){
        $brandlist = brand::find($id);
        return view('brand.edit',compact('brandlist'));
        
    }
    
    public function UpdateBrand(Request $request, $id){
        $brand = brand::find($id);
        $brand->BrandName = $request->input('txtName');
        $brand->BrandAdd = $request->input('txtAddress');
        $brand->BrandPhone = $request->input('txtPhone');
        $brand->BrandFax = $request->input('txtFax');
        $brand->BrandMail = $request->input('txtEmail');
        if($request->hasfile('logoPic')){  
            $destination = 'uploads/brandlist/'.$brand->BrandLogo;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('logoPic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/brandlist/', $filename);  
            $brand->BrandLogo = $filename;
        }
        $brand->save();
        return redirect('brandindex')->with('status','Brand information updated successfully');
    }

    
    public function DeleteBrand($BrandID){
        DB::table('brands')
            ->where('BrandID', $BrandID)
            ->delete();
        return redirect('brandindex');
    }    
    
}

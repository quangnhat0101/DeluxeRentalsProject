<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //READ
    public function feedbackindex(){
    $feedbacklist = feedback::all();
    return view ('feedback.index',compact('feedbacklist'));
    }
    
    //CREATE
    public function feedbackcreate(){
        return view ('feedback.create');
    }
    
    public function feedbackcreateprocess(Request $request){
        $feedback = new feedback;
        $feedback->DriverAttitude = $request -> input('txtAtt');
        $feedback->Punctuality = $request -> input('txtPunc');
        $feedback->ReasonalPrice = $request -> input('txtReaPri');
        $feedback->Comment = $request -> input('txtComment');
        $feedback->save();
        Post::create($request->all());
            
        return redirect()->back()->with('status','feedback Account Successfully created');
    }
    
    //EDIT
    public function Updatefeedback($fid){
        $feedbacklist = feedback::find($fid);
        return view('feedback.update',compact('feedbacklist'));    
    }
    
    public function Updatefeedbackprocess(Request $request, $fid){
        $feedbacklist = feedback::find($fid);
        $feedbacklist->DriverAttitude = $request -> input('txtAtt');
        $feedbacklist->Punctuality = $request -> input('txtPunc');
        $feedbacklist->ReasonalPrice = $request -> input('txtReaPri');
        $feedbacklist->Comment = $request -> input('txtComment');
        $feedbacklist->update();
            
        return redirect()->back()->with('status','feedback updated successfully');
            
    }   
    
    //DELETE
    public function DeleteFeedback($fid){
        $feedback = feedback::find($fid);
        $feedback->delete();

        return redirect()->back()->with('status','Feedback deleted successfully');
    }
}


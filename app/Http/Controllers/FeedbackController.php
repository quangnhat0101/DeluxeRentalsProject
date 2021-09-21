<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;
use App\Models\contract;

class FeedbackController extends Controller
{
    //READ
    public function feedbackindex(){
    $feedbacklist = feedback::all();
    return view ('feedback.index',compact('feedbacklist'));
    }
    
    // //CREATE -----------------DUC---------------------------
    // public function feedbackcreate($id){
    //     $contractno = contract::where('ContractNo',$id)->get();
    //     return view ('feedback.create',compact('contractno'));
    // }

    // public function feedbackcreateprocess(Request $request,$id){
    //     $contractno = contract::where('CusID',Auth::id())->where('ContractNo',$id)
    //                 ->value('ContractNo');
    //     $driver_att = $request -> input('att_rating');
    //     $driver_punc = $request -> input('punc_rating');
    //     $reason_price = $request -> input('price_rating');
    //     $comment = $request -> input('txtComment');
        

    //     $existing_feedback = feedback::where('Cus_ID', Auth::id())->where('ContractNo',$contractno)->first();
    //     if($existing_feedback)
    //     {
    //         $existing_feedback->DriverAttitude = $driver_att;
    //         $existing_feedback->Punctuality = $driver_punc;
    //         $existing_feedback->ReasonalPrice = $reason_price;
    //         $existing_feedback->Comment = $comment;
    //         $existing_feedback->update();
    //     }
    //     else{
    //         feedback::create([
    //             'Cus_ID' => Auth::id(),
    //             'ContractNo' => $contractno,
    //             'DriverAttitude' => $driver_att,
    //             'Punctuality' => $driver_punc,
    //             'ReasonalPrice' => $reason_price,
    //             'Comment' => $comment
    //         ]);
    //     }
        
    //     return redirect('mybooking')->with('status',"Feedback Done");
    // }

    //DELETE
    public function DeleteFeedback($fid){
        $feedback = feedback::find($fid);
        $feedback->delete();

        return redirect()->back()->with('status','Feedback deleted successfully');
    }



    // //CREATE ----------------------NHAT'S CODE------------------------
    public function feedbackcreate($id){
            $mycontract = contract::where('ContractNo',$id)->get();
            return view ('feedback.create',compact('mycontract'));
    }
    
    public function feedbackcreateprocess(Request $request){
        $contractno = $request -> input('txtContractNo');

        $feedback = new feedback;
        $feedback->ContractNo = $contractno;
        $feedback->Cus_ID = $request -> input('txtCusID');
        $feedback->DriverAttitude = $request -> input('att_rating');
        $feedback->Punctuality = $request -> input('punc_rating');
        $feedback->ReasonalPrice = $request -> input('price_rating');
        $feedback->Comment = $request -> input('txtComment');
        $feedback->save();

        $contract = contract::where('ContractNo',$contractno)->first();
        $contract->FeedbackStatus = 1;
        $contract->update();
            
        return redirect('myprofile')->with('status','Thank you for your feedback!');
    }

}


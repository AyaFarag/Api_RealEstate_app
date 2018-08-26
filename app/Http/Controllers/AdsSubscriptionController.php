<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\AdsSubscriptionRequest;
use App;

class AdsSubscriptionController extends Controller
{
    
    
    public function PenddingAds(Ad $ads)
    {
        // $ads = Ad::where('status',0)->get();
        $ads = Ad::orderBy('id','desc')->get();
        return view('Admin.Ads.Pendding',compact('ads'));
    }


    public function ApproveAds(AdsSubscriptionRequest $request ,$id)
    {
        $ads = Ad::find($id);
        if($ads)
        {
            $ads->status = 1;
            $ads->save();
            return back()->with('success','Ad Approved Successfully');
        }
        else{
            return back()->with('error','Ad didn\'t Approve');
        }
    }

    public function RejectAds(AdsSubscriptionRequest $request ,$id)
    {
        $ads = Ad::find($id);
        if($ads)
        {
            $ads->status = 2;
            $ads->save();
            return back()->with('reject','Ad Rejected Successfully');
            
        }
        else{
            return back()->with('error','Ad didn\'t Reject');
        }
    }

    public function searchAds(Request $request){
        $search = $request->input('search');
        $ads = Ad::where('status', $search)->get();
        return view('Admin.Ads.Pendding',compact('ads'));
}
}

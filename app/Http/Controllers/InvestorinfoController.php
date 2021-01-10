<?php

namespace App\Http\Controllers;


use App\investorinfo;
use Illuminate\Http\Request;

class InvestorinfoController extends Controller
{
    public function investorInfo(Request $request){
        if($request->input('username')=='' || $request->input('phoneNumber')=='' || $request->input('mail')=='' || $request->input('pass')=='')
        {
            return redirect('/investorsignup');
        }
        else
        {
            $em= new investorinfo();
            $em->username =$request->input('username');
            $em->phoneNumber =$request->input('phoneNumber');
            $em->mail =$request->input('mail');
            if($request->input('pass')==$request->input('cpass'))
            {
                $em->password =$request->input('pass');
                $em ->save();
                $request->session()->put('investorEmail',$request->input('mail'));
                $request->session()->put('investorPassword',$request->input('pass'));
                return redirect('/investor');
            }
            else{
                return redirect('/investorsignup');
            }
        }


    }

    public function logininvestor(Request $request){

        $email=$request->input('username');
        $password =$request->input('password');
        $query = investorinfo::where('mail',$email)->get();
        foreach ($query as $qu){
            if($qu['password']==$password){
                $request->session()->put('investorEmail',$email);
                $request->session()->put('investorPassword',$password);
                return redirect('/investor');
            }
            else{
                return redirect('/investorlogin');
            }
        }


        return redirect('/investorlogin');
    }

    public function infoview(){
        $em=investorinfo::all()->toArray();
        return view("Investor.profile",compact('em'));

    }
}

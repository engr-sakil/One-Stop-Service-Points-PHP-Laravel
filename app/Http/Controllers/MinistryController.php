<?php

namespace App\Http\Controllers;

use App\employee;
use App\ministry;
use App\project;
use Illuminate\Http\Request;

class MinistryController extends Controller
{
    //

     public function ministryInfoInsert(Request $request){
        $em= new ministry();
        $em->username =$request->input('username');
        $em->email =$request->input('email');
        $em->password =$request->input('password');
        $em ->save();
        return redirect('/admin');



    }

    public function ministryInfoView()
    {
    	$mi = ministry::all()->toArray();
    	return view("Admin.ministry",compact('mi'));
    }

    public function editMinistryInfo($id){
        $mi=ministry::find($id);
        return view("Admin.editministry",compact('mi'));

    }

     public function updateMinistryInfo(Request $request,$id){
        $mi= ministry::find($id);
        $mi->username =$request->input('username');
        $mi->email =$request->input('email');
        $mi->password =$request->input('password');
        $mi ->save();
        return redirect('/ministry');

    }

      public  function  deleteMinistryInfo($id){
        $em=ministry::find($id);
        $em->delete();
        return redirect('/ministry');
    }


    public function ministryRequestProjectInfoView(){
        if (session('ministryEmail'))
        {
            if (session('ministryPassword'))
            {
                $pr=project::all()->toArray();
                return view("Ministry.projectrequest",compact('pr'));
            }
            else{
                return view('Ministry.login');}
        }
        else{
            return view('Ministry.login');}

    }

    public function ministryOpenProject($id){


        if (session('ministryEmail'))
        {
            if (session('ministryPassword'))
            {
                $pr=project::find($id);
                return view("Ministry.openproject",compact('pr'));
            }
            else{
                return view('Ministry.login');}
        }
        else{
            return view('Ministry.login');}

    }

    public function ministryUpdateTextilesMinistryFileStatus($id){


        if (session('ministryEmail'))
        {
            if (session('ministryPassword'))
            {
                $em= project::find($id);
                $em->textilesMinistryFileStatus ='pickedtom';
                $em ->save();
                return redirect('/ministryopenproject/$id');
            }
            else{
                return view('Ministry.login');}
        }
        else{
            return view('Ministry.login');}

    }
    public function ministrypickedProject(){


        if (session('ministryEmail'))
        {
            if (session('ministryPassword'))
            {
                $pr=project::all()->toArray();
                return view("Ministry.pickedproject",compact('pr'));
            }
            else{
                return view('Ministry.login');}
        }
        else{
            return view('Ministry.login');}

    }

    public function ministryapprovedProject(){


        if (session('ministryEmail'))
        {
            if (session('ministryPassword'))
            {
                $pr=project::all()->toArray();
                return view("Ministry.approvedproject",compact('pr'));
            }
            else{
                return view('Ministry.login');}
        }
        else{
            return view('Ministry.login');}

    }


    public function loginministry(Request $request){

        $email=$request->input('username');
        $password =$request->input('password');
        $query = ministry::where('email',$email)->get();
        foreach ($query as $qu){
            if($qu['password']==$password){
                $request->session()->put('ministryEmail',$email);
                $request->session()->put('ministryPassword',$password);
                return redirect('/ministryuser');
            }
            else{
                return redirect('/ministrylogin');
            }
        }


        return redirect('/ministrylogin');
    }
}

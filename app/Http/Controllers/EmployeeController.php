<?php

namespace App\Http\Controllers;

use App\employee;
use App\project;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function insert(Request $request){
        $em= new employee();
        $em->username =$request->input('username');
        $em->email =$request->input('email');
        $em->password =$request->input('password');
        $em ->save();
        return redirect('/admin');
    }
public function infoview(){
        $em=employee::all()->toArray();
        return view("Admin.employee",compact('em'));

    }
    public function editinfo($id){
        $em=employee::find($id);
        return view("Admin.editemployee",compact('em'));

    }
    public function updateinfo(Request $request,$id){
        $em= employee::find($id);
        $em->username =$request->input('username');
        $em->email =$request->input('email');
        $em->password =$request->input('password');
        $em ->save();
        return redirect('/employee');

    }
    public  function  deleteinfo($id){
        $em=employee::find($id);
        $em->delete();
        return redirect('/employee');
    }



    public function EmployeeRequestProjectInfoView(){


        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $pr=project::all()->toArray();
                return view("Employee.projectrequest",compact('pr'));
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}
    }

    public function EmployeePendingProjectInfoView(){


        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $pr=project::all()->toArray();
                return view("Employee.pendingproject",compact('pr'));
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }
    public function EmployeeApprovedProjectInfoView(){


        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $pr=project::all()->toArray();
                return view("Employee.approvedproject",compact('pr'));
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }
    public function EmployeeOpenProject($id){


        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $pr=project::find($id);
                return view("Employee.openproject",compact('pr'));
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }

    public function updateTextilesMinistryFileStatus($id){

        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $em= project::find($id);
                $em->textilesMinistryFileStatus ='processingtom';
                $em ->save();
                return redirect('/openproject/$id');
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }

    public function updateEnvironmentMinistryFileStatus($id){

        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $em= project::find($id);
                $em->environmentMinistryFileStatus ='processingtoe';
                $em ->save();
                return redirect('/openproject/$id');
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }


    public function updateforeignMinistryFileStatus($id){

        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $em= project::find($id);
                $em->foreignMinistryFileStatus ='processingtof';
                $em ->save();
                return redirect('/openproject/id');
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }

    public function updateplanningMinistryFileStatus($id){

        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $em= project::find($id);
                $em->planningMinistryFileStatus ='processingtop';
                $em ->save();
                return redirect('/openproject/$id');
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }


    public function EmployeepickedProjectInfoView(){


        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $pr=project::all()->toArray();
                return view("Employee.pickedproject",compact('pr'));
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}

    }

    public function TextilesMinistryFileStatus($id){

        if (session('employeeEmail'))
        {
            if (session('employeePassword'))
            {
                $em= project::find($id);
                $em->textilesMinistryFileStatus ='approved';
                $em ->save();
                return redirect('/employeepickedproject');
            }
            else{
                return view('Employee.login');}
        }
        else{
            return view('Employee.login');}


    }


    public function loginemployee(Request $request){

        $email=$request->input('username');
        $password =$request->input('password');
        $query = employee::where('email',$email)->get();
        foreach ($query as $qu){
            if($qu['password']==$password){
                $request->session()->put('employeeEmail',$email);
                $request->session()->put('employeePassword',$password);
                return redirect('/employeeuser');
            }
            else{
                return redirect('/employeelogin');
            }
        }


        return redirect('/employeelogin');
    }

}

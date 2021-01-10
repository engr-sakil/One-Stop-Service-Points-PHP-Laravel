<?php

namespace App\Http\Controllers;

use App\costestimate;
use App\employee;
use Illuminate\Http\Request;

class CostestimateController extends Controller
{
    public function insertcost(Request $request){
        $em= new costestimate();
        $em->projectName =$request->input('projectName');
        $em->Cost =$request->input('cost');
        $em ->save();
        return redirect('admincostestimate');
    }

    public function viewcost(){
        $em=costestimate::all()->toArray();
        return view("Admin.costestimate",compact('em'));

    }

    public function editcostinfo($id){
        $em=costestimate::find($id);
        return view("Admin.editcostestimate",compact('em'));

    }

    public function updatecostinfo(Request $request,$id){
        $em= costestimate::find($id);
        $em->projectName =$request->input('projectName');
        $em->Cost =$request->input('cost');
        $em ->save();
        return redirect('/admincostestimate');

    }

    public function employeeviewcost(){

        if (session('employeeEmail')) {
            if (session('employeePassword')) {
                $em = costestimate::all()->toArray();
                return view("Employee.costestimate", compact('em'));
            }
            else{
                    return view('Employee.login');
                }

        }
        else{
            return view('Employee.login');}

    }

    public function investorviewcost(){
        if (session('investorEmail'))
        {
            if (session('investorPassword')) {
                $em = costestimate::all()->toArray();
                return view("Investor.costestimate", compact('em'));
            }
            else{
                return view('Investor.login');}
            }
            else{
                return view('Investor.login');}

    }

}

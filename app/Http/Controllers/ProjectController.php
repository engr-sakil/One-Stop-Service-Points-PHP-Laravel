<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projactInfoInsert(Request $request){
        $pr= new project();
        $pr->username =$request->input('username');
        $pr->email =$request->input('email');
        $pr->phoneNumber =$request->input('phoneNumber');

        if($request ->hasFile('textilesMinistryFile')){
            $file = $request->file('textilesMinistryFile');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('assets/uploads/product/',$filename);
            $pr->textilesMinistryFile=$filename;
        }

        $pr->textilesMinistryFileStatus ='pending';
        if($request ->hasFile('environmentMinistryFile')){
            $file = $request->file('environmentMinistryFile');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'2.'.$extension;
            $file ->move('assets/uploads/product/',$filename);
            $pr->environmentMinistryFile=$filename;
        }
        $pr->environmentMinistryFileStatus ='pending';
        if($request ->hasFile('foreignMinistryFile')){
            $file = $request->file('foreignMinistryFile');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'3.'.$extension;
            $file ->move('assets/uploads/product/',$filename);
            $pr->foreignMinistryFile=$filename;
        }
        $pr->foreignMinistryFileStatus ='pending';
        if($request ->hasFile('planningMinistryFile')){
            $file = $request->file('planningMinistryFile');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'4.'.$extension;
            $file ->move('assets/uploads/product/',$filename);
            $pr->planningMinistryFile=$filename;
        }
        $pr->planningMinistryFileStatus ='pending';
        $pr ->save();
        return redirect('/investor');
    }




}

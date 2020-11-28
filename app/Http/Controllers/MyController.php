<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Algs;
use App\Models\companys;


class MyController extends Controller
{
    public function SignUpPage()
    {

        return view('SignUpPage');
    }
    public function SignUpComplete (Request $req)
    {
        if($req->has('test')) {
       
        $ss = new Algs();
        $ss->name = $req->userName;
        
        $ss->email = $req->userEmail;
        $ss->phone = $req->userContact;
        $ss->gender = $req->get('gender', 0);
        $req->merge([
            'course' => implode(',', (array) $req->get('course'))
        ]);
      
        $ss->course = $req->course;
        $ss->country = $req->userCountry;
        if($req->hasFile('image'))
        {
            $file=$req->file('image');
            $fileName = $file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $filena=time().$fileName;
            $file->move('uploads/employee/',$filena);
            $ss->image=$filena;
        }
        else{

        }

        $ss->save();
       

        return redirect('getData')->with('success','Registration Successfully');
    }
    else 
    {
        echo "please select Agreement check box";
    }

    }

    public function getData (Request $req)
    {
        $data= Algs::all();
        return view('MyList',['member'=>$data]);

       


    }
    public function EditPage($id)
    {
       
       
       $data = Algs::find($id);
        return view('MyEdit',['da'=>$data]);

    }
    public function MySave(Request $req)
    {

        $ss =Algs::find($req->id);
        $ss->name = $req->userName;
        
        $ss->email = $req->userEmail;
        $ss->phone = $req->userContact;
        $ss->gender = $req->get('gender', 0);
        $req->merge([
            'course' => implode(',', (array) $req->get('course'))
        ]);
      
        $ss->course = $req->course;
        $ss->country = $req->userCountry;
        if($req->hasFile('image'))
        {
            $file=$req->file('image');
            $fileName = $file->getClientOriginalName();
            $extension=$file->getClientOriginalExtension();
            $filena=time().$fileName;
            $file->move('uploads/employee/',$filena);
            $ss->image=$filena;
        }
        else{

        }

        $ss->save();
       
        return redirect('getData')->with('update2','Updated Record Successfully');
   
    
    }
    
    public function delete($id)
    {
       $data=Algs::where('id',$id)->delete();
       return redirect('getData')->with('update1',' Record Deleted Successfully');


    }


    
}

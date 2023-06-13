<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ibmstudent;

class ibmstudencontroller extends Controller
{
    //
    function showdata(){
       $data= ibmstudent::all();
      
        return view('showdata',['list'=>$data]);
       
       
     
    }
    function insertdata(Request $req){ //data raw 
     $saving=new ibmstudent();
     $saving->name=$req['name'];
     $saving->email=$req['email'];
     $saving->city=$req['city'];
     $saving->save();
     return redirect('showdata');
    
    }
    function deletedata($id){
        $data=ibmstudent::find($id);
        $data->delete();
        return redirect('showdata');
        //return var_dump( $name);

    }
    function editdata($id){
        $data= ibmstudent::find($id);
        return view('updateform',['formdata'=>$data]);

    }
    function updatedata(Request $req){
        $data=ibmstudent::find($req->id);
        $data->name=$req['name'];
        $data->email=$req['email'];
        $data->city=$req['city'];
        $data->save();
       
        // return $req->input();
        return redirect('showdata');
           
    }


}

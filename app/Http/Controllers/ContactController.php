<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function allContacts(){
        $contacts = DB::table('contacts')->get();
        return view('allcontacts')->with('contacts', $contacts);
    }


    public function insertData(){
        return view('insert');
    }


    public function addData(Request $request){
        $data = array();
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['description']= $request->description;

        // echo"<pre>";
        // print_r($data);

        $insertedData = DB::table('contacts')->insert($data);
        return Redirect()->route('allContacts');

    }

    public function deleteContact($id){
        $data = DB::table('contacts')->where('id', $id)->delete();
        return Redirect()->route('allContacts');
    }

    public function editContact($id){
        $edt = DB::table('contacts')->where('id', $id)->first();
        return view('editcontact', compact('edt'));
    }
    public function updateContact(Request $request, $id){
        $data = array();
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['phone']= $request->phone;
        $data['description']= $request->description;
        $upd = DB::table('contacts')->where('id', $id)->update($data);
        return Redirect()->route('allContacts');
    }
}

// contacts=>name and $contcats=> array 
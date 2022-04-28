<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Carnivaluser;

class UserController extends Controller
{
    public function API_User_List(){
        return Carnivaluser::all();
    }

    public function API_User_Post (Request $request){
        $object = new Carnivaluser();
        $object->Name = $request->Name;
        $object->Email = $request->Email;
        $object->Phone = $request->Phone;
        $object->NID = $request->NID;
        $object->Package = $request->Package;
        $object->save(); 

        return response()->json($object, 201);
    }
}

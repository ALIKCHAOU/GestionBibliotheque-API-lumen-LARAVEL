<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;


class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  
     * @return  
     */
   
    // public function Strore(Request $request)
    // {
    //    $username= $request->input('name', 'Sally');
    //    $email = $request->input('name', 'Sally');
    //    $password = $request->input('name', 'Sally');

    //    // $method = $request->method();

    //    // if ($request->isMethod('post')) {
    //    //     return "response";// response('Updated Successfully', 200);
    //   //  }
    //   return $request->all();
       
    // }
    public function createUser(Request $request){
 
        $Users  = Users::create($request->all());
 
        return response()->json($Users);
 
    }
 
    public function updateUser(Request $request, $id){

        $Users  = Users::find($id);
        // $username= $request->input('name', 'Sally');
        // $email = $request->input('name', 'Sally');
        // $password = $request->input('name', 'Sally');
        $Users ->username = $request->json('username');   
        $Users ->email = $request->json('email');
        $Users ->password = $request->json('password');
        $Users ->save();
 
        return response()->json($Users );
    }  

    public function deleteUser($id){
        $Users  = Users::find($id);
        $Users->delete();
 
        return response()->json('Removed successfully.');
    }


     public function index(Request $request){
       $Users = Users::all();
 
        return response()->json($Users);
 
     }
  
}




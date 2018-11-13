<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BookBorrow;



class BookBorrowController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  
     * @return  
     */
   
   
    public function createbookborrow(Request $request){
 
        $bookborrow  = BookBorrow::create($request->all());
 
        return response()->json($bookborrow);
 
    }
 
    public function updatebookborrow(Request $request, $id){

        $bookborrow  = BookBorrow::find($id);
        // $username= $request->input('name', 'Sally');
        // $email = $request->input('name', 'Sally');
        // $password = $request->input('name', 'Sally');
        $bookborrow ->book_id = $request->json('book_id');   
        $bookborrow ->users_id = $request->json('users_id');
       
        $bookborrow ->save();
 
        return response()->json($bookborrow );
    }  

    public function deletebookborrow($id){
        $bookborrow  = BookBorrow::find($id);
        $bookborrow->delete();
 
        return response()->json('Removed successfully.');
    }


     public function index(Request $request){
       $bookborrow = BookBorrow::all();
 
        return response()->json($bookborrow);
 
     }
  
}




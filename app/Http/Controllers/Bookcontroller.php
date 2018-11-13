<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;





class BookController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  
     * @return  
     * 
     */
   
  

   
    public function createBook(Request $request){
 
        $Book  = Book::create($request->all());
 
        return response()->json($Book);
 
    }
 
    public function updateBook(Request $request, $id){

        $Book = Book::find($id);
        // $name= $request->input('name', 'BookName');
      
        $Book ->name = $request->json('name');   
        $Book ->author = $request->json('author');
        $Book ->page_number = $request->json('page_number');
        $Book ->save();
      
        return response()->json($Book );
    }  

    public function deleteBook($id){
        $Book  = Book::find($id);
        $Book->delete();
 
        return response()->json('Removed successfully.');
    }


     public function index(Request $request){
       $Book = Book::all();
 
        return response()->json($Book);
 
     }
  

}




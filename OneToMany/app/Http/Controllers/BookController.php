<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //  get book with student
    public function getBook(){
        // $books = Book::with('Student')->get();  //get all books with student

        $books = Book::withWhereHas('Student',function($queary){
            $queary->where('Age','>',26);
        })->get();  // get data form students table  

        return $books;
    }
}

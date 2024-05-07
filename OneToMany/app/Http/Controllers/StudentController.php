<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // create student

    public function create(){
        $students= Student::create([
            'Name'=>'Setu',
            'Age'=>27
        ]);

        $students->Books()->create([
            'Book'=>'Javascript',
            'Author'=>'David',
            'Date'=>'2024-05-09'
        ]);
    }

    // update Students Book
    public function update(){
        $students=Student::find(4);
        $students->Books()->create([
            'Book'=>'Cyber Security',
            'Author'=>'Dr. Don',
            'Date'=>'2024-05-09'
        ]);
    }

    //read students with book
    public function allStudent(){
        // $students=Student::with('Books')->get();     //get all students and books

        $students=Student::with('Books')->find(3);     //get single students with book
        
        return $students;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //create Student

    public function create(){
        $students = Student::create([
            'name'=>'Rahim',
            'age'=>27
        ]);

        $students->contact()->create([
            'phone'=>'5222264',
            'city'=>'Dhaka'
        ]);
    }

    //get all students with contact

    public function getStudents(){
        $students =Student::with('contact')->get();
        return $students;
    }

    //find by id with contact

    public function singleStudent(){
        $students =Student::with('contact')->find(2);
        return $students;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('test');
    }


    public function index(){
        return view('home', [
            'name' => 'Firz',
            'age' => '18',
        ]);
    }

    public function contact(){
        return view('/contact');
    }

    public function store(Request $request){
        // dd($request->all());
    }

    public function model(){

        // $obj = new Student();
        // $obj->name = 'Leon';
        // $obj->email = 'pace@gmail.com';
        // $obj->role = 'Budak Galau';
        // $obj->desc = 'Pace';
        // $obj->save();
        
        // $single_student = Student::find(1);
        // echo $single_student->email;
        // $single_student->update();
        
        $single_student = Student::find(3);
        $single_student->delete();
    }

    public function db_show(){
        // @dump($student_data);
        return view('db_show', ['student_data' => Student::get()]);
    }
}

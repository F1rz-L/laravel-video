<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function student(){
        // $std = new Student;
        // $std->name = 'e';
        // $std->photo = 'e';
        // $std->email = 'eee@g.c';
        // $std->role = 'w';
        // $std->desc = 'q';
        // $std->status = '5';
        // $std->save();
        foreach(Student::get() as $student){
            echo $student->name . " - " . $student->email."<br>";
        }
    }

    public function delete(){
        Student::where('id', 1)->restore();
    }

    public function create(){
        // DB::insert('INSERT INTO students (name,email) VALUES(?,?)', ['Indit','indita6817@gm.c']);
        // DB::update('UPDATE students SET name=? WHERE id=?', ['Syamfiraas','3']);
        // DB::delete('DELETE FROM students WHERE id=?', ['2']);
    }

    public function show(){
        $all = DB::select('SELECT * FROM students');
        foreach ($all as $key) {
            echo $key->name." - ".$key->email."<br>";
        }
    }

    public function QBCreate(){
        // DB::table('students')->insert([
        //     'name' => 'NPC',
        //     'email' => 'gapenting@gm.c'
        // ]);
        DB::table('students')->where('id',5)->delete();
    }

    public function QBShow(){
        $all = DB::table('students')->get();
        foreach ($all as $key) {
            echo $key->name." - ".$key->email."<br>";
        }
    }
}

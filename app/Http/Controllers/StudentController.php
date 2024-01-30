<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentProfile;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function elCreate(){
        $std = new Student;
        $std->name = 'Indita';
        $std->email = 'indita2817@gmail.com';
        $std->age = '17';
        $std->country = 'Indonesia';
        $std->save();
    }

    public function elShow(){
        foreach(Student::where('country', 'Indonesia')->get() as $student){
            echo $student->name . " - " . $student->email."<br>";
        }
    }

    public function elMass(){
        // $std = new Student;
        // $std->name = 'Indita';
        // $std->email = 'indita2817@gmail.com';
        // $std->age = '17';
        // $std->country = 'Indonesia';
        // $std->save();

        Student::create([
            'name' => 'NPC',
            'email' => 'none',
            'age' => '11',
            'country' => 'Bali'
        ]);
    }

    public function elRandom(){
        // Student::where('id', 4)->delete();

        // $std = Student::firstOrCreate([
        //     'email' => 'none',
        // ]);
        // $std->name = 'NPC';
        // $std->age = '20';
        // $std->country = 'Indonesia';
        // $std->save();

        // $find = StudentProfile::with('student')->find(1);
        // echo $find->student->name;
        // echo $find->country;

        // $data = Teacher::with('student')->find(1);
        // echo $data->name;
        // foreach($data->student as $std){
        //     echo $std->name."<br>";
        // }

        // $data = Student::with('teacher')->find(1);
        // echo $data->teacher->teacher_name;

        // $all = Teacher::with('student')->get();
        // foreach($all as $tch){
        //     echo $tch->teacher_name."<br>";
        //     foreach($tch->student as $std){
        //         echo $std->student_name;
        //     } echo "<br><br>";
        // }

        
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
        // DB::table('students')->where('id',5)->delete();
    }

    public function QBShow(){
        $all = DB::table('students')->get();
        foreach ($all as $key) {
            echo $key->name." - ".$key->email."<br>";
        }
    }
}

<?php

namespace App\Http\Controllers;


use App\HTTP\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StudentController extends Controller {

    function addStudent() {
        return View("supmti/pages/students");
    }


    function addStudent(Request $request) {
        Students::create($request->json()->all());
        return $request->json()->all();
    }
    function AllStudents() {
        $students = DB::collection('students')->get();
        return response()->json($students);
    }
    function findStudentById(Request $request) {

    }
    function updateStudent(Request $request) {

    }
    function deleteStudent(Request $request) {

    }


}
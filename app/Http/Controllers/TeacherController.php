<?php

namespace App\Http\Controllers;


use App\Teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TeacherController extends Controller {

    function addTeacher() {
        return View("supmti/pages/profs");
    }


    function addTeacher(Request $request) {
        Teachers::create($request->json()->all());
        return $request->json()->all();
    }
    function AllTeachers() {
        $teachers = DB::collection('teachers')->get();
        return response()->json($teachers);
    }
    function findTeacherById(Request $request) {

    }
    function updateTeacher(Request $request) {

    }
    function deleteTeacher(Request $request) {

    }


}
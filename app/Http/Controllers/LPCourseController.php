<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Modul;
use App\Models\Filemateri;

class LPCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $course = Course::all();
        $pag_course = Course::orderBy('id', 'DESC')->paginate(5);
        return view('landingpage.course',compact('pag_course'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'course' => Course::find($id),
            'modul' => Modul::where('course_id', '=', $id)->get(),
            'filemateri' => Filemateri::where('modul_id', '=', $id)->get(),
            // 'filemateri' => Filemateri::with('modul')->findOrFail($id),
            // 'filemateri' => $modul->filemateri,
            'pag_course' => Course::orderBy('id', 'DESC')->paginate(5),  
        ];
        
        return view('landingpage.course-view', $data);
    }
}

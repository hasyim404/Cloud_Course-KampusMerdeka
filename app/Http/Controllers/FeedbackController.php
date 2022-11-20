<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::orderBy('id', 'DESC')->get();
        return view ('admin.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all()->sortBy('nama_course');
        return view('admin.feedback.form',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'email' => 'required|email|max:60',
            'course_id' => 'required|integer',
           /**  
            * kalo gamau ada validasi pake nullable aja
            * 'isi_feedback' => 'nullable', 
            */
            'isi_feedback' => 'required|min:5',
        ]);

        //lakukan insert data dari request form
        DB::table('feedback')->insert(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'course_id' => $request->course_id,
                'isi_feedback' => $request->isi_feedback,
                'created_at'=>now(),
            ]);
       
        return redirect()->route('feedback.index')
                         ->with('success','Input Feedback Baru Berhasil Di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Feedback::find($id);
        return view('admin.feedback.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Feedback::find($id);
        $course = Course::all()->sortBy('nama_course');
        return view('admin.feedback.form_edit',compact('data','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'email' => 'required|email|max:60',
            'course_id' => 'required|integer',
           /**  
            * kalo gamau ada validasi pake nullable aja
            * 'isi_feedback' => 'nullable', 
            */
            'isi_feedback' => 'required|min:5',
        ]);

        //lakukan update data dari request form edit
        DB::table('feedback')->where('id',$id)->update(
            [
                'nama' => $request->nama,
                'email' => $request->email,
                'course_id' => $request->course_id,
                'isi_feedback' => $request->isi_feedback,
                'updated_at'=>now(),
            ]);
       
        return redirect('/admin/feedback'.'/'.$id)
                        ->with('success','Data Feedback Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = Feedback::find($id);
        Feedback::where('id',$id)->delete();
        return redirect()->route('feedback.index')
                        ->with('success','Data Feedback Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Modul;
use App\Http\Resources\ModulResource;

class ModulController extends Controller
{
    public function index()
    {
        $modul = Modul::join('course', 'course.id', '=', 'modul.course_id')
                        ->select('modul.id','modul.jdl_modul','course.nama_course AS course','modul.deskripsi','modul.updated_at AS last_update')
                        ->get();

        return new ModulResource(true, 'DataModul', $modul);
    }

    public function show($id)
    {
        $modul = Modul::join('course', 'course.id', '=', 'modul.course_id')
                        ->select('modul.id','modul.jdl_modul','course.nama_course AS course','modul.deskripsi','modul.updated_at AS last_update')
                        ->where('modul.id', '=', $id)
                        ->get();

        return new ModulResource(true, 'Detail data Modul', $modul);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'jdl_modul' => 'required|min:2|max:100',
            'course_id' => 'required|integer',
            'deskripsi' => 'nullable',
        ],
        // Custom Error Code
        [
            'jdl_modul.required' => 'Judul Modul wajib di isi',
            'jdl_modul.min' => 'Judul Modul terlalu pendek',
            'jdl_modul.max' => 'Judul Modul terlalu panjang, maksimal 100 karakter',
            'course_id.required' => 'Course Wajib Di isi',
            'course_id.integer' => 'Format pemilihan salah',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        $modul = Modul::create([
            'jdl_modul' => $request->jdl_modul,
            'course_id' => $request->course_id,
            'deskripsi' => $request->deskripsi,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        return new ModulResource(true, 'Data Link Video berhasil di input', $modul);
    }
}

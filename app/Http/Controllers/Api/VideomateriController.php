<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Videomateri;
use App\Models\User;
use App\Http\Resources\VideomateriResource;

class VideomateriController extends Controller
{
    public function index()
    {
        $videomateri = Videomateri::join('modul', 'modul.id', '=', 'videomateri.modul_id')
                        ->select('videomateri.id','videomateri.nama_video','videomateri.video','modul.jdl_modul AS modul','videomateri.updated_at AS last_update')
                        ->get();
        
        // $user = User::where('role', '=', 'Admin')->first();

        // return new VideomateriResource(true, 'Data Link Video', $videomateri);
        if ($videomateri) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data Link Video',
                    'data' => $videomateri,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Forbidden',
                ],
                404
            );
        }
    }

    public function show($id)
    {
        $videomateri = Videomateri::join('modul', 'modul.id', '=', 'videomateri.modul_id')
                        ->select('videomateri.id','videomateri.nama_video','videomateri.video','modul.jdl_modul AS modul','videomateri.updated_at AS last_update')
                        ->where('videomateri.id', '=', $id)
                        ->first();

        if ($videomateri) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Detail Link Video',
                    'data' => $videomateri,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Detail Link Video Tidak ditemukan',
                ],
                404
            );
        }

        // return new VideomateriResource(true, 'Detail data Link Video', $videomateri);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_video' => 'required|min:5|max:50',
            'video' => ['required','regex: /youtube\\.com/i','max:255','unique:videomateri'],
            'modul_id' => 'required|integer',
        ],
        // Custom Error Code
        [
            'nama_video.required' => 'Nama Video wajib di isi',
            'nama_video.min' => 'Nama Video terlalu pendek, minimal 5 karakter',
            'nama_video.max' => 'Nama Video terlalu panjang, maksimal 50 karakter',
            'video.required' => 'Link Video wajib di isi',
            'video.unique' => 'Link Video Sudah ada/ter-duplikasi',
            'video.regex' => 'Format harus berupa youtube.com',
            'video.max' => 'Link Video terlalu panjang, maksimal 255 karakter',
            'modul_id.required' => 'Modul Wajib Di pilih',
            'modul_id.integer' => 'Format pemilihan salah',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        $videomateri = Videomateri::create([
            'nama_video' => $request->nama_video,
            'video' => $request->video,
            'modul_id' => $request->modul_id,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        return new VideomateriResource(true, 'Data Link Video berhasil di input', $videomateri);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama_video' => 'required|min:5|max:50',
            'video' => ['required','regex: /youtube\\.com/i','max:255'],
            'modul_id' => 'required|integer',
        ],
        // Custom Error Code
        [
            'nama_video.required' => 'Nama Video wajib di isi',
            'nama_video.min' => 'Nama Video terlalu pendek, minimal 5 karakter',
            'nama_video.max' => 'Nama Video terlalu panjang, maksimal 50 karakter',
            'video.required' => 'Link Video wajib di isi',
            'video.unique' => 'Link Video Sudah ada/ter-duplikasi',
            'video.regex' => 'Format harus berupa youtube.com',
            'video.max' => 'Link Video terlalu panjang, maksimal 255 karakter',
            'modul_id.required' => 'Modul Wajib Di pilih',
            'modul_id.integer' => 'Format pemilihan salah',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }

        $videomateri = Videomateri::whereId($id)->update([
            'nama_video' => $request->nama_video,
            'video' => $request->video,
            'modul_id' => $request->modul_id,
            'updated_at'=>now(),
        ]);

        return new VideomateriResource(true, 'Data Link Video berhasil di ubah', $videomateri);
    }

    public function destroy($id)
    {

        $videomateri = Videomateri::whereId($id)->first();
        $videomateri->delete();

        return new VideomateriResource(true, 'Data Link Video berhasil di hapus', $videomateri);
    }

    
}

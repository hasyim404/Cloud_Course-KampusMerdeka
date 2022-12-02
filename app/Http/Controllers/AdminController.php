<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Feedback;
use App\Models\Testimoni;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::count();
        $course = Course::count();
        $feedback = Feedback::count();
        $testimoni = Testimoni::all();
        $ar_status = DB::table('users')
                    ->selectRaw('status, count(status) as jumlah')
                    ->groupBy('status')
                    ->get();

        return view('admin.dashboard.index', compact('ar_status','user','course','feedback','testimoni'));
    }
        
}
    

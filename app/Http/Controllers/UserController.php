<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumni;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = alumni::paginate(5);
        return view('user.alumni', compact('data'));
    }

    public function cari(Request $request) {
        $cari = $request->get('cari');
        if ($cari) {
            $data = alumni::where("nama", "LIKE", "%$cari%")->get();
        }
        return view('user.cari', compact('data'));
    }

}

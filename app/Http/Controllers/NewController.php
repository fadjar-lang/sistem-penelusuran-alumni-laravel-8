<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class NewController extends Controller
{

public function store(Request $request)
    {
        alumni::create([
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'nisn' => $request->nisn,
            'no_ijazah' => $request->no_ijazah,
            'jurusan' => $request->jurusan,
            'no_telp' => $request->no_telp,
            'pekerjaan' => $request->pekerjaan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_lulus' => $request->tahun_lulus,
        ]);
        return redirect('login');
    }

}
?>
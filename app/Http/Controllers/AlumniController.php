<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->get('cari');
        $data = alumni::paginate(5);
        if ($cari) {
            $data = alumni::where("nama", "LIKE", "%$cari%")->get();
        }
        return view('konten.alumni', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tampil = alumni::findorfail($id);
        return view('konten.detail', compact('tampil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tampil = alumni::findorfail($id);
        return view('konten.edit', compact('tampil'));
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
        $tam = alumni::findorfail($id);
        $tam->update($request->all());
        return redirect('alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = alumni::findorfail($id);
        $hapus->delete();
        return back();
    }

    public function cari(Request $request) {
        $cari = $request->get('cari');
        if ($cari) {
            $data = alumni::where("nama", "LIKE", "%$cari%")->get();
        }
        return view('konten.cari', compact('data'));
    }
}

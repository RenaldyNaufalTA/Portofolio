<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Projek;
use Illuminate\Http\Request;

class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
    }

    public function index()
    {
        $siswas = Siswa::latest()->Paginate(2);
        // $projeks = Projek::where('id', $siswa->id)->first();

        return view('layouts.admin.page.masterprojek', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view("layouts.admin.projek.create", compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:20',
            'deskripsi' => 'required|max:200'
        ]);

        $projek = new Projek;
        $projek->siswa_id = $request->siswa_id;
        $projek->nama_projek = $request->nama;
        $projek->deskripsi = $request->deskripsi;
        $projek->tanggal = date('Y-m-d', time());
        $projek->save();
        return redirect()->back()->with('success', 'Projek Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projek = Siswa::find($id)->projek()->get();
        $siswa = Siswa::find($id);
        return view("layouts.admin.projek.show", compact('projek', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projek = Projek::findOrFail($id);
        return view('layouts.admin.projek.edit', compact('projek'));
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
        $this->validate($request, [
            'nama_projek' => 'required|max:20',
            'deskripsi' => 'required|max:200'
        ]);

        Projek::findOrFail($id)->update($request->all());
        return redirect('/masterprojek')->with('success', 'Projek Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Projek::find($id)->delete();
        return redirect()->back()->with('success', 'Projek Deleted');
    }
}
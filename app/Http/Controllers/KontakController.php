<?php

namespace App\Http\Controllers;

use App\Models\JenisKontak;
use App\Models\Siswa;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
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
        $jenis = JenisKontak::get();
        return view('layouts.admin.page.masterkontak', compact('siswas', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $jenis = JenisKontak::all();
        $siswa = Siswa::where('id', $id)->first();
        return view("layouts.admin.kontak.create", compact('siswa', 'jenis'));
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
            'jenis_kontak' => 'required',
            'deskripsi' => 'required|max:200'
        ]);

        $kontak = new Kontak;
        $kontak->siswa_id = $request->siswa_id;
        $kontak->jenis_kontak_id = $request->jenis_kontak;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();
        return redirect()->back()->with('success', 'Kontak Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontaks = Siswa::find($id)->kontak()->get();
        $siswa = Siswa::find($id);
        return view("layouts.admin.kontak.show", compact('kontaks', 'siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);
        $jenis = JenisKontak::all();
        return view('layouts.admin.kontak.edit', compact('kontak', 'jenis'));
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
            'jenis_kontak_id' => 'required',
            'deskripsi' => 'required|max:200'
        ]);

        // Kontak::findOrFail($id)->update($request->all());
        $kontak = Kontak::find($id);
        $kontak->siswa_id = $request->siswa_id;
        $kontak->jenis_kontak_id = $request->jenis_kontak_id;
        $kontak->deskripsi = $request->deskripsi;
        $kontak->save();
        return redirect('/masterkontak')->with('success', 'Kontak Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kontak::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Kontak Deleted');
    }

    public function jenis_kontak(Request $request)
    {
        $this->validate($request, [
            'jenis_kontak' => 'required',
        ]);

        JenisKontak::create($request->all());
        return redirect('/masterkontak')->with('success', 'Jenis Kontak Added');
    }

    public function jenis_kontak_destroy($id)
    {
        JenisKontak::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Jenis Kontak Deleted');
    }
}
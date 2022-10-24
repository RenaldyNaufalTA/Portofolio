<?php

namespace App\Http\Controllers;

use App\Models\JenisKontak;
use App\Models\Siswa;
use App\Models\Kontak;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
        // $this->middleware('walas')->only(['index', 'show']);
    }

    public $message = [
        'max' => ':attribute maksimal :max Karakter!',
        'min' => ':attribute minimal :min Karakter!',
        'image' => ':attribute harus berupa Foto!',
        'unique' => ':attribute sudah digunakan!',
        'required' => ':attribute harus di isi!',
        'numeric' => ':attribute harus berisi angka!',
        'digits' => ':attribute harus berisi 10 digit'
    ];
    public function index()
    {
        $siswas = Siswa::oldest()->simplepaginate(5);
        return view('layouts.admin.page.mastersiswa', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nisn' => 'required|unique:siswa|numeric|digits:10',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jk' => 'required',
            'email' => 'required',
            'foto' => 'image|max:5024',
            'about' => 'required|max:500',
        ], $this->message);

        $foto       = $request->file('foto');
        $filename    = time() . '_' . $foto->getClientOriginalName();
        $foto->storeAs('public/siswa-foto', $filename);

        Siswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'email' => $request->email,
            'foto' => $filename,
            'about' => $request->about,
        ]);
        return redirect('/mastersiswa')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $siswa->kontak()->get();

        return view("layouts.admin.siswa.show", compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view("layouts.admin.siswa.edit", compact('siswa'));
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

        $validate = ($request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jk' => 'required',
            'email' => 'required',
            'foto' => 'image|max:5024',
            'about' => 'required|max:500',
        ], $this->message));

        if ($request->nisn != $request->nisn) {
            $validate['nisn'] = 'required|unique:siswa|max:10|numeric';
        }

        $data = [
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'email' => $request->email,
            'about' => $request->about,
        ];

        $siswa = Siswa::findOrFail($id);
        // $path = public_path('siswa-foto' . $siswa->foto);
        if (request()->hasFile('foto') && request('foto') != '') {
            // delete old image
            $imagePath = public_path('storage/siswa-foto/' . $siswa->foto);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $image = request()->file('foto');
            $imagename    = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/siswa-foto', $imagename);

            $data['foto'] = $imagename;
        }

        $siswa->update($data);


        return redirect('/mastersiswa')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projek = Projek::where('id', $id)->first();
        $siswa = Siswa::findOrFail($id);
        $siswa->delete($projek);
        return redirect('/mastersiswa')->with('success', 'Data Berhasil dihapus');
    }
}
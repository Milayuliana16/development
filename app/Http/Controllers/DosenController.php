<?php

namespace App\Http\Controllers;
Use App\Models\dosen;
Use App\Models\mahasiswa;
Use App\Models\matakuliah;
Use App\Models\prodi;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = dosen::with('mahasiswa', 'matakuliah')->get();
        $data['dosen'] = $dosens;
        return view('dosen.index', $data);
    }

    public function create()
    {
        $matakuliah = matakuliah::all();
        $mahasiswa = mahasiswa::all();
        $data['matakuliah'] = $matakuliah;
        $data['mahasiswa'] = $mahasiswa;
        return view('dosen.create', $data);
    }

    public function store(Request $request) { 
        
        dosen::create([ 
            'nama' => $request->input('nama'), 
            'mhs_id' => $request->input('mhs_id'), 
            'matakuliah_id' => $request->input('matakuliah_id'), 
        ]); 

        return redirect()->route('dosen.index');
    }

    public function edit($id)
    {   
        $dosen = dosen::find($id); 
        $matakuliah = Matakuliah::all();
        $mahasiswa = mahasiswa::all();
        return view('dosen.edit', compact('mahasiswa', 'matakuliah', 'dosen'));
    }

    public function update(Request $request, $id)
    {

        $dosen = dosen::find($id);

        $dosen->nama = $request->input('nama');
        $dosen->mhs_id = $request->input('mhs_id');
        $dosen->matakuliah_id = $request->input('matakuliah_id');

        $dosen->save();

        return redirect()->route('dosen.index');
    }

    public function destroy($id)
    {
        $dosen = dosen::find($id);

        if ($dosen) {
            $dosen->delete();

            return redirect()->route('dosen.index');
        } else {
            return redirect()->route('dosen.index');
        }
    }
}

<?php

namespace App\Http\Controllers;
Use App\Models\dosen;
Use App\Models\mahasiswa;
Use App\Models\matakuliah;
Use App\Models\prodi;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with('prodi')->get();
        $data['mhs'] = $mahasiswa;
        return view('mahasiswa.index', $data);
    }

    public function create()
    {
        $prodi = Prodi::all();
        $data['prodi'] = $prodi;
        return view('mahasiswa.create', $data);
    }

    public function store(Request $request) { 
        
        mahasiswa::create([ 
            'nama' => $request->input('nama'), 
            'nim' => $request->input('nim'), 
            'prodi_id' => $request->input('prodi_id'), 
        ]); 

        return redirect()->route('mahasiswa.index');
    }

    public function edit($id)
    {   
        
        $mahasiswa = Mahasiswa::find($id);
        $prodis = prodi::all();
        $dosen = dosen::all();
        return view('mahasiswa.edit', compact('mahasiswa', 'prodis','dosen'));
    }

    public function update(Request $request, $id)
    {

        $mahasiswa = mahasiswa::find($id);

        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->prodi_id = $request->input('prodi');

        $mahasiswa->save();

        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);

        if ($mahasiswa) {
            $mahasiswa->delete();

            return redirect()->route('mahasiswa.index');
        } else {
            return redirect()->route('mahasiswa.index');
        }
    }
}

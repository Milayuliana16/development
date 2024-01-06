<?php

namespace App\Http\Controllers;
Use App\Models\dosen;
Use App\Models\mahasiswa;
Use App\Models\matakuliah;
Use App\Models\prodi;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = matakuliah::all();
        $data['mk'] = $matakuliah;
        return view('matakuliah.index',$data);
    }

    public function create()
    {
        $prodi = prodi::all();
        $data['prodi'] = $prodi;
        return view('matakuliah.create',$data);
    }

    public function store(Request $request)
    {
        matakuliah::create([ 
            'matakuliah' => $request->input('matakuliah'), 
        ]); 

        return redirect()->route('matakuliah.index');
    }

    public function edit($id)
    {
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {

        $matakuliah = matakuliah::find($id);

        $matakuliah->matakuliah = $request->input('matakuliah');
        $matakuliah->save();

        return redirect()->route('matakuliah.index');
    }

    public function destroy($id)
    {
        $matakuliah = matakuliah::find($id);

        if ($matakuliah) {
            $matakuliah->delete();

            return redirect()->route('matakuliah.index');
        } else {
            return redirect()->route('matakuliah.index');
        }
    }
}

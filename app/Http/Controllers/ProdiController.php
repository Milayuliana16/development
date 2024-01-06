<?php

namespace App\Http\Controllers;
Use App\Models\dosen;
Use App\Models\mahasiswa;
Use App\Models\matakuliah;
Use App\Models\prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = prodi::all();
        $data['pro'] = $prodi;
        return view('prodi.index',$data);
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        prodi::create([ 
            'namaprodi' => $request->input('namaprodi'), 
        ]); 

        return redirect()->route('prodi.index');
    }

    public function edit($id)
    {
        $prodi = prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {

        $prodi = prodi::find($id);

        $prodi->namaprodi = $request->input('namaprodi');
        $prodi->save();

        return redirect()->route('prodi.index');
    }

    public function destroy($id)
    {
        $prodi = prodi::find($id);

        if ($prodi) {
            $prodi->delete();

            return redirect()->route('prodi.index');
        } else {
            return redirect()->route('prodi.index');
        }
    }


}

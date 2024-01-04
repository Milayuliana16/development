<?php

namespace App\Http\Controllers;

Use App\Models\guestbook;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function create()
    {
        $data['title']= 'Creata Data';
        return view('home.create',$data);
    }

    public function store(Request $request) { 

        $request->validate([ 
            'namalengkap' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'kehadiran' => 'required|string'
        ]);
        
        guestbook::create([ 
            'namalengkap' => $request->input('namalengkap'), 
            'alamat' => $request->input('alamat'), 
            'kehadiran' => $request->input('kehadiran'), 
        ]); 

        return redirect()->route('home')->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namalengkap' => 'required|string|max:255', 
            'alamat' => 'required|string|max:255', 
            'kehadiran' => 'required|string'
        ]);

        $guestbook = guestbook::find($id);

        $guestbook->namalengkap = $request->input('namalengkap');
        $guestbook->alamat = $request->input('alamat');
        $guestbook->kehadiran = $request->input('kehadiran');
        $guestbook->save();

        return redirect()->route('home')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $guestbook = guestbook::find($id);

        if ($guestbook) {
            $guestbook->delete();

            return redirect()->route('home')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('home')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        $guestbook = guestbook::find($id);
        return view('home.edit', compact('guestbook'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Agama96;
use Illuminate\Http\Request;

class Agama96Controller extends Controller
{
    public function agamaPage96()
    {
        $agama = Agama96::all();

        return view('agama', ['all_agama' => $agama]);
    }

    public function editAgamaPage96(Request $request)
    {
        $id = $request->id;

        $agama = Agama96::find($id);

        if (!$agama) {
            return back()->with('error', 'Agama tidak ditemukan');
        }

        $all_agama = Agama96::all();

        return view('agama', ['all_agama' => $all_agama, 'agama' => $agama]);
    }

    public function updateAgama96(Request $request)
    {
        $id = $request->id;
        $agama = Agama96::find($id);

        if (!$agama) {
            return redirect('/agama96')->with('error', 'Agama tidak ditemukan');
        }

        $request->validate([
            'nama_agama' => 'required'
        ]);

        $updateAgama = $agama->update([
            'nama_agama' => $request->nama_agama
        ]);

        if ($updateAgama) {
            return redirect('/agama96')->with('success', 'Agama berhasil diubah');
        } else {
            return redirect('/agama96')->with('error', 'Agama gagal diubah');
        }
    }

    public function createAgama96(Request $request)
    {
        $request->validate([
            'nama_agama' => 'required'
        ]);

        $createAgama = Agama96::create([
            'nama_agama' => $request->nama_agama
        ]);

        if ($createAgama) {
            return back()->with('success', 'Agama berhasil ditambahkan');
        } else {
            return back()->with('error', 'Agama gagal ditambahkan');
        }
    }

    public function deleteAgama96(Request $request)
    {
        $id = $request->id;
        $agama = Agama96::find($id);

        if (!$agama) {
            return redirect('/agama96')->with('error', 'Agama tidak ditemukan');
        }

        $deleteAgama = $agama->delete();


        if ($deleteAgama) {
            return redirect('/agama96')->with('success', 'Agama berhasil dihapus');
        } else {
            return redirect('/agama96')->with('error', 'Agama gagal dihapus');
        }
    }
}

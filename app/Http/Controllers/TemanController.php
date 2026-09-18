<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teman;

class TemanController extends Controller
{
    public function index()
    {
        $semuateman = Teman::all();
        return view('index', compact('semuateman'));
    }
    public function tambah()
    {
        return view('tambah-teman');
    }
    public function simpan(Request $request){

        $request->validate([
            'nama_teman' => 'required',
            'tanggal_lahir' => 'required|date|before:today',
            'nomor_kursi' => 'required|integer|min:1|max:36',
            'hobi' => 'required',
            'makanan_favorit' => 'required',
        ],[
            'nama_teman.required' => 'Nama teman harus isi woii.',
            'tanggal_lahir.required' => 'Lu gak ada tanggal lahir?.',
            'tanggal_lahir.date' => 'Tanggal lahirnya masukin yang bener napa.',
            'tanggal_lahir.before' => 'Lahir dimasa depan lu?.',
            'nomor_kursi.required' => 'Nomor kursi lu mana?.',
            'nomor_kursi.integer' => 'Nomor kursinya harus angka woii.',
            'nomor_kursi.min' => 'Nomor kursi minimal 1 broo.',
            'nomor_kursi.max' => 'Nomor kursi maksimal 36 broo.',
            'hobi.required' => 'Hobi lu mane gak ada?.',
            'makanan_favorit.required' => 'Lu gak ada makanan favorit?.',
        ]);

        Teman::create($request->all());

        return redirect('/')->with('success', 'Data teman berhasil disimpan.');
    }
    
}





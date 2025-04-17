<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saksi;
use Illuminate\Support\Facades\RateLimiter;

class SaksiController extends Controller
{
    public function store(Request $request)
{

    // if RateLimiter::hit('pendaftaran:' . $request->ip(3));

    $request->validate([
            'pendaftaran_id' => 'required|exists:pendaftaran,id',
            'saksi_name' => 'required',
            'saksi_nik' => 'required|unique:saksi,saksi_nik',
            'gender_saksi' => 'required',
            'pekerjaan_saksi' => 'required',
            'alamatsaksi' => 'required',
            'saksi_name2' => 'required',
            'saksinik2' => 'required|unique:saksi,saksinik2',
            'gender_saksi2' => 'required',
            'pekerjaan_saksi2' => 'required',
            'alamatsaksi2' => 'required',
        ]);
        // 'name' => $request->input('name'),
        // Pendaftaran::create($request->all());
        
         

        // return redirect()->back()->with('success', 'Pendaftaran berhasil!');
       
        $saksi= Saksi::create( [
            'pendaftaran_id' => $request->pendaftaran_id,
            'saksi_name' => $request->input('saksi_name'),
            'saksi_nik' => $request->input('saksi_nik'),
            'gender_saksi' => $request->input('gender_saksi'),
            'pekerjaan_saksi' => $request->input('pekerjaan_saksi'),
            'alamatsaksi' => $request->input('alamatsaksi'),
            'saksi_name2' => $request->input('saksi_name2'),
            'saksinik2' => $request->input('saksinik2'),
            'gender_saksi2' => $request->input('gender_saksi2'),
            'pekerjaan_saksi2' => $request->input('pekerjaan_saksi2'),
            'alamatsaksi2' => $request->input('alamatsaksi2'),
            'session_id' => session()->getId(),
        ]);

        if($saksi)
        {
            return redirect()->route('downloadpdf')->with('success', 'Pendaftaran berhasil!');
        }else{
            return redirect()->back()->with('error', 'Pendaftaran gagal!');
        }  
       
        
    }

    public function Download2(){
        $saksi = Saksi::where('session_id', session()->getId())->get();
        return view('dowload.download2', compact(var_name: 'saksi'));
    }

    
    
}


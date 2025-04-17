<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\RateLimiter;

class PendaftaranController extends Controller
{
    public function store(Request $request)
{

    // if (RateLimiter::hit('pendaftaran:' . $request->ip(3)));

    $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:pendaftaran,nik',
            'gender' => 'required',
            'tmptlahir' => 'required',
            'birthdate' => 'required|date',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'email' => 'required|email|unique:pendaftaran,email',
            'phone' => 'required',
            'address' => 'required',
            'alamatktp' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        // 'name' => $request->input('name'),
        // Pendaftaran::create($request->all());
        
        $photo = $request->file('photo');
        $photoname = time().'_'. $photo->getClientOriginalName();  // Generate unique filename with current timestamp
       
        
        
        

        // return redirect()->back()->with('success', 'Pendaftaran berhasil!');
       
        $pendaftaran = Pendaftaran::create([
            'name' => $request->input('name'),
            'nik' => $request->input('nik'),
            'gender' => $request->input('gender'),
            'tmptlahir' => $request->input('tmptlahir'),
            'birthdate' => $request->input('birthdate'),
            'pekerjaan' => $request->input('pekerjaan'),
            'agama' => $request->input('agama'),
            'kebangsaan' => $request->input('kebangsaan'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'alamatktp' => $request->input('alamatktp'),
            'photo' => $photo->getClientOriginalName(),  // Get original file name and store it in the database
            'session_id' => session()->getId(),
        ]);

        if($pendaftaran)
        {
            return redirect()->route('saksi', ['pendaftaran_id' => $pendaftaran->id])->with('success', 'Pendaftaran berhasil!');
        }else{
            return redirect()->back()->with('error', 'Pendaftaran gagal!');
        }
       
       
        
    }


    public function Download() {
        $dowload = Pendaftaran::where('session_id', session()->getId())->get();
        return view('dowload.download', compact('dowload'));
    }
    
}


<?php

namespace App\Http\Controllers;

use App\Models\Basispengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BasisPengetahuanController extends Controller
{
    
    public function index()
    {
        return view('basispengetahuan.index',[
            'data' => Basispengetahuan::orderby('penyakit_id')->get(),
            'penyakits' => Penyakit::orderby('penyakit_kode')->get(),
            'gejalas' => Gejala::orderby('gejala_kode')->get(),
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $data = Basispengetahuan::where(['penyakit_id'=> $request->penyakit_id, 'gejala_id'=> $request->gejala_id])->get();
        if (count($data)>0) {
            Session::flash('error', "Data Sudah Tersedia");
            return redirect()->route('basispengetahuan.index');

        } else {
            
            $insert  = Basispengetahuan::create([
                'penyakit_id' => $request->penyakit_id,
                'gejala_id' => $request->gejala_id,
                
                'bobot' => $request->bobot
            ]);
    
            $insert ? Session::flash('message', "Created Basis Pengetahuan Successfully") : Session::flash('error', "Created Basis Pengetahuan Failed") ;
    
            return redirect()->route('basispengetahuan.index');
        }
    }

   
    public function show(Basispengetahuan $basispengetahuan)
    {
        //
    }

    
    public function edit(Basispengetahuan $basispengetahuan)
    {
        //
    }

    
    public function update(Request $request, Basispengetahuan $basispengetahuan)
    {
        if ($request->penyakit_id == $basispengetahuan->penyakit_id && $request->gejala_id == $basispengetahuan->gejala_id) {
            $update = $basispengetahuan->update([
                'bobot' => $request->bobot,
            ]);
        } else {
            $data = Basispengetahuan::where(['penyakit_id'=> $request->penyakit_id, 'gejala_id'=> $request->gejala_id])->get();
            if (count($data)>0) {
                Session::flash('error', "Data Sudah Tersedia");
                return redirect()->route('basispengetahuan.index');

            } else {
                
                $update  = $basispengetahuan->update([
                    'penyakit_id' => $request->penyakit_id,
                    'gejala_id' => $request->gejala_id,
                    'bobot' => $request->bobot
                ]);
            }
        }
        
        $update ? Session::flash('message', "Deleted Basis Pengetahuans Successfully") : 
        Session::flash('error', "Deleted Basis Pengetahuans Failed") ;

        return redirect()->route('basispengetahuan.index');
    }

    
    public function destroy(Basispengetahuan $basispengetahuan)
    {
        $delete = $basispengetahuan->delete();
        $delete ? Session::flash('message', "Deleted Basis Pengetahuans Successfully") : 
        Session::flash('error', "Deleted Basis Pengetahuans Failed") ;

        return redirect()->route('basispengetahuan.index');
    }
}

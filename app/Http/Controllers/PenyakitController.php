<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenyakitRequest;
use App\Http\Requests\UpdatePenyakitRequest;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Session;


class PenyakitController extends Controller
{
 
    public function index()
    {
        return view('penyakit.index',[
            'data' => Penyakit::orderby('status')->get()
        ]);
    }

    public function create()
    {
        //
    }

    
    public function store(StorePenyakitRequest $request)
    {
        $data = Penyakit::orderby('id','desc')->where('status', $request->status)->first();
        $insert = Penyakit::create([
            'penyakit_kode' => $this->getLastID($data, $request->status),
            'status' => $request->status,
            'penyakit_nama' => $request->penyakit_nama,
        ]);
        $insert ? Session::flash('message', "Created Penyakit Successfully") : Session::flash('error', "Created Penyakit Failed") ;

        return redirect()->route('penyakit.index');

        
    }

    
    public function show(Penyakit $penyakit)
    {
        //
    }

   
    public function edit(Penyakit $penyakit)
    {
        //
    }

    
    public function update(UpdatePenyakitRequest $request, Penyakit $penyakit)
    {
        $update = $penyakit->update([
            'penyakit_nama' => $request->penyakit_nama
        ]);
        $update ? Session::flash('message', "Updated Penyakit Successfully") : Session::flash('error', "Updated Penyakit Failed") ;

        return redirect()->route('penyakit.index');
    }

    
    public function destroy(Penyakit $penyakit)
    {
        $delete = $penyakit->delete();
        $delete ? Session::flash('message', "Deleted Penyakit Successfully") : Session::flash('error', "Deleted Penyakit Failed") ;

        return redirect()->route('penyakit.index');
    }

    public function getIncrementNumber($id, $tags)
    {
        $tag = $tags;
        return $tag . str_pad($id, 3, '0', STR_PAD_LEFT);
    }

    public function getLastID($data, $status)
    {
        // return $data;
        if ($data) {
            return $this->getIncrementNumber(substr($data->penyakit_kode,3,3) + 1, $status );
        } else {
            return $this->getIncrementNumber(1, $status);
        }
        
    }
}

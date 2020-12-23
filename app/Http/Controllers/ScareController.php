<?php

namespace App\Http\Controllers;
use App\daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScareController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function input()
    {
    	return view('data');
    }
    public function proses(Request $request)
	{
    $this->validate($request,[
        'nama'		 	=> 'required|min:5|max:30',
        'tgl_lahir'		=> 'required',
        'alamat'		=> 'required',
        'usia'			=> 'required'
    ]);
 	
    return view('proses',['datas' => $request]);
	}
	 public function table(Request $request)
    {
             $datatable = datatable::get();
        	return view('table',['datatable' => $datatable]);
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        DB::table('datatable')->insert([
            'nama'       => $request->nama,
            'tgl_lahir'      => $request->tgl_lahir,
            'alamat'    => $request->alamat,
            'usia'     => $request->usia,
            'berat_badan'     => $request->berat_badan,
            'tinggi_badan'     => $request->tinggi_badan,
            'keluhan'     => $request->keluhan,
            'gol_darah'     => $request->gol_darah,
        ]);
        return redirect('table');
    }

    public function edit($id)
    {
        $datatable = DB::table('datatable')->where('id', $id)->get();
        return view('edit')->with('datatable', $datatable);
    }

    public function update(Request $request, $id)
    {
        DB::table('datatable')->where('id', $request->id)->update([
            'nama'       => $request->nama,
            'tgl_lahir'      => $request->tgl_lahir,
            'alamat'    => $request->alamat,
            'usia'     => $request->usia,
            'berat_badan'     => $request->berat_badan,
            'tinggi_badan'     => $request->tinggi_badan,
            'keluhan'     => $request->keluhan,
            'gol_darah'     => $request->gol_darah,
        ]);
        return redirect(url('/table'));
    }
    public function delete($id)
    {
        DB::table('datatable')->where('id', $id)->delete();
        return redirect('table');
    }
	
}

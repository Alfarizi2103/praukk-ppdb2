<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;


class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    	$data = DB::table('register')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('register')->insert([
            'no_daftar' => $request->no_daftar,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal_smp' => $request->asal_smp,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('register')->where('id',$id)->get();
        return view('edit',['data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('register')->where('id', $id)->update([
            'no_daftar' => $request->no_daftar,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'asal_smp' => $request->asal_smp,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('register')->where('id',$id)->delete();
	return redirect('/index');
    }

    public function exportPDF() {
       
        $data = DB::table('register')->get();
  
        $pdf = PDF::loadView('print', ['data' => $data]);
        
        return $pdf->download('ppdb.pdf');
        
      }
}

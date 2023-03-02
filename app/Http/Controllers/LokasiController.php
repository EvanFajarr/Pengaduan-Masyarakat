<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $lokasi= lokasi::orderBy ('id','desc')->get();
        return view('lokasi.index')->with('lokasi',$lokasi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('kecamatan', $request->kecamatan);
   
        $request->validate([
            'kecamatan' => 'required',
           
        ], [
            'kecamatan.required' => 'Nama kecamatan wajib diisi',
        ]); 



        $lokasi = [
            'kecamatan' => $request->input('kecamatan'),
        ];

    
        lokasi::create($lokasi);
        return redirect()->to('lokasi')->with('success', 'Berhasil menambahkan lokasi kecamatan');
    
    
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
        $lokasi = lokasi::where('id', $id)->first();
        return view('lokasi.edit')->with('lokasi', $lokasi);
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
        $request->validate([
            'kecamatan' => 'required',
           
           

        ], [
            'kecamatan.required' => 'Nama kecamatan wajib diisi',
         
        ]);
        $lokasi = [
            'kecamatan' => $request->kecamatan,

        ];
        lokasi::where('id', $id)->update($lokasi);
        return redirect()->to('lokasi')->with('success', 'Berhasil mengubah nama kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lokasi::where('id', $id)->delete();
        return redirect()->to('lokasi')->with('success', 'Berhasil menghapus  data kecamatan dari daftar');
    }
}

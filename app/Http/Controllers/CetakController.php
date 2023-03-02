<?php

namespace App\Http\Controllers;
use App\Models\pengaduan;
use Illuminate\Http\Request;
use App\Models\tanggapan;
class CetakController extends Controller
{
    public function index($id){
        $pengaduan = pengaduan::find($id);
        $tanggapan= tanggapan::where('pengaduan_id',$id)->orderBy ('created_at','desc')->get();
        return view('admin.cetak',['pengaduan'=>$pengaduan, 'tanggapans' => $tanggapan]);
    }
}

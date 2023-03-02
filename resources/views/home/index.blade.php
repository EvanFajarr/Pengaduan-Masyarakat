@extends('template.template')
@section('konten')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<section class="py-5 text-center container ">
  <link rel="stylesheet" type="text/css" href="style.css">
    


    <div class="container-fluid">
      <div class="row">
   <div class="col-md-6 py-5">
              <img class="w-100" src="gambar.jpg" alt="pict">
          </div>
          <div class="col-md-6 py-5 fixed-end">
            <h1 class="fw-light">Layanan Pengaduan Rakyat</h1>
              <p class="lead text-muted">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang,tanpa ribet dan ruwet 
                kami ada untuk anda yang sedang mumet.
              </p>
              @if (Auth::guard('Petugas15467')->check())
              <a href='{{url('home/create')}}' class="btn btn-outline-info my-2 text-dark"><i class="bi bi-newspaper"> Lapor</i></a>
              @endif
     </div>
      </div>
  </div>


    <div class="p-3 p-md-4 border rounded-3 ">
    {{-- 4 colom --}}
    <div class="row ">
      <div  class="col-sm-3">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
            <div class="card-body text-center">
              <h3 class="card-title">Tulis Laporan</h3>
              <p class="card-text">Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
            <div class="card-body text-center">
              <h3 class="card-title">Proses Verifikasi</h3>
              <p class="card-text">Dalam 3 hari, laporan Anda akan diverifikasi dan diteruskan kepada instansi berwenang </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
            <div class="card-body text-center">
              <h3 class="card-title">Proses Tindak Lanjut</h3>
              <p class="card-text">Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">
            <div class="card-body text-center">
              <h3 class="card-title">Selesai</h3>
              <p class="card-text">Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
            </div>
          </div>
  </section>





  <div class="row">
    @foreach ($pengaduan as $pengaduans)
    <div class="col-sm-4">
        <div class="card shadow-lg p-3 mb-5 bg-body rounded">
          <img style=height:100%;  src='{{ url('foto').'/'.$pengaduans->foto }}' class="d-block w-100" alt="picture"/>
          <p class="text-muted"> {{ $pengaduans->tanggal }}</p>
          <div class="card-body">
            <h5 class="card-title">From {{ auth()->guard('Petugas15467')->user()->name }}</h5>
            <p class="card-text">status : {{ $pengaduans->status }}</p>
            {{-- @foreach ($tanggapans as $tanggapan)
            <p class="card-text ">{{ $tanggapan->user->name }} say '{{ $tanggapan->tanggapan}}'</p> 
            @endforeach  --}}
  
          <a href="detailPengaduan/{{ $pengaduans['id'] }}/home" class="btn btn-outline-primary">Selengkapnya</a> 
          </div> 
  
          <div class="card-footer">
            <small class="text-muted"> {{ $pengaduans->lokasi }} ,{{ $pengaduans->detail_lokasi }}</small>
          </div>
        </div>
  
      </div>
    @endforeach





  
  <div class="demo-row">
    <div class="container" id="id-sponsors">
      <div class="text-center">
      <h2  class="text-dark"style="margin:20px 0;">Instansi Terhubung</h2>
    </div>
        <div class="item">
          <div class="row">
            <div class="col-sm-6 col-xs-6 ">
              <div class="sponsor-feature"><img alt="" src="bantul.jpg" style="width: 160px;" /></div>
            </div>
            <div class="col-sm-6 col-xs-6">
              <div class="sponsor-feature"><img alt="" src="bantul2.jpg" style="width: 160px;" /></div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>

  

@endsection



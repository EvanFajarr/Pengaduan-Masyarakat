@extends('template.extadmin')
@section('konten')
@include('pesan.pesan')
<div class="card text-center shadow-lg p-3 mb-5 bg-body rounded">         
    <div class="card-body  ">
      @if ($pengaduan->foto)
      <img style= 'max-height:100%;max-width:100%;' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
      @endif
        <h5 class="fw-bold text-danger">Tanggal Masuk : {{ $pengaduan->tanggal }}</h5>
      <h5 clss="fw-bold">Lokasi :  {{$pengaduan->lokasi}},
          {{$pengaduan->detail_lokasi}}</h5>
      <p class="fw-bold ">{!! $pengaduan->isi !!}</p>
      </div>



      <div class="form-body">
        <form action="" method="POST">
          @csrf
          <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
      <textarea  name="tanggapan" class="form-control" id="tanggapan" rows='4' placeholder="+ tanggapan">
      </textarea>
      <input type="submit" class="btn btn-outline-primary" value="kirim">
      <style>
        .btn{
          margin-top:10px;
        }
        </style>
    </form>
      </div>
  



    <h1 class="fw-bold text-primary" style="margin:50px; " >tanggapan  </h1>
      @foreach ($tanggapans as $tanggapan)
      <div style="margin-bottom:20px;" class="card">
        <div class="card-body">
          <div class="d-flex flex-start">      
        <h6 class="fw-bold text-primary">{{ $tanggapan->user->name }} say '{{ $tanggapan->tanggapan}}'</h6>  <br> 
            </div>
          </div>
          <div class="card-footer">
            <p class= "text-start">{{ $tanggapan->created_at->diffForHumans() }}</p>
          </div>
        </div>
        @endforeach

    <div class="card-footer">
      <h5 class="text-muted">{{ $pengaduan->status }}</h5>
    </div>
  </div>


  
@endsection
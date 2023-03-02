
@extends('template.extadmin')
@section('konten')
@include('pesan.pesan')
<h1>Pengaduan Selesai</h1>
@foreach ($history as $b)

        @if ($b->status == "selesai")
        <div class="col-sm-12">
          <div style="margin-top:15px;"class="card shadow-lg p-3 mb-5 bg-body rounded border-dark mb-3">     
              <div class="card-body text-center">
                <p class="fw-bold" id="card-text">{{ $b->id }}</p>
                  <p class="fw-bold text-danger" id="card-text">{{ $b->tanggal }}</p>
                  <p class="fw-bold text-primary" id="card-text" > Status : {{ $b->status }}</p>
                  <a href='admin/{{ $b['id'] }}/cetak' class="btn btn-outline-danger btn-sm"><i class="bi bi-filetype-pdf">  Cetak Laporan</i></a>
                  <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('history/'.$b->id) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </form>
                  <p id="card-text"><i class="bi bi-clock-history"></i> {{ $b->created_at->diffForHumans() }}</p>
                </div>
                <style>
                  #card-text{
                    margin-bottom:10px;
                  }
                  </style>
              </div>
            </div>
            </div>
        @endif

        @endforeach

        @endsection
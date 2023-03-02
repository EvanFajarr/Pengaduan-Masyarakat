@extends('template.template')
@section('konten')


<div class="container py-5">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Laporan</li>
        </ol>
      </nav>
    </div>
  </div>
 {{--<div class="card text-center shadow-lg p-3 mb-5 bg-body rounded">
  <h5 class="text-muted">{{ $pengaduan->status }}</h5>
    <div class="card-body  ">
      @if ($pengaduan->foto)
      <img style= 'max-height:100%;max-width:100%;' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
      @endif
        <p class="text-muted">Tanggal Masuk : {{ $pengaduan->tanggal }}</p>
      <h5>Lokasi :  {{$pengaduan->lokasi}},
          {{$pengaduan->detail_lokasi}}</h5>
      <p class="card-text ">{!! $pengaduan->isi !!}</p>



    <h5 style="margin-top:50px; " >tanggapan from {{ $pengaduan->id }} </h5>
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
      <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('detailpengaduan/'.$pengaduan->id.'/home') }}" method="post">
        @csrf 
        @method('DELETE')
        <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
    </div> 
    </div>
  </div>--}}

  <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="row ">
                    <div class="col-md-6">
                      @if ($pengaduan->foto)
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src='{{ url('foto').'/'.$pengaduan->foto }}' width="100%" /> </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="kolom p-4">
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{ $pengaduan->tanggal }}</span>
                                <h5 class="text-uppercase">Status: {{ $pengaduan->status }}</h5>
                                <div class="lokasi d-flex flex-row align-items-center"> 
                                  <span class="lokasi">{{ $pengaduan->lokasi }} </span>
                                    <div class="ml-2">  
                                      <span>,{{$pengaduan->detail_lokasi }}</span> 
                                    </div>
                                </div>
                            </div>
                            <p class="about">{!! $pengaduan->isi !!}</p>
                            <div class="sizes mt-5">
                                <h6 class="text-uppercase">Tanggapan</h6>
                                <div class="p-3 p-md-4 border rounded-4 "> 
                                @foreach ($tanggapans as $tanggapan)
                                <div class="mt-4 mb-3"> 
                                  <span class="text-uppercase text-muted brand">{{ $tanggapan->tanggapan }}</span><br>
                                  <span class="text-uppercase text-muted brand"><i class="bi bi-person-check-fill"></i> {{ $tanggapan->user->name }} | <i class="bi bi-clock-history"></i> {{ $tanggapan->created_at->diffForHumans() }} </span>
                                </div>
                                @endforeach

                            </div>
                            <form onsubmit="return confirm('Yakin mau menghapus data?')" class='d-inline' action="{{ url('detailpengaduan/'.$pengaduan->id.'/home') }}" method="post">
                              @csrf 
                              @method('DELETE')
                              <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
              .card{
                border:none;
            }
            .card:hover{
              transform: scale(1.05);
              top:-10px;
              box-shadow: 0 10px 20px rgba(20, 14, 14, 0.12), 0 4px 8px rgba(0,0,0,.06);
            }
            .kolom{
              background-color: #eee
            }
            .brand{
              font-size: 13px
            }
            .lokasi{
              color:red;
              font-weight: 700;
              }
              .about{
                font-size: 14px;
                }
                .btn{
                  margin-top:10px;
                }
                            .cart i{
                              margin-right: 10px
                              }
</style>
@endsection
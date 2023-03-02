@extends('template.extadmin')
@section('konten')



<div class="card text-center shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-header">
      <h2 class="card-title">From {{ $pengaduan->user->name  }}</h2>
    </div>
    <div class="card-body  ">
      @if ($pengaduan->foto)
      <img style= 'max-height:100%;max-width:100%;' src='{{ url('foto').'/'.$pengaduan->foto }}'/>
      @endif

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
            {{-- {{ $tanggapan->users->name }} --}}
          </div>
          <div class="card-footer">
            <p class= "text-start">{{ $tanggapan->created_at->diffForHumans() }}</p>
          </div>
        </div>
        @endforeach
        {{-- ->tanggapan()->orderBy('created_at','desc')->get() --}}
  </div>

  {{-- <script type="text/javascript">
    window.print();
</script> --}}

<script>
  window.print();
</script>
@endsection
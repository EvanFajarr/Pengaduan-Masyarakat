@extends('template.extadmin') 
@section('konten')
<form action='{{ url('lokasi') }}'  method='post'>

    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('lokasi')}}' class="btn btn-outline-success">Kembali</a> 
        @include('pesan.pesan')
        <div class="mb-3 row">
            <label for="kecamatan" class="col-sm-2 col-form-label">Nama kecamatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='kecamatan' value="{{Session::get('kecamatan')}}" id="kecamatan">
            </div>
        </div>
   
        
        <div class="mb-3 row">
            <label for="tahun" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    
    </div>
   
</form>

@endsection
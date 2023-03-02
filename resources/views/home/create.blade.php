@extends('template.template') 
@section('konten')
<form action='{{ url('home') }}'  method='post'  enctype="multipart/form-data">

    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('home')}}' class="btn btn-outline-success">Kembali</a> 

        <div class="mb-3 row">
          <label for="user_id" class="form-label">user id</label>
          <select type="text" name="user_id"  name="user_id"  value="{{Session::get('user_id')}}" id="user_id"  class="form-control">
            <option >   {{  auth()->guard('Petugas15467')->user()->id }}</option>
         
          </select>
          
      </div>

        <div class="mb-3 row">
            <label for="tanggal" class="form-label">tanggal</label>
            <select type="text" name="tanggal"  value="{{Session::get('tanggal')}}"id="tanggal" class="form-control">
              <option > {{ date('l-d-m-Y') }}</option>
            </select>
        </div>

          <div class="mb-3 row">
            <label for="nik" class="form-label">nik</label>
            <select type="text" name="nik"  name="nik"  value="{{Session::get('nik')}}" id="nik"  class="form-control">
              <option > {{  auth()->guard('Petugas15467')->user()->nik}}</option>
            </select>
            
        </div>

        <div class="mb-3 row">
          <label for="isi" class="form-label">Isi</label>
          <textarea class="form-control  summernote" name="isi"  value="{{Session::get('isi')}}" id="isi"></textarea>
      </div>

      <div class="mb-3 row">
        <label for="lokasi" class="form-label">lokasi</label>
        <select type="text" name="lokasi"  name="lokasi"  value="{{Session::get('lokasi')}}" id="lokasi"  class="form-control">
        @foreach ($lokasi as $lokasis)
        <option > {{ $lokasis->kecamatan }}</option>
        @endforeach
      </select>  
    </div>

    <div class="mb-3 row">
      <label for="detail_lokasi" class="form-label">detail lokasi</label>
      <textarea class="form-control  " name="detail_lokasi"  value="{{Session::get('detail_lokasi')}}" id="detail_lokasi">
      </textarea>
  </div>

      {{-- <div class="mb-3 row">
        <label for="status" class="form-label">Status</label>
        <select type="text" name="status"  value="{{Session::get('ststus')}}" id="status" class="form-control">
          <option > terkirim</option>
        </select>
    </div> --}}


      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='foto'id="foto">
        </div>
    </div>
     
    <div class="mb-3 row">
        <label for="tahun" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>

</form>

@endsection
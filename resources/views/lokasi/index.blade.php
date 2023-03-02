@extends('template.extadmin') 
@section('konten')
        
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="pb-3">
       <a href='{{url('lokasi/create')}}' class="btn btn-primary">+</a>
            </div>

            @include('pesan.pesan')
      
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">Id</th>
                        <th class="col-md-3">Lokasi</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lokasi as $lokasis)
                  
                    <tr>
                        
                        <td>{{ $lokasis->id }}</td>
                        <td>{{$lokasis->kecamatan}}</td>
                       
                        <td>
                            <a href= '{{url('lokasi/'.$lokasis->id.'/edit')}}'  class="btn btn-warning btn-sm"><i class="bi bi-pen"></i>Edit</a>
                            <form onsubmit="return confirm('Yakin mau menghapus?')" class='d-inline' action="{{ url('lokasi/'.$lokasis->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i>Hapus</button>
                        </form>
                        </td>
                    </tr>
                      
                    @endforeach 
                </tbody>
             </table>
      </div>
@endsection
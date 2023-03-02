@extends('template.template')
@section('konten')
<section >
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://img.freepik.com/free-photo/3d-rendering-zoom-call-avatar_23-2149556776.jpg?w=740&t=st=1669303279~exp=1669303879~hmac=01bcadd8f9ac71092166a33587ca2052b662d7e2727c450443e4cb174db50b5f" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3"> {{auth()->guard('Petugas15467')->user()->name  }}</h5>
              <div class="d-flex justify-content-center mb-2">
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
             <a href="/login/logout" class="nav-link px-2 "><i class="bi bi-box-arrow-right">Logout</i></a>
                </li>
            </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Nomor Induk Kependudukan</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{  auth()->guard('Petugas15467')->user()->nik }}</p>
                    </div>
                  </div>
                <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{  auth()->guard('Petugas15467')->user()->name }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{  auth()->guard('Petugas15467')->user()->email }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nomor Telephone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{ auth()->guard('Petugas15467')->user()->tlp }}</p>
                </div>
              </div>
    </div>
  </section>



@endsection
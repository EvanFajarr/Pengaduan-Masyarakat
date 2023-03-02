
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <nav class="navbar sticky-top navbar-expand-lg bg-info">
    <div class="container-fluid ">
      <a class="navbar-brand text-dark" href="/home">Pengaduan Rakyat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item ">
            <a class="nav-link activ text-light" aria-current="page" href="/home"><i class="bi bi-house-door"> Home</i></a>
          </li>
 
          <li class="nav-item">
            <a class="nav-link text-light" href="/detailUser"><i class="bi bi-person-gear"> {{ auth()->guard('Petugas15467')->user()->name }}</i></a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link text-light" href="/login/logout">Logout</a> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav> 


 
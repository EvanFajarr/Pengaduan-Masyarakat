
<div class="container-fluid">
  <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div style="height:20rem;"class="position-sticky pt-3 sidebar-sticky">
          <ul  class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/admin">
                <span data-feather="file" class="align-text-bottom"></span>
        Pengaduan
              </a>
            </li>
        
            <li class="nav-item">
              <a class="nav-link" href="/lokasi">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                <i class="bi bi-pin-fill"> Lokasi</i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="/history">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                <i class="bi bi-calendar-check"> Selesai</i>
              </a>
            </li>

            <form action="{{ url('/logout') }}" method="post">
              @csrf
                 <button type="submit" class="btn btn-outline-warning "><i class="bi bi-box-arrow-right">Logout</i></button>
            </form>
            {{-- <form action="{{ url('/logout') }}" method="post">
              @csrf
                 <li class="nav-item"><button type="submit" class="nav-link px-2 "><i class="bi bi-box-arrow-right">Logout</i></button></li> 
            </form> --}}
          </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      </nav>


 


 
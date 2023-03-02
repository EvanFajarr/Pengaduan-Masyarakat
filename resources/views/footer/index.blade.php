<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top  ">
        <h5 class="col-md-4 mb-0">Pengaduan Rakyat</h5>

      
      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/home" class="nav-link px-2 "><i class="bi bi-house-door"> Home</i></a></li>
        {{-- <li class="nav-item"><a href="/login/logout" class="nav-link px-2 "><i class="bi bi-box-arrow-right">Logout</i></a></li> --}}
        {{-- <form action="{{ url('/logout') }}" method="post">
          @csrf
             <li class="nav-item"><button type="submit" class="nav-link px-2 "><i class="bi bi-box-arrow-right">Logout</i></button></li> 
        </form> --}}
        <li>
          <form action="{{ url('/logout') }}" method="post">
            @csrf
               <button type="submit" class="btn btn-outline-warning "><i class="bi bi-box-arrow-right">Logout</i></button>
          </form>
        </li>
      </ul>
    </footer>
  </div>
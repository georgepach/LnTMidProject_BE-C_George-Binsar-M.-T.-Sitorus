<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/view.css') }}">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
 
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/#">
              <img src="{{ asset('pictures/chipi.jpg') }}" class="img-fluid rounded-start" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
              PT ChipiChapa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/addbook">Daftar Karyawan</a>
          </li>
        </ul>

    </div>
  </nav>

  <div class="content">

      @foreach ($semuanama as $nama)
<div class="card" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('pictures/karyawan2.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6>PT ChipiChapa</h6>
        <h5 class="card-title">{{ $nama->nama }}</h5>
        <p class="card-text">Umur 
          <br>
          {{ $nama->umur }}</p>
        <p class="card-text">Alamat 
          <br>
          {{ $nama->alamat }}</p>
        <p class="card-text">No Telp 
          <br>
          {{ $nama->notelepon }}</p>
        <a href="{{route('updateform', ['id' => $nama->id ])}}" class="btn btn-white">Edit</a>

        <form method="POST" action="{{route('delete', ['id' => $nama->id])}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

  </div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

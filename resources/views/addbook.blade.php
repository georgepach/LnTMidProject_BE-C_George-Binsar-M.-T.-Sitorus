<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
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
  </nav>
  <div class="container mt-4">
  
    <form action="{{route('create')}}" method="POST"> 
      @csrf 
      <h2 class="mb-4">Tambahkan Karyawan</h2>  
  
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Karyawan</label>
        <input name="nama" minlength="5"  maxlength="20" type="text" class="form-control" id="nama">
      </div>
      <div class="mb-3">
        <label for="umur" class="form-label">Umur Karyawan</label>
        <input name="umur" min="20" type="number" class="form-control" id="umur">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Karyawan</label>
        <input name="alamat" minlength="10"  maxlength="40" type="text" class="form-control" id="alamat">
      </div>
      <div class="mb-3">
        <label for="notelepon" class="form-label">No. Telp Karyawan</label>
        <input name="notelepon" type="tel" class="form-control" id="notelepon" pattern="08\d{10}" required>
        <small> (Angka Wajib Diawali "08")</small>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

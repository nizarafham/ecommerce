<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar-custom {
            height: 100px; /* Atur tinggi navbar */
            font-size: 1.25rem; /* Ukuran teks lebih besar */
            background-color: rgb(193, 193, 252);
        }
        .form-control {
            height: 55px; /* Tinggi input search */
        }
        .bg-page {
            background-color: rgb(8, 7, 7); /* Gambar background halaman */
        }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0 bg-page">

    <!-- Example Code -->


    <nav class="navbar navbar-expand-lg bg-body-blue navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- Kolom pencarian di tengah -->
            <form class="d-flex mx-auto" role="search" style="width: 50%";>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">O</button>
            </form>

            <!-- Tautan "Masuk" dan "Daftar" di kanan -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Daftar</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>


    <!-- End Example Code -->
  </body>
</html>

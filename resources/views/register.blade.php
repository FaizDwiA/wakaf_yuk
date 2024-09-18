<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}">
    <title>Wakaf Yuk!</title>
    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f7f7f8;">
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark position-sticky sticky-top">
        <div class="container-fluid my-2">
            <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" width="50" height="44" class="d-inline-block align-text-top mx-3 me-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                <a class="nav-link mx-3" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mx-3" aria-current="page" href="#">Berita</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mx-3" aria-current="page" href="#">Daftar Keuangan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link mx-3" aria-current="page" href="#">Tentang kami</a>
                </li>
                <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Partisipan</a></li>
                    <li><a class="dropdown-item" href="#">Bursa</a></li>
                </ul>
            </ul>
            <form class="d-flex mx-2" role="search">
                <input class="form-control me-3" type="search" placeholder="Pencarian" aria-label="Search">
            </form>
            <button class="btn btn-outline-light" type="submit">Masuk</button>
            <button type="button" class="btn btn-light mx-3">Daftar</button>
            </div>
        </div>
        </nav>

        <div class="container mt-5 ">
            <div class="col-6 offset-3 ">
                <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded"> 
                    <div class="row">
                        <p class="text-center fw-semibold fs-1">Daftar</p>
                    <form>
                        <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kata email anda">
                        </div>
                        <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kata sandi anda">
                        </div>
                        <div class="mb-4">
                        <label for="formGroupExampleInput" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan ulang kata sandi anda">
                        </div>  
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark ">Daftar</button>
                        </div>
                        <div class="text-center mt-3 mb-1">Sudah Mempunyai Akun?
                            <a href="#" class="text-decoration-none mb-3">Masuk</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Bootstrap JS Offline -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
</body>
</html>
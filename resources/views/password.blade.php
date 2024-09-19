<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="{{ asset('assets/img/logo1.png') }}">
    <title>Wakaf Yuk!</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
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
                <a class="nav-link mx-3" aria-current="page" href="/tampilan_awal">Beranda</a>
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
                        <p class="text-center fw-semibold fs-1">Ubah Password</p>
                    <form>
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <div class="input-group mb-4">
                            <input type="password" id="password1" class="form-control" placeholder="Masukkan Password Anda">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword1">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        <label for="formGroupExampleInput" class="form-label">Konfirmasi Password</label>
                        <div class="input-group mb-4">
                            <input type="password" id="password2" class="form-control" placeholder="Masukkan Ulang Password Anda">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword2">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                        <div class="d-grid gap-2">
                        <a href="/login" class="btn btn-dark ">Konfirmasi</a>
                        </div>
                        <div class="text-center mt-3 mb-1">Sudah Mempunyai Akun?
                            <a href="/login" class="text-decoration-none mb-3">Masuk</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const togglePassword1 = document.querySelector('#togglePassword1');
            const password1 = document.querySelector('#password1');
        
            togglePassword1.addEventListener('click', function () {
                // Toggle the type attribute
                const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
                password1.setAttribute('type', type);
        
                // Toggle the eye slash icon
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
            const togglePassword2 = document.querySelector('#togglePassword2');
            const password2 = document.querySelector('#password2');
        
            togglePassword2.addEventListener('click', function () {
                // Toggle the type attribute
                const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
                password2.setAttribute('type', type);
        
                // Toggle the eye slash icon
                this.querySelector('i').classList.toggle('bi-eye');
                this.querySelector('i').classList.toggle('bi-eye-slash');
            });
        </script>
    <!-- Bootstrap JS Offline -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
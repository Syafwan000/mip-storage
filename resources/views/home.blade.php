<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/home.css">
    <title>MIP</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">MIP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="bi bi-grid"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active media me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Syafwan000" href="https://github.com/Syafwan000" target="_blank"><i class="bi bi-github"></i> <span id="socmed">Syafwan000</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active media me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="@safvvan_" href="https://www.instagram.com/safvvan_/" target="_blank"><i class="bi bi-instagram"> <span id="socmed">safvvan_</span></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active login px-3 py-1 mt-1" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 py-5">
                <h1 class="mb-3">MIP</h1>
                <p class="mb-4">MIP adalah website yang dibuat untuk kepentingan pribadi, website ini <br>digunakan untuk pengelolaan barang barang. Dengan adanya ini diharapkan <br>pengelolaan setiap barang barang penjualan dapat terkelola dengan baik</p>
                <a href="/login" class="get-started"><i class="bi bi-arrow-right-circle-fill"></i>&nbsp;&nbsp;Get Started</a>
                <small class="d-block pt-5">Made with 💖 by ShaWann</small>
            </div>
            <div class="col-md-6">
                <img class="image" width="80%" src="/img/box.svg" alt="Box">
            </div>
        </div>
    </div>
</section>

{{-- Script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="/js/home.js"></script>

</body>
</html>
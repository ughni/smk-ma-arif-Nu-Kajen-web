<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bioskop Indonesia</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/128/15628/15628326.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>



    <nav class="navbar navbar-expand-lg bg-success bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://21cineplex.com//theme/v5/assets/img/logo.png" alt="Bootstrap">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2 input-search" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success text-light input-button" type="submit"><i
                            class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary  sticky-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-play"></i> Now Playing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-geo-alt"></i> Theaters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-star"></i> Promotions</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-search-heart-fill"></i> Info 21
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-img border-start">
                <img src="https://21cineplex.com//theme/v5/assets/img/imax-menu.png" class="img-fluid px-2 ">
                <img src="https://21cineplex.com//theme/v5/assets/img/dolby-menu.png" class="img-fluid px-2">
                <img src="https://21cineplex.com//theme/v5/assets/img/mtix-menu.png" class="img-fluid px-2">
            </div>
        </div>
    </nav>


    <section class="hiro pt-5">
        <div class="container">
            <div class="col-10">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://media.21cineplex.com/webcontent/gallery/pictures/17193053142305_925x527.jpg"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.21cineplex.com/webcontent/gallery/pictures/171738471513417_925x527.jpg"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.21cineplex.com/webcontent/gallery/pictures/172111758446855_925x527.jpg"
                                class="d-block w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    {{-- menggunakan api --}}
    <section class="film pt-5">
        <div class="container  film-container">
            <div class="row">
                <div class="col  text-center pb-5">
                    <h1>Film Harry Potter</h1>
                </div>
            </div>
            <div class="row  row-container"></div>
        </div>
    </section>


    {{-- film Dilan --}}
    <section class="dilan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Film Dilan</h1>
                </div>
            </div>

            <div class="row dilann">

            </div>
        </div>
    </section>


    <!-- Button trigger modal -->


    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}













    <footer class="bg-success ">
        <div class="container">
            <div class="row pt-5">
                <div class="col d-flex">
                    <h6 class="pe-4 fw-light text-light border-2  border-end">Profile</h6>
                    <h6 class="px-4 fw-light text-light border-2   border-end">Terms.of Use</h6>
                    <h6 class="px-4 fw-light text-light ">Advertising</h6>
                </div>
                <div class="col social-icons text-end">
                    <a class="linka" href="https://www.instagram.com" target="_blank"><i
                            class="bi bi-youtube"></i></a>
                    <a class="linka" href="https://www.facebook.com" target="_blank"<i
                        class="bi bi-facebook"></i></a>
                    <a class="linka" href="https://www.twitter.com" target="_blank"><i
                            class="bi bi-twitter"></i></a>
                    <a class="linka" href="https://www.youtube.com" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

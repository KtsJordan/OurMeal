<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Our meal</title>
    <style>
        .col-3{
            min-height: 200px !important;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row bg-img">
            <nav class="navbar navbar-expand-lg justify-content-end">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link nav-text active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown link
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-4">
                    <h1 class="title">Order you Fav Meals</h1>
                </div>
                <div class="col-8"></div>
            </div>
        </div>
        <div class="row my-3 justify-content-around">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="text-center">name or title</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('img/products/bacon-burger.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quod, voluptatum
                            molestiae, mollitia assumenda ea repellendus labore modi iusto officiis ducimus totam id
                            delectus a reiciendis quisquam vitae obcaecati excepturi!</p>
                    </div>
                    <div class="row justify-content-center ">
                        <a href="" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="text-center">name or title</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('img/products/delicious-cheeseburger.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="row">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum saepe dignissimos, nulla,
                            illo accusantium maxime voluptatibus pariatur eos nam, rerum architecto doloremque quod
                            eaque. Quis quam id sit consequatur nostrum.</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="text-center">name or title</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('img/products/shawarma.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="row">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque numquam sapiente rerum
                            commodi molestiae repellendus corporis culpa facilis inventore. Provident molestiae nostrum
                            earum, officia esse architecto repellat sequi aliquam modi!</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-warning">
                    <h3 class="text-center">name or title</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <img src="{{ asset('img/products/tasty-burger.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="row">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora quam iste nihil. Minima
                            adipisci hic a aperiam ratione illo, harum modi reprehenderit cumque consectetur
                            voluptatibus repellat. Culpa ipsa commodi accusantium!</p>
                    </div>
                    <div class="row justify-content-center">
                        <a href="" class="btn btn-warning">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

</body>

</html>

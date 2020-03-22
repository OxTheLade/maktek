<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/Logo-04.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>MAKTEK &#8211; Kombi & Radiator & Kedel & Industri Varme Systemer</title>
</head>

<body>
<!-- NAVBAR -->
<section id="navbar" class="d-none d-lg-block d-md-block">
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a href="index" class="navbar-brand"><img height="40" src="img/Logo-01.png" alt=""></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-sm-block d-lg-none d-md-none">
                        <a href="#" class="nav-link dropdown-toggle text-danger" data-toggle="dropdown">Produkter</a>
                        <div class="dropdown-menu">
                            <a href="produkter/hygiejnisk-panelradiator" class="dropdown-item">Hygiejnisk Panelradiator</a>
                            <a href="#" class="dropdown-item">Vertikal Panelradiato</a>
                            <a href="#" class="dropdown-item">Slimline Panelradiator</a>
                            <a href="#" class="dropdown-item">Elektrisk Panelradiator</a>
                            <a href="#" class="dropdown-item">Plan Panelradiator</a>
                            <a href="#" class="dropdown-item">Standard Panelradiator</a>
                            <a href="#" class="dropdown-item">Håndkldetørrer</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">Om Os</a>
                    </li>
                    <li class="nav-item">
                        <a href="kontakt" class="nav-link text-danger">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">Forhandlere</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-none d-lg-block">
        <nav class="navbar navbar-expand-sm bg-danger navbar-light sticky-top fixed-top">
            <div class="container">
                <ul class="navbar-nav navbar-expand-sm">
                    <li class="nav-item small-text">
                        <a href="{{route('hygiejnisk-panelradiator')}}" class="nav-link text-white small-text">Hygiejnisk Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/vertikal-panelradiator" class="nav-link text-white small-text">Vertikal Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/slimline-panelradiator" class="nav-link text-white small-text">Slimline Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/elektrisk-panelradiator" class="nav-link text-white small-text">Elektrisk Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/plan-panelradiator" class="nav-link text-white small-text">Plan Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/standard-panelradiator" class="nav-link text-white small-text">Standard Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="produkter/haandklaede-varmer" class="nav-link text-white small-text">Håndkldetørrer</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<!-- Mobile Navbar -->
<section class="d-lg-none d-md-none d-sm-block">
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a href="index" class="navbar-brand"><img height="40" src="img/Logo-01.png" alt=""></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-sm-block d-lg-none d-md-none">
                        <a href="#" class="nav-link dropdown-toggle text-danger" data-toggle="dropdown">Produkter</a>
                        <div class="dropdown-menu">
                            <a href="produkter/hygiejnisk-panelradiator" class="dropdown-item">Hygiejnisk Panelradiator</a>
                            <a href="produkter/vertikal-panelradiator" class="dropdown-item">Vertikal Panelradiato</a>
                            <a href="produkter/slimline-panelradiator" class="dropdown-item">Slimline Panelradiator</a>
                            <a href="produkter/elektrisk-panelradiator" class="dropdown-item">Elektrisk-Panelradiator</a>
                            <a href="produkter/plan-panelradiator" class="dropdown-item">Plan Panelradiator</a>
                            <a href="produkter/standard-panelradiator" class="dropdown-item">Standard Panelradiator</a>
                            <a href="produkter/haandklaede-varmer" class="dropdown-item">Håndkldetørrer</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">Om Os</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-danger">Forhandlere</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<section id="background2" class="d-lg-none d-sm-block">
    <img src="img/Forside_billed.jpg" class="img-fluid" alt="">
</section>
<section id="background_lg" class="d-none d-lg-block">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <img height="500" class="full-width-image" src="img/Forside_billed.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section id="produkter" class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin">
                            <a href="produkter/hygiejnisk-panelradiator">
                                <img height="300" width="350" src="img/Hygiejnisk-radiator.jpg" alt="">
                            </a>
                            <div class="centered text-black">
                                <h3 class="text-center">Hygiejnisk Panel Radiatorer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin">
                            <a href="produkter/vertikal-panelradiator">
                                <img height="300" width="350" src="img/Vertikal-radiator.jpg" alt="">
                            </a>
                            <div class="centered text-black">
                                <h3 class="text-center">Vertikal Panel Radiatorer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin">
                            <a href="produkter/slimline-panelradiator">
                                <img height="300" width="350" src="img/Slimline-radiator.jpg" alt="">
                            </a>
                            <div class="centered text-black">
                                <h3 class="text-center">Slimline Panel Radiatorer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <a href="produkter/elektrisk-panelradiator">
                            <img height="300" width="350" src="img/Elektrisk%20radiator.jpg" alt="">
                        </a>
                        <div class="centered text-black">
                            <h3 class="text-center">Elektrisk Panel Radiatorer</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin">
                            <a href="produkter/plan-panelradiator">
                                <img height="300" width="350" src="img/Plan-radiator.jpg" alt="">
                            </a>
                            <div class="centered text-black">
                                <h3 class="text-center">Plan Panel Radiatorer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin">
                            <a href="produkter/standard-panelradiator">
                                <img height="300" width="350" src="img/Standard-radiator.jpg" alt="">
                            </a>
                            <div class="centered text-black">
                                <h3 class="text-center">Standard Panel Radiatorer</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="img-container">
                        <div class="column-margin-0">
                            <div class="column-margin">
                                <a href="produkter/haandklaede-varmer">
                                    <img height="300" width="350" src="img/Håndklædetørrer.jpg" alt="">
                                </a>
                                <div class="centered text-black">
                                    <h3 class="text-center">Håndklædetørrer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="info">
    <div class="container mt-4">
        <div class="card border-dark rounded-0">
            <div class="card-header">
                <h1>International kvalitet</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda at atque
                    consequuntur dignissimos eaque eos error esse facere fuga fugit itaque maiores nisi officiis, optio,
                    pariatur quae quasi quia quisquam reprehenderit vero voluptas voluptatibus voluptatum! Accusantium
                    aspernatur atque dolorum illo in incidunt ipsa, ipsam labore nemo nobis quam, saepe.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi autem
                    exercitationem illo itaque necessitatibus placeat recusandae veniam. Suscipit, totam.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, laborum.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores culpa dignissimos
                    doloribus ducimus eius et eveniet illo, minima neque nostrum odio officia, pariatur, quae ut!</p>
            </div>
            <div class="card-body">
                <img src="img/maktek_global.jpg" alt=""
                     class="card-img-bottom">
            </div>
        </div>
    </div>
</section>

<section id="form" class="bg-light mt-4 py-5">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <h3>Kontakt Os</h3>
                {!! Form::open(['method'=>'POST', 'action'=>'SendEmailController@sendMail']) !!}
            @csrf <!-- {{ csrf_field() }} -->
                <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Navn']) !!}
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </span>
                        </div>
                        {!! Form::tel('number', null, ['class'=>'form-control', 'placeholder'=>'Telefonummer']) !!}
                    </div>
                    <div class="input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        </div>
                        {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>5, 'placeholder'=>'Spørgsmål']) !!}
                    </div>
                {!! Form::submit('Send', ['class'=>'btn btn-danger btn-block btn-lg']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>


<footer id="main-footer" class="text-center footer p-4 mt-3 bg-danger d-none d-lg-block d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="d-flex justify-content-between">
                    <img height="60" src="img/Logo-03.png" alt="">
                    <div class="text-white">
                        <p class="mb-0">Maktek Scandinavia ApS</p>
                        <p class="mb-0">Lautruphøj 5-7, DK2750 Ballerup</p>
                        <p class="mb-0">Tel. +45 53 85 53 55 CVR-nr: 40978097</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="bg-danger p-4 d-lg-none d-md-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-sm-row flex-md-row flex-column">
                    <img height="60" src="img/Logo-03.png" alt="">
                    <div class="text-white">
                        <p class="mb-0">Maktek Scandinavia ApS</p>
                        <p class="mb-0">Lautruphøj 5-7, DK2750 Ballerup</p>
                        <p class="mb-0">Tel. +45 53 85 53 55 CVR-nr: 40978097</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
        myFunction()
    };

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>

</html>
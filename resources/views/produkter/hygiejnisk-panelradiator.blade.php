<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/Logo-04.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
          integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>MAKTEK &#8211; Kombi & Radiator & Kedel & Industri Varme Systemer</title>
</head>
<body>
<!-- NAVBAR -->
<section id="navbar" class="d-none d-lg-block d-md-block">
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a href="{{route('/')}}" class="navbar-brand"><img height="40" src="../img/Logo-01.png" alt=""></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-sm-block d-lg-none d-md-none">
                        <a href="#" class="nav-link dropdown-toggle text-danger" data-toggle="dropdown">Produkter</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Hygiejnisk Panelradiator</a>
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
                        <a href="#" class="nav-link text-danger">Kontakt</a>
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
                        <a href="../produkter/hygiejnisk-panelradiator" class="nav-link text-white small-text">Hygiejnisk Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/vertikal-panelradiator" class="nav-link text-white small-text">Vertikal Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/slimline-panelradiator" class="nav-link text-white small-text">Slimline Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/elektrisk-panelradiator" class="nav-link text-white small-text">Elektrisk Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/plan-panelradiator" class="nav-link text-white small-text">Plan Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/standard-panelradiator" class="nav-link text-white small-text">Standard Panelradiator</a>
                    </li>
                    <li class="nav-item">
                        <a href="../produkter/haandklaede-varmer" class="nav-link text-white small-text">Håndkldetørrer</a>
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
            <a href="{{route('/')}}" class="navbar-brand"><img height="40" src="../img/Logo-01.png" alt=""></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-sm-block d-lg-none d-md-none">
                        <a href="#" class="nav-link dropdown-toggle text-danger" data-toggle="dropdown">Produkter</a>
                        <div class="dropdown-menu">
                            <a href="../produkter/hygiejnisk-panelradiator" class="dropdown-item active">Hygiejnisk Panelradiator</a>
                            <a href="../produkter/vertikal-panelradiator" class="dropdown-item">Vertikal Panelradiato</a>
                            <a href="../produkter/slimline-panelradiator" class="dropdown-item">Slimline Panelradiator</a>
                            <a href="../produkter/elektrisk-panelradiator" class="dropdown-item">Elektrisk Panelradiator</a>
                            <a href="../produkter/plan-panelradiator" class="dropdown-item">Plan Panelradiator</a>
                            <a href="../produkter/standard-panelradiator" class="dropdown-item">Standard Panelradiator</a>
                            <a href="../produkter/haandklaede-varmer" class="dropdown-item">Håndkldetørrer</a>
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

<!-- MAIN CONTENT -->
<section id="products">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Hygiejnisk Panelradiator</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>
                                Støvpartikler og snavs kan komme til at rode rundt i en standard radiators
                                konvektorer, og i vintersæsonen kan det flitse radiatorens varmluft og blande det
                                med
                                oxygen. Maktek Hygiejniske panel-radiatorer er designet til at blive brugt steder,
                                hvor
                                der er brug for ekstra oxygen, såsom hospitaler, skoler, samt steder hvor der bliver
                                lavet mad.
                            </li>
                            <li>
                                Den er rigtig nem at rense, da den ikke har et sidedæksel, den øverste grill, samt
                                konvektorer. Chancen for rust er minimal, med vores farvebeskyttelses system.
                            </li>
                            <li>
                                Den specielle stålplade, og konvektorkonstruktionen giver maximal varmekapacitet.
                            </li>
                            <li>
                                Produktion i henhold til TSE EN 442 standarder.
                            </li>
                            <li>
                                Side (standard) og bunden (kompakt ventil), har forbindelsesmuligheder.
                            </li>
                            <li>
                                Maksimal rustmodstand ved en epoxy polyester pulverbelægningsproces
                            </li>
                            <li>
                                Speciel indpakning, for at undgå potentielle skader. Indeholder installationstilbehør.
                            </li>
                            <li>
                                Panelradiatorer, der eventuelt produceres uden beslag, giver mulighed for at blive
                                installeret med fjederkonsol.
                            </li>
                            <li>
                                Høj trykbestandighed med optimal stigning.
                            </li>
                            <li>
                                Omkostningsbesparelse grundet varmeoverførsel med lav vandmængde
                            </li>
                            <li>
                                Produktion med højteknologisk robot svejselinje
                            </li>
                            <li>
                                100% testet for utæthed, samt kvalitetstest for hver radiator.
                            </li>
                            <li>
                                Alt tilbehør der er nødvendigt for vægmontering er inkluderet i hver pakke.
                            </li>
                            <li>
                                10 års garanti
                            </li>
                            <li>
                                TSE-certificeret, og imødekommer EU’s kvalitetsstandarder med CE-certifikat.
                            </li>

                        </ul>
                    </div>
                    <div class="card-footer">
                        <ul class="list-unstyled">
                            <li class="mb-2">Typer: 10 | 11 | 21 | 22 | 33</li>
                            <li class="mb-2">Bredde: 300 | 400 | 500 | 600 | 700 | 800 | 900 mm.</li>
                            <li>Længder: 400 - 3000 mm.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img id="largeImage" class="img-fluid" src="https://via.placeholder.com/550x400" alt="">
                <div id="thumbs">
                    <img width="80" height="80" id="#thumbs" class="img-fluid mt-2" src="https://via.placeholder.com/550x401" alt="">
                </div>
                <div class="d-flex flex-row justify-content-around mt-2">
                    <button class="btn btn-danger ml-2">Certifikater</button>
                    <button class="btn btn-danger">Katalog</button>
                    <button class="btn btn-danger">Forhandlere</button>
                </div>
            </div>
        </div>
    </div>

</section>

<footer id="main-footer" class="text-center footer p-4 mt-3 bg-danger d-none d-lg-block d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="d-flex justify-content-between">
                    <img height="60" src="../img/Logo-03.png" alt="">
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

<footer class="bg-danger mt-5 p-4 d-lg-none d-md-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-sm-row flex-md-row flex-column">
                    <img height="60" src="../img/Logo-03.png" alt="">
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
<script>
    $('#thumbs').delegate('img','click', function(){
        $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    });
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"
        integrity="sha256-Y1rRlwTzT5K5hhCBfAFWABD4cU13QGuRN6P5apfWzVs=" crossorigin="anonymous"></script>

<script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
</body>
</html>
<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.scss" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/styles.scss" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<!--header-->
<header class="container-fluid header h-auto">
    <div class="row">
        <div class="col-3">
        </div>

        <div class="col-6 logo ">
            <div class="logotop">
                <a href="index.php"><img src="images/vin%20uden%20baggrund.png" alt="logo"></a>
            </div>
        </div>

        <div class="col-3 align-self-center text-end menu">
            <div class="bar d-lg-none">
                <i class="fas fa-bars fa-2x"></i>
            </div>
        </div>
    </div>
</header>
<!--navigationsbar-->
<div class="container-fluid navbar d-none d-lg-block  bg-brown">
    <div class="row col-12 justify-content-center justify-content-around ">
        <div class="col-lg-auto p-3"><a href="#">Om os</a></div>
        <div class="col-lg-auto p-3"><a href="#">Menu</a></div>
        <div class="col-lg-auto p-3"><a href="#">Selskaber</a></div>
        <div class="col-lg-auto p-3"><a href="#">Kontakt</a></div>
    </div>
</div>










<!-- nav baren -->
<!---->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="#">Navbar</a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" aria-current="page" href="#">Home</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Link</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Dropdown-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><hr class="dropdown-divider"></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled">Disabled</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="d-flex">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!--<!-- nav baren slut -->-->


<!-- Java Script for Hamburger menu-bar -->
<script>
    const bar = document.querySelector(".bar");
    const navbar = document.querySelector(".navbar");
    bar.addEventListener("click", () => navbar.classList.toggle('d-none'));
</script>
</body>
</html>

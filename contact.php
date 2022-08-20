<?php

echo 'Hello world !!';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pamafloma - Accueil</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
            crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.1/css/all.min.css"
            integrity="sha512-/RUbtHakVMJrg1ILtwvDIceb/cDkk97rWKvfnFSTOmNbytCyEylutDqeEr9adIBye3suD3RfcsXLOLBqYRW4gw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="./style/style.css">
    </head>
    <body>
        <nav>
            <a href="#" class="toggle-button">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </a>
            <div class="menu">
                <ul>
                    <li><a href="./index.html">Accueil</a><div></div></li>
                    <li><a href="./club.html">Le Club</a></li>
                    <li><a href="./troupe.html">La Troupe</a></li>
                    <li><a href="./reservations.html">Réservations</a></li>
                    <li><a href="./adhesions.html">Adhédions</a></li>
                </ul>
            </div>


            <img src="https://via.placeholder.com/250x65?text=Logo+Pamafloma"
                alt="Logo">

            <div class="reseaux-soc">
                <ul>
                    <li><a href="https://www.facebook.com/pamafloma"
                            target="_blank"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.youtube.com/user/PAMAFLOMA"
                            target="_blank"><i
                                class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.instagram.com/pamafloma/"
                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="container-mobile">
                <div class="menu-mobile">
                    <ul>
                        <li><a href="./index.html">Accueil</a><div></div></li>
                        <li><a href="./club.html">Le Club</a></li>
                        <li><a href="./troupe.html">La Troupe</a></li>
                        <li><a href="./reservations.html">Réservations</a></li>
                        <li><a href="./adhesions.html">Adhédions</a></li>
                    </ul>
                </div>
                <div class="reseaux-soc-mobile">
                    <ul>
                        <li><a href="https://www.facebook.com/pamafloma"
                                target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.youtube.com/user/PAMAFLOMA"
                                target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.instagram.com/pamafloma/"
                                target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div id="carouselExampleSlidesOnly" class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/photo2.jpg" class="d-block w-100"
                            alt="Photo de la scene 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/tablerondes.jpg" class="d-block
                            w-100"
                            alt="Photo de la scene 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/photo3.jpg" class="d-block w-100"
                            alt="Photo de la scene 2">
                    </div>
                </div>
            </div>
        </header>
    
    
</body>
</html>

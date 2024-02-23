<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Aggregator | @yield('title')</title>
    <link rel="icon" href="favicon.ico">
    <link href="./resources/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>

    <!-- Inclure la bibliothèque Slick Carousel -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

</head>

<body x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
      x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      :class="{'b eh': darkMode === true}">


<!-- ===== Navbar Start ===== -->
    <x-navbar.home-navbar/>
<!-- ===== Navbar End ===== -->


@yield('content')


<!-- ===== Footer Start ===== -->
<x-footer.home-footer/>
<!-- ===== Footer End ===== -->

<script>
    //  Pricing Table
    const setup = () => {
        return {
            isNavOpen: false,

            billPlan: 'monthly',

            plans: [
                {
                    name: 'Starter',
                    price: {
                        monthly: 29,
                        annually: 29 * 12 - 199,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Growth Plan',
                    price: {
                        monthly: 59,
                        annually: 59 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
                {
                    name: 'Business',
                    price: {
                        monthly: 139,
                        annually: 139 * 12 - 100,
                    },
                    features: ['400 GB Storaget', 'Unlimited Photos & Videos', 'Exclusive Support'],
                },
            ],
        };
    };
</script>
<script defer src="./resources/js/bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<!-- Inclure jQuery (requis pour Slick Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Inclure la bibliothèque Slick Carousel -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script defer src="./resources/js/image-register.js"></script>


<!-- Script d'initialisation du carrousel -->
<script type="text/javascript">
    $(document).ready(function () {
        $('.carousel').slick({
            slidesToShow: 3, // Affiche trois cartes à la fois
            slidesToScroll: 1, // Défile d'une carte à la fois
            autoplay: true, // Désactiver la lecture automatique
            dots: true, // Afficher les indicateurs de pagination
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2 // Si l'écran est inférieur à 1024px, afficher deux cartes à la fois
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1 // Si l'écran est inférieur à 768px, afficher une carte à la fois
                    }
                }
            ]
        });
    });
</script>
</body>
</html>

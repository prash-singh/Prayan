<!DOCTYPE html>
<html lang="en">

<head>
    <meta chars-t="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="./trip.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<header>
    <nav class="navbar">
        <div class="navbar__top">
            <div class="navbar__brand">
                <a href="./index.php" rel="noopener noreferrer">
                    <img src="./assets/logo.png" alt="logo" class="brand__logo">
                </a>
            </div>
            <div class="navbar__nav__items">
                <div class="nav__items">
                    <h5 id="items__home"> <a href="./index.php">HOME</a></h5>
                    <h5 id="items__hotel"> <a href="./hotel.php">Hotel</a></h5>
                    <h5 id="items__flight"> <a href="./flights.php">Flight</a></h5>
                    <h5 id="items__restaurant"><a href="./restaurant.php">Restaurant</a></h5>
                </div>
            </div>
            <div class="navbar__account" id="navbar_acc">
                <div class="navbar__register">
                    <h5 id="nav__login"> <a href="./login.html"> LOGIN</a></h5>
                    <h4>|</h4>
                    <h5 id="nav__register"> <a href="./signup.php">REGISTER</a></h5>
                </div>
            </div>
        </div>
    </nav>
</header>

<body>
    <?php
    session_start();
    if (isset($_SESSION['email'])) {
    ?>
        <script>
            let elements = document.getElementsByClassName("navbar__register");
            while (elements.length > 0) elements[0].remove();
            const elem = document.getElementById('navbar_acc');
            const div = document.createElement('div');
            div.className = "navbar__register";
            const h5 = document.createElement('h5');
            const a = document.createElement('a');
            h5.id = "nav__profile";
            a.setAttribute("href", "./profile.php");
            a.text = 'PROFILE';
            h5.appendChild(a);
            div.append(h5);
            elem.append(div);
        </script>

    <?php
    }
    ?>
    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 ">Explore our world</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/paris1.png " alt="parisimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Paris</b></h4>
                        <p>
                            France

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-22,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/landon1.png " alt="londonimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>London</b></h4>
                        <p>
                            United Kingdom

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-26,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/india.png " alt="indiaimage " class="hotel__image " style="height: 350px; " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Himachal </b></h4>
                        <p>
                            India

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-12,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/maui.png " alt="parisimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Maui</b></h4>
                        <p>
                            Hawaii, USA


                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-82,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/Rome.png " alt="londonimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Rome</b></h4>
                        <p>
                            Italy

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-1,23,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/maldevs.png " alt="indiaimage " class="hotel__image " style="height: 350px; " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>The Maldives </b></h4>
                        <p>
                            India

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-38,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/bora.png " alt="parisimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Bora Bora</b></h4>
                        <p>
                            Leeward Islands

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-75,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/cape.png " alt="londonimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Cape Town</b></h4>
                        <p>
                            South Africa

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-98,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/pit.png " alt="indiaimage " class="hotel__image " style="height: 350px; " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Plitvice Lakes </b></h4>
                        <p>
                            Croatia

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-88,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/mas.png " alt="parisimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Masai Mara</b></h4>
                        <p>
                            Kenya

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-92,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/phu.png " alt="londonimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Phuket</b></h4>
                        <p>
                            Thailand

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-24,578</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/Tokyo.png " alt="indiaimage " class="hotel__image " style="height: 350px; " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Tokyo </b></h4>
                        <p>
                            Japan

                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-86,645</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>


</body>

<footer class="footer ">
    <div class="container ">
        <div class="row ">
            <div class="footer-col ">
                <h4>company</h4>
                <ul>
                    <li>
                        <a href="./about.html">about us</a>
                    </li>
                    <li>
                        <a href="# ">our services</a>
                    </li>
                    <li>
                        <a href="# ">privacy policy</a>
                    </li>
                    <li>
                        <a href="# ">Payment option</a>
                    </li>
                    <li>
                        <a href="./feedback.php">Feedback</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col ">
                <h4>Online Booking</h4>
                <ul>
                    <li>
                        <a href="# ">Travel Destination</a>
                    </li>
                    <li>
                        <a href="# ">Hotel booking</a>
                    </li>
                    <li>
                        <a href="# ">Flight booking</a>
                    </li>
                    <li>
                        <a href="# ">Cab booking</a>
                    </li>
                    <li>
                        <a href="# ">Restaurant Booking</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col ">
                <h4> Contact</h4>
                <ul>
                    <li>
                        <a href="mailto:prashant.singh_cs19@gla.ac.in " target="_blank "> Prashant Singh</a>
                    </li>
                    <li>
                        <a href="mailto:abhinandan.jain_cs19@gla.ac.in " target="_blank "> Abhinandan Jain</a>
                    </li>
                    <li>
                        <a href="mailto:aviral.jaiswal_cs19@gla.ac.in " target="_blank "> Aviral Jaiswal</a>
                    </li>
                    <li>
                        <a href="mailto:naveen.pandey_cs19@gla.ac.in " target="_blank "> Naveen Pandey</a>
                    </li>
                    <li>
                        <a href="mailto:pratik.srivastava_cs19@gla.ac.in " target="_blank "> Pratik Srivastava</a>
                    </li>
                </ul>
            </div>
            <div class="footer-col " id="footer_logo ">
                <img src="./assets/logo.png " alt="logo " class="brand__logo ">
            </div>
        </div>
    </div>

</footer>

</html>
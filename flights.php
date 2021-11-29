<!DOCTYPE html>
<html lang="en">

<head>
    <meta chars-t="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="./restaurant.css">
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
                    <h5 id="items__trip"> <a href="./trip.php">Trip</a></h5>
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

        <h1 class="text-x1 ">Flights</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/air1.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Singapore Airline</b></h4>
                        <p>
                            Changi
                            <span style="color: red ">Singapore</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-3,500</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air2.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Paramount Airway</b></h4>
                        <p>
                            Chennai
                            <span style="color: red "> Tamil Nadu</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-4,000</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air3.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Emirates</b></h4>
                        <p>
                            Dubai
                            <span style="color: red ">UAE</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-3,000</h4> -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="food__list__container ">


        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/fli.png" alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>IndiGo</b></h4>
                        <p>
                            Delhi
                            <span style="color: red ">India</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,00$</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air4.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Air France</b></h4>
                        <p>
                            Paris
                            <span style="color: red ">France</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,500</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/air5.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Swiss International Air Lines</b></h4>
                        <p>
                            Bern
                            <span style="color: red ">Switzerland</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-800</h4> -->
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">

        <h1 class="text-x1 ">Cabs</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/taxi-luxury1.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Mercedes car</b></h4>
                        <p>
                            Rome
                            <span style="color: red "> Italy</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,00$</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/cab11.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Audy Car</b></h4>
                        <p>
                            Washington dc
                            <span style="color: red ">USA</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,500</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/cab10.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>BMW Car </b></h4>
                        <p>
                            Patna
                            <span style="color: red ">Bihar</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-800</h4> -->
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">


        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/cab13.png" alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Maruti Suzuki</b></h4>
                        <p>
                            Jaipur
                            <span style="color: red ">Rajsthan</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,000</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/cab14.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Hyundai Car </b></h4>
                        <p>
                            London
                            <span style="color: red ">England</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-1,500</h4> -->
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/cab15.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Tata Car</b></h4>
                        <p>
                            Santiago
                            <span style="color: red ">Chile</span>
                        </p>
                    </div>
                    <div>
                        <!-- <h4 style="color: red "> Rs-800</h4> -->
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
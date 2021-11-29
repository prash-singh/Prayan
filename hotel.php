<!DOCTYPE html>
<html lang="en">

<head>
    <meta chars-t="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="hotel.css">
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
                    <h5 id="items__flight"> <a href="./flights.php">Flight</a></h5>
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
        <div class="food_list__container__back "></div>
        <h1 class="text-x1 ">Top Hotels</h1>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/dream_hotel.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Vertex</b></h4>
                        <p>
                            Panaji
                            <span style="color: red ">Goa</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-4,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/udipur_hotel.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Udipur Palace</b></h4>
                        <p>
                            Udipur
                            <span style="color: red ">Rajasthan</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-5,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/taj_hotel.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Taj Hotel</b></h4>
                        <p>
                            Mumbai
                            <span style="color: red "> Maharashtra</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-10,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="food__list__container ">
        <div class="food_list__container__back "></div>

        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/hotel4.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Mahali Mazuri</b></h4>
                        <p>
                            Masai Mara
                            <span style="color: red ">Kenya</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-23,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel5.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Oppsite House</b></h4>
                        <p>
                            Dongdan
                            <span style="color: red ">Beijing</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-18,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel6.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Capella Ubud</b></h4>
                        <p>
                            Bali
                            <span style="color: red ">Indonesia</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-21,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/hotel7.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>The Oberoi</b></h4>
                        <p>
                            New Delhi
                            <span style="color: red ">Delhi</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-12,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel8.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Mandarin</b></h4>
                        <p>
                            Milan
                            <span style="color: red ">Milano</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-5,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel9.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Manoir Hovey</b></h4>
                        <p>
                            North Hatley
                            <span style="color: red "> Quebec</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-14,000</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="food__list__container ">
        <div class="food_list__container__back "></div>
        <div class="food__menu__card__list ">
            <div class="food__menu__card ">
                <img src="./assets/hotel10.png " alt="resortimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>Taj Lake Palace</b></h4>
                        <p>
                            Mumbai
                            <span style="color: red ">Maharashtra</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-9,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel11.png " alt="udipur_palaceimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b> RAAS</b></h4>
                        <p>
                            Jodhpur
                            <span style="color: red ">Rajasthan</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-13,000</h4>
                    </div>
                </div>
            </div>
            <div class="food__menu__card ">
                <img src="./assets/hotel12.png " alt="taj_hotelimage " class="hotel__image " />
                <div class="food__menu__card__details ">
                    <div>
                        <h4 class="food__menu__card__title "><b>The Roundtree</b></h4>
                        <p>
                            Amagansett
                            <span style="color: red ">New Work</span>
                        </p>
                    </div>
                    <div>
                        <h4 style="color: red "> Rs-21,000</h4>
                    </div>
                    <br>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayan</title>
    <link rel="stylesheet" href="./signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<header>
    <nav class="navbar">
        <div class="navbar__top">
            <div class="navbar__brand">
                <a href="./index.html" rel="noopener noreferrer">
                    <img src="./assets/logo.png" alt="logo" class="brand__logo">
                </a>
            </div>
            <div class="navbar__nav__items">
                <div class="nav__items">
                    <h5 id="items__home"> <a href="./index.html">HOME</a></h5>
                    <h5 id="items__about"> <a href="./about.html">ABOUT US</a></h5>
                    <h5 id="items__offers"> <a href="./header/offer.html">OFFERS</a></h5>
                    <h5 id="items__contact"><a href="./header/contact.html">Contact</a></h5>
                </div>
            </div>
            <div class="navbar__account">
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
    <div class="login">
        <section class="login_body">
            <div class="login_header">
                <h3>Create new Account</h3>
                <img src="./assets/signup.svg" alt="signup_logo">
            </div>
            <div class="login_container">
                <form name="uform" action="./signup.php" onsubmit="return validation()" method="POST">
                    <table>

                        <tbody>
                            <!-- First name -->
                            <tr>
                                <td><label for="fname">Enter your Full Name</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="fname" name="fname" placeholder="Aviral " required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!-- Last Name -->
                            <tr>
                                <td><label for="lname">Enter your Last Name</label></td>
                            </tr>
                            <tr>
                                <td><input type="text" id="lname" name="lname" placeholder="Jaiswal" required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!--Email -->
                            <tr>
                                <td><label for="mail">Enter your Email Id:</label></td>
                            </tr>
                            <tr>
                                <td><input type="email" placeholder="example@gmail.com" id="mail" name="email" required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!-- DOB -->
                            <tr>
                                <td><label for="dob">Enter Date of Birth</label></td>
                            </tr>
                            <tr>
                                <td><input type="date" id="dob" name="dob" required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!-- password -->
                            <tr>
                                <td><label for="password">Create your password:</label></td>
                            </tr>
                            <tr>
                                <td><input type="password" placeholder="******" id="password" name="pass1" required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!-- re-password -->
                            <tr>
                                <td><label for="rpassword">Re-enter your password:</label></td>
                            </tr>
                            <tr>
                                <td><input type="password" placeholder="******" id="rpassword" name="pass2" required></td>
                            </tr>
                        </tbody>

                        <tbody>
                            <!-- submit -->
                            <tr>
                                <td class="btn_login"><input type="submit" value="SignUp" name="signup"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="newAccount">
                <h6>Already have account?</h6>
                <a href="./login.html">Sign-In</a>
            </div>
        </section>
    </div>
    <script>
        function validation() {
            var pass1 = document.uform.password.value;
            var pass2 = document.uform.rpassword.value;
            if (pass1 != pass2) {
                alert("Password Not Matched Re-check your password");
                return false;
            }
        }
    </script>

    <?php

    if (isset($_POST['signup'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $connection = mysqli_connect("localhost", "root", "", "prayandb");
        if (!$connection) {
            echo '<script> 
                alert("database not connected");
                window.location.href = "./signup.php";
            </script>';
        }

        $insert_query = "INSERT INTO UserDetails (`FirstName`,`LastName`,`Email`,`DOB`,`Password`) VALUES ('$fname','$lname','$email','$dob', '$pass1')";
        if (mysqli_query($connection, $insert_query)) {
            echo '<script>alert("Signup Success")</script>';
            echo '<script>window.location.href="./login.html"</script>';
        } else {
            echo '<script>alert("Signup Failed")</script>';
            echo '<script>window.location.href="./signup.php"</script>';
        }
    }
    ?>

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
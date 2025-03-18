<?php 

$conn = mysqli_connect('localhost', 'root','', 'dental_db') or die ('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $doctor_name = $_POST['doctor_name'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `dental_form` (name, email, number, doctor_name, date) VALUES('$name', '$email', '$number', '$doctor_name', '$date')") or die ('query failed)');

    if($insert){
        $message[] = 'appointment made successfully';
    }else {
        $message[] = 'appointment failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ortho - Dental</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">

</head>
<body>


<!-- header section start -->
<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center justify-content-between">

            <a href="#home" class="logo">Ortho <span>- Dental.</span></a>

            <nav class="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#process">Process</a>
                <a href="#reviews">Team</a>

            </nav>

            <a href="#contact" class="link-btn">Make an Appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>

    </div>

</header>
<!-- header section end -->

<!-- home section starts -->

<section class="home" id="home">

    <div class="container">

        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>One Smile at a Time.</h3>
                <p>A smile is a simple yet powerful gesture that can make a world of difference. It can brighten someone's day, ease their worries, and bring a sense of connection. One smile at a time, we have the ability to spread kindness and positivity, creating a ripple effect that can touch hearts far beyond our own. Never underestimate the impact of a smile—it’s a small act with the potential for great change.</p>
                <a href="#contact" class="link-btn">Make an Appointment</a>
            </div>
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 image">
                <img src="images/gums.png" class="w-100 mb-5 mb-md-0" alt="">
            </div>

            <div class="col-md-6 content">
                <span>About us</span>
                <h3>Your trusted partner for expert orthodontic and dental care.</h3>
                <p>Ortho-Dental is committed to providing top-quality orthodontic and dental solutions. We specialize in personalized care that helps individuals achieve optimal oral health, confidence, and a beautiful smile. Our expert team is here to guide you through every step, ensuring comfort and the best outcomes for your dental and orthodontic needs.</p>
                <a href="#contact" class="link-btn">Make Appointment</a>
            </div>

        </div>

    </div>

</section>
<!-- about section ends -->

<!-- service section starts -->

<section class="services" id="services">

    <h1 class="heading"> Our Services </h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/dentist.svg" alt="">
            <h3>General Dentistry</h3>
            <p>Routine checkups, cleanings, fillings, and preventive care for overall oral health.</p>
        </div>

        <div class="box">
            <img src="images/ortho.png" alt="">
            <h3>Orthodontic Services</h3>
            <p>Braces and Invisalign treatments for teeth alignment and improved smiles.</p>
        </div>

        <div class="box">
            <img src="images/cosme.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Teeth whitening, veneers, and smile makeovers for a more confident you.</p>
        </div>

        <div class="box">
            <img src="images/orals.png" alt="">
            <h3>Oral Surgery</h3>
            <p>Tooth extractions, wisdom teeth removal, and other surgical procedures.</p>
        </div>

        <div class="box">
            <img src="images/emer.png" alt="">
            <h3>Emergency Dental Care</h3>
            <p>Prompt care for dental emergencies like toothaches, broken teeth, or injuries.</p>
        </div>

        <div class="box">
            <img src="images/impss.png" alt="">
            <h3>Implants and Restorations</h3>
            <p>Dental implants, crowns, bridges, and dentures for restoring missing teeth.</p>
        </div>

        <div class="box">
            <img src="images/ped.jpg" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Comprehensive dental care for children, including cleanings, sealants, and fluoride treatments.</p>
        </div>

        <div class="box">
            <img src="images/perio.png" alt="">
            <h3>Periodontal Care</h3>
            <p>Gum disease treatment and prevention to ensure long-term oral health.</p>
        </div>

        <div class="box">
            <img src="images/teeth.png" alt="">
            <h3>Teeth Whitening</h3>
            <p>Professional whitening treatments for a brighter, more radiant smile.</p>
        </div>


</section>

<!-- service section ends -->

<!-- process section starts -->

<section class="process" id="process">

    <h1 class="heading">Our Dental Process</h1>

    <div class="box-container container">

        <div class="box">
            <img src="images/procs.png" alt="">
            <h3>Initial Consultation</h3>
            <p>We begin by listening to our patients’ concerns and thoroughly assessing their oral health to understand their needs.</p>
        </div>

        <div class="box">
            <img src="images/procss.png" alt="">
            <h3>Personalized Treatment Plan</h3>
            <p>Based on the consultation, we create a customized treatment plan designed to address specific dental concerns and goals.</p>
        </div>

        <div class="box">
            <img src="images/procsa.png" alt="">
            <h3>Careful Execution and Aftercare</h3>
            <p>Our team provides professional dental procedures while ensuring patient comfort and offering detailed aftercare instructions.</p>
        </div>

    </div>


</section>

<!-- process section ends -->

<!-- reviews section starts -->

<section class="reviews" id="reviews">

    <h1 class="heading">Our Team</h1>

<div class="box-container container">

    <div class="box">
        <img src="images/wanayts.jpg" alt="">
        <p>Our expert programmer brought innovative solutions to the website, ensuring seamless functionality and optimal user experience.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>John Wanayts</h3>
        <span>Lead Programmer</span>
    </div>

    <div class="box">
        <img src="images/genesis.jpg" alt="">
        <p>Our front-end designer, transformed the visual appeal of the website with a user-friendly and visually engaging interface.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Genesis Buenacosa</h3>
        <span>Creative director</span>
    </div>

    <div class="box">
        <img src="images/ayen.jpg" alt="">
        <p>Was responsible for Front-end development, ensuring smooth data integration and robust website performance.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Ainne Argabioso</h3>
        <span>Front-End Developer</span>
    </div>

    <div class="box">
        <img src="images/concha.jpg" alt="">
        <p>UX/UI designer, focused on crafting intuitive user interfaces to enhance the experience of navigating the website.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Christian Concha</h3>
        <span>UX/UI Designer</span>
    </div>

    <div class="box">
        <img src="images/Dr.jpg" alt="">
        <p>Our clinic's visionary leader, a seamless experience for our patients while maintaining a professional.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Dra. Lorelie Mora Parungao</h3>
        <span>Boss</span>
    </div>

    <div class="box">
        <img src="images/serrano.jpg" alt="">
        <p>The website project manager, kept everything on track and ensured that all team members collaborated efficiently.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>John Lloyd Serrano</h3>
        <span>Project Manager</span>
    </div>

</div>


</section>
<!-- reviews section ends -->

<!-- contact section start -->
<section class="contact" id="contact">

    <h1 class="heading">Make Appointment</h1>

    <form action="" method="post">

        <span>Name : </span>
        <input type="text" name="name" placeholder="Enter your name" class="box">
        <span>Email : </span>
        <input type="email" name="email" placeholder="Enter your email" class="box">
        <span>Number : </span>
        <input type="number" name="number" placeholder="Enter your number" class="box">
        <span>Doctor Name : </span>
        <select name="doctor_name" class="box">
            <option value="" disabled selected>Select Dentist</option>
            <option value="Dr. Smith">Dr. Smith</option>
            <option value="Dr. Johnson">Dr. Johnson</option>
            <option value="Dr. Lee">Dr. Lee</option>
            <option value="Dr. Brown">Dr. Brown</option>
            <option value="Dr. Taylor">Dr. Taylor</option>
        </select>
        <span>Appointment date : </span>
        <input type="datetime-local" name="date"  class="box">
        <input type="submit" value="Make appointment" name="submit" class="link-btn">
        
    </form>

</section>
<!-- contact section ends -->

<!-- footer section start -->
<section class="footer" id="footer">

    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone number</h3>
            <p></p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Our Address</h3>
            <p>Mandaluyong, Philippines - 1550</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening hours</h3>
            <p>07:00 AM to 08:00 PM</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email address</h3>
            <p></p>

        </div>

    </div>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital || Online Hospital</title>
  <meta name="description" content="Get top-quality medical care from the comfort of your own home with our online hospital. Our experienced doctors and nurses are available 24/7 to provide you with personalized care, Experience the future of healthcare with our online hospital. We offer a wide range of services, from virtual consultations to remote monitoring, to help you stay healthy and connected, ">
  <meta name="keyword" content="online hospital, virtual healthcare, online doctor, virtual consultations, remote healthcare, telehealth, online medical care." >

  <!-- link for favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="./assets/img/sub-logo-2.jpg">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/media_queries.css">
  <link rel="stylesheet" href="./assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="./assets/img/logo-header.png" alt="Hospital Logo" height="70px" width="80px">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#course">Services</a>
          </li>
          <li class="nav-item">
            <a href="#doctors">Doctors</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contact Us</a>
          </li>

        </ul>
        <form action="HOSPITAL MANAGEMENT SYSTEM/index.php">
        <button class="btn btn-primary">
          <p class="btn-text">LOGIN | REGISTER</p>
          <span class="square"></span>
        </button>
        </form>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>





    <main>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="deco-shape shape-1">
          <img src="./assets/images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
          <img src="./assets/images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
          <img src="./assets/images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
          <img src="./assets/images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

          <p class="section-subtitle">Welcome To Your Top Class Online Hospital</p>

          <h1 class="main-heading">
            Get Prescription and Treatment From Top Class
            <span class="underline-img">Doctors <img src="./assets/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Integer in magna in est ultrices bibendum eget enim et dui imperdiet faucibus. Fusce eu tristique felis.
          </p>

          <div class="home-btn-group">
            <form action="HOSPITAL MANAGEMENT SYSTEM\patient-login.php">
            <button class="btn btn-primary">
              <p class="btn-text">Book Appointment</p></a>
              <span class="square"></span>
            </button>
          </form>
          
            <button class="btn btn-secondary">
              <p class="btn-text">Contact Us</p>
              <span class="square"></span>
            </button>
          </div>

        </div>

        <div class="home-right">

          <div class="img-box">

            <img src="./assets/img/doc-4.png" alt="colorful background shape" class="background-shape">
            <img src="./assets/img/doc-4.png" alt="banner image" class="banner-img">

            <img src="./assets/img/sub-logo-2.jpg" alt="" class="icon-1 smooth-zigzag-anim-1" width="250" height="50px" style="border-radius: 10px;box-shadow: 3px 3px 3px black;"">
            <img src="./assets/img/sub-logo-2.jpg" alt="" class="icon-2 smooth-zigzag-anim-2" width="240" height="50px" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
            <!-- <img src="./assets/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195"> -->
            <!-- <img src="./assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim"> -->

          </div>

        </div>

      </section>





      <!--
        - Top Reported Illness
      -->

      <section class="category">

        <p class="section-subtitle">Category</p>

        <h2 class="section-title">Check Out The Top Reported Illness</h2>

        <ul class="course-item-group">

          <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/img/service-icon-1.png" alt="category icon" class="category-icon default">

              <img src="./assets/img/service-icon-1.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Respiratory Disease</a>
              </h3>

              <p class="category-subtitle">Flee from carbonmonoxide</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/img/service-icon-3.png" alt="category icon" class="category-icon default">

              <img src="./assets/img/service-icon-3.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Cardiac Diseases</a>
              </h3>

              <p class="category-subtitle">Exercise Your heart</p>
            </div>

          </li>


          <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/img/service-icon-2.png" alt="category icon" class="category-icon default">

              <img src="./assets/img/service-icon-2.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Corona Virus</a>
              </h3>

              <p class="category-subtitle">Always keep your nose mask on</p>
            </div>

          </li>

<!-- 
          <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/images/course-category-icon-4.png" alt="category icon" class="category-icon default">

              <img src="./assets/images/course-category-icon-4-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Learn Lifestyle</a>
              </h3>

              <p class="category-subtitle">New Skills, New You</p>
            </div>

          </li> -->


          <!-- <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/images/course-category-icon-5.png" alt="category icon" class="category-icon default">

              <img src="./assets/images/course-category-icon-5-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Learn Marketing</a>
              </h3>

              <p class="category-subtitle">Improve your business</p>
            </div>

          </li> -->


          <!-- <li class="course-category-item">

            <div class="wrapper">
              <img src="./assets/images/course-category-icon-6.png" alt="category icon" class="category-icon default">

              <img src="./assets/images/course-category-icon-6-w.png" alt="category icon white"
                class="category-icon hover">
            </div>

            <div class="course-category-content">
              <h3 class="category-title">
                <a href="#">Learn Finance</a>
              </h3>

              <p class="category-subtitle">Fun & Challenging</p>
            </div>

          </li> -->

        </ul>

      </section>





      <!--
        - #ABOUT SECTION
      -->

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            <!-- <img src="./assets/img/doc-4.png" alt="about bg" class="about-bg"> -->

            <img src="./assets/img/doc-1.png" alt="about person" class="about-img">

            <img src="./assets/img/sub-log.jpg" alt="" class="icon-2 smooth-zigzag-anim-2" width="240" height="50px" style="border-radius: 10px; box-shadow: 3px 3px 3px black;">
            <img src="./assets/img/sub-logo-2.jpg" alt="" class="icon-2 smooth-zigzag-anim-2" width="240" height="50px" style="border-radius: 10px; box-shadow: 3px 3px 3px black;"" alt="">
          </div>

        </div>

        <div class="about-right">

          <p class="section-subtitle">About Us</p>

          <h2 class="section-title">We Provide The Best Online Hospital Services</h2>

          <p class="section-text">
            Morbi porttitor ligula id varius consectetur. Integer ipsum justo, congue sit amet massa vel, porttitor
            semper magna.
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
          </p>

          <ul class="about-ul">

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Suspendisse nunc massa, pellentesque eu nibh eget.</p>
            </li>

          </ul>

          <button class="btn btn-primary">
            <p class="btn-text">Explore More</p>
            <span class="square"></span>
          </button>

        </div>

      </section>





      <!--
        - #COURSE SECTION
      -->

      <section class="course" id="course">

        <p class="section-subtitle">Our Online Services</p>

        <h2 class="section-title">Find Out more about what we do</h2>

        <div class="course-grid">

          <div class="course-card">

            <div class="course-banner">
              <img src="./assets/img/package-service-img.jpg" alt="Service banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Consultation</a>
                <a href="#" class="badge-tag blue">Physiotherapy</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Ensuring good health is our top-most priority.</a>
              </h3>

              <div class="wrapper border-bottom">

                <!-- <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div> -->

                <!-- <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>5.0 (2k)</p>
                </div> -->

              </div>

        

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="./assets/img/package-service-img.jpg" alt="Service banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Consultation</a>
                <a href="#" class="badge-tag blue">Physiotherapy</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Ensuring good health is our top-most priority.</a>
              </h3>

              <div class="wrapper border-bottom">

                <!-- <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div> -->

                <!-- <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.7 (5k)</p>
                </div> -->

              </div>

              <!-- <div class="wrapper">
                <div class="course-price">$80.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="./assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>545k</p>
                </div>
              </div> -->

            </div>

          </div>


          <div class="course-card">

            <div class="course-banner">
              <img src="./assets/img/package-service-img.jpg" alt="Service banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Consultation</a>
                <a href="#" class="badge-tag blue">Physiotherapy</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Ensuring good health is our top-most priority.</a>
              </h3>

              <!-- <div class="wrapper border-bottom">

                <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div> -->

                <!-- <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.1 (3k)</p>
                </div>

              </div> -->

              <!-- <div class="wrapper">
                <div class="course-price">$29.90</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="./assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>317k</p>
                </div>
              </div> -->

            </div>

          </div>


          <!-- <div class="course-card">

            <div class="course-banner">
              <img src="./assets/images/course-4.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Business</a>
                <a href="#" class="badge-tag blue">Marketing</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Improving accessibility of Your markdown.</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.8 (3.9k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$49.90</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="./assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>891k</p>
                </div>
              </div>

            </div>

          </div> -->



          <!-- <div class="course-card">

            <div class="course-banner">
              <img src="./assets/images/course-5.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Business</a>
                <a href="#" class="badge-tag blue">Marketing</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Master query in a short period of time.</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>3.8 (1k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$89.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="./assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>204k</p>
                </div>
              </div>

            </div>

          </div> -->


          <!-- <div class="course-card">

            <div class="course-banner">
              <img src="./assets/images/course-6.jpg" alt="course banner">

              <div class="course-tag-box">
                <a href="#" class="badge-tag orange">Business</a>
                <a href="#" class="badge-tag blue">Marketing</a>
              </div>
            </div>

            <div class="course-content">

              <h3 class="card-title">
                <a href="#">Business Intelligence analyst Course 2022.</a>
              </h3>

              <div class="wrapper border-bottom">

                <div class="author">
                  <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                  <a href="#" class="author-name">Lillian Wals</a>
                </div>

                <div class="rating">
                  <ion-icon name="star"></ion-icon>
                  <p>4.9 (23k)</p>
                </div>

              </div>

              <div class="wrapper">
                <div class="course-price">$199.00</div>

                <div class="enrolled">
                  <div class="icon-user">
                    <img src="./assets/images/student-icon.png" alt="user icon">
                  </div>

                  <p>1.3M</p>
                </div>
              </div>

            </div>

          </div> -->

        </div>

        <button class="btn btn-primary">
          <p class="btn-text">View All Services</p>
          <span class="square"></span>
        </button>

      </section>





      <!--
        - #EVENT SECTION
      -->

      <section class="event">

        <div class="event-left">

          <div class="event-banner">
            <img src="./assets/img/doc-group-2.png" alt="event banner" class="banner-img">
          </div>

          <button class="play smooth-zigzag-anim-1">
            <div class="play-icon pulse-anim">
              <ion-icon name="play-circle"></ion-icon>
            </div>

            <p>Watch Us !</p>
          </button>

        </div>

        <div class="event-right">

          <p class="section-subtitle">Our Events</p>

          <h2 class="section-title">Join Our Upcoming Events</h2>

          <div class="event-card-group">

            <div class="event-card">

              <div class="content-left">
                <p class="day">28</p>
                <p class="month">Feb, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Cape Coast</p>
                </div>

                <a href="#" class="event-name">Breast Cancer Awareness Program</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">15</p>
                <p class="month">Mar, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Kumasi</p>
                </div>

                <a href="#" class="event-name">Personal Hygien Program</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">20</p>
                <p class="month">May, 2022</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Accra</p>
                </div>

                <a href="#" class="event-name">Kidney Awarenss campaign</a>
              </div>

            </div>

          </div>

        </div>

      </section>





      <!--
        - #FEATURES SECTION
      -->

      <section class="features">

        <div class="features-left">

          <p class="section-subtitle">Core Features</p>

          <h2 class="section-title">See What Our Mission Are</h2>

          <ul>

            <li class="features-item">
              <div class="item-icon-box blue">
                <img src="./assets/img/service-icon-4.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Good Health Condition</h3>

                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                  dictum.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box pink">
                <img src="./assets/images/feature-icon-2.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Best Online Services</h3>

                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                  dictum.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box purple">
                <img src="./assets/images/feature-icon-3.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">24x7 Service</h3>

                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                  dictum.</p>

              </div>
            </li>

          </ul>

        </div>

        <div class="features-right">
          <img src="./assets/img/post-2.jpg" alt="core features image">
        </div>

      </section>





      <!--
        - #Doctors SECTION
      -->

      <section class="instructor">

        <p class="section-subtitle">Professionals</p>

        <h2 class="section-title">Our Expert Doctors</h2>

        <div class="instructor-grid">

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/img/doc-1.png" alt="Doctor king">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">King Nkansah</h4>

            <p class="instructor-title">Cardiologist</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/img/doc-2.png" alt="Doctor Georgine Tatra">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Georgina Tatra</h4>

            <p class="instructor-title">Neurologist</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/img/doc-1.png" alt="Doctor Emmanuel Afriyie">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Emmanuel Afriyie</h4>

            <p class="instructor-title">Pediatrician</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/img/doc-2.png" alt="#">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Justin Man</h4>

            <p class="instructor-title">General</p>

          </div>

        </div>

      </section>





      <!--
        - #TESTIMONIALS
      -->

      <section class="testimonials">

        <div class="testimonials-left">

          <p class="section-subtitle">Testimonial</p>

          <h2 class="section-title">What Our Client Says About Us</h2>

          <p class="section-text">
            Proin et lacus eu odio tempor porttitor id vel augue. Vivamus volutpat vehicula sem, et imperdiet enim
            tempor id.
            Phasellus lobortis efficitur nisl eget vehicula. Donec viverra blandit nunc, nec tempor ligula ullamcorper
            venenatis.
          </p>

        </div>

        <div class="testimonials-right">

          <div class="testimonials-card">
            <img src="./assets/images/quote.png" alt="quote icon" class="quote-img">

            <p class="testimonials-text">
              "Proin feugiat tortor non neque eleifend, at fermentum est elementum. Ut mollis leo odio vulputate rutrum.
              Nunc sagittis
              sit amet ligula ut eleifend. Mauris consequat mauris sit amet turpis commodo fermentum. Quisque consequat
              tortor ut nisl
              finibus".
            </p>

            <div class="testimonials-client">

              <div class="client-img-box">
                <img src="./assets/images/client.jpg" alt="Patient Caroline ">
              </div>

              <div class="client-detail">
                <h4 class="client-name">Caroline Rose</h4>

                <p class="client-title">Patient</p>
              </div>

            </div>
          </div>

        </div>

      </section>





      <!--
        - #BLOG
      -->
<!-- 
      <section class="blog" id="blog">

        <p class="section-subtitle">Our Blog</p>

        <h2 class="section-title">Latest Blog & News</h2>

        <div class="blog-grid">

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Proin feugiat tortor non neque eleifend.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">07 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">3 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-2.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Proin feugiat tortor non neque eleifend.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">04 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">10 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-3.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Proin feugiat tortor non neque eleifend.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">01 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">5 Comments</a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section> -->





      <!--
        - #CONTACT
      -->

      <section class="contact">

        <div class="contact-card" id="contact">
          <img src="./assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

          <h2>Start Your Best Online Treatment With Us</h2>

          <button class="btn btn-primary">
            <p class="btn-text">Contact Us</p>
            <span class="square"></span>
          </button>
        </div>

      </section>

    </main>





    <!--
      - #FOOTER
    -->

    <footer>

      <div class="footer-grid">

        <div class="grid-item">

          <div class="footer-logo">
            <img src="./assets/img/logo-header.png" alt="hospital logo" height="60px" width="70px">
          </div>

          <p class="footer-text">
            Duis a tempor magna. Maecenas ligula felis, imperdiet quis arcu eget, blandit ultricies risus. Vivamus
            fringilla urna
            vel risus congue accumsan.
          </p>

          <div class="social-link">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </div>

        </div>

        <ul class="grid-item">

          <h4 class="item-heading">Our Link</h4>

          <li class="list-item">
            <a href="#home">Home</a>
          </li>

          <li class="list-item">
            <a href="#about">About Us</a>
          </li>

          <li class="list-item">
            <a href="#course">Courses</a>
          </li>

          <li class="list-item">
            <a href="#doctors">Doctors</a>
          </li>

          <li class="list-item">
            <a href="#contact">Contact Us</a>
          </li>

        </ul>

        <ul class="grid-item">

          <h4 class="item-heading">Other Link</h4>

          <li class="list-item">
            <a href="#">Professionals</a>
          </li>

          <li class="list-item">
            <a href="#">FAQ</a>
          </li>

          <li class="list-item">
            <a href="#">Event</a>
          </li>

          <li class="list-item">
            <a href="#">Privacy Policy</a>
          </li>

          <li class="list-item">
            <a href="#">Term & Condition</a>
          </li>

        </ul>

        <div class="grid-item">

          <h4 class="item-heading">Subscribe Now</h4>

          <div class="wrapper">
            <input type="text" name="subscribe" placeholder="Email Address">
            
            <button class="send-btn">
              <ion-icon name="paper-plane"></ion-icon>
            </button>
          </div>

        </div>

      </div>

      <p class="copyright">
        Copyright © 2023 <a href="#">Software Engineering Project Group 15</a>. All rights reserved.
      </p>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BAROQUE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/sharp-solid.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    .marquee-text {
      margin-left: 99%;
    }

    #icon-right:hover {
      color: rgb(27, 27, 27);
      transform: translate(0%, -10%);
    }

    #icon-right {
      font-size: 1.53rem;
      transition: 0.4s;
      cursor: pointer;
      color: rgb(90, 90, 90);
      float: right;
      padding-left: 10px;
      margin-top: 11px;
    }


    #h2-11 {
      font-size: 13px;
      display: inline-block;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-left: 5px;
    }

    /* .ps-fix i{
    font-size: 20px;
    color: white;
}
.ps-fix h5{
    font-size: 1.7rem;
    font-weight: 600;
    font-family:'Lato',sans-serif;
    color: #fff;
    margin: 0;
    margin-left: 13px;
} */

    .navbar {
      width: 100%;
      height: 5rem;
      line-height: 20px;
      box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.466);
    }

    #menu-select {
      border: none;
      width: 3.5rem;
    }

    .button-shopnow {
      margin-top: 15%;
      padding: 10px 30px;
    }

    .img-wrapper {
      position: relative;
    }

    .img-responsive {
      width: 100%;
      height: auto;
    }

    .img-overlay {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
    }

    .img-overlay:before {
      content: ' ';
      display: block;
      /* adjust 'height' to position overlay content vertically */
      height: 50%;
    }

    .nav-link {
      background-color: rgba(0, 0, 0, 0.032);
      margin-top: 2px;
      width: 300px;
      height: 2rem;
      line-height: 1rem;
      margin-left: -15px;
    }

    .nav-link:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }

    #navbar {
      position: sticky;
      top: 0;
      z-index: 999;
    }

    #navbar-btn {
      border: none;
    }

    #navbar-btn:hover {
      border: none;
    }

    .navbar-heading {
      width: 10%;
    }

    .navbar {
      width: 100%;
    }

    .img-container {
      width: 86%;
      margin-left: 7%;
    }

    #button {
      padding: 10px 20px;
      margin-top: -5px;
      border-radius: 0px;
      margin-left: -5px;
    }

    .link a {
      text-decoration: none;
      color: rgba(0, 0, 0, 0.703);
      margin: 15px;
      line-height: 40px;
    }

    .link a:hover {
      text-decoration: underline;
      color: black;
    }

    .text {
      font-weight: bold;
      color: rgba(0, 0, 0, 0.539);
      font-size: 18px;
    }

    .card-text {
      text-decoration: underline;
      font-size: large;
      color: black;
    }

    .card-text:hover {
      font-weight: bold;
      font-size: 17px;
    }

    .card-body a {
      text-decoration: none;
    }

    .card-img-top {
      height: 30rem;
    }

    .card {
      border: none;
    }

    .last-pick-box {
      width: 89%;
      margin-left: 5%;
      background-color: rgba(244, 105, 128, 0.644);
    }

    .hide-br {
      display: none;
    }

    .input-type {
      padding: 10px 10%;
    }

    .hide-br-input {
      display: none;
    }


    @media (max-width:1200px) {
      .slider-img {
        height: 500px;
        max-width: 100%;
      }
    }

    @media (max-width:1000px) {
      .hide-br-input {
        display: block;
      }
    }


    @media (max-width:800px) {
      .button-shopnow {
        margin-top: 24%;
        padding: 10px 30px;
      }

    }

    @media (max-width:768px) {
      .img-container {
        width: 98%;
        margin-left: 1%;
      }

      .navbar-heading {
        width: 30%;
      }

      .manu-hide {
        display: none;
      }

      #icon-right {
        font-size: 1rem;
        transition: 0.4s;
        cursor: pointer;
        color: rgb(90, 90, 90);
        float: right;
        padding-left: 5px;
      }

      .link a {
        line-break: auto;
      }

      .input-type {
        padding: 10px 7%;
      }


    }


    @media (max-width:600px) {
      .hide-br {
        display: block;
      }

    }

    @media (max-width:440px) {
      #icon-right {
        font-size: .7rem;
        transition: 0.4s;
        cursor: pointer;
        color: rgb(90, 90, 90);
        float: right;
        padding-left: 5px;
      }

      .navbar {
        width: 100%;
        height: 3rem;
        line-height: .5rem;
        box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.466);
      }

      .navbar-heading {
        width: 25%;
      }

      .heading-img {
        width: 5rem;
      }

    }
  </style>

</head>

<body>

  <div class="bg-dark text-light font-family-arial">
    <marquee behavior="" scrollamount="11" direction="left" onmouseover="stop()" onmouseout="start()">
      <text>TO CANCEL YOUR ORDER (CLICK HERE)</text>
      <text class="marquee-text">FREE SHIPPING IN PAKISTAN</text>
      <text class="marquee-text">FOR ANY QUERY CONTACT US AT 0325-7001111</text>
      <text class="marquee-text">EXCHANGE FORM (CLICK HERE)</text>
    </marquee>
  </div>
  <section id="navbar">
    <nav class="navbar bg-light navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" id="navbar-btn">
          <span class="navbar-toggler-icon"></span><text class="manu-hide">Menu</text>
        </button>
        <div class="offcanvas offcanvas-start" style="width: 300px;" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body list">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  COLECTION +
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">SWISS</a></li>
                  <li><a class="dropdown-item" href="#">CHANTELLE</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">FUCHSIA LAWN</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SHAWALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">UNSTITCHED</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SPECIAL PRICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">READY TO WEAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">DUPATTAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BOTTOMS</a>
              </li><br>
              <select name="" id="menu-select">
                <option value="+92">PKR</option>
                <option value="">USD</option>
                <option value="">GBP</option>
              </select>

            </ul>

          </div>
        </div>
        <a href="/" class="navbar-heading">
          <img class="heading-img"
            src="https://cdn.shopify.com/s/files/1/2277/5269/files/image_3_1_150x@2x.png?v=1641188192" alt="">
        </a>
        <div class="navbar-font">
          <i class="fa-light fa-bag-shopping" id="icon-right">
            <h2 id="h2-11">(0)</h2>
          </i>
          <i class="fa-light fa-user" id="icon-right"></i>
          <i class="fa-light fa-heart" id="icon-right"></i>
          <i class="fa-light fa-magnifying-glass" id="icon-right"></i>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <div class="img-wrapper">
      <img class="img-responsive slider-img"
        src="https://cdn.shopify.com/s/files/1/2277/5269/files/main_slider_desktop_e7ca22a2-9fef-4375-a9e5-3b9ba7db78e4_1500x.jpg?v=1666852862">
      <a href="/2ndPage" class="img-overlay">
        <button class="btn btn-md btn-dark button-shopnow">SHOP NOW</button>
      </a>

    </div>
  </section>
  <br><br>

  <section>
    <div class="row justify-content-center img-container">
      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/files/677.jpg?v=1666853257" class="card-img-top"
          alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">UNSTITCHED</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>

      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/files/g_88d33f5c-80c4-4c8d-9ae3-53c3aeaf34dd.jpg?v=1666854733"
          class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">DUPATTAS</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>

      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/files/11_20332457-55a4-41e8-8164-b26fc5d8d277.jpg?v=1666853475"
          class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">READY TO WEAR</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>

      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/files/fg_508cff4d-40ab-4743-b28b-cfebf13cc9ab.jpg?v=1654861435"
          class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">CHANTELLE FORMALS</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>

      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/files/banner_bc20ba87-12c8-4d94-9e8c-007f885dcc3d.jpg?v=1639996999"
          class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">BOTTOMS</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>
      <div class="card col-md-4 col-lg-4 col-xl-4 col-xxl-4 col-12">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/files/FF_6ad30586-40fc-4210-8a9d-5137f2ad3554.jpg?v=1666853812"
          class="card-img-top" alt="...">
        <div class="card-body">
          <a href="/2ndPage">
            <p class="text-center text">VELVET SHAWL</p>
            <p class="card-text text-center">
              Shop Now</p>
          </a>
        </div>
      </div>
    </div>

  </section>
  <br>
  <section id="about">
    <div class="container-fluid bg-light text-dark">
      <div class="row bg-light justify-content-center last-pick-box">
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-12">
          <img
            src="https://cdn.shopify.com/s/files/1/2277/5269/files/Style_Banner_-_1_3041c6bd-0d7e-4980-bd3b-3153d63c2e7e.jpg?v=1665143984"
            alt="" class="img-fluid" style="width: 33rem;">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-12 text-center"
          style=" margin-left: -2%; background-color: rgba(244, 105, 128, 0.644);">
          <br><br>
          <h5>
            GET 5% OFF!

          </h5>
          SIGN UP NOW TO OUR NEWSLETTER<br><br>
          <input type="email" class="input-type">
          <br class="hide-br-input"><br class="hide-br-input">
          <button class="btn btn-dark" id="button" type="submit">SIGN ME UP</button><br><br>
        </div>
      </div>
    </div>

  </section><br><br>

  <section>
    <footer class="text-center text-white" style="background-color: rgba(16, 4, 4, 0.089);">
      <!-- Grid container -->
      <div class="container p-3 pb-0 text-dark col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-12">
        <section class="mb-0 link">
          <a href="">WHO WE ARE </a>|<br class="hide-br">
          <a href="">CONTACT US </a>|<br class="hide-br">
          <a href="">OUR RESPONSIBILITY </a>|<br class="hide-br">
          <a href="">EXCHANGE & REFUND </a>|<br class="hide-br">
          <a href="">EXCHANGE FORM</a>|<br class="hide-br">
          <a href="">SHIPPING </a>|<br class="hide-br">
          <a href="">LOOK BOOK |</a><br class="hide-br">
          <a href="">TRACK YOUR ORDER </a>|<br class="hide-br">
          <a href="">ORDER CANCELLATION FORM </a>|<br class="hide-br">
          <a href="">CUSTOMISED STITCHING</a>|<br class="hide-br">
          <a href="">CAREERS </a>|<br class="hide-br">
          <a href="">LEGAL</a> |<br class="hide-br">
          <a href="">FAQ's</a><br><br>
        </section>

        <!-- Section: Social media -->
        <section class="mb-1">
          <!-- Facebook -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-facebook-f"></i>
          </a>

          <!-- Twitter -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-twitter"></i>
          </a>

          <!-- Google -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-google"></i>
          </a>

          <!-- Instagram -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <!-- Linkedin -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-linkedin"></i>
          </a>

          <!-- Github -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-github"></i>
          </a>

        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
        ALL RIGHTS RESERVED TO BAROQUE 2022
        <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
      </div>
      <!-- Copyright -->
    </footer>
  </section>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>
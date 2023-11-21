<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UN_STITCHED_BAROQUE</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">



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

    #navbar {
      position: sticky;
      top: 0;
      z-index: 999;
      box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.466);
    }

    .navbar-heading {
      width: 10%;
      height: 90px;
      line-height: 90px;
    }

    .navbar {
      width: 100%;
      height: 90px;
      line-height: 20px;
    }

    #menu-select {
      border: none;
      width: 3.5rem;
    }

    .navlink {
      background-color: rgba(0, 0, 0, 0.032);
      margin-top: 2px;
      width: 300px;
      height: 2rem;
      line-height: 1rem;
    }

    .navlink:hover {
      background-color: rgba(0, 0, 0, 0.1);
    }

    #navbar-btn {
      border: none;
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

    .filter {
      display: none;
    }

    .filter i {
      display: inline-block;
      font-size: 17px;

    }

    .filter p {
      display: inline-block;
      font-size: 16px;
      font-weight: 300;
      letter-spacing: 0.06em;
      padding-left: 8px;
      font-family: 'Lato', sans-serif;
    }

    .select {
      width: 100%;
      height: auto;
      margin-top: 50px;
    }

    .select select {
      width: 90%;
      font-family: 'Lato', sans-serif;
      font-size: 13px;
      background-color: #fff;
      border: none;
      padding: 11px 10px;
      border-top: 1px solid black;
    }

    #select-type2 {
      border-bottom: 1px solid black;
    }

    .nav-no2 {
      width: 86%;
      height: 38px;
      border-bottom: 1px solid rgb(214, 214, 214);
      margin: auto;
      margin-top: 17px;
      display: flex;
    }

    .nav-no2 i {
      font-size: 15px;
      margin-top: 1px;
      color: #d2d2d2;
    }

    #p1 {
      font-size: 13px;
      font-family: 'Lato', sans-serif;
      margin: 0;
      margin-top: 0px;
      text-decoration: none;
      color: black;
    }

    #p2 {
      font-size: 13px;
      font-family: 'Lato', sans-serif;
      margin: 0;
      margin-top: 1px;
      color: #d2d2d2;
    }

    .pick-box {
      width: 86%;
      margin-left: 7%;
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



    .image2 {
      display: none;
    }

    .first:hover .image1 {
      display: none;
      margin: 0px;
    }

    .first:hover .image2 {
      display: block;
    }

    .card-body a {
      text-decoration: none;
      color: black;
    }

    .line-through {
      text-decoration: line-through;
    }

    .discount-price {
      color: red;
      margin-left: 5px;
    }

    .link-unstitched {
      font-weight: 100;
    }

    .hide-br {
      display: none;
    }

    .first:hover {
      /* box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.466); */
      animation-name: anime;
      position: relative;
      animation-duration: .7s;
      /* transform: translate(250px, 250px); */
      /* transform: rotate(10deg); */
      /* transform: skew(5deg); */
      /* transform: scale(1.1); */
    }

    @keyframes anime {
      from {
        bottom: 0px;
      }

      to {
        bottom: 4px;
      }
    }



    @media (max-width:768px) {
      .select {
        display: none;
      }

      .filter {
        display: block;
      }

      .nav-no2 {
        display: none;
      }

      .navbar-heading {
        width: 30%;
      }

      #icon-right {
        font-size: 1rem;
        transition: 0.4s;
        cursor: pointer;
        color: rgb(90, 90, 90);
        float: right;
        padding-left: 5px;
      }

      .manu-hide {
        display: none;
      }

      .pick-box {
        width: 98%;
        margin-left: 1%;
      }
    }

    @media (max-width:600px) {
      .hide-br {
        display: block;
      }
    }
  </style>

</head>

<body>
  <div class="bg-dark text-light font-family-arial text-capitalize">
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
                <a class="nav-link navlink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
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
                <a class="nav-link navlink" href="#">SHAWALS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">UNSTITCHED</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">SPECIAL PRICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">READY TO WEAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">DUPATTAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">BOTTOMS</a>
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
          <img src="https://cdn.shopify.com/s/files/1/2277/5269/files/image_3_1_150x@2x.png?v=1641188192" alt="">
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
  <nav>

    <!-- nav bar no 2 -->

    <div class="nav-no2">
      <a href="/" id="p1">Home</a>&ensp;<i class="fa-light fa-angle-right"></i>&ensp;<p id="p2">UN-STITCHED</p>
    </div>


  </nav>
  </div><br><br>



  <section>
    <div class="row justify-content-center pick-box">
      <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 form-box">

        <div class="filter">
          <i class="fa-light fa-sliders"></i>
          <p>Filter</p>
        </div>

        <div class="select">
          <select id="select-type1">
            <option>PRODUCT TYPE</option>
          </select>
          <select>
            <option>PRICE</option>
          </select>
          <select>
            <option>SIZE</option>
          </select>
          <select>
            <option>FABRIC TYPE</option>
          </select>
          <select id="select-type2">
            <option>PIECES</option>
          </select>
        </div>

      </div>
      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/41_ca0cb511-34f4-4b3c-8df8-0b60c9c50535.jpg?v=1666424481"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/42_de046098-1de7-48fa-a39c-7738c0da93ab.jpg?v=1666424481"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 9,990</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/20_24.jpg?v=1665558143"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/16_28_360x.jpg?v=1665558143" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 9,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/65_10.jpg?v=1666437602"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/66_11_360x.jpg?v=1666437602" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 10,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>



  <section>
    <div class="row justify-content-end pick-box">

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/43_a39e15ec-5aaa-4311-bb69-d765dca40960.jpg?v=1666680484"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/46_a517eca5-f764-4309-a704-5381a1190fc7.jpg?v=1666680484"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 7,990</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/22_45302670-798a-429d-aff1-7fdcbab3eccc.jpg?v=1666852302"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/24_a53efea2-1dcd-480e-96ba-5a9a12bc682d.jpg?v=1666852302"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b class="line-through">PKR 11,990</b><b class="discount-price"> PKR 10,990</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/51_4d64ad60-afbe-4dc8-8b41-a9e2913a5fd9.jpg?v=1666853145"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/49_89cb90df-0914-4587-8fe3-cffe394a9662.jpg?v=1666681334"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 11,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="row justify-content-end pick-box">

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/15_a2181628-2b91-4a2d-a3ec-8114377ddf2b.jpg?v=1666679192"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/13_1_6b623859-e2c0-40d6-a9bf-d69340c38b34.jpg?v=1666852658"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 6,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/40_193e06c3-f2a6-4168-b254-b352cdb1f1e7.jpg?v=1666437784"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/36_57a8b636-07c2-4102-9667-a875c66be1ef.jpg?v=1666437784"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 4,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/39_fdb49017-74e6-4f14-921c-da2d864f2ff6.jpg?v=1666681503"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/40_f6edd6eb-8aef-4a79-99fa-ae598ed06b3f.jpg?v=1666681505"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 14,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>



  <section>
    <div class="row justify-content-end pick-box">

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/31_22.jpg?v=1665488561"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/32_20.jpg?v=1665488561" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 9,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/77_9.jpg?v=1665558112"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/76_9.jpg?v=1665558112" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b class="line-through">PKR 12,990</b><b class="discount-price"> PKR 10,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>



      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/19_23.jpg?v=1663325357"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/20_22.jpg?v=1663325358" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 8,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>




  <section>
    <div class="row justify-content-end pick-box">

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/103_3.jpg?v=1666437614"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/104_3.jpg?v=1666437614" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b class="line-through">PKR 9,490</b> <b class="discount-proce"> PKR 8,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/01_c7a82ffa-c38f-41da-8a1f-96a63635fbac.jpg?v=1661170515"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/02_ff7f7a24-7504-4f51-90b6-4faa202414db.jpg?v=1661170515"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 6,990</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>



      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/70_5384a128-bcfc-4b82-ab7d-82c8bb8af35d.jpg?v=1666768250"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/71_d1fe0026-a806-4a0c-b811-b3cb74f36077.jpg?v=1666768250"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 10,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>



  <section>
    <div class="row justify-content-end pick-box">

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/02_0440a37d-cd00-45e8-a7ae-e54f96f35371.jpg?v=1645257719"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/04_c16c6332-94e2-45d0-874d-3d204dd6c551.jpg?v=1645257719"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b class="line-through">PKR 8,490</b><b class="discount-price"> PKR 7,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/74_1b0dcfba-2c9b-4b92-8f6d-8aacd89e6983.jpg?v=1664007618"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/72_96c66c59-5c8b-4513-a991-6fcae1e4080c.jpg?v=1664007618"
          alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 12,990</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>


      <div class="card col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-12 first" style="border: none;">
        <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/46_14.jpg?v=1657961348"
          class="card-img-top image1" alt="...">

        <!-- hover image -->
        <img class="card-img-top image2"
          src="https://cdn.shopify.com/s/files/1/2277/5269/products/47_15_360x.jpg?v=1657961348" alt="">
        <div class="card-body">
          <a href="/3rdPage">
            <p class="text-center text">EMBROIDERED NET UF 234</p>
            <p class="text-center"><b>PKR 4,490</b></p>
            <p class="card-text text-center">
              UNSTITCHED / STITCHED</p>
          </a>
        </div>
      </div>

    </div>
  </section>


  <section>
    <footer class="text-center text-white" style="background-color: rgba(16, 4, 4, 0.089);">
      <!-- Grid container -->
      <div class="container p-3 pb-0 text-dark col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-12">
        <section class="mb-0 link">
          <a href="">WHO WE ARE</a> |<br class="hide-br">
          <a href="">CONTACT US</a> |<br class="hide-br">
          <a href="">OUR RESPONSIBILITY</a> |<br class="hide-br">
          <a href="">EXCHANGE & REFUND</a> |<br class="hide-br">
          <a href="">EXCHANGE FORM</a> |<br class="hide-br">
          <a href="">SHIPPING</a> |<br class="hide-br">
          <a href="">LOOK BOOK</a> |<br class="hide-br">
          <a href="">TRACK YOUR ORDER</a> |<br class="hide-br">
          <a href="">ORDER CANCELLATION FORM</a> |<br class="hide-br">
          <a href="">CUSTOMISED STITCHING</a> |<br class="hide-br">
          <a href="">CAREERS</a> |<br class="hide-br">
          <a href="">LEGAL</a> |<br class="hide-br">
          <a href="">FAQ's</a><br><br>
        </section>

        <!-- Section: Social media -->
        <section class="mb-1">
          <!-- Facebook -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
              class="fa-brands fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
              class="fa-brands fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
              class="fa-brands fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
              class="fa-brands fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
              class="fa-brands fa-linkedin"></i></a>

          <!-- Github -->
          <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa-brands fa-github"></i>
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
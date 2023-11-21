<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOUR SHOPING CART_BAROQUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">

    <style>
      .marquee-text{
        margin-left: 99%;
      }

        #button{
            padding: 20px 40px;
            color: white;
            background-color: rgba(26, 91, 203, 0.858);
            border: none;
            margin-left: 348px;
            border-radius: 5px;
        }

        #navbar{
        border: 1px solid gray;
      }
      #menu-select{
        border: none;
        width: 3.5rem;
      }
         #navbar{
        position: sticky;
        top: 0;
        z-index: 999;
        box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.466);
      }
      .navbar-heading{
        width: 10%;
        height: 90px;
        line-height: 80px;
      }
      .navbar{
        width: 100%;
        height: 90px;
        line-height: 20px;
      }
      #navbar-btn{
        border: none;
      }
      .nav-link{
        background-color: rgba(0, 0, 0, 0.032);
        margin-top: 2px;
        width: 300px;
        height: 2rem;
        line-height: 1rem;
      }
      .nav-link:hover{
        background-color: rgba(0, 0, 0, 0.1);
      }
      #icon-right:hover{
        color: rgb(27, 27, 27); 
        transform: translate(0%,-10%);
      }
      #icon-right{
        font-size: 1.53rem;
        transition: 0.4s;
        cursor: pointer;
        color: rgb(90, 90, 90);
        float: right;
        padding-left: 10px;
        margin-top: 11px;
      }


      #h2-11{
        font-size: 13px;
        display: inline-block;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-left: 5px;
      }

      .image{
        margin-right: 40px;
      }
      .text-shiping{
        color: black;
        font-weight: bold;
      }
      .text-shiping:hover{
        color: black;
      }
      .link a{
        text-decoration: none;
        color: rgba(0, 0, 0, 0.703);
        margin: 3px;
        line-height: 40px;
      }
      .link a:hover{
        text-decoration: underline;
        color: black;
      }
      .last-button{
        padding: 8px 0rem;
      }
      .last-button a{
        text-decoration: none;
        color: white;
        background-color: black;
        padding: 10px 8rem;
      }
      .hide-br{
          display: none;
        }

      @media (max-width:600px){
        #icon-right{
            font-size: 1rem;
            transition: 0.4s;
            cursor: pointer;
            color: rgb(90, 90, 90);
            float: right;
            padding-left: 5px;
        }
        .navbar-heading{
          width: 30%;
        }
        .manu-hide{
        display: none;
       }
        .hide-br{
          display: block;
        }
        .text-small{
          font-size: .8rem;
        }
      
      }
    </style>

</head>
  <body>

    <div class="bg-dark text-light font-family-arial text-capitalize">
      <marquee behavior="" scrollamount="11" direction="left" onmouseover="stop()" onmouseout="start()">
        <text>TO CANCEL YOUR ORDER   (CLICK HERE)</text>
        <text class="marquee-text">FREE SHIPPING IN PAKISTAN</text>
        <text class="marquee-text">FOR ANY QUERY CONTACT US AT    0325-7001111</text>
        <text class="marquee-text">EXCHANGE FORM    (CLICK HERE)</text>
      </marquee>
    </div>
    <section id="navbar">
      <nav class="navbar bg-light navbar">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" id="navbar-btn">
            <span class="navbar-toggler-icon"></span><text class="manu-hide">Menu</text>
          </button>
          <div class="offcanvas offcanvas-start" style="width: 300px;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body list">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    COLECTION  +
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
            <img class="heading-img" src="https://cdn.shopify.com/s/files/1/2277/5269/files/image_3_1_150x@2x.png?v=1641188192" alt="">
          </a>

          <div class="navbar-font">
            <i class="fa-light fa-bag-shopping" id="icon-right"><h2 id="h2-11">(0)</h2></i>
            <i class="fa-light fa-user" id="icon-right"></i>
            <i class="fa-light fa-heart" id="icon-right"></i>
            <i class="fa-light fa-magnifying-glass" id="icon-right"></i>
            </div>
          
        </div>
      </nav>
     </section><br>

     <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-6">
            <h1>YOUR CART</h1><br>
        </div>
        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-5">
            <p class="text-end"><a href="/" class="text-shiping"> Continue shopping</a></p>
        </div>


        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-5">
            PRODUCT
        </div>


        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-4">
            <p class="text-end">QUANTITY</p>
        </div>

        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-2">
            <p class="text-end">TOTAL</p>
        </div>

        
        <hr style="width: 90%;"><br><br>

        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-7 text-small">
            <img class="image" src="https://cdn.shopify.com/s/files/1/2277/5269/products/20_24_300x.jpg?v=1665558143" width="120px" alt="" align="left">
            <p><b>PRINTED DOBBY LINEN UF-241</b><br>
            PKR 9,990<br>
            Type: XS<br>
            Custom_Color: PRINTED</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 col-xxl-2 col-3 text-end text-small"><br>
            <button>-</button><button>1</button><button>+</button>
            <i class="fa-light fa-solid fa-trash-can"></i>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-2 text-end"><br>
              
            <b>PKR 9,990</b>
        </div>
        
        <hr style="width: 90%; margin-top: 40px;">
        
     </div><br>
     <div class="row justify-content-center">
        <div class="col-md-11 col-lg-11 col-xl-11 col-xxl-11 col-11 text-end text-small">
            <h6>
                SUBTOTAL  PKR 9,990
            </h6><br>
            <p>
                Taxes and shipping calculated at checkout
            </p>
            <button class="last-button">
                <a href="Page 5 BAROQUE.html">CHECKOUT</a>
            </button>
        </div>
     </div>
     <br><br>



     <section>
      <footer class="text-center text-white" style="background-color: rgba(16, 4, 4, 0.089);">
        <!-- Grid container -->
        <div class="container p-3 pb-0 text-dark col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-12">
          <section class="mb-0 link" >
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
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-linkedin"></i></a>
      
            <!-- Github -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
              ><i class="fa-brands fa-github"></i>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
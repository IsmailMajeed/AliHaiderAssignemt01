<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information BOROQUE-Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">

    <style>
        .justify-content{
            justify-content: end;
        }
        #login{
            margin-left: 22%;
        }
        .textline{
            text-decoration: none;
            margin-left: 1.5%;
            font-size: .9rem;
            color: rgba(26, 91, 203, 0.858);
        }
        #button{
            padding: 20px 40px;
            color: white;
            background-color: rgba(26, 91, 203, 0.858);
            border: none;
            margin-left: 64%;
            border-radius: 5px;
        }
        body{
            width: 99%;
        }
        
        .summary{
            list-style: none;
            display: none;
            background-color: rgb(223, 223, 223);
            padding: 10px;

        }
        .summary-price{
            margin-left: 35%;
            color: rgba(0, 0, 0, 0.605);
        }
        .cart-information{
            font-size: 13px;
        }
        .cart-information i{
            margin: 10px;
            font-size: 10px;
        }
        .contact-information{
            font-size: 20px;
        }
        .box-no-2{
            background-color: white;
            margin-left: -10px;
            height: 1000px;
        }
        .form-box{
            margin-right: 60px;
        }

        /* @media (max-width:900px){
            .box-no2{
                width: 15rem;
                margin-left: -100px;
            }
        } */


            .img{
                height: 2%;
                width: 60px;
                margin-top: 50px;
                margin-left: 10%;
            }
            #first_p{
                margin-top: 50px;
                position: absolute;
                margin-left: 12%;
                font-size: 0.9rem;
            }
            #second_p{
                margin-top: 75px;
                color: gray;
                position: absolute;
                margin-left: 12%;
                font-size: 0.8rem;
            }
            #third_p{
                margin-top: 100px;
                margin-left: 28%;
                position: absolute;
                font-size: 0.9rem;
            }
            
            .button{
                padding: 15px 25px;
                color: white;
                background-color: black;
            }
            .subtotal{
                margin-left: 10%;
            }
            .rs{
                margin-left: 68%;
                margin-top: -35px;
            }
            .shiping{
                margin-left: 10%;
            }
            .calculated{
                margin-left: 57.5%;
                margin-top: -35px;
                font-size: 0.8rem;
                color: rgb(58, 57, 57);
            }
            .total{
                margin-left: 10%;
            }
            .pkr{
                margin-left: 45%;
                font-size: 0.8rem;
                margin-top: -28px;
                color: rgb(107, 102, 102);
            }
            .price{
                margin-left: 62%;
                font-size: 1.4rem;
                margin-top: -45px;
            }
            .gift-card{
                padding: 10px 20px;
                margin-right: 20px;
                margin-left: 8%;
            }


            /* summary form */

            .img-2{
                height: 2%;
                width: 60px;
                margin-top: 50px;
                margin-left: 10%;
            }
            #first_p-2{
                margin-top: 50px;
                position: absolute;
                margin-left: 30%;
                font-size: 0.9rem;
            }
            #second_p-2{
                margin-top: 75px;
                color: gray;
                position: absolute;
                margin-left: 30%;
                font-size: 0.8rem;
            }
            #third_p-2{
                margin-top: 100px;
                margin-left: 80%;
                position: absolute;
                font-size: 0.9rem;
            }
            
            .button-2{
                padding: 15px 25px;
                color: white;
                background-color: black;
            }
            .subtotal-2{
                margin-left: 10%;
            }
            .rs-2{
                margin-left: 80%;
                margin-top: -35px;
            }
            .shiping-2{
                margin-left: 10%;
            }
            .calculated-2{
                margin-left: 73.5%;
                margin-top: -35px;
                font-size: 0.8rem;
                color: rgb(58, 57, 57);
            }
            .total-2{
                margin-left: 10%;
            }
            .pkr-2{
                margin-left: 55%;
                font-size: 0.8rem;
                margin-top: -28px;
                color: rgb(107, 102, 102);
            }
            .price-2{
                margin-left: 76%;
                font-size: 1.4rem;
                margin-top: -45px;
            }
            .input-type{
                width: 92%;
            }
            
       
            /* .img{
                height: 80px;
                width: 70px;
                margin-top: 50px;
                margin-left: 0px;
            }
            #first_p{
                margin-top: 70px;
                position: absolute;
                margin-left: 4.4rem;
                font-size: .8rem;
            }
            #second_p{
                margin-top: 95px;
                color: gray;
                position: absolute;
                margin-left: 70px;
                font-size: 0.8rem;
            }
            #third_p{
                margin-top: 100px;
                margin-left: 210px;
                font-size: 0.9rem;
            }
            .input{
                padding: 15px 93px;
                margin-left: 40px;
            }
            .button{
                padding: 15px 25px;
                color: white;
                background-color: black;
            }
            .subtotal{
                margin-left: 2.4rem;
            }
            .rs{
                margin-left: 330px;
                margin-top: -35px;
            }
            .shiping{
                margin-left: 40px;
            }
            .calculated{
                margin-left: 277px;
                margin-top: -35px;
                font-size: 0.8rem;
                color: rgb(58, 57, 57);
            }
            .total{
                margin-left: 40px;
            }
            .pkr{
                margin-left: 255px;
                font-size: 0.8rem;
                margin-top: -22px;
                color: rgb(107, 102, 102);
            }
            .price{
                margin-left: 300px;
                font-size: 1.4rem;
                margin-top: -45px;
            }
            .gift-card{
                padding: 10px 20px;
                margin-right: 20px;
                margin-left: 20px;
            }
            
        }*/       

 

        
    

        @media (max-width:900px){
            .summary{
                display: block;
                width: 100%;
                /* margin-left: -20px; */
            }
            
            .box-no1{
                width: 98%;
            }
            #login{
                /* margin-left: 10%; */
                align-items: flex-end;
                font-size: 13px;
            }
            .box-no-2{
                display: none;
            }
            #button{
                margin-left: 50%;
            }
            .justify-content{
                justify-content: center;
            }
            .form-box{
                margin-right: 0px;
            }
            .textline{
                font-size: .8rem;
            }
        }




            
    </style>


</head>
  <body>

    <div class="row justify-content">
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-11 box-no1">
            <div class="form-box">
                <br><br>
                <a href="/">
                    <img src="https://cdn.shopify.com/s/files/1/2277/5269/files/unnamed__1_-removebg-preview.png?30038" id="img" width="270px"><br><br>
                </a>


                
    <details>
        <summary class="summary"> <i class="fa-light fa-solid fa-cart-shopping"></i>  Show order summary &ensp; <i class="fa-light fa-angle-down"></i>   <text class="summary-price"><b>Ra 9,990</b></text></summary>
        <p>
            <div class="">
                <div class="box_2">
                    <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/20_24_small.jpg?v=1665558143" class="img-2" align="left">  
                    <p id="first_p-2">EMBROIDERED NET CH07-03</p>
                    <p id="second_p-2">Unstitched / Default</p>
                    <p id="third_p-2">Rs9,990.00</p>    
                    <br><br><br><br><br><br><hr><br>
    
                    <div class="input-group mb-3 input-type">
                        <input type="text" class="form-control gift-card" placeholder="Gift card or discount code" aria-label="Gift card or discount code" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-dark text-light" id="basic-addon2">Apply</span>
                      </div>
    
                    <p class="subtotal-2">Subtotal</p>            <p class="rs-2">Rs9,990.00</p>
                    <p class="shiping-2">Shipping</p>	            <p class="calculated-2">Calculated at next step</p><hr>
                    <p class="total-2">Total</p>	<p class="pkr-2">PKR</p> <p class="price-2">Rs9,990.00</p>
                </div>
            </div>
        </p>
    </details><br>





        
                <p class="cart-information">Cart <i class="fa-light fa-angle-right"></i> 
                 Information <i class="fa-light fa-angle-right"></i> 
                 Shiping <i class="fa-light fa-angle-right"></i> 
                 Payment </p>
                
        
                <form>
                        <text class="contact-information">Contact information</text>
                        <text id="login">Already have an account ?<a href="#" class="textline">log in</a></text><br><br>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>

                        
                    Email me with news and offers<br><br>
        
                    Shiping address<br><br>
        
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pakistan</option>
                        <option value="">United States</option>
                        <option value="">United Kingdom</option>
                        <option value="">Canada</option>
                      </select><br>
        
        
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" aria-describedby="basic-addon1">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1">
                      </div>
        
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Apartment, suite, etc. (optional)" aria-label="Apartment, suite, etc. (optional)" aria-describedby="basic-addon1">
                      </div>
        
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pastal code" aria-label="Pastal code" aria-describedby="basic-addon1">
                        <input type="text" class="form-control" placeholder="City" aria-label="City" aria-describedby="basic-addon1">
                      </div>
        
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                      </div>
                    Save this information for next time<br>
        
        
                        <a href="Page 4 BAROQUE.html" class="textline button-return"><p>Return to cart</a>
                        <input type="submit" value="Continue shiping" id="button"><br><br>
        
                </form>
                <hr>
                <a href="#" class="textline">Refund policy</a>
                <a href="#" class="textline">Shiping policy</a>
                <a href="#" class="textline">Privacy policy</a>
                <a href="#" class="textline">Terms of Services</a>
            </div><br>
        </div>


        <div class="col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-12 box-no-2 bg-light">
            <div class="box_2">
                <img src="https://cdn.shopify.com/s/files/1/2277/5269/products/20_24_small.jpg?v=1665558143" class="img" align="left">  
                <p id="first_p">EMBROIDERED NET CH07-03</p>
                <p id="second_p">Unstitched / Default</p>
                <p id="third_p">Rs9,990.00</p>    
                <br><br><br><br><br><br><hr style="width: 90%;"><br>

                <div class="input-group mb-3" style="width: 84%;">
                    <input type="text" class="form-control gift-card" placeholder="Gift card or discount code" aria-label="Gift card or discount code" aria-describedby="basic-addon2">
                    <span class="input-group-text bg-dark text-light" id="basic-addon2">Apply</span>
                  </div>

                <p class="subtotal">Subtotal</p>            <p class="rs">Rs9,990.00</p>
                <p class="shiping">Shipping</p>	            <p class="calculated">Calculated at next step</p><hr style="width: 90%;">
                <p class="total">Total</p>	<p class="pkr">PKR</p> <p class="price">Rs9,990.00</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>ORDER FRUIT WEBSITE</title>
    <script src="style.js" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="product.css">
</head>

<body class="">
    <div class="container-fluid p-0">

        <header>
            <div class="container-fluid bar">
                    <div class="logo">
                        <img src="fruitlogo.jpg" alt="">
                        <div>
                            <h1>Halie&Ayeesha</h1>
                        </div>
                    </div>
                    
                    <div  id="nav-mobile">
                        <div class="barr"><i class="fa fa-bars">
                            </i></div>
                        <ul id="ul-mobile">
                            <li> <i class="fa fa-home"></i>
                                <a href="home.php">HOME</a>
                            </li>
                            <li><i class="fa fa-history"></i>
                                <a href="about.php">ABOUT</a>
                            </li>
                            <li> <i class="fa fa-phone"></i>
                                <a href="contact.php">CONTACT</a>
                            </li>
                            <li> <i class="fa-solid fa-shopping-basket"></i>
                                <a href="order.php">ORDER</a>
                            </li>
                        </ul>
                    </div>
                    <div class="searchcart">
                        <div style="color: green;" class="icon-cart">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.3L19 7H7.3" />
                            </svg>
                            <span>0</span>
                        </div>
                    </div>
            </div>
            </form>
        </header>

        <div id="lists">
           <ul>
            <li><a href="#pineapple">Pineapple</a></li>
            <li><a href="#strawberry">Strawberry</a></li>
            <li><a href="#banana">Banana</a></li>
            <li><a href="#mango">Mango</a></li>
            <li><a href="#watermelon">Watermelon</a></li>
           </ul>
        </div>

        <div class="container fruit" id="orange">
            <header>
                <div class="title">
                    <h1>ORANGES</h1>
                </div>
            </header>
            <div class="oranges">

            </div>
        </div>

        <div class="container fruit" id="pineapple">
            <header>
                <div class="title">
                    <h1>PINEAPPLE</h1>
                </div>
            </header>
            <div class="pineapple">

            </div>
        </div>

        <div class="container fruit" id="strawberry">
            <header>
                <div class="title">
                    <h1>STRAWBERRY</h1>
                </div>
            </header>
            <div class="strawberry">

            </div>
        </div>

        <div class="container fruit" id="banana">
            <header>
                <div class="title">
                    <h1>BANANA</h1>
                </div>
            </header>
            <div class="banana">

            </div>
        </div>

        <div class="container fruit" id="mango">
            <header>
                <div class="title">
                    <h1>MANGO</h1>
                </div>
            </header>
            <div class="mango">

            </div>
        </div>

        <div class="container fruit" id="watermelon">
            <header>
                <div class="title">
                    <h1>WATERMELON</h1>
                </div>
            </header>
            <div class="watermelon">

            </div>
        </div>

        <div class="carttab">
            <h1>Shopping Cart</h1>
            <div class="listcart">
                <div class="item">
                    <div class="image">
                    </div>
                    <div class="names"></div>
                    <div class="totalprice"></div>
                    <div class="quantity">
                        <span class="minus"></span>
                        <span></span>
                        <span class="plus"></span>
                    </div>
                </div>
            </div>
            <div class="btn">
                <button class="close">Close</button>
                <button class="checkout">Check Out</button>
            </div>
        </div>

        <!-- Back to top -->
        <div class="top_cont">
          <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>

        <script>
            let bars = document.querySelector("#nav-mobile");
            let ul = document.querySelector("#ul-mobile");
            let aysha = true;
        bars.addEventListener("click",()=>{
            if(!!aysha){
                ul.style.height="145px";
                aysha = false;
            }else{
                ul.style.height="0px";
                aysha = true;
            }
            });
        </script>
</body>
<script src="app.js"></script>

</html>
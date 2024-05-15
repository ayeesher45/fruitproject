<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <title>CONTACT US</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
   <link href="css/bootstrap.min.css" rel="stylesheet" >
   <script src="js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="product.css">
</head>
<body>
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
            </div>
            </form>
        </header>
    <div class="container-fluid p-0 image">
        <img src="fruithome.jpg" alt="">
        <h1>CONTACT US</h1>
    </div>
    <div class="container images">
        <img src="con2.webp" alt=""></div>
    <div class="container contact">
        <div class="container  cont">
            <h1><i class="fa fa-phone"></i> Phone Number</h1>
            <p>+2349020349012</p> 
            <p>+2348170963467</p>
            <p>+2349098377654</p>
        </div>
        <div class="container cont">
            <h1> <i class="fa fa-whatsapp"></i> Whatsapp Number</h1>
            <p>+2349034567823</p>
            <p>+2347065435243</p>
        </div>
        <div class="container cont">
            <h1><i class="fa fa-instagram"></i> Instagram</h1>
            <p>@Halie&Ayeesha</p>
        </div>
        <div class="container cont">
            <h1><i class="fa fa-house"></i> Address</h1>
            <p>No 8, child avenue, Apapa, Lagos State.</p>  
        </div>
        <div class="container cont">
            <h1><i class="fa fa-location"></i> Branch</h1>
            <p>No 3, Aloba, Agege, Lagos State.</p><br>
            <p>No 234, Aleiru, Kebbi State.</p>
        </div>
        <div class="container cont">
            <h1><i class="fa fa-at"></i> Email</h1>
            <p>aishazakariyya234@gmail.com</p><br>
            <p>halimaoyedola345@gmail.com</p>
        </div>
    </div>
    <footer class="container-fluid foot">
        <div class="foot-bar">
            <h1>Halie&Ayeesha Fruit</h1>
        </div>
        <div class="container-fluid foot-box">
            <div>
                <h2>Links</h2>
                    <p>
                        <a href="#Sabishare">Sabishare</a>
                        <a href="#Torizone">Torizone</a>
                        <a href="#Pitakwa360">Pitakwa360</a>
                    </p>
            </div>
                <div>
                    <h2>Social Media</h2>
                    <p>
                        <a href="Facebook.com">Facebook</a>
                        <a href="Twitter.com">Twitter</a>
                        <a href="Instagram.com">Instagram</a>
                        <a href="Telegram.com">Telegram</a>
                    </p>
                </div>
                <div>
                    <h2>Resources</h2>
                    <p>
                        <a href="signin.html">Login</a>
                        <a href="signup.html">Sign Up</a>
                        <a href="contact.html">Contact Us</a>
                        <a href="#Advertise">Advertise</a>
                        <a href="#Privacy Policy">Privacy Policy</a>
                        <a href="#DMCA Takedown">DMCA Takedown</a>
                </p>
                </div>
        </div> 
        <div class="copyright">
            <p>Copyright&copy;2023</p> 
        </div>  
    </footer>
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
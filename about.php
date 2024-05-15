<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <title>ABOUT US</title>
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
        <main class="container-fluid p-0 mainbar">
            <div class="main1">
             <h1>ABOUT US</h1>
            </div>
            <div class="container-fluid main2">
                <h1 class="home">OUR VISION</h1>
                <p>You can tell the tree by the fruit it bears.
                     You see it through what the organization is
                     delivering as far as a concrete program.If
                      the tree's fruit sours or grows brackish, then the
                      time has come to chop it down
                     - bury it and walk over it and plant new seeds.  Labor
                     is prior to, and independent of, capital. Capital is
                     only the fruit of labor, and could never have existed
                      if labor had not first existed. Labor is the superior of capital,
                      and deserves much the higher consideration Nothing
                      great is created suddenly, any more than a bunch of
                      grapes or a fig. If you tell me that you desire a fig. I answer you that there must be time.
                      Let it first blossom, then bear fruit, then ripen.</p>
            </div>
        </main>
        <div class="container-fluid main3">
        <h1 class="home">OUR MISSION</h1>
        <p >“Don't be ashamed to weep; 'tis right to
            grieve. Tears are only water,
           and flowers, trees, and fruit cannot grow without
            water.“Thoughts are roots; Words are leaves;
             Actions are
            fruits! Every success tree has
             all working normally!”Adopting a new healthier
             lifestyle can involve changing diet to include more
              fresh fruit and
              vegetables as well as increasing
              levels of exercise. If your blood is formed
               from eating the foods I teach [fruits and
               green-leaf vegetables] your soul will shout for
                joy and triumph over all misery of life. For the
                first time you will feel a vibration of
                vitality through your body (like a slight
               electric current) that shakes you
               delightfully.</p>
            </div>
        <footer class="container-fluid foot">
            <div class=" foot-bar">
                <h1>FRUIT WEBSITE</h1>
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
                            <a href="#Facebook">Facebook</a>
                            <a href="#Twitter">Twitter</a>
                            <a href="#Instagram">Instagram</a>
                            <a href="#Telegram">Telegram</a>
                        </p>
                    </div>
                    <div>
                        <h2>Resources</h2>
                        <p>
                            <a href="#Login">Login</a>
                            <a href="#Sign Up">Sign Up</a>
                            <a href="#Contact Us">Contact Us</a>
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
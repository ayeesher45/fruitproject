<?php
require_once 'connection-folder/connection.php';

session_start();

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: admin-dashboard.php");
    exit();
} elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    header("Location: home.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $hashed_password = md5($password);
    //echo($hashed_password);
   // exit();

    try {
        $stmt = $conn->prepare("SELECT users.id, users.username, users.password, roles.role_name FROM users, roles WHERE users.role_id=roles.id and users.username=:username AND users.password=:password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $users = $user['password'];
        ///var_dump($user);
        //die();
        if ($user) {
            if ($password = $user['password']) {
            //if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['role_name'];
                
                if ($user['role_name'] == 'admin') {
                    header("Location: admin-dashboard.php");
                    exit();
                } elseif ($user['role_name'] == 'user') {
                    header("Location: home.php");
                    exit();
                }
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "User not found.";
        }
    } catch (PDOException $e) {
        $error = "Connection failed: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>SIGNIN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d3c9fc67a3.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"></script>
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
                   
                        
                    </div>
    
            </div>
            </form>
        </header>
    <div class="container-fluid sign">
        <div class="container-fluid nav-box">
            <h1>Halie&Ayeesha</h1>
            <h1> FRUIT</h1>
            <div class="container-fluid nav-info">
                <p>Fruits are an excellent source of essential vitamins
                     and minerals, and they are high in fiber. Fruits 
                     also provide a wide range of health-boosting 
                     antioxidants,including flavonoids.  Eating a diet 
                     high in fruits and vegetables can reduce a person'
                     s risk of developing
                     heart disease, cancer, inflammation, and diabetes
                   .</p>
            </div>
            </div>
<div class="container-fluid signin">
<form class="signinform" method="POST">
<center><h1 style="margin-top:1rem; margin-bottom:0">SIGN-IN</h1><br>
</center>
    <div class="container-fluid p-2 info_content">
        <label>Username: </label>
        <input type="text" name="username" placeholder="Enter Username" id="username" required>
    </div>
    <div class="container-fluid p-2 info_content">
        <label>Password: </label>
        <input type="password" name="password" placeholder="Enter Password" required>
    </div>
    <div class="btn" >
      <button style = "border:none; border-radius:2rem; background-color:green;">  <input style =" color:white;"class="btn" type="submit" value="Login"><a href="home.php"></a></button>
    </div>
    <span>dont have an account </span> <a href="signup.php" style = "color:white; font-size:.8rem; text-decoration:none; background-color:green; border-radius:2rem; padding:.3rem;"> signup</a>

    
<!-- <div class="but1"><button><input type="submit" value="Login"></button> -->
</div>
</form>
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
</html>
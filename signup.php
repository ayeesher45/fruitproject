<?php
require_once 'connection-folder/connection.php';

$username = $password = $confirm_password = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($password)) {
        $error = "All fields are required.";
    } elseif ($password !== $password) {
        $error = "Invalid Password.";
    } else {
        try {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $error = "Username already exists. Please choose a different username.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO users (username, password, role_id) VALUES (:username, :password, 2)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':password', $password);
                if ($stmt->execute()) {
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "Registration failed. Please try again.";
                }
            }
        } catch (PDOException $e) {
            $error = "Database error: " . $e->getMessage();
        }
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
   
    <title>sign-up</title>
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
<div class="container-fluid form1">
    <div>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
        <form action="" class="signup" method="POST">
            <h1>SIGN-UP</h1>
            <!-- <div class="info-cont">
                <label for="">Firstname:</label>
                <input type="text" required>
            </div>
            <div class="info-cont">
                <label for="">Surtname:</label>
                <input type="text" required>
            </div> -->
            <div class="info-cont">
                <label for="">Username:</label>
                <input type="text" required id="username" name="username" value="<?php echo htmlspecialchars($username);?>">
            </div>
            <!-- <div class="info-cont">
                <label for="">Phone-N0:</label>
                <input type="text" required>
            </div>
            <div class="info-cont">
                <label for="">Address:</label>
                <input type="text" required>
            </div> -->
            <div class="info-cont">
                <label for="">Password:</label>
                <input type="password" required id="password" name="password">
            </div>
            <div class="signup-btn">
            <input style = "border:none; border-radius:2rem; background-color:darkgreen; padding:.3rem; color:white;" type="submit" value="Register">
            </div>
            <p id="sign-p" >Already have an account <a href="index.php">Sign-in</a></p>
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
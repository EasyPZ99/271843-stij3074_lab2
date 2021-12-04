<?php
if (isset($_POST["submit"])) {
    include_once("dbconnect.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = sha1($_POST["password"]);
    $sqlregister = "INSERT INTO `tbl_admin`( `name`, `email`, `password`) VALUES( '$name',  '$email', '$pass')";
    try {
        $conn->exec($sqlregister);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
           
        }
        echo "<script>alert('Registration successful')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration failed')</script>";
        echo "<script>window.location.replace('register.php')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}
/* Create a Parallax Effect */
.bgimg-1 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://github.com/EasyPZ99/271843-stij3074_lab1/blob/main/images/20211105_131145.jpg?raw=true');
  min-height: 100%;
}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1{
    background-attachment: scroll;
    min-height: 400px;
  }
}

</style>
<body>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="../javascript/script.js"></script>
    <title>Register</title>
</head>


<body>
    <div class="w3-header w3-container w3-black w3-padding-32 w3-center">
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">AFIRA <span class="w3-hide-small">HERBS</span> & BEAUTY</span>
    <p style="font-size:calc(8px + 1vw);;">REGISTER</p>
  </div>
</div>

    </div>

    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card">
            <div class="w3-container w3-black">
                <p>New Registration
                <p>
            </div>
            <form class="w3-container w3-padding" name="registerForm" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return confirmDialog()" >
                <div class="w3-container w3-border w3-center w3-padding">
                </div>
                <p>
                    <label>Name</label>
                    <input class="w3-input w3-border w3-round" name="name" id="name" type="text" required>
                </p>

                <p>
                    <label>Email</label>
                    <input class="w3-input w3-border w3-round" name="email" id="email" type="email" required>
                </p>
                <p>
                    <label>Password</label>
                    <input class="w3-input w3-border w3-round" name="password" id="password" type="text" required>
                </p>


                <div class="row">
                <button class="w3-btn w3-round w3-green w3-block" name="submit">Submit</button>
                </div>

            </form>


        </div>
    </div>

    <footer class="w3-footer w3-center w3-black-grey">
        <p>Copyright: Afira Herbs and Beauty</p>
    </footer>

</body>

</html>
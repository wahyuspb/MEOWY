<html>

<head>
    <link rel="stylesheet" href="CSS/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>


<body>
    <div class="main-container">
        <div class="left-content">
            <div class="text">
                <h1>INFORMATION</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Autem quod consequuntur in deleniti quidem labore quam perspiciatis laudantium nihil ea repellat,
                    aliquam cumque fugiat rerum minima dolores soluta suscipit nesciunt odio, eum excepturi saepe reiciendis?
                    Eius similique ipsam facere id.</p>
                <center>
                    <a href="login.php"><button class="Already">Already have an account?</button></a>
                </center>
            </div>
        </div>

        <div class="right-content">
            <div class="content">
                <center>
                    <h1>Sign Up For New Account</h1>
                    <img src="Gambar/meowy.png">
                </center>
                <form action="input_reg.php" method="post">
                <div class="name">
                        <label for="fname">First Name <br>
                            <input name="fname" id="fname" class="fname" type="text" placeholder="Your First Name..."></input></label>
                        <label for="lname">Last Name<br>
                            <input name="lname" id="lname" class="lname" type="text" placeholder="Your Last Name..."></input></label>
                </div>
                <div class="bawah">
                    <label for="uname">Username<br>
                        <input name="uname" id="uname" class="uname" type="text" placeholder="Your Username..."></input></label><br>
                    <label for="pass">Password<br>
                        <input name="pass" id="pass" class="password" type="password" placeholder="Your Password..."></input></label>
                    <button type="submit" name="register" class="register">Register Now</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
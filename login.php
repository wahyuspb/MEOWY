<html>

<head>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>


<body>
    <div class="main-container">
        <div class="left-content">
            <div class="text">
                <h1>MEOWY</h1>
                <p>At Fetch! Pet Care we believe in a safe and happy world where pets get their way every day. This means enabling your pet to live life to its fullest. So even if you’re away, with Fetch! Pet Care, your pet can still play! We believe a pet needs regular exercise in order to be happy and healthy, so we have designed a range of services to meet the varied needs of dogs and cats.</p>

         
            </div>
        </div>

        <div class="right-content">
            <form action="act_login.php" method="POST">
            <div class="content">
                <center>
                    <h2>MEOWY</h2>
                    <button class="facebook">Continue with Facebook</button>
                    <button class="google">Continue with Google</button><br><br>
                    <h4 class="or"><span>OR</span></h4>
                    <label for="user">Username</label>
                    <input name="user" id="user" class="username" type="text" placeholder="Your Username..."></input>
                    <label for="pass">Password</label>
                    <input name="pass" id="pass" class="password" type="password" placeholder="Your Password..."></input>
                    <button class="Login" name="login">Log In</button>
                    <button class="Signup"><a href="register.php">Sign Up</a></button>
                </center>
            </div>
            </form>
        </div>
    </div>
</body>

</html>

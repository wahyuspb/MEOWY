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
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Enim obcaecati iste eaque neque atque illo vero earum nesciunt 
                    perspiciatis hic sint pariatur dolor eos assumenda accusantium quia tempora, 
                    dignissimos eius numquam temporibus fuga suscipit. A, esse! Nulla ipsam cumque maxime, 
                    alias sunt cupiditate, accusamus animi autem sequi aspernatur voluptatibus expedita nisi 
                    inventore aut in vitae sit officia, at nemo ad.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptates optio, modi, nisi omnis, 
                    et expedita facere perferendis quas veniam tenetur maiores beatae nihil ducimus reiciendis in itaque 
                    aliquid adipisci!</p>
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
                    <a href="register.php"><button class="Signup">Sign Up</button></a>
                </center>
            </div>
            </form>
        </div>
    </div>
</body>

</html>
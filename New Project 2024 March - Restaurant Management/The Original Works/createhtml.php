<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEEP into FOOD</title>
    <link rel="stylesheet" href="for_welcome.css"> 
</head>
<body id="whole">
    <div id="task">
        <div id="logo">
            <h1>Logo</h1>
        </div>
        <div id="rest">
            <h1 id="h"><a class="hbtns" href="welcome.html">DEEP into FOOD</a></h1>
        </div>
        <!--
        <div id="log">
            <h1>Login</h1>
        </div>
        -->
    </div>
    <div id="divider">   </div>
    <div id="maindiv">
        <div id="ad1">       </div>
        <div id="main">
            <!--
            <div id="tool">
                <input type="text" id="srch" placeholder="Search here......">
                <button>Search</button>
                <button id="cart">Cart</button>
            </div>
            -->
            <h1 class="cnt">Create your new Account</h1>
            <form id="logi" action="create.php" method="post">
                <p class="cnt">User Name</p><br>
                <input class="cnt icnt" type="text" id="username" name="username" required placeholder="Create your Username......."><br>
                <p class="cnt">Password</p><br>
                <input class="cnt icnt" type="password" id="password" name="password" required placeholder="Create your Password.......">
                <p class="cnt">Phone Number</p><br>
                <input class="cnt icnt" type="number" id="phone" name="phone" required placeholder="Enter your Phone Number.......">
                <p class="cnt">Email</p><br>
                <input class="cnt icnt" type="email" id="email" name="email" required placeholder="Enter your email.......">
                <br><br>
                <button class="btns">Create Account</button>
            </form>
            <br><br>
            <a class="btns" href="signinhtml.php">Login to your Account</a>

        </div>
        <div id="ad2">       </div>
    </div>
    <div id="divider">   </div>
    <div id="copywriter">
        <h1 class="cnt">DEEP into FOOD</h1>
        <p class="cnt">All Rights reserved © 2024 dIFFERENCE Pvt., Ltd.,</p>
    </div>
    <button>Admin</button>
</body>
</html>
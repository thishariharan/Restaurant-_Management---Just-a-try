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
        <div id="log">
            <?php 
                if(isset($_COOKIE["shkie"]))
                {
                    echo "<h1><a class='lbtn' href='logout.php'>Logout</a></h1>";
                }
                else    
                {
                    echo "<h1><a class='lbtn' href='signinhtml.php'>Login</a></h1>";
                }
            ?>
        </div>
    </div>
    <div id="divider">   </div>
    <div id="maindiv">
        <div id="ad1">       </div>
        <div id="main">
                
            <form id="logi" action="donate.php" method="post">
                <p class="cnt">User Name</p><br>
                <input class="cnt icnt" type="text" name="username" required placeholder="Enter your Name......."><br>
                <p class="cnt">Amount</p><br>
                <input class="cnt icnt" type="number" name="password" required placeholder=".......">
                <br><br>
                <button class="btns">Donate us</button>
            </form>

        </div>
        <div id="ad2">       </div>
    </div>
    <div id="divider">   </div>
    <div id="copywriter">
        <h1 class="cnt">DEEP into FOOD</h1>
        <p class="cnt">All Rights reserved © 2024 dIFFERENCE Pvt., Ltd.,</p>
    </div>
    <a href="adminpass.php" id="secret">Admin</a>
</body>
</html>
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
            <div id="tool">
                <input type="text" id="srch" placeholder="Search here......">
                <button>Search</button>
                <button id="cart">Cart</button>
                <form action="donte.php" method="post">
                <button id="dontate">Donate for the Poor and Struggling</button>
            </form>
            </div>
            <br>
            <div id="divider">   </div>


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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Admin of DEEP into FOOD</title>
</head>
<body>
    <h1>        The Admin of DEEP into FOOD</h1>

    <?php
    //header("refresh:5");    
        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
        if (!$conn) { die("Connection failed: " . mysqli_connect_error());  }
        $ow = "SELECT * FROM own";
    $row = $conn->query($ow);
    if ($row->num_rows > 0) {
        while($r = $row->fetch_assoc())
        {
            $a = $r["amt"];$b = $r["bil"]; 
        }                            
      } 
    ?>

    <h2>Owner Details</h2>
    Next Bill : <?php  echo $b  ?><br>
    Account Balance : <?php echo $a ?><br>
    Charity : 

    <hr>
    <h2>Waiters Details</h2>
    <table border=1>
                            <tr><th>Waiter Name&emsp;</th><th>Waiter Code&emsp;</th><th>Phone&emsp;</th><th>Email&emsp;</th>
                            <th>Availability&emsp;</th><th>Salary&emsp;</th></tr>
    <?php
        $wl = "SELECT * FROM waiter";
        $rwl = $conn->query($wl);
        if ($rwl->num_rows > 0) {
            while($r = $rwl->fetch_assoc())
            {
                $a = $r["w_name"];$b = $r["w_code"]; $c = $r["ph"];
                $d = $r["email"]; $e = $r["avail"]; $f = $r["sal"];
                echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td></tr>";
            }                            
          } 
    ?>
    </table>  
    <h2>Add Waiters</h2>
          <form method="post" action="wadd.php">
            <input type="text" placeholder="Enter Name" required name="wname" id="wname">
            <input type="text" placeholder="Enter Code" required name="wcode" id="wcode">
            <input type="number" placeholder="Enter number" required name="wnum" id="wnum">
            <input type="text" placeholder="Enter yes or no" required name="wavl" id="wavl">
            <input type="email" placeholder="Enter email" required name="weml" id="weml">
            <input type="number" placeholder="Enter Salary" required name="wsal" id="wsal">
            <button>Add Waiter</button>
          </form>
    

          <hr>
    <h2>Chef Details</h2>
    <table border=1>
                            <tr><th>Chef Name&emsp;</th><th>Chef Code&emsp;</th><th>Phone&emsp;</th><th>Email&emsp;</th>
                            <th>Availability&emsp;</th><th>Salary&emsp;</th></tr>
    <?php
        $cl = "SELECT * FROM chef";
        $rcl = $conn->query($cl);
        if ($rcl->num_rows > 0) {
            while($r = $rcl->fetch_assoc())
            {
                $a = $r["c_name"];$b = $r["c_code"]; $c = $r["ph"];
                $d = $r["email"]; $e = $r["avail"]; $f = $r["sal"];
                echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td></tr>";
            }                            
          } 
    ?>
    </table>  
    <h2>Add Chefs</h2>
          <form method="post" action="cadd.php">
            <input type="text" placeholder="Enter Name" required name="cname" id="cname">
            <input type="text" placeholder="Enter Code" required name="ccode" id="ccode">
            <input type="number" placeholder="Enter number" required name="cnum" id="cnum">
            <input type="text" placeholder="Enter yes or no" required name="cavl" id="cavl">
            <input type="email" placeholder="Enter email" required name="ceml" id="ceml">
            <input type="number" placeholder="Enter Salary" required name="csal" id="csal">
            <button>Add Chef</button>
          </form>
    

          <hr>
          <h2>Food Details</h2>
    <table border=1>
                            <tr><th>Food Name&emsp;</th><th>Food Code&emsp;</th><th>Type&emsp;</th><th>Available&emsp;</th>
                            <th>Price&emsp;</th></tr>
    <?php
        $fl = "SELECT * FROM food";
        $rfl = $conn->query($fl);
        if ($rfl->num_rows > 0) {
            while($r = $rfl->fetch_assoc())
            {
                $a = $r["f_name"];$b = $r["f_code"]; $c = $r["type"];
                $d = $r["qty"]; $e = $r["price"];
                echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td></tr>";
            }                            
          } 
    ?>
    </table>  
    <h2>Add Food</h2>
          <form method="post" action="fadd.php">
            <input type="text" placeholder="Enter Name" required name="fname" id="fname">
            <input type="text" placeholder="Enter Code" required name="fcode" id="fcode">
            <input type="text" placeholder="Enter V or NV" required name="ftype" id="ftype">
            <input type="number" placeholder="Enter Availability" required name="favl" id="favl">
            <input type="number" placeholder="Enter price" required name="fprc" id="fprc">
            <button>Add Food</button>
          </form>

          <hr>
          <h2>Customer Account Details</h2>
    <table border=1>
                            <tr><th>Customer Name&emsp;</th><th>Customer Email&emsp;</th><th>Customer Phone&emsp;</th></tr>
    <?php
        $cal = "SELECT * FROM custums";
        $rcal = $conn->query($cal);
        if ($rcal->num_rows > 0) {
            while($r = $rcal->fetch_assoc())
            {
                $a = $r["cust"];$b = $r["email"]; $c = $r["ph"];
                echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";
            }                            
          } 
    ?>
    </table>

    <hr>






          <?php
          mysqli_close($conn);   
          ?>
</body>
</html>
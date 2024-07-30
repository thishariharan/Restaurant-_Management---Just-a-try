<?php                       

        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }

                          $nm = $_POST['username'];   
                          $ps = $_POST['password'];    

                          $sql = "SELECT * FROM donate";

                          $result = mysqli_query($conn, $sql);

                          $str = "INSERT INTO donate VALUES ('$nm',$ps)"; 

                          if (mysqli_num_rows($result) >= 0) {

                            if(mysqli_query($conn,$str)===true) {     }
                            

                            header("Location: welcomehtml.php");      exit;

                          } 
                          else {   header("Location: donte.php"); exit;     }                          
                          mysqli_close($conn);                    
                          ?>
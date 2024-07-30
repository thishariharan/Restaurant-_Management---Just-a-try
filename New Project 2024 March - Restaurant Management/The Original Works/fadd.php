<?php                       

        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }

                          $nm = $_POST['fname'];   
                          $ps = $_POST['fcode'];    
                          $ph = $_POST['ftype'];
                          $al = $_POST['favl'];
                          $sl = $_POST['fprc'];   

                          $sql = "SELECT * FROM food WHERE f_name='$nm'";

                          $result = mysqli_query($conn, $sql);

                          $str = "INSERT INTO food VALUES ('$nm','$ps','$ph',$al,$sl)"; 

                          if (mysqli_num_rows($result) <= 0) {

                            if(mysqli_query($conn,$str)===true) {     }
                            

                            header("Location: admin.php");      exit;

                          } 
                          else {   header("Location: admin.php"); exit;     }                          
                          mysqli_close($conn);                    
                          ?>
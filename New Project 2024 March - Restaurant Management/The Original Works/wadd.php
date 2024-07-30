<?php                       

        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }

                          $nm = $_POST['wname'];   
                          $ps = $_POST['wcode'];    
                          $ph = $_POST['wnum'];
                          $em = $_POST['weml'];   
                          $al = $_POST['wavl'];
                          $sl = $_POST['wsal'];   

                          $sql = "SELECT * FROM waiter WHERE w_name='$nm'";

                          $result = mysqli_query($conn, $sql);

                          $str = "INSERT INTO waiter VALUES ('$nm','$ps','$al',$sl,$ph,'$em')"; 

                          if (mysqli_num_rows($result) <= 0) {

                            if(mysqli_query($conn,$str)===true) {     }
                            

                            header("Location: admin.php");      exit;

                          } 
                          else {   header("Location: admin.php"); exit;     }                          
                          mysqli_close($conn);                    
                          ?>
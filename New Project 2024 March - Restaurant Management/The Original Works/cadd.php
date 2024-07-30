<?php                       

        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }

                          $nm = $_POST['cname'];   
                          $ps = $_POST['ccode'];    
                          $ph = $_POST['cnum'];
                          $em = $_POST['ceml'];   
                          $al = $_POST['cavl'];
                          $sl = $_POST['csal'];   

                          $sql = "SELECT * FROM chef WHERE c_name='$nm'";

                          $result = mysqli_query($conn, $sql);

                          $str = "INSERT INTO chef VALUES ('$nm','$ps','$al',$sl,$ph,'$em')"; 

                          if (mysqli_num_rows($result) <= 0) {

                            if(mysqli_query($conn,$str)===true) {     }
                            

                            header("Location: admin.php");      exit;

                          } 
                          else {   header("Location: admin.php"); exit;     }                          
                          mysqli_close($conn);                    
                          ?>
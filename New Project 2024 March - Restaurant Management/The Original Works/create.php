<?php                       

        $conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }

                          $nm = $_POST['username'];   
                          $ps = $_POST['password'];    
                          $ph = $_POST['phone'];
                          $em = $_POST['email'];    

                          $sql = "SELECT * FROM custums WHERE cust='$nm'";

                          $result = mysqli_query($conn, $sql);

                          $str = "INSERT INTO custums VALUES ('$nm','$ps',$ph,'$em')"; 

                          if (mysqli_num_rows($result) <= 0) {

                            if(mysqli_query($conn,$str)===true) {     }

                            $expire = time() + 3600;  
                            
                            setcookie("shkie", $nm, $expire);

                            header("Location: welcomehtml.php");      exit;

                          } 
                          else {   header("Location: createhtml.php"); exit;     }                          
                          mysqli_close($conn);                    
                          ?>
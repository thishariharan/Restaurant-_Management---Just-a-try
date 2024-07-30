<?php                        
$conn = mysqli_connect('localhost', 'root', '', 'food_shop');
                        if (!$conn) { die("Connection failed: " . mysqli_connect_error());  }

                          $name = $_POST['username'];    
                          $password = $_POST['password'];  

                          $sql = "SELECT * FROM custums WHERE cust='$name' AND pass='$password'";
                          $result = mysqli_query($conn, $sql);                          
                          if (mysqli_num_rows($result) > 0) {
                            $expire = time() + 18000; 
                            
                            setcookie("shkie", $name, $expire);

                            header("Location: welcomehtml.php");exit;
                          } else {header("Location: signinhtml.php");   
                            exit; }
                          mysqli_close($conn);                    ?>
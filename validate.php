<?php
                    
                        include 'config.php';
                        

                        $full_name = $_POST['full_name'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $gender = $_POST['gender'];

                       

                        if(mysqli_affected_rows($conn) > 0){
                                
                            mysqli_query($conn, "INSERT INTO users (full_name, email, phone, gender) VALUES('$full_name', '$email', '$phone', '$gender')");
    
                            $certificate_id = rand(1000000000, 9999999999);
        
                            $userId = "";
                            $userData = ['random_number' => $certificate_id];
        
                            $query = "UPDATE users SET random_number = :random_number WHERE certifcate_id = :certifcate_id";
                                
                            mysqli_query($conn, "INSERT INTO users (certificate_id) VALUES('$certificate_id')");
                                
                                
                            echo "<p class='alert alert-success mt-3'>Registration successfull Sign in With your Username</p>";
                            echo "<p class='alert alert-success'>Certificate Number: $certificate_id</p>";
                                
                        }
                        else{
                            echo"<p class='mt-3 alert alert-danger fw-bold'>Fill the required detail</p>";
                        }
                            

                        
                    ?>
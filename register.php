<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=PT+Sans&family=Poppins:wght@300;400;600&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap link -->
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="Custom-css/style.css">
    
    <title>E-certificate</title>
</head>
<body>
    <style>
        body, .row{
            height: fit-content;
        }

        input:focus{
            outline: 3px solid rgba(255, 0, 0, 0.447) !important;
            box-shadow: none !important;
        }
    </style>

    <div class="container-fluid py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="form-wrapper bg-light shadow py-5 rounded px-5">
                    <div class="text-end">
                    <a href="index.php" class='text-decoration-none text-danger'>Back to home page</a>
                    </div>
                    <?php
                    
                        include 'config.php';
                            
                        if(isset($_POST['submit'])){

                            $full_name = $_POST['full_name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $gender = $_POST['gender'];
                            $certificate_id = rand(1000000000, 9999999999);
                            $date = $_POST['issued_date'];
                            

                            $userId = "";
                            $userData = ['random_number' => $certificate_id];
                
                            $query = "UPDATE users SET random_number = :random_number WHERE certifcate_id = :certifcate_id";
                                        
                            // mysqli_query($conn, "INSERT INTO users (certificate_id) VALUES('$certificate_id')");
                            mysqli_query($conn, "INSERT INTO users (full_name, email, phone, gender, certificate_id,issued_date) VALUES('$full_name', '$email', '$phone', '$gender', '$certificate_id', '$date')");
              
                            echo "<p class='alert alert-success mt-3'>Registration successful</p>";
                            echo "<p class='alert alert-success'>Certificate Number: $certificate_id</p>";
                        
                        }
                        // else{
                        //     echo"<p class='mt-3 alert alert-danger fw-bold'>Fill the required detail</p>";
                        // }
                            

                           

                            

                        
                    ?>
                    <form method="post">
                        
                        <label class="mt-3">Full Name<span class="text-danger">*</span></label>
                        <input type="text" name="full_name" class="form-control" required>

                        <label class="mt-3">Email Address</label><span class="text-danger">*</span>
                        <input type="email" name="email" class="form-control" required>

                        <label class="mt-3">Phone Number</label><span class="text-danger">*</span>
                        <input type="number" name="phone" class="form-control" required>

                        <label class="mt-3">Gender</label><span class="text-danger">*</span>
                        <input type="text" name="gender" class="form-control" required>

                        <label class="mt-3">Application Date</label><span class="text-danger">*</span>
                        <input type="date" name="issued_date" class="form-control" required>

                        <input type="submit" name="submit" class="btn btn-danger mt-3 rounded-0 px-3 py-2" value="Submit">
                    </form>

    
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Custom-css/style.css">
    <title>E-certificate</title>
</head>
<body>
    <div class="container-fluid hero-bg">
        <nav class="navbar navbar-expand-lg w-100">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold text-light" href="#">E-CERTIFICATE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class=" btn btn-danger px-3 py-2 rounded-0" href="register.php"><i class="fa far fa-user"></i> Enroll</a>
                </div>
              </div>
            </div>
        </nav>

        <div class="row justify-content-center mt-5 writeup">
            <div class="col-lg-7 ">
                <p class="text-light fs-5 ">In the dynamic landscape of the digital era, where online transaction, academic credentials, and professional certifications are exchanged with a click, the assurance of authenticity becomes paramount. Certificate verification stands as a robust mechanism, a virtual notary, ensuring the integrity and legitimacy of crucial documents and transactions.</p>
            </div>
            <div class="col-lg-5">
                <div class="form-wrapper px-3 py-5 text-center rounded">
                    <form method="post">
                        <input type="number" name="certificate_id" id="" class="form-control rounded-0" placeholder="Certificate Number" required>

                        <input type="submit" class="btn btn-danger rounded-0 px-3 py-2 mt-3" value="Validate" name="validate">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-md-8">
            <?php
                include 'config.php';
                
                if(isset($_POST['validate'])){

                    $certificate_id = $_POST['certificate_id'];
    
                    $sql = "SELECT * FROM users WHERE certificate_id = $certificate_id";
    
                    $result = mysqli_query($conn, $sql) or die('Unsuccessful');

                    if(mysqli_affected_rows($conn) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                          
                    
                
            ?>     
                        <table class="table table-striped">
                            <tbody class="">
                                <th class="border">id</th>
                                <th class="border">Full Name</th>
                                <th class="border">Email</th>
                                <th class="border">Phone</th>
                                <th class="border">Gender</th>
                                <th class="border">Issued_date</th>

                                <tr>
                                    <td class="border"><?php echo $row ['id'];?></td>

                                    <td class="border"><?php echo $row ['full_name'];?></td>

                                    <td class="border"><?php echo $row ['email'];?></td>

                                    <td class="border"><?php echo $row ['phone'];?></td>

                                    <td class="border"><?php echo $row ['gender'];?></td>

                                    <td class="border"><?php echo$row ['issued_date'];?></td>
                                </tr>

                            </tbody>
                            
                        </table>
            
                    <?php
                    }
                    }else{
                        echo"<p class='fw-bold text-center alert alert-danger'>No record found</p>";
                    }
                }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
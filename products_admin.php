<?php
//include connection file
$admin_username = "lidia";
session_start();
include 'products_config.php';
$sql='SELECT * FROM produse';
$query = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<?php
require_once 'person.php'; // Assuming the Person class is defined in "person.php"

$user = new Person();
$user->set_name('Lidia');
$user->set_status('admin');

$name = $user->get_name();
$status = $user->get_status();

$message = "Hello $name! You are $status, so you can add more products.";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v17.0" nonce="a62MkrqJ"></script>
        
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Delicacy. Elegance. </span>
                <span class="site-heading-lower">Hair bows store</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href=<?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["username"] == $admin_username)
                                                                                                    echo"products_admin.php";
                                                                                               else
                                                                                                   echo"products.php";?>>Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
       
        
        

        <?php while($row=mysqli_fetch_array($query)){?>
        
                <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                
                                <span class="section-heading-lower"><?php echo $row["nume"];?></span>
                                <span class="section-heading-upper"><?php echo "Price: ".$row["pret"]." $";?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="<?php echo $row['imagine'];?>">
                    <div class="product-item-description d-flex ms-auto">
                        
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo "<b>Color</b>: ".$row["culoare"];?></p>
                            <p class="mb-0"><?php echo "<b>Description</b>: ".$row["descriere"];?></p>
                            <p class="mb-0">
                                <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>
                                 <a href=\"edit.php?id=".$row['id']."\">Edit</a>
                                 <a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
                            </p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
        
        <?php } ?>
        <!-- partea de modificat -->
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper"></span>
                                <span class="section-heading-lower">Administration</span>
                            </h2>
                            <h4>
                                <span><?php echo $message; ?></span>
                            </h4>
                            <div class="wrapper">
        
            <br/><br/>
            <a href="upload.php">Upload another image</a>
            <br/><br/>
            </div>
                    </div>
                </div>
            </div>
        </section>    
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; bowsforyou.com</p></div>
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank"
                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" 
                    class="fb-xfbml-parse-ignore">Share</a>
            </div>
            <div class="container">
       <a href="https://twitter.com/lidiaa0_0" class="fa fa-twitter"></a>
       <a href="#" class="fa fa-instagram"></a>
       <a href="https://pinterest.com/scheullidia" class="fa fa-pinterest"></a>
            </div>
        
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

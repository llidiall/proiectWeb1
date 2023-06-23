<?php
session_start();
$admin_username = "lidia";

include 'products_config.php';

if (!isset($_POST["submit"])) {
    $sql = "SELECT * FROM produse WHERE id='{$_GET['id']}'";
    $result = mysqli_query($con, $sql);
    $record = mysqli_fetch_array($result);
} else {
    $sql2 = "SELECT * FROM produse WHERE ID='{$_POST['id']}'";
    $result2 = mysqli_query($con, $sql2);
    $rec = mysqli_fetch_array($result2);
    $text = $_POST['nume'];
    $text1 = $_POST['pret'];
    $text3 = $_POST['culoare'];
    $text2 = $_POST['descriere'];

    if (isset($_FILES['image']['name'])) {
        $target = "./assets/img_produse/" . md5(uniqid(time())) . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        $target = $rec['imagine'];
    }

    $sql1 = "UPDATE produse SET imagine='{$target}', nume='{$text}', culoare='{$text3}', pret='{$text1}', descriere='{$text2}' WHERE id='{$_POST['id']}'";
    mysqli_query($con, $sql1) or die(mysqli_error($con));

    header('location: products_admin.php');
    exit;
}
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
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
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
        
       
        <!-- partea de modificat -->
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper"></span>
                                <span class="section-heading-lower">Edit the product:</span>
                            </h2>
                            <div class="wrapper">
        
                    
                                
           <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?? ''; ?>"/>
                Picture:<br/>
                <input type="hidden" name="size" value="1000000">
                <input type="file" name="image"/>
                <br/>
                Name:<br/>
                <input type="text" name="nume" value="<?php echo $record['nume'] ?? ''; ?>"/><br/>
                Price:<br/>
                <input type="text" name="pret" value="<?php echo $record['pret'] ?? ''; ?>"/><br/>
                Color:<br/>
                <input type="text" name="culoare" value="<?php echo $record['culoare'] ?? ''; ?>"/><br/>
                Description:<br/>
                <input type="text" name="descriere" value="<?php echo $record['descriere'] ?? ''; ?>"/><br/><br/>
                <input type="submit" name="submit" value="Edit"/><br/>
                <div>
                    <p><a href="products_admin.php">Back</a></p>
                </div>
            </form>


            </div>
                    </div>
                </div>
            </div>
        </section>    
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

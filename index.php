<!DOCTYPE html>
<?php 
session_start();
$admin_username = "lidia";
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- comment --> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="a62MkrqJ"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="fLa7UmNQ"></script>
        
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Delicacy. Elegance. </span>
                <span class="site-heading-lower">Hair bows store</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
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
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper"></span>
                            <span class="section-heading-lower">Worth wearing</span>
                        </h2>
                        <p class="mb-3">Do you want to pamper your hair with a quality accessory? 
                            Or do you want to complete a simple outfit with something unique? 
                            Or maybe you already have a passion for hair accessories and want to 
                            add something different to your collection?
                            No matter what you are looking for, we can offer it!
                            Don't forget, the first bow is addictive!</p>
                            
                       <!--- <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>--->
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Our Promise</span>
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0">When you walk into our shop to start your day, we are
                                dedicated to providing you with friendly service, a welcoming 
                                atmosphere, and above all else, excellent products made with the
                                highest quality materials. If you are not satisfied, please let 
                                us know and we will do whatever we can to make things right!
                            <br/>At our store, we believe in curating the
                            perfect soundtrack for your shopping journey. =D<br/>Historiette No. 5, Fabrizio Paterlini<br/></p>
                        <audio controls>
                            <source src="assets/video/melodie.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class="page-section">
            <div class="container">
                <div class="intro">
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                       
                         <p class="section-heading-upper">Check out our online hairstyle tutorials! <3 </p>
                       
                    </div>
                    <style>
                        .video-container {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                        }
                    </style>
                    <div class="video-container">
                        <iframe  width="850" height="425" src="https://www.youtube.com/embed/eTIF8Yx20TI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                     </div>
            </div>
        </section>
        
        
        <section class="page-section">
            <div class="container">
                <div class="intro">
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-2">
                            <span class="section-heading-lower">Try it yourself!</span>
                        </h2>
                        <p class="mb-3">Do not worry!
                                We are not jealous 
                                  if yours turn out more beautiful than ours. 
                                Don't forget to 
                                    send us pictures if you succeed!</p>
                       <!--- <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>--->
                    </div>
                </div>
            </div>
            
        </section>
        <section>
        <style>
                            .video-container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                            }
            </style>
            <div class="video-container">
                        <video width="850" height="425" controls>
                        <source src="video/bowtutorial.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
        </section>   
        
            
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; bowsforyou.com</p></div>
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank"
                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" 
                    class="fb-xfbml-parse-ignore">Share</a>
            </div>
          
            <div class="fb-like" data-href="https://www.facebook.com/UAICdinIASI/?locale=ro_RO" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
            
            
            
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

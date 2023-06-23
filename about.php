<!DOCTYPE html>
<?php
session_start();
$admin_username = "lidia";
$admin_password = "lidia123";

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
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Colorful bow, Colorful day</span>
                                    <span class="section-heading-lower">About Our Store</span>
                                </h2>
                                <p>We are two sisters who started a business out of a passion.
                                    we create bows with enthusiasm, using the best quality materials and carefully making each stitch.</p>
                                <p>We created this store out of the desire to help women everywhere to find the 
                                    ideal accessories. We update the stock regularly so that our products fit 
                                    the tastes and personalities of our customers.</p>
                                <p class="mb-0">
                                    It is guaranteed that you will fall in
                                    <em>love</em>
                                    with our hair accessories.
                                    Join us for more hairstyle ideas and to find out the latest trends.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about1_1.png" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Pretty but strong</span>
                                    <span class="section-heading-lower">The huge history of big hair bows</span>
                                </h2>
                                <p>The hair bow was originally gender-specific to adult males in
                                    Europe throughout the 1700s when men adorned their hair with 
                                    bows to show they were prosperous and extravagant.</p>
                                <p>Women also wore extravagant hairstyles, but these did not often 
                                    feature hair bows; rather large ornaments and jewels were preferred.</p>
                                <p>After the French Revolution extravagance in dress and hairstyle was 
                                    frowned upon and hair bows were rarely worn. By the 1800s it became 
                                    common for male children to wear hair bows tying hair at the nape of 
                                    the neck.</p>

                                <p>Women throughout the 19th century wore hair ornaments and hats,
                                    but the hair bow only really achieved widespread popularity in
                                    the 20th century before the second world war.</p>
                                <p>The hair bow today most commonly projects ideas of innocence linked to children
                                    and a concept of femininity as linked to qualities of gentleness, softness and 
                                    compliance.</p>
                                <p>It may be precisely because the hair bow projects such ideals that it has also 
                                    been employed as a means of empowerment for both female and male bodies.</p>
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Luxe for ladies</span>
                                </h2>
                                <p>Bows have come back into fashion in the last few years: worn by the Duchess of Cambridge, 
                                    Kate Middleton, and well-heeled celebrities like Nicole Kidman, Jessica Chastain
                                    and Margot Robbie.</p>
                                <p>The symbolism has been extended to high-end consumerism, with some bow-wearers repurposing 
                                    the characteristic decorations on Chanel, Dior and Chloe shopping bags for their hair.</p>
                                <p>Though we’ve seen many man buns, the trend of hair bows for men has yet to return, and it may
                                    be some time before the bow transitions from necktie to men’s heads. If it does have a resurgence,
                                    we’ll know it’s nothing new.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Sunday
                                    <span class="ms-auto">Closed</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Monday
                                    <span class="ms-auto">10:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Tuesday
                                    <span class="ms-auto">10:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Wednesday
                                    <span class="ms-auto">10:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Thursday
                                    <span class="ms-auto">10:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Friday
                                    <span class="ms-auto">10:00 AM to 8:00 PM</span>
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    Saturday
                                    <span class="ms-auto">11:00 AM to 5:00 PM</span>
                                </li>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>Boulevard Carol I No. 11</strong>
                                    <br />
                                    Iasi, Romania
                                </em>
                            </p>
                            <div align='center'>
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.15029911506!2d27.568982719644218!3d47.17449379401374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20%E2%80%9EAlexandru%20Ioan%20Cuza%E2%80%9D!5e0!3m2!1sro!2sro!4v1685458181012!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <p class="mb-0">
                                <small><em>Call Anytime</em></small>
                                <br />
                                (317) 585-8468
                            </p>
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

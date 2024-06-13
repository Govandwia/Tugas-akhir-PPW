<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGLABS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/image.png" type="image/icon type">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo"><img src="assets/images/image.png" alt="logo" height="30px"/></div>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-md">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="homePage.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/shopPage.php">Shop</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/brandsPage.php">Brands</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="icons">
                        <div class="icon"><a href="config/login.php"><img src="assets/images/profile.svg" height="25px"/></a></div>
                        <div class="icon"><a href="pages/cartPage.php"><img src="assets/images/cart.svg" height="25px"/></a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hero-text">FIND YOUR <br>DREAM <br>LAPTOP</h1>
                    <p class="hero-par">Explore Our Curated Selection of Exquisite <br>Laptops Meticulously Tailored to <br>Your Unique Needs and Preferences</p>
                    <button class="shop-btn"><a href="pages/shopPage.php">Shop Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><span class="numbers" id="counter1"></span><span class="desc-number"><br>International Brands</span></p>
                </div>
                <div class="col-md-4">
                    <p><span class="numbers" id="counter2"></span><span class="desc-number"><br>High-Quality Products</span></p>
                </div>
                <div class="col-md-4">
                    <p><span class="numbers" id="counter3"></span><span class="desc-number"><br>Happy Customers</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands-section">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/amd.svg" class="brand-logo"/></div>
            </div>
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/asus.png" class="brand-logo"/></div>
            </div>
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/acer.png" class="brand-logo"/></div>
            </div>
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/nvidia.svg" class="brand-logo"/></div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/intel.svg" class="brand-logo"/></div>
            </div>
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/msi.svg" class="brand-logo"/></div>
            </div>
            <div class="col-md-3">
                <div class="brand"><img src="assets/images/lenovo.svg" class="brand-logo"/></div>
            </div>
            </div>
        </div>
    </section>

    <!-- Background Video -->
    <section class="vbg">
        <video autoplay loop muted class="video-bg">
            <source src="assets/images/video.mp4" type="video/mp4">
        </video>
    </section>

    <!-- Most Sold Products Section -->
    <section class="container">
        <div class="title">
            <h1 class="title-text">MOST SELLED PRODUCTS</h1>
        </div>
        <div class="products-list">
            <ul class="row">
                <?php 
                    require_once "includes/database.php" ;

                    $quer = "SELECT * FROM product WHERE ProductID IN (11,12,13,14,15)";
                    $stm = $connect->query($quer) ;
                    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($result as $row) { $url = $row["ImageURL"] ;?>
                        <!-- displaying product card -->
                        <li class="col-md-10">
                            <a href="pages/productDetailPage.php?ID=<?php echo"$row[ProductID]"?>" >
                            <div class="product-item">
                                <div><img src="<?php echo $url?>" alt="product" class="prd-img"/></div>
                                <p class="pr-name"><?php echo $row["ProductName"]?></p>
                                <img src="assets/images/rating.svg" alt="rating">
                                <p class="pr-price"><?php echo $row["OldPrice"]?> $</p>  
                            </div>
                            </a>
                        </li>
                    
                    <?php }?>
            </ul>
        </div>

        <div class="btn-div">
            <button class="btn"><a href="">View All</a></button>
        </div>
    </section>

    <!-- Feedbacks Section -->
    <hr style="width: 90%;">
    <section class="container">
        <div class="title">
            <h1 class="title-text">OUR HAPPY COSTUMERS</h1>
        </div>
        <div class="Feedbacks">
            <ul class="row">
                <li class="col-md-4">
                    <div class="feedback">
                        <div><img src="assets/images/rating.png" alt="rating"/></div>
                        <div style="display: flex;align-items: center;">
                            <h3>Brahmi Saif eddin</h3>
                            <img src="assets/images/check.svg" alt="" height="20px"/>
                        </div>
                        <p>As someone new to building PCs, I was a bit intimidated by the process at first. However, the ecommerce website for PC components made it incredibly simple. The user-friendly layout, combined with helpful guides and recommendations, gave me the confidence to select the right components for my needs.”</p>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="feedback">
                        <div><img src="assets/images/rating.png" alt="rating"/></div>
                        <div style="display: flex;align-items: center;">
                            <h3>Chebbi Med Ayoub</h3>
                            <img src="assets/images/check.svg" alt="" height="20px"/>
                        </div>
                        <p>"Shopping for PC components has never been easier! With a vast selection of high-quality products and seamless navigation, I was able to find everything I needed to build my dream gaming rig. The website's intuitive interface made browsing through different categories a breeze"</p>
                    </div>
                </li>
                <li class="col-md-4">
                    <div class="feedback">
                        <div><img src="assets/images/rating.png" alt="rating"/></div>
                        <div style="display: flex;align-items: center;">
                            <h3>Nguira Mohamed</h3>
                            <img src="assets/images/check.svg" alt="" height="20px"/>
                        </div>
                        <p>I've been a loyal customer of SetUpSprint for years, and for good reason. Not only does it offer an extensive range of PC components, but the customer service is also top-notch. Whenever I have a question or need assistance with my order, the support team is always quick to respond and goes above and beyond to ensure my satisfaction.”</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <img src="assets/images/image.png" alt="logo" height="30px" />
                <p>Explore Our Curated Selection of Exquisite Laptops Meticulously Tailored to Your Unique Needs and Preferences</p>
                <div class="socials"><a href="https://github.com/AhmedTrb/E-commerce-web-project"><img src="assets/images/Social.svg" alt="socials"/></a></div>
            </div>
            <div class="footer-item">
                <p class="title">Company</p>
                <ul>
                    <li>About</li>
                    <li>Features</li>
                    <li>Works</li>
                    <li>Career</li>
                </ul>
            </div>
            <div class="footer-item">
                <p class="title">Help</p>
                <ul>
                    <li>Costumer Support</li>
                    <li>Delivery Details</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="footer-item">
                <p class="title">FAQ</p>
                <ul>
                    <li>Account</li>
                    <li>Manage Deliveries</li>
                    <li>Orders</li>
                    <li>Payments</li>
                </ul>
            </div>
        </div>
        <hr style="width: 90%;">
        <div class="flex-items">
            <p class="copyrights" >Shop.co © 2000-2023, All Rights Reserved</p>
            <div class="flex">
                <img src="assets/images/visa.svg" alt="visa"/>
            </div> 
        </div>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photography Site</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css">
</head>

<body>

    <!-- header -->
    <header class="header">
        <div class="nav-section">
            <div class="brand-and-navBtn">
                <span class="brand-name">
                        VRworld
                    </span>
                <span class="navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
            </div>

            <!-- navigation menu -->
            <nav class="top-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php" class="active">Gallery</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <span class="search-icon">
                    <i class = "fas fa-search"></i>
                </span>
        </div>

        <div class="container about">
            <div class="about-content">
                <div class="about-img flex">
                    <img src="images/abhishek.png" alt="photographer img">
                </div>
                <h2>I'm Abhishek</h2>
                <h3>Photographer | Traveller</h3>
                <blockquote>
                    "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                    <span>-Aaron Siskind</span>
                </blockquote>
            </div>

            <div class="social-icons">
                <ul>
                    <li>
                        <a href="#"><i class = "fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class = "fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class = "fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class = "fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main -->
    <section class="section-three">
        <div class="container">
            <div class="gallery">
                <a href="images/yes.jpg">
                    <div class="single-img">
                        <img src="images/yes.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/hello.jpg">
                    <div class="single-img">
                        <img src="images/hello.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/img3.jpg">
                    <div class="single-img">
                        <img src="images/img3.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/gallery4.jpg">
                    <div class="single-img">
                        <img src="images/gallery4.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/img4.jpg">
                    <div class="single-img">
                        <img src="images/img4.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/img6.jpg">
                    <div class="single-img">
                        <img src="images/img6.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/me.png">
                    <div class="single-img">
                        <img src="images/me.png" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/gallery8.jpg">
                    <div class="single-img">
                        <img src="images/gallery8.jpg" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>

                <a href="images/me2.png">
                    <div class="single-img">
                        <img src="images/me2.png" alt="gallery image">
                        <div class="single-img-content">
                            <h3>Beautiful Work</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- end of main -->


    <!-- footer -->
    <footer class="footer">
        <div class="footer-container container">
            <div>
            <h2>ABHISHEK</h2>
                <p>“Photography for me is not looking, it’s feeling. If you can’t feel what you’re looking at, then you’re never going to get others to feel anything when they look at your pictures.”</p>
            </div>
            <div>
                <h3>Free Subscription!</h3>
                <p>just varify your email and get free subscription for free access to our blogs and pictures . Put your email in the following box and after varification we allow you to access by sending and id to your mail .  if you are interested then please subscribe to our page.</p>

                <div class="subs">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" placeholder="Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <p>&copy;Copyright Abhishek-samari . Awesome photography</p>
    </footer>
    <!-- end of footer -->

    <!-- LIGHTBOX -->
    <script src="simplelightbox-master/dist/simple-lightbox.js"></script>

    <script src="script.js"></script>
</body>

</html>
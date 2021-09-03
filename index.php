<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photography Site</title>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
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
                <h3>Photographer | Traveller </h3>
                <blockquote>
                    "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                    <span>-Aaron Siskind</span>
                </blockquote>
            </div>

            <div class="social-icons">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/abhishek.samari/"><i class = "fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/abhishek_samari"><i class = "fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/abix3k/"><i class = "fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/abhisheks5214/_saved/"><i class = "fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main -->
    <section class="section-one">
        <div class="container">
            <div class="sec-one-left">
                <!-- image here -->
                <div>
                    <h3>Lorem ipsum dolor sit amet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos suscipit ut aliquid ab illo. Repellat nam molestias repellendus perspiciatis blanditiis.</p>
                    <a href="#" class="btn">view all</a>
                </div>
            </div>

            <div class="sec-one-right">
                <div class="work-content">
                    <h3>AMAZING TEAM WORK WITH PROFESSIONAL PHOTOGRAPHER</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ducimus laboriosam facilis repudiandae neque minus in corrupti consequatur illum placeat nam libero adipisci quidem doloribus, numquam eius delectus quaerat omnis illo
                        earum necessitatibus natus soluta deserunt iusto. Modi, soluta quos.</p>
                    <a href="#" class="btn">view all</a>
                </div>
                <div class="work-imgs">
                    <div class="work-img-1">
                        <!--image here-->
                    </div>
                    <div class="work-img-2">
                        <!-- image here -->
                    </div>
                </div>
                <h3>"Taking an image, freezing a moment, reveals how rich reality truly is."</h3>
            </div>
        </div>
    </section>

    <section class="section-two">
        <div class="container">
            <h2>FOLLOW ON INSTAGRAM</h2>
            <span>@abix3k</span>
            <div class="insta-imgs">
                <div>
                    <img src="images/me24.png">
                    <div class="icon-overlay flex">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div>
                    <img src="images/me23.png">
                    <div class="icon-overlay flex">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div>
                    <img src="images/m22.png">
                    <div class="icon-overlay flex">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div>
                    <img src="images/mm.png">
                    <div class="icon-overlay flex">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
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
                <p>just varify your email and get free subscription for free access to our blogs and pictures . Put your email in the following box and after varification we allow you to access by sending and id to your mail .  if you are interested then please subscribe to our page. </p>

                <div class="subs">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" placeholder="Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </div>
            </div>
        </div>
        <p>&copy; Copyright Abhishek-samari . Awesome photography</p>
    </footer>
    <!-- end of footer -->


    <script src="script.js"></script>
</body>

</html>
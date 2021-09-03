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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
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
    <section class="section-five">
        <div class="container">
            <div class="contact-top">
                <h3>CONTACT ME</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nobis.</p>
            </div>

            <div class="contact-middle">
                <div>
                    <span class="contact-icon">
                            <i class = "fas fa-map-signs"></i>
                        </span>
                    <span>Address</span>
                    <p>panna , india</p>
                </div>

                <div>
                    <span class="contact-icon">
                            <i class = "fas fa-phone"></i>
                        </span>
                    <span>Contact Number</span>
                    <p>+91 9109775735</p>
                </div>

                <div>
                    <span class="contact-icon">
                            <i class = "fas fa-paper-plane"></i>
                        </span>
                    <span>Email Address</span>
                    <p>abhishek.samari1211@gmail.com</p>
                </div>

                <div>
                    <span class="contact-icon">
                            <i class = "fas fa-globe"></i>
                        </span>
                    <span>Website</span>
                    <p>www.VRworld.com</p>
                </div>
            </div>

            <div class="contact-bottom">
                <form class="form" method="post" action="connect.php">
                    <input type="text" name="name" id="name" placeholder="Your Name">
                    <input type="email" name="email" id="email" placeholder="Your Email">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <textarea rows="9" name="message" id="message" placeholder="Message"></textarea>
                    <input type="submit" name="submit" id="log" class="btn" value="Submit">
                </form>








                <!-- Map -->
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509916.01527587!2d-123.79730890241156!3d37.18431437946637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2snp!4v1595133867574!5m2!1sen!2snp"
                        width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                <p>just varify your email and get free subscription for free access to our blogs and pictures . Put your email in the following box and after varification we allow you to access by sending and id to your mail .  if you are interested then please subscribe to our page.</p>

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
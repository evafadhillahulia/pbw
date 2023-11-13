<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_about.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="icon" href="image/iconweb.png">
        <title>About Shop</title>
    </head>
    <head>
        <header>
            <a href="index.html" class="logo">Ostyle Shop</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="product.html" class="">Product</a></li>
                    <li><a href="http://localhost/UAS_PBW_4107_14283/about.php" class="">About</a></li>
                    <li><a href="http://localhost/UAS_PBW_4107_14283/guest_book.php" class="active">Guest Book</a></li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".menu-toggle").click(function(){
                    $(".menu-toggle").toggleClass("active")
                    $("nav").toggleClass("active")
                })
            })
        </script>
        <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63359.139250994755!2d110.39354535595771!3d-7.015609564684393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sKota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1671953019318!5m2!1sid!2sid" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </head>
    <body>
        <footer>
            <div class="main-content">
                <div class="left box">
                    <h2>ABOUT ME</h2>
                    <div class="content">
                        <p>Ostyle Shop is a catalog website that sells various kinds of the latest fashion at 
                            affordable prices and premium quality, comfortable and suitable for formal and non-formal events.
                            Not only that, Ostyle also provides discounts for those of you who often shop at the store
                            Not only that, Ostyle also provides discounts for those of you who often shop at the store
                        </p>
                        <div class="medsos">
                            <a href="https://www.instagram.com/evaafadila"><span class="fab fa-instagram"></span></a>
                            <a href="https://www.youtube.com/channel/UC0lOoZ3AE_3Vkqt8gGBYBpQ"><span class="fab fa-youtube"></span></a>
                            <a href="https://www.tiktok.com/@evaafadila?_t=8YSy4nhoRAf&_r=1"><span class="fab fa-tiktok"></span></a>
                        </div>
                    </div>
                </div>
                <div class="center box">
                    <h2>LOCATION</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Kec.Ngaliyan Kota Semarang, Jawa Tengah</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">(+62) 823-1370-7906</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">evafadhillahulia@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="right box">
                    <h2>CONTACT US</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email* </div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">Massage*</div>
                                <textarea rows="2" cols="25" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footerbottom">
            <div class="copyright">
                 <h4 style="margin-top: 0px;"><br> &copy 2022 Ostyle Shop by Eva </br></h4>
            </div>
        </div>
    </body>
</html>
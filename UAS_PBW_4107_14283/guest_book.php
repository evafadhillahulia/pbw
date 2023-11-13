<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_guestbook.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="icon" href="image/iconweb.png">
        <title>Guest Book</title>
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
    </head>
    <body>
    <div class="form-tamu" style="min-height: 400px;">
        <div class="form-tamu-content">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label>
                    <center><h1 style="color: #069370">Guest Book</h1></center>
                    <span>Full Name :</span>
                    <input name="nama" type="text" placeholder="Ex: Eva Fadhillah"/>
                </label>
                <label>
                    <span>Address :</span>
                    <input type="text" name="alamat" placeholder="Ex: Jalan Nakula"/>
                </label>
                <label>
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="Ex: evafadilla@gmail.com"/>
                </label>
                <label>
                    <span>Massage :</span>
                    <textarea name="pesan" id="pesan" cols="30" rows="10"></textarea>
                </label>
                <button type="submit" class="button">Submit</button>
                <button type="reset" class="button-orange">Reset</button>
            </form>
        </div>
        </div>
        <div class="form-tamu">
            <div class="form-tamu-content">
                <div class="form-tamu-title">
                    <h1 style="color: #069370">Form Table</h1>
                    <table class="table">
                        <tr>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Massage</th>    
                            </tr>
                            <?php
                            if(isset($_POST['nama'])){
                                echo "
                                <tr>
                                    <td>".$_POST['nama']."</td>
                                    <td>".$_POST['alamat']."</td>
                                    <td>".$_POST['email']."</td>
                                    <td>".$_POST['pesan']."</td>
                                </tr>
                             ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <footer>
            <div class="footertop">
                <div class="medsos">
                    <ul>
                        <li><a href="https://www.instagram.com/evaafadila"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC0lOoZ3AE_3Vkqt8gGBYBpQ"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.tiktok.com/@evaafadila?_t=8YSy4nhoRAf&_r=1"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footerbottom">
                <div class="copyright">
                    <h4 style="margin-top: 0px;"><br> &copy 2022 Ostyle Shop by Eva </br></h4>
                </div>
            </div>
        </footer>
    </body>
</html>
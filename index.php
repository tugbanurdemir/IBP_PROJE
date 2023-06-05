<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | As you travel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- owl -->
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>
<body>
    
    <section id="menu">
        <div id="logo">As you travel</div>
        <nav>
            <a href=""><i class="fa-solid fa-house ikon"></i>Home</a>
            <a href=""><i class="fa-solid fa-circle-info ikon"></i>About Us</a>
            <a href=""><i class="fa-solid fa-panorama ikon"></i>Gallery</a>
            <a href=""><i class="fa-solid fa-location-dot ikon"></i>Location</a>
            <a href=""><i class="fa-solid fa-phone ikon"></i>Contact</a>
        </nav>
    </section>


    <section id="home">
        <div id="black">

        </div>

        <div id="contents">
            <h2>As you travel</h2>
            <hr width="300" align="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque accusantium libero odio ab facilis dolore, porro reprehenderit doloremque delectus cum! Voluptatibus doloribus atque mollitia a quibusdam, est quam odit ipsam.</p>

        </div>
    </section>


    <section id="about">

        <h3>About Us</h3>
        <div class="container">
            <div id="left">
                <h5 id="h5left">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, provident.dolor sit amet consectetur adipisicing elit.
                </h5>
            </div>
            <div id="right">
                <span>L</span>
                <p id="pright">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A corporis voluptatem illo distinctio in inventore ea commodi excepturi natus doloribus, esse ipsa numquam recusandae alias nisi! Laboriosam tempore reprehenderit.dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            <img src="img/kısım2.jpg" alt="" class="img-fluid mt100">

            <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus magnam odit? Iusto minus dicta quisquam, voluptatum quo deleniti vitae totam tenetur rerum perferendis illum veniam autem consequatur, nemo laudantium.</p>

        </div>
    </section>

    <section id="gallery">
        <div class="container">

            <h3>Gallery</h3>

            <div class="owl-carousel
            owl-theme">

                <div class="card item" data-merge=1.5>
                    <img src="img/pexels-andrew-neel-3201763.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">
                            Room1
                    </h5>
                        
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/pexels-dmitry-zvolskiy-2062431.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">
                            Room2
                    </h5>
                        
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/pexels-pixabay-271624.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">
                            Room3
                    </h5>
                        
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/pexels-pixabay-271643.jpg" alt="" class="img-fluid">
                    <h5 class="baslikcard">
                            Room4
                    </h5>
                        
                </div>



            </div>

        </div>
    </section>


    <section id="location">
        <div class="container">
            <h3 id="locationh3">Location</h3>
            <iframe id="map" src="https://www.google.com/maps/d/embed?mid=1H0fRq5cTemSMLIs_8wOY4phPWQDp1gU&ehbc=2E312F" width="640" height="480"></iframe>
                <h5 id="kon"><a id="ik" href=""><i class="fa-solid fa-location-dot ikon"></i></a>Location as you travel  | 
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Officia, atque.consectetur adipisicing elit.</h5>
         </div>
    </section>

    <section id="contact">
        <div class="container">
            <h3 id="contacth3">Contact</h3>
<!-- -------- -->
            <form action="" method="post">
            <div id="contactopak">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="name" placeholder="Name Surname" required class="form-control">
                        <input type="text" name="tel" placeholder="Telephone Number" required class="form-control">
                    </div>
                    <div id="rightform">
                        <input type="email" name="mail" placeholder="E-mail Adress" required class="form-control">
                        <input type="text" name="topic" placeholder="Topic Title" required class="form-control">
                    </div>
                    <textarea name="message" placeholder="Your Message" id="" cols="30" rows="10" required class="form-control"></textarea>
                    <input type="submit" value="Send" name="send">
                </div>
                <div id="cont">
                    <h4 id="conttopic">Contact : </h4>
                    <p class="contp">Mehmet Akif Ersoy Mah.</p>
                    <p class="contp">Akyıldız Caddesi</p>
                    <p class="contp">Oğuz Bey sokak No:123</p>
                    <p class="contp">0212 999 99 99</p>
                    <p class="contp">E-mail: asyoutravel@.com</p>
                </div>
            </div>
<!-- ------- -->
            </form>
            <footer>

                <div id="copyright">2023 | All Right Reserved</div>
                <div id="socialfooter">
                    <a href="#"><i class="fab fa-facebook social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram social"></i></a>
                </div>

                <a href="#menu"><i class="fas
                    fa-angle-up" id="up"></i></a>

            </footer>

        </div>

    </section>
   
    <script
  src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
  integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
  crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>


    <script src="owl/script.js"></script>
</body>
</html>




<?php

include("connection.php");

// İSSET KOMUTU VERİ VAR MI KONTROLÜ SAĞLIYOR.
if(isset($_POST["send"]))
// ($_POST["name"], $_POST["tel"], $_POST["mail"], $_POST["topic"], $_POST["message"]))

{
    $username=$_POST["name"];
    $telephone=$_POST["tel"];
    $email=$_POST["mail"];
    $topic=$_POST["topic"];
    $message=$_POST["message"];


    $ekle="INSERT INTO `contact` (`id`, `namesurname`, `telephone`, `email`, `topic`, `message`) 
    VALUES (NULL, '".$_POST["name"]."', '".$_POST["tel"]."', '".$_POST["mail"]."', '".$_POST["topic"]."', '".$_POST["message"]."');";

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('mesajınız başarıyla gönderilmiştir')</script>";
    }
    else{
        echo "<script>alert('mesajınız gönderilirken bir hata oluştu')</script>";
    }

}

?>
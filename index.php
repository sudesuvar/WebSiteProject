<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@200&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>

<body>

    <section id="menu">
        <div id="logo">S O F T W A R E</div>
        <nav>
            <a href="#"><ion-icon name="home" class="icon"></ion-icon>Anasayfa</a>
            <a href="#"><ion-icon name="information" class="icon"></ion-icon>Hakkımızda</a>
            <a href="#"><ion-icon name="school" class="icon"></ion-icon>Eğitimler</a>
            <a href="#"><ion-icon name="people" class="icon"></ion-icon>Ekip</a>
            <a href="#"><ion-icon name="mail" class="icon"></ion-icon>İletişim</a>
        </nav>
    </section>

    <section id="banner">
        <div id="content">
            <h2>Başlık</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel laborum earum obcaecati harum temporibus
                molestiae magnam eligendi sint veritatis mollitia aliquid tenetur eaque non, eos dolore ducimus unde
                delectus incidunt.</p>
        </div>
    </section>

    <section id="aboutUs">
        <h3>HAKKIMIZDA</h3>
        <div class="container">
            <div id="leftPanel">
                <h4 id="h4left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, earum. </h4>
            </div>
            <div id="rightPanel">
                <p id="pRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aspernatur aliquam
                    mollitia architecto praesentium, veritatis facere impedit eos. Consequatur iure in officia quos id
                    non eum sapiente tempore, inventore perferendis.</p>
            </div>
            <img src="img/software.jpg" alt="" class="img-fluid mt100">
            <p id="pEnd">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perferendis mollitia aspernatur
                beatae sed natus minima saepe nisi deleniti a. Autem aliquam sit accusantium voluptatibus sunt facilis
                quae nam quos!</p>
        </div>
    </section>

    <section id="educations">
        <div class="container">
            <h3>EĞİTİMLER</h3>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.4>
                    <img src="img/education.jpg" alt="" class="img-fluid">
                    <h5 class="titleCard">HTML ve CSS Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="card item" data-merge=1.4>
                    <img src="img/education3.jpg" alt="" class="img-fluid">
                    <h5 class="titleCard">PHP ve SQL Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="card item" data-merge=1.4>
                    <img src="img/education2.jpg" alt="" class="img-fluid">
                    <h5 class="titleCard">SİBER GÜVENLİK Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="card item" data-merge=1.4>
                    <img src="img/education1.jpg" alt="" class="img-fluid">
                    <h5 class="titleCard">KOTLİN Eğitimi</h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>

            </div>

        </div>
    </section>

    <section id="team">
        <div class="container">
            <h3 id="teamh3">EKİP</h3>
            <div class="left-right">
                <img src="img/team1.jpg" alt="" class="img-fluid oval">
                <h4 class="teamName">SUDE DENİZ</h4>
                <p class="teamp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, incidunt.</p>
                <div class="team-icon">
                    <a href="#"><ion-icon name="logo-instagram" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github" class="social"></ion-icon></a>
                </div>
            </div>
            <div class="middle">
                <img src="img/team.jpg" alt="" class="img-fluid oval">
                <h4 class="teamName">MUSTAFA KEMAL</h4>
                <p class="teamp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, incidunt.</p>
                <div class="team-icon">
                    <a href="#"><ion-icon name="logo-instagram" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github" class="social"></ion-icon></a>
                </div>
            </div>
            <div class="left-right">
                <img src="img/team2.jpg" alt="" class="img-fluid oval">
                <h4 class="teamName">KÜBRA CEYHUN</h4>
                <p class="teamp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, incidunt.</p>
                <div class="team-icon">
                    <a href="#"><ion-icon name="logo-instagram" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github" class="social"></ion-icon></a>
                </div>
            </div>
        </div>
    </section>

    <section id="communication">
        <div class="container">
            <h3 >İLETİŞİM</h3>
            <form action="index.php" method="post">
            <div id="opaque">
                <div id="formGroup">
                   <div id="leftForm">
                    <input class="form-control" type="text" name="name" placeholder="Ad Soyad">
                    <input class="form-control" type="text" name="telephone" placeholder="Telefon Numarası">
                   </div>
                   <div id="rightForm">
                    <input class="form-control" type="text" name="mail" placeholder="E-mail">
                    <input class="form-control" type="text" name="title" placeholder="Konu Başlığı">
                   </div>
                   <textarea name="Message" class="form-control" cols="30" rows="10" placeholder="Mesajınız"></textarea>
                   <input type="submit" name="" value="Gönder"  class="inputBtn" >
                </div>
                <div id="address">
                        <h4>Adres:</h4>
                        <p>Mustafa Kemal paşa mah.</p>
                        <p>---- Caddesi</p>
                        <p>----- Sokak No:11</p>
                        <p>0547 513 7465</p>
                        <p>sudesuvar51@gmail.com</p>
                </div>
            </div>
            </form>
            <footer>
                <div id="copyRight">Tüm Hakları saklıdır.</div>
                <div id="socialFooter">
                    <a href="#"><ion-icon name="logo-instagram" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-linkedin" class="social"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-github" class="social"></ion-icon></a>
                </div>
                <a href="#menu"><ion-icon name="arrow-round-up"></ion-icon></a>
            </footer>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="jscript.js"></script>
</body>

</html>


<?php
include("connection.php");
if(isset($_POST["name"], $_POST["telephone"],  $_POST["mail"], $_POST["title"], $_POST["Message"])){
    $nameSurname=$_POST["name"];
    $telephone=$_POST["telephone"];
    $email= $_POST["mail"];
    $title=$_POST["title"];
    $message=$_POST["Message"];
    
    $add="INSERT INTO communication(nameSurname, telephone, email, title, message) VALUES ('".$nameSurname."','".$telephone."','".$email."','".$title."','". $message."')";

    if($connect ->query($add)===TRUE){
        //echo "<script>alert('Mesajınız gönderilmişstir.')</script>";
        echo "mesajınız gönderildi.";
    }
}
?>
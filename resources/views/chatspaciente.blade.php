<!DOCTYPE html>
<html lang="en">

<head>

    <title>Chats Pacientes</title>
    <link rel="icon" href="img/MO.png">
    <meta charset="utf-8">
    <!-- Fontwashom stylesheet css file -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <!-- Main stylesheet css file -->
    <link rel="stylesheet" type="text/css" href="css/chatspaciente.css">
</head>

<body>
    <section class="mobileSection">

        <header class="haderSection">
            <div class="imageAndText">
                <div class="imagesDiv">
                    <a class="profileLink" href="">
                        <img class="profileImages" src="img/cardoc1.jpg">
                    </a>
                    <h1 class="nameText">
                        <a id="profileNameShow" class="profileLink" href="">Mercedes Martinez</a>
                    </h1>
                </div>
            </div>
            <div class="collIcon">
                <ul>
                    <li><i class="fa-solid fa-phone"></i></li>
                    <li><i class="fa-solid fa-video"></i></li>
                </ul>
            </div>
        </header>


        <section class="mainContent">
            <div class="meText">

                <!-- <div class="postMe">
      <div></div>
      <div class="textDiv">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>
     </div>


     <div class="postYour">
      <div class="textDiv">
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
       <div class="imagesDivMini">
        <a class="profileLink"  href="">
         <img class="profileImages" src="images/user/mail.jpg">
        </a>
       </div>
      </div>
     </div>

     <div class="postMe">
      <div></div>
      <div class="textDiv">
       <p class="likeiconPost">
        <i class="fa-solid fa-thumbs-up likePost"></i>
       </p>
      </div>
     </div> -->


            </div>
        </section>


        <footer class="footerSection">
            <div class="iconSite">
                <ul>
                    <li><i class="fa-solid fa-circle-plus"></i></li>
                    <li><i class="fa-solid fa-camera"></i></li>
                    <li><i class="fa-solid fa-image"></i></li>
                    <li><i class="fa-solid fa-microphone"></i></li>
                </ul>
            </div>
            <div class="inputText">
                <div class="inputTextDiv">
                    <input id="inputPostText" type="text" placeholder="Aa">
                    <i class="fa-solid fa-face-smile"></i>
                </div>
                <i id="likePost" class="fa-solid fa-thumbs-up likeBtn"></i>
                <i id="textSubmit" class="fa-solid fa-circle-chevron-right likeBtn disNone"></i>
            </div>
        </footer>

    </section>

    <audio id="audioTon">
        <source src="audio/messenger.mp3" type="audio/mp3">
    </audio>

    <script src="js/chatspaciente.js"></script>
</body>

</html>

<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->

   <!-- jquery link -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap');

:root{
   --main-color:#8e44ad;
   --red:#e74c3c;
   --light-color:#666;
   --light-bg:#f5f5f5;
   --black:#2c3e50;
   --white:#fff;
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.2rem solid var(--black);
}

*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

body{
   background-color: var(--light-bg);
}

body{
  font-family: montserrat;
}

/* navbar */


nav{
  background: var(--main-color);
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
a.active,a:hover{
  background: var(--black);
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){
  .checkbtn{
    display: block;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }
}

/* navbar end */

section{
   padding:2rem;
   margin: 0 auto;
   max-width: 1200px;
}

.heading{
   text-align: center;
   font-size: 3rem;
   color:var(--black);
   text-transform: capitalize;
   margin-bottom: 2rem;
}

.message{
   position: sticky;
   top: 2rem;
   margin: 0 auto;
   margin-bottom: 2rem;
   border-radius: .5rem;
   background-color: var(--white);
   border:var(--border);
   box-shadow: var(--box-shadow);
   padding:1.5rem 2rem;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
   z-index: 1000;
   max-width: 1200px;
   animation: fadeIn .4s cubic-bezier(.3,1.41,.4,1.46);
}

@keyframes fadeIn {
   0%{
      transform: scale(.5) translateY(1rem);
   }
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   cursor: pointer;
   font-size: 2.5rem;
   color:var(--red);
}

.message i:hover{
   color:var(--black);
}

.btn,
.option-btn{
   display: block;
   width: 100%;
   margin-top: 1rem;
   padding:1rem 3rem;
   cursor: pointer;
   font-size: 1.8rem;
   border-radius: .5rem;
   color:var(--white);
   text-align: center;
   text-transform: capitalize;
}

.btn{
   background-color: var(--main-color);
}

.language-btn {
   width: 150px;
   margin: 10px;
}

.option-btn{
   background-color: var(--black);
}

.btn:hover{
   background-color: var(--black);
}

.option-btn:hover{
   background-color: var(--main-color);
}

.form-container form{
   margin:0 auto;
   max-width: 50rem;
   border: var(--border);
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   padding:1.5rem;
   padding-top: 1rem;
}

.form-container form p{
   padding-top: 1rem;
   font-size: 1.8rem;
   color:var(--light-color);
}

.form-container form p span{
   color:var(--red);
}

.form-container form .box{
   width: 100%;
   border-radius: .5rem;
   background-color: var(--light-bg);
   padding: 1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   margin:1rem 0;
   border: var(--border);
}

.playlist .filter-container {
   display: flex;
   justify-content: center;
   margin: 20px;
   
}

.playlist .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 27rem);
   gap:1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.playlist .box-container .box{
   border: var(--border);
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
}

.playlist .box-container .boxUpload{
   border: var(--border);
   border-radius: .5rem;
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   text-align: center;
}


.playlist .box-container .box .album{
   margin:2rem;
   border-radius: 50%;
   object-fit: contain;
   height: 15rem;
   width: 15rem;
}

.playlist .box-container .box .name{
   font-size: 2rem;
   color:var(--black);
}

.playlist .box-container .box .artist{
   margin: .5rem 0;
   font-size: 1.8rem;
   color:var(--main-color);
}

.playlist .box-container .box .language{
   font-size: 2rem;
   color:var(--black);
}

.playlist .box-container .box .flex{
   margin-top: 1.5rem;
   border-top: var(--border);
   display: flex;
}

.playlist .box-container .box .flex > *{
   flex:1;
   padding:1.5rem;
   font-size: 1.6rem;
   cursor: pointer;
}

.playlist .box-container .box .flex a{
   border-left: var(--border);
}

.playlist .box-container .box .flex i{
   margin-right: .8rem;
   color:var(--main-color);
}

.playlist .box-container .box .flex span{
   color:var(--light-color);
}

.playlist .box-container .more-btn{
   padding: 1.5rem;
}

.playlist .box-container .more-btn .btn{
   margin-top: 0;
}

.music-player{
   display: none;
   align-items: center;
   justify-content: center;
   padding: 2rem;
   position: fixed;
   top:0; left:0; right: 0; bottom: 0;
   background-color: rgba(0,0,0,.5);
   z-index: 1000;
}

.music-player.active{
   display: flex;
}

.music-player .box{
   background-color: var(--white);
   border-radius: .5rem;
   width: 40rem;
   text-align: center;
}

.music-player .box .album{
   margin: 2rem;
   height: 15rem;
   width: 15rem;
   border-radius: 50%;
   animation: beat 2s cubic-bezier(.3,1.41,.4,1.46) infinite;
}

@keyframes beat {
   0%, 100%{
      transform: scale(.9);
   }50%{
      transform: scale(1);
   }
}

.music-player .box .name{
   font-size: 2rem;
   color:var(--black);
}

.music-player .box .artist{
   margin:.5rem 0;
   font-size: 1.8rem;
   color:var(--main-color);
}

.music-player .box .language{
   font-size: 2rem;
   color:var(--black);
}

.music-player .box .music{
   border-top: var(--border);
   width: 100%;
   margin-top: 1rem;
}

.music-player .box .music::-webkit-media-controls-enclosure{
   background:none;
   border-radius: 0;
}

.music-player #close{
   position: absolute;
   top:2rem; right: 2.5rem;
   cursor: pointer;
   color:var(--white);
   font-size: 5rem;
   transition: .2s linear;
}

.music-player #close:hover{
   transform: rotate(90deg);
}

   </style>

</head>
<body>
   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
         <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Music library</label>
      <ul>
         <li><a class="active" href="#">Home</a></li>
         <li><a href="index.php">Favourite</a></li>
         
         <li><a href="index.php">Login</a></li>
      </ul>
   </nav>

<section class="playlist">

   <h3 class="heading">music playlist</h3>

   <div class = "filter-container">
      <div class="btn language-btn" data-filter="All">All</div>
      <div class="btn language-btn" data-filter="Tamil">Tamil</div>
      <div class="btn language-btn" data-filter="Sinhala">Sinhala</div>
      <div class="btn language-btn" data-filter="English">English</div>
      <div class="btn language-btn" data-filter="Others">Others</div>
   </div>
   <div class="box-container">

   <?php
      $select_songs = $conn->prepare("SELECT * FROM `songs`");
      $select_songs->execute();
      if($select_songs->rowCount() > 0){
         while($fetch_song = $select_songs->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box <?= $fetch_song['language']; ?>">
      <?php if($fetch_song['album'] != ''){ ?>
         <img src="views/uploaded_album/<?= $fetch_song['album']; ?>" alt="" class="album">
      <?php }else{ ?>
         <img src="images/disc.png" alt="" class="album">
      <?php } ?>
      <div class="name"><?= $fetch_song['name']; ?></div>
      <div class="artist"><?= $fetch_song['artist']; ?></div>
      <div class="language"><?= $fetch_song['language']; ?></div>
      <div class="flex">
         <div class="play" data-src="views/uploaded_music/<?= $fetch_song['music']; ?>"><i class="fas fa-play"></i><span>play</span></div>
         <a href="views/uploaded_music/<?= $fetch_song['music']; ?>" download><i class="fas fa-download"></i><span>download</span></a>
      </div>
   </div>
   <?php
    }
   }
   ?>
   

   </div>

</section>












<div class="music-player">

   <i class="fas fa-times" id="close"></i>

   <div class="box">
      <img src="" class="album" alt="">
      <div class="name"></div>
      <div class="artist"></div>
      <div class="language"></div>
      <audio src="" controls class="music"></audio>
   </div>

</div>






<!-- custom js file link  -->
<script type="text/javascript">
   

      const languagebtns = document.querySelectorAll('.language-btn');
      
      languagebtns.forEach(languagebtn =>{
         languagebtn.addEventListener('click', function(){

               const value = languagebtn.getAttribute('data-filter');
               console.log(value);
               if (value=='All'){
                      $('.box').show('1000');

                  }
                  else{
                    $('.box').not('.'+value).hide('1000');
                    $('.box').filter('.'+value).show('1000');
                  }
         });
               
      });
   


   let playBtn = document.querySelectorAll('.playlist .box-container .box .play');
   let musicPlayer = document.querySelector('.music-player');
   let musicAlbum = musicPlayer.querySelector('.album');
   let musicName = musicPlayer.querySelector('.name');
   let musicArtist = musicPlayer.querySelector('.artist');
   let musiclanguage = musicPlayer.querySelector('.language');
   let music = musicPlayer.querySelector('.music');

   playBtn.forEach(play =>{

      play.onclick = () =>{
         let src = play.getAttribute('data-src');
         let box = play.parentElement.parentElement;
         let name = box.querySelector('.name');
         let album = box.querySelector('.album');
         let artist = box.querySelector('.artist');
         let language = box.querySelector('.language');
      

         musicAlbum.src = album.src;
         musicName.innerHTML = name.innerHTML;
         musicArtist.innerHTML = artist.innerHTML;
         musiclanguage.innerHTML = language.innerHTML;
         music.src = src;

         musicPlayer.classList.add('active');

         music.play();

      }

   });

   document.querySelector('#close').onclick = () =>{
      musicPlayer.classList.remove('active');
      music.pause();
   }

</script>
   
</body>
</html>
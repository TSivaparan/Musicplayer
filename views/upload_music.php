<?php

include 'connect.php';

if(isset($_POST['submit'])){
   $user_id = 1;
   // $user_id = $_SESSION['user_id'];
   
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $artist = $_POST['artist'];
   $artist = filter_var($artist, FILTER_SANITIZE_STRING);
   $language = $_POST['language'];


   if(!isset($artist)){
      $artist = '';
   }

   $album = $_FILES['album']['name'];
   $album = filter_var($album, FILTER_SANITIZE_STRING);
   $album_size = $_FILES['album']['size'];
   $album_tmp_name = $_FILES['album']['tmp_name'];
   $album_folder = 'views/uploaded_album/'.$album;

   if(isset($album)){
      if($album_size > 2000000){
         $message[] = 'album size is too large!';
      }else{
         move_uploaded_file($album_tmp_name, $album_folder);
      }
   }else{
      $album = '';
   }

   $music = $_FILES['music']['name'];
   $music = filter_var($music, FILTER_SANITIZE_STRING);
   $music_size = $_FILES['music']['size'];
   $music_tmp_name = $_FILES['music']['tmp_name'];
   $music_folder = 'views/uploaded_music/'.$music;

   if($music_size > 200000000){
      $message[] = 'music size is too large!';
   }else{
      $upload_music = $conn->prepare("INSERT INTO `songs`(user_id, name, language, artist, album, music) VALUES(?,?,?,?,?,?)");
      $upload_music->execute([$user_id, $name, $language, $artist, $album, $music]);
      move_uploaded_file($music_tmp_name, $music_folder);
      $message[] = 'new music uploaded!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>upload music</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<section class="form-container">

   <h3 class="heading">upload music</h3>

   <form action="" method="POST" enctype="multipart/form-data">
      <p>music name <span>*</span></p>
      <input type="text" name="name" placeholder="enter music name" required maxlength="100" class="box">
      <p>Language</p>
      <select name="language" class="box">
         <option value="Others" selected >Others</option>
         <option value="Tamil">Tamil</option>
         <option value="Sinhala">Sinhala</option>
         <option value="English">English</option>
      </select>
      <p>artist name</p>
      <input type="text" name="artist" placeholder="enter artist name" required maxlength="100" class="box">
      <p>select music <span>*</span></p>
      <input type="file" name="music" class="box" required accept="audio/*">
      <p>select album</p>
      <input type="file" name="album" class="box" accept="image/*">
      
      <input type="submit" value="upload music" class="btn" name="submit">
      <a href="../index.php" class="option-btn">go to home</a>
   </form>

</section>

</body>
</html>
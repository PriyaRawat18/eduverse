<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">all courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>

   </div>

</section>

<!-- courses section start -->
<section class="courses">
        <h1 class="heading">our courses</h1>
        <div class="box-container">
            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-2.jpg" alt="">
                    <div>
                        <h3>Abhinav Pathak</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-1.png" class="thumb" alt="">
                <h3 class="title">complete HTML tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-3.jpg" alt="">
                    <div>
                        <h3>Nidhi Jaiswal</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-2.png" class="thumb" alt="">
                <h3 class="title">complete CSS tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-4.jpg" alt="">
                    <div>
                        <h3>Priya Rawat</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-3.png" class="thumb" alt="">
                <h3 class="title">complete JS tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>
            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-5.jpg" alt="">
                    <div>
                        <h3>Snadeep Rathod</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-4.png" class="thumb" alt="">
                <h3 class="title">complete Bootstrap tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-6.jpg" alt="">
                    <div>
                        <h3>harshita Gupta</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-5.png" class="thumb" alt="">
                <h3 class="title">complete JQeury tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-7.jpg" alt="">
                    <div>
                        <h3>Yash mathpal</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-6.png" class="thumb" alt="">
                <h3 class="title">complete SASS tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-8.jpg" alt="">
                    <div>
                        <h3>Naman sharma</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-7.png" class="thumb" alt="">
                <h3 class="title">complete PHP tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-9.jpg" alt="">
                    <div>
                        <h3>Anuj Gautam</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-8.png" class="thumb" alt="">
                <h3 class="title">complete MySQL tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>

            <div class="box">
                <div class="tutor">
                    <img src="./images/pic-1.jpg" alt="">
                    <div>
                        <h3>Sharaddha Khapra</h3>
                        <span>21-25-2023</span>
                    </div>
                </div>
                <img src="./images/thumb-9.png" class="thumb" alt="">
                <h3 class="title">complete React tutorial</h3>
                <a href="./playlist.html" class="inline-btn">view playlist</a>
            </div>
        </div>

        
        
    </section>
    <!-- courses section ends -->




<!-- courses section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
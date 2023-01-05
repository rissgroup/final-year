<?php include 'header.php';?>
<?php $name=$_GET['course_name'];?>
<?php

$conn = mysqli_connect('localhost','root','','capstone') or die(mysqli_error());
											$course_query = mysqli_query($conn,"select * from courses where course_name = '$name'")or die(mysqli_error());
											while($row = mysqli_fetch_array($course_query)){
											$id = $row['id'];
											
                      $image =$row['course_image'];
                      $course_name =$row['course_name'];
                      $course_code =$row['course_code'];
                      $course_rating =$row['course_rating']; 
                      $course_description =$row['course_description'];
                      $course_hours =$row['course_hours'];
                      $course_monrth =$row['course_month'];
                      $course_mod =$row['course_mod'];
                      
                      
                      } ?> 


<!-- about us page  section starts  -->
<section class="web" id="web">
    <h2><?php echo $name;?></h2>
</section>
<section id="course-inner">
    <div class="overview">
        <img class="course-img" src="./userpanel/admin/<?php echo $image?>" alt="">
        <div class="course-head">
            <div class="c-name">
                <h3><?php echo  $course_name;?></h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p><?php echo  $course_description; ?></p>
            </div>
        </div>
        <h3>Instructor</h3>
        <div class="tutor">
          <img src="" alt="">
          <div class="tutor-det">
            <h5>Ali Raza</h5>
            <p>web developer at Google</p>
          </div>
        </div>
        <hr><br><br>
        <h3>Course Overview</h3>
        <p>Web development is the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private network) .Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services. A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development. <br><br>
          Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding. Web development may use content management systems (CMS) to make content changes easier and available with basic technical skills. For larger organizations and businesses, Web development teams can consist of hundreds of people (Web developers) and follow standard methods like Agile methodologies while developing Web sites. Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician.<br><br>
           Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of Web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers are responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers.</p>
           <hr>
        <h3>What you will learn in this course</h3>
        <div class="learn">
          <p><i class="far fa-check-circle"></i> Breif introduction of web development</p>
          <p><i class="far fa-check-circle"></i> importance of web development</p>
          <p><i class="far fa-check-circle"></i> web development tool and technique</p>
          <p><i class="far fa-check-circle"></i> languages of web development</p>
          <p><i class="far fa-check-circle"></i> practice work of course</p>
          <p><i class="far fa-check-circle"></i> framework for web development</p>
        </div>
    </div>
    <div class="enroll">
      <h3>This course include:</h3>
          <p><i class="far fa-video"></i><?php echo  $course_hours; ?> video hours</p>
          <p><i class="far fa-newspaper"></i> 75 articles</p>
          <p><i class="far fa-cloud-download"></i> downloadable resources</p>
          <p><i class="far fa-infinity"></i> full life time access</p>
          <p><i class="far fa-mobile-alt"></i> access on laptop and  mobile</p>
          <p><i class="far fa-paperclip"></i> assingments</p>
          <p><i class="far fa-trophy-alt"></i>certificate of complation</p>
            <a href="#"><button class="btn">Enroll Now</button></a>
    </div>
</section>
<?php include 'footer.php';?>
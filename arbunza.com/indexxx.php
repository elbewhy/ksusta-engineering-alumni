<!-- Created by Abubakar Ruwa Bunza--> 
<?php
// Include the dbconnection.php file
include_once('dbconnection.php');

// Fetch data from the "users" table
$sql_users = "SELECT * FROM users";
$query_users = $dbh->prepare($sql_users);
$query_users->execute();
$userData = $query_users->fetch(PDO::FETCH_ASSOC);

// Fetch data from the "education" table
$sql_education = "SELECT * FROM education";
$query_education = $dbh->prepare($sql_education);
$query_education->execute();
$educationData = $query_education->fetchAll(PDO::FETCH_ASSOC);

// Fetch data from the "frontend_courses" table
$sql_frontend_courses = "SELECT * FROM frontend_courses";
$query_frontend_courses = $dbh->prepare($sql_frontend_courses);
$query_frontend_courses->execute();
$frontendCoursesData = $query_frontend_courses->fetchAll(PDO::FETCH_ASSOC);

// Fetch data from the "backend_courses" table
$sql_backend_courses = "SELECT * FROM backend_courses";
$query_backend_courses = $dbh->prepare($sql_backend_courses);
$query_backend_courses->execute();
$backendCoursesData = $query_backend_courses->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Abubakar Ruwa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../images/lby.png">
    <style>
    body{
        background-color:black;
    }
         .jumbotron img {
            height: 150px;
            width: 150px;
            background-color: black;
        }
       
  </style>
</head>
<body>
    <header>
        <div class="user">
            <div class="jumbotron jumbutron-fluid">
                <img class="img-fluid rounded-circle" src="images/lby.jpg">
            </div>
           <h1 class="name">Abubakar Ruwa</h1>
           <p class="post">Fullstack Developer</p>
        </div>
       <nav class="navbar">
        <ul>
            <li><a class="nav-link" href="#home">Home</a></li>
            <li><a class="nav-link" href="#about">About</a></li>
            <li><a class="nav-link"href="#education">Education</a></li>
          <!--  <li><a href="#portfolio">Portfolio</a></li> -->
            <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        </nav>
    </header>

    <div id="menu" class="fa fa-bars"></div>
  
    <section class="home" id="home">
  <br /><br />
  <h3>Greetings!</h3>
  <h1>I am <span>Abubakar Ruwa</span></h1>
  <p>A self-taught Fullstack Developer with a passion for web development. My journey in this field began in 2020, and since then, I have honed my skills in HTML, CSS, JavaScript, SQL, and PHP, achieving a high level of fluency in these technologies.
  </p>
  <p>
Learning to code has been an immensely enjoyable journey, filled with moments of fun and joy. Beyond the pleasure it brings, this experience has equipped me with invaluable problem-solving skills and boosted my confidence in discussing technical matters with others. With these newfound abilities, I am determined to create even more coding projects and leverage them to secure promising career opportunities, Insha'Allah.
</p>  

  <p>I take pride in my work and have showcased some of my impressive projects on my <a class="nav-link text-yellow" href="#">GitHub Repositories.</a>I invite you to explore and review my projects to get a better sense of my abilities and the quality of my work.
  </p>
  <a href="#about"><button class="btn">Discover More About Me <i class="fa fa-user"></i></button></a>
</section>


<section class="about" id="about">
        <h1 class="heading"><span>about</span> me</h1>
        <div class="row">
            <div class="info">
                <!-- Display user information -->
                <h3><span>name:</span><?php echo $userData['name']; ?></h3>
                <?php   // Format: 'YYYY-MM-DD'
$dateOfBirth = $userData['age'];
$birthDate = date_create($dateOfBirth);
$today = date_create();
$ageInterval = date_diff($birthDate, $today);
$age = $ageInterval->y; ?>
                <h3><span>age:</span><?php echo $age; ?></h3>
                <h3><span>qualifications:</span><?php echo $userData['qualifications']; ?></h3>
                <h3><span>post:</span><?php echo $userData['post']; ?></h3>
                <h3><span>languages:</span><?php echo $userData['languages']; ?></h3>
                <a href="#">
                    <button class="btn">Download CV 
                <i class="fa fa-download"></i>
             </button>
            </a>
        </div>

        <div class="counter">

            <div class="box">
                <span>3+</span>
                <h3>years of experience</h3>
            </div>

           <div class="box">
                <span>30+</span>
                <h3>projects Developed <br>& <br> underdevelop</h3>
            </div>
            

            <div class="box">
                <span>5+</span>
                <h3> Happy Clients</h3>
            </div>
            

            <div class="box">
                <span>8+</span>
                <h3>certificates received</h3>
            </div>
        </div>
    </div>
</section>

<section class="education" id="education">
    <h1 class="heading">my <span>education</span></h1>
      <div class="box-container">
                <!-- Loop through and display education data -->
                <?php foreach ($educationData as $education): ?>
                    <div class="box">
                        <i class="fa fa-graduation-cap"></i> 
                        <span><?php echo $education['start_year'] . '-' . $education['end_year']; ?></span>
                        <h3><?php echo $education['school_name']; ?></h3>
                        <p><?php echo $education['description']; ?></p>
                    </div>
                <?php endforeach; ?>

        </div>
</section>
<!--

<section class="portfolio" id="portfolio">
    <h1 class="heading">my <span>portfolio</span></h1>
    <div class="box-container">

        <div class="box">
            <h1>Portfolio 1</h1>
            <H1>Portfolio 2</H1>
            <h1>portfolio 3</h1>
            <h1>portfolio 4</h1>
        </div>
    </div>
-->

</section>
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> me</h1>

    <div class="row">

        <div class="content">

            <h3 class="title">Contact Info</h3>
            <div class="info">
                <h3><i class="fa fa-envelope"></i>abubakarruwa60@gmail</h3>
                <h3><i class="fa fa-phone"></i>+234 706 225 5636</h3>
                <h3><i class="fa fa-phone"></i>+234 903 399 7208</h3>
                <h3><i class="fa fa-map-marker"></i>wuroyasi area, Bunza, Kebbi State, Nigeria.</h3>
            </div>
        </div>
        <form action="mailto:abubakarruwa60@gmail.com" method="post">

            <input type="text" class="box" placeholder="name">
            <input type="email" class="box" placeholder="email">
            <input type="text" class="box" placeholder="projects">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn">Send <i class="fa fa-paper-plane "></i></button>
        </form>
    </div>


</section>
<hr>
<footer class="bg-dark" style="height: 60px;">
<div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <div class="copyright">
                         <p class=" text-center text-lg " style="height: 20px; font-size:x-large; color:gold">
                         Copyright &copy; <?php echo date('Y');?> Abubakar Ruwa Bunza
                         </p>
                        </div>
                  </div>                  
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script type="text/javaScript" src="script.js"></script>
</body>
</html>
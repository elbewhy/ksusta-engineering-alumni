<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
        $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
         foreach ($query as $key => $value) {
          if(!is_numeric($key))
            $_SESSION['system'][$key] = $value;
        }
    ob_end_flush();
    include('header.php');

	
    ?>

    <style>
    	header.masthead {
		  background: url(admin/assets/img/download.jpg);
		  background-repeat:round;
		  
      padding-top: 100px
		}
    
  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}
#viewer_modal .modal-dialog {
        width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
  #viewer_modal .modal-content {
       background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }
  body, footer {
    background: #000000e6 !important;
}
 

a.jqte_tool_label.unselectable {
    height: auto !important;
    min-width: 4rem !important;
    padding:5px
}

.wide-screen{
     display:inline-block;
     font-family: "montserrat", sans-serif;
  }
  .narrow-screen{
    display: none;
  }
@media  (max-width:990px){
  .wide-screen{
     display:none;
  }
  .narrow-screen{
    display: inline-block;
    font-family: "montserrat", sans-serif;
    }
 }
 .topbar {
  position: relative;
}

.description-overlay {
  opacity: 0;
  pointer-events: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 1000;
  transition: opacity 0.3s;
}

.description-overlay.active {
  opacity: 1;
  pointer-events: auto;
}
.description-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center; /* Or your desired text alignment */
  max-width: 800px; /* Adjust this value as needed */
  overflow: auto; /* Add scrollbars if content overflows */
  max-height: calc(100% - 40px); /* Adjust the value based on your design */
  padding: 20px; /* Add padding to improve readability */
  background-color: white; /* Add a background color for contrast */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);  
}
/*
.description-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
}
*/

#close-button {
  background-color: black;
  border: 1px solid black;
  padding: 5px 10px;
  cursor: pointer;
}
.hanging-punctuation {
  text-align: justify;
  line-height: 1.5;
}

.hanging-punctuation::first-line {
  margin-left: -0.5em; 
}


    </style>
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top py-3" id="">
            <div class="container navbar-light">
            <a class="navbar-brand js-scroll-trigger" href="./"><img src="assets/favicon.png" height="50px" width="50px"></a>
                <a class="navbar-brand js-scroll-trigger text-light wide-screen" href="./"><?php echo $_SESSION['system']['name'] ?></a>
                <a class="navbar-brand js-scroll-trigger text-light narrow-screen" href="./">K-Eng Alumni</a>
                <div class="topbar">
  <img id="founder-image" src="assets/lby.jpg" height="70px" width="70px" alt="Founder Image">
</div>

<div class="description-overlay" id="description-overlay">
  <div class="description-content">
    <div>
    <img id="founder-image" src="assets/lby.jpg" height="70px" width="70px" alt="Founder Image">
    </div>
    <h2 class="wide-screen">Founder of KSUSTA Engineering Alumni</h2>
    <h3 class="narrow-screen">Founder</h3>
    <p class="hanging-punctuation narrow-screen">
      Meet Abubakar Ruwa, an exceptional individual from the ICT department of KSUSTA University. 
      Hailing from Kebbi State, specifically Bunza local Government, Abubakar Ruwa is a proud 
      member of the class of 2023 in the Faculty of Engineering. His dedication and contributions 
      have played a significant role in shaping the ICT landscape at KSUSTA and beyond. Notably, 
      Abubakar Ruwa stands out as the driving force behind the development of the ICT depatment's website
       as his final year project.
    </p>
    <p class="hanging-punctuation wide-screen">
      Introducing Abubakar Ruwa, an exceptional individual who has left an indelible mark 
      on the KSUSTA Engineering community. Hailing from the picturesque locale of Bunza in Kebbi State, 
      Abubakar's journey in the Faculty of Engineering culminated in the class of 2023. 
      His remarkable contributions and visionary leadership have significantly shaped 
      the landscape of technology and innovation at KSUSTA.</p>
    
      <p class="hanging-punctuation wide-screen">
      Notably, Abubakar Ruwa stands out as the driving force behind the development of the ICT depatment's website
       as his final year project. This comprehensive platform stands as a testament to his proficiency and dedication 
       in merging cutting-edge technology with practical solutions. Through this endeavor, he has bridged the gap between 
       academia and technology, making information accessible to all members of the Engineering community.</p>
    
       <p class="hanging-punctuation wide-screen">
      His journey in the ICT department has been one of relentless pursuit of excellence. From early coding endeavors 
      to late-night debugging sessions, Abubakar's determination has been unwavering. His innovative mindset has not only 
      empowered his fellow students but has also paved the way for future generations of KSUSTA engineers.</p>
    
      <p class="hanging-punctuation wide-screen">
      Beyond his technical prowess, Abubakar remains deeply connected to his roots. Growing up in Bunza, he carries the 
      spirit of his hometown with him in every endeavor. His accomplishments serve as an inspiration to young minds across 
      Kebbi State, showing them that with dedication and hard work, they too can make a lasting impact on their communities.</p>
    
      <p class="hanging-punctuation wide-screen">
      As we honor Abubakar Ruwa's contributions to the KSUSTA Engineering Alumni, we celebrate his achievements and recognize
       his role as a trailblazer in the realm of technology and education. His legacy continues to shine brightly, guiding 
       the way for future innovators and leaders.</p>
        <button id="close-button" class="text-light">Close</button>
  </div>
</div>

                <a class="navbar-brand js-scroll-trigger narrow-screen" href="./"><img src="assets/nuesa-removebg-preview.png" height="50px" width="50px"></a>
              
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=alumni_list">Alumni</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=gallery">Gallery</a></li>
                        <?php if(isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=careers">Jobs</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=forum">Forums</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="index.php?page=about">About</a></li>
                        <?php if(!isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger text-light" href="#" id="login">Login</a></li>
                        <?php else: ?>
                        <li class="nav-item">
                          <div class=" dropdown mr-4">
                              <a href="#" class="nav-link js-scroll-trigger text-light"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                  <a class="dropdown-item " href="index.php?page=my_account" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                  <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                          </div>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                    &nbsp;&nbsp;  &nbsp;

 
                    <a class="navbar-brand js-scroll-trigger wide-screen" href="./"><img src="assets/nuesa-removebg-preview.png" height="50px" width="50px"></a>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-righ t"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  <div id="preloader"></div>
        <footer class=" py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 text-white">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-white"><?php echo $_SESSION['system']['contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <a class="d-block" href="mailto:<?php echo $_SESSION['system']['email'] ?>"><?php echo $_SESSION['system']['email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Copyright  &copy; <?php echo date('Y'); ?> <?php echo $_SESSION['system']['name'] ?> <br>Developed By <a href="arbunza.com/index.php">Abubakar Ruwa Bunza</a></div> </div>
         <!--div class="founder wide-screen" id="founder">
                  <a class="navbar-brand js-scroll-trigger text-light" href="./arbunza.com/index.php"><img class="img" src="assets/lby.jpg" height="70px" width="70px"></a>
                 <p onclick="showAlert(); return false;" class="text-light" id="founderText"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;Founder</p>
                        </div -->

          </footer>
        
       <?php include('footer.php') ?>
       
    </body>
    <script type="text/javascript">
      $('#login').click(function(){
        uni_modal("Login",'login.php')
      })
    </script>
    <?php $conn->close() ?>
    <script type="text/javascript">
  function showAlert() {
  // Show the "Hide" alert
  alert('Hide');
  // Hide the div on OK or Cancel click
  hideDiv();
}

function hideDiv() {
  var founder = document.getElementById('founder');
  founder.style.display = 'none';
}

    </script>
<script>
 const founderImage = document.getElementById('founder-image');
const descriptionOverlay = document.getElementById('description-overlay');
const closeButton = document.getElementById('close-button');

founderImage.addEventListener('click', toggleDescriptionOverlay);
founderImage.addEventListener('touchstart', toggleDescriptionOverlay);

closeButton.addEventListener('click', toggleDescriptionOverlay);

function toggleDescriptionOverlay() {
  descriptionOverlay.classList.toggle('active');
}


</script>
</html>

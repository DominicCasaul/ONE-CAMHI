<!DOCTYPE html>
<html>

<head>

    <!-- <link rel="stylesheet" href="/ONE-CAMHI-USB/news/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../BootstrapCSS//bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/samplee.css">

    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery-min.js"></script>
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->




</head>
<style>
.nav {
    font-family: sans-serif
}

.slider-container {
    width: 100%;
    position: relative;
    overflow: hidden;
    height: 300px;
    /* Adjust height as needed */
}

.slide {
    width: 100%;
    height: 100%;
    position: absolute;
    /* transition: opacity 1s ease-in-out ; */
}

.slide img {
    width: 100%;
    height: 100%;
    /* position: absolute;
    transition: opacity 1s ease-in-out ; */
}

.slide.active {
    opacity: 1;
}

.slide-text {
    position: absolute;
    bottom: 20px;
    left: 20px;
    color: white;
    font-size: 18px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slide.active .slide-text {
    opacity: 1;
}

@keyframes slideAnimation {
    0% {
        left: 0;
    }

    25% {
        left: 0;
    }

    /* No movement for 25% of the animation */
    50% {
        left: -100%;
    }

    100% {
        left: -100%;
    }
}

.slide:nth-child(1) {
    animation: slideAnimation 15s infinite;
}

.slide:nth-child(2) {
    animation: slideAnimation 15s infinite 7.5s;
    /* animation: slideAnimation 15s infinite; */
    /* Delay start by half of the animation duration */
}


.offcanvas {
    z-index: 1040;
    /* Increase the z-index to overlay the main content */
}


body {
    font-size: 16px;
}
@media (min-width:768px) {
    body {
        font-size: 18px;
    }
}
@media (min-width:1024px) {
    body {
        font-size: 19px;
    }
}
@media (min-width:1280px) {
    body {
        font-size: 20px;
    }
}

/* Define the animation */
@keyframes slide-in-right-to-left {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(0);
  }
}

/* Apply animation to the image */
.animated-picture {
  animation: slide-in-right-to-left 1s ease forwards;
  width: auto; /* Allow the image to adjust its width based on its natural size */
  height: auto; /* Allow the image to adjust its height based on its natural size */
  max-width: 100%; /* Ensure the image does not exceed the container's width */
  display: block; /* Ensure the image is treated as a block element */
}

/* Container styling */
.picture-container {
  overflow: hidden; /* Ensures the image doesn't overflow its container */
  max-width: 100%; /* Ensure the container adjusts to fit the image's dimensions */
}



</style>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 m-0">



        <a class="navbar-brand" href="#"><img src="../home/image/logo.png" alt="DBK Logo" height="72"></a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="front">
            <p class="font-weight-bold text-white fs-2 fw-bolder mb-0">
                CAMARINES SUR NATIONAL HIGH SCHOOL
            </p>
            <p class="fst-italic text-white navvv mt-0 front">
                Basta taga-CAMHI, Matibay!
            </p>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="../home/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../contact/index.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="../geninfo/index.php">About CamHi</a>
                </li>
                <a class="navbar-brand" href="../admin/index.php"><img src="../home/image/profile.png" alt="DBK Logo"
                        height="40"></a>

                        
                
            </ul>


        </div>

    </nav>
    <br><br> <div class="picture-container">
  <img src="/ONE-CAMHI-USB/home/image/csnhs.png" class="animated-picture" alt="Animated Picture">
</div>

    <br><br>

    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both
                    scrolling & backdrop</button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                </div>

    <!-- 

<div class="container text-center">
    <div class="row">
    <span class="fs-1 fw-bolder">
        NEWS
    </span>
    


    <div class="card col" style="width: 18rem;">
        <img src="../home/image/csnhs.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>
    
    <div class="card col-md-2" style="width: 18rem;">
        <img src="../home/image/logo.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>
    
    <div class="card col-md-2" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>


    </div>
</div> -->

    <!-- 

<br><br><br>
<div class="container text-center">
    <div class="row">
    <span class="fs-1 fw-bolder">
        ANNOUNCEMENTS
    </span>
    


    <div class="card col" style="width: 18rem;">
        <img src="../home/image/csnhs.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>
    
    <div class="card col" style="width: 18rem;">
        <img src="../home/image/logo.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>
    
    </div>
    
    <br>
    <div class="row">
    
     
    <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>

     
    <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>

       
    
    <div class="card col" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">MODAL</a>
        </div>
    </div>
    </div> 

</div> -->
    <br><br><br><br><br><br><br>


    <!-- <div class="slider-container">
        <div class="slide">
            <img src="../home/image/csnhs.jpg" alt="Slide 1">
            <div class="slide-text text-primary">Text for Slide 1</div>
        </div>
        <div class="slide">
            <img src="../home/image/jmyijtym.jpg" alt="Slide 2">
            <div class="slide-text">Text for Slide 2</div>
        </div>
    </div>
    </div> -->
    <!-- 
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="../home/image/csnhs.jpg" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <img src="../home/image/jmyijtym.jpg" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div> -->
    <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> -->
    <!-- </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->


    <table style="width:100%" id="news" class="table">
        <thead>
            <tr>
                <th>ContentID</th>
                <th>Title</th>
                <th>Content</th>
                <th>PublicationDate</th>
                <th>AdminID</th>
                <th>ImageURL</th>
                <th>TemplateNo</th>


        </thead>
        <tbody>
        </tbody>
    </table>

<script type="text/javascript" src="../news/js/news.js"></script>
<script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
</body>
<!-- <html> -->

</html>
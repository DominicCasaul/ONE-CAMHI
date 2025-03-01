<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/ONE-CAMHI-USB/admin/css/home.css">
    <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/form.css">
    <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../home/css/sample.css">


    <script type="text/javascript" src="../admin/js/jquery-min.js"></script>
    <script type="text/javascript" src="../admin/js/popper.min.js"></script>
    <script type="text/javascript" src="../admin/js/jquery-confirm.js"></script>
    <script type="text/javascript" src="../admin/js/bootstrap.min.js"></script>

    <title>Home Page</title>
</head>

<style>
.bg1 img {
    background-image: linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5));
}

p {
    margin: 0;
}

#navfront {
    font-family: 'Poppins', sans-serif;
}

.navvv {
    font-family: 'Times New Roman', Times, serif;
    margin-left: 0%;
}

.navv {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.pinakataas {
    background-color: linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5));
    background-size: cover;
}

.carousel-caption {
    left: 10% !important;
}

h6,
h1 {
    color: white;
    margin-left: 20%;

}

h6 {
    color: skyblue;
    margin-top: 30%;
}

.huhuhu {
    margin-bottom: 13%;
    margin-left: 3%;
}

.homeee {
    opacity: 50%;
    margin-left: 30%;
}

.homeee :hover {
    opacity: 150%;
}

.off {
    opacity: 50%;
}

.logoo {
    margin-left: 1%;
}

.aktibo {
    margin-left: 30%;
}

.adminFE {
    margin-top: 3%;

}
.bgg{
    background-color: rgba(255, 255, 255, 0.5);
    padding-top: 3%;
    padding-right: 3%;
    padding-left: 3%;
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
.kulay{
    background-color:#293c91;
}

.hhh{
    white-space: nowrap; 
  width: 50px; 
  overflow: hidden;
  text-overflow: "----"; 
 
 
}
</style>

<body class="makisamakapls">

    <nav class="navbar navbar-expand-lg navbar-dark kulay p-0 m-0">

        <a class="navbar-brand logoo" href="#"><img src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logo.png"
                alt="DBK Logo" height="72"></a>
        
        <div>
            <p class="text-white fs-5 fw-bold mb-0 ">
                CAMARINES SUR NATIONAL HIGH SCHOOL
            </p>
            <p class="fst-italic text-white navvv mt-0">
                Basta taga-CAMHI, Matibay!
            </p>
        </div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto fs-6 ">
                <li class="nav-item p-2">
                    <a class="nav-link mx-2 active fw-bolder px-2" aria-current="page"
                        href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php"><img class="aktibo"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png" alt="DBK Logo" height="20"
                            margin-left="30%"> <br>
                        Home</a>
                </li>
                <li class="nav-item p-2">

                    <a class="nav-link mx-2 fw-bolder   px-2"
                        href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Contact.html.php"><img class="off aktibo"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo" height="24"><br>
                        Contact</a>
                </li>
                <li class="nav-item p-2">

                    <a class="nav-link abt fw-bolder " href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Geninfo.html.php">
                        <img class="aktibo off" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png"
                            alt="DBK Logo" height="20"> <br> About
                        CamHi</a>
                </li class="nav-item p-2">
                <a class="navbar-brand adminFE" href="../admin/index.php"><img src="../home/image/admin.png"
                        alt="DBK Logo" height="50"></a>
                </p>
                </button>
            </ul>
        </div>
        </div>
    </nav>


    <!-- 
    <div class="pinakataas">
        <div class="row" id="frontier">
            <div class="col-lg-8 text-start">
                <div class="hs-subtitle">
                    <h6 class="front">
                        Camarines Sur National High School
                    </h6>
                </div>
                <div class="hs-title mt-50 fw-bolder">
                    <h1 class="front">
                        "EDUCATION FOR A TOTAL MAN"
                    </h1>

                </div>
            </div>


        </div>

    </div>
     -->

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item hahah active bg-1" data-bs-interval="5000">
                <img src="../home/image/Landing.png" class="w-100 animated-picture" alt="Slide 2">
                <div class="row" id="frontier position-relative">
                    <div class="hs-subtitle carousel-caption d-none d-md-block ">
                      
                            <h1 class="front col-md-5 fs-4 animated-picture ">
                                "Education for the Total Man"
                            </h1>
                       
                    </div>
                </div>


            </div>


            <div class="carousel-item" data-bs-interval="5000">
                <div class="pinakataas row ">
                    <img src="../home/image/csnhs.png" class="w-100" alt="Slide 2">
                    <div class="carousel-caption d-none col-8 justify-content-center d-md-block huhuhu">
                        <h6 class="text-center fw-bolder fs-2"></h6>
                        <h1 class="fw-bold text-center animated-picture">
                            "HAYSKULANO AKO, ORGULYONG CIUDADANO!
                      
                        </h1>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <br><br>

    <template id="FirstNews">
        <div class="card col bgg" style="width: 18rem;">
            <img src="../home/image/csnhs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">MODAL</a>
            </div>
        </div>
    </template>

    <template id="SuccedingNews">
        <div class="card col-md-2" style="width: 18rem;">
            <img src="../home/image/logo.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">MODAL</a>
            </div>
        </div>
    </template>




    <div class="container">
        <p class="fs-1 fw-bolder text-center ">
     RECENT NEWS
        </p>
        <div class="row gap-3">
            <div class="col bgg " id="firstPost">
                <div class="row">
                    <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                </div>
                <div class="row">
                    <h3 class="text-center " id="title">Title</h3>
                </div>
                <div class="row">
                    <p id="content" class="hhh">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                        soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                        facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                </div>
                <div class="row mt-3">
                    <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                </div>
            </div>
            <div class="col-3 h-75 bgg " id="SecondPost">
                <div class="row">
                    <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                </div>
                <div class="row">
                    <h3 class="text-center " id="title">Title</h3>
                </div>
                <div class="row">
                    <p id="content" class="text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                        soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                        facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                </div>
                <div class="row mt-3">
                    <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                </div>
            </div>
            <div class="col-3">
                <div class="bgg" id="ThirdPost">
                    <div class="row">
                        <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                    </div>
                    <div class="row">
                        <h3 class="text-center " id="title">Title</h3>
                    </div>
                    <div class="row ">
                        <p id="content" class="text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                            soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                            facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                    </div>
                    <div class="row mt-3">
                        <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                    </div> <br><br>
                </div>
                <div class="align-self-end mt-5 d-flex justify-end">
                    <a type="button" href="../HTMLPage/News.php" class="btn btn-danger bg-primary w-5">See More</a>
                </div>
            </div>
            
 
        </div>
        

    </div>



    <br><br><br>
    <div class="container ">
        <div class="row">
            <p class="fs-1 fw-bolder text-center">
                RECENT ANNOUNCEMENTS

            </p>
           
        </div>


        <div class="row gap-3">


            <div class="col bgg" id="firstPostAnnouncement">
                <div class="row">
                    <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                </div>
                <div class="row">
                    <h3 class="text-center " id="title">Title</h3>
                </div>
                <div class="row">
                    <p id="content" class="hhh">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                        soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                        facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                </div>
                <div class="row mt-3">
                    <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                </div>
            </div>


            <div class="col-3 h-75 bgg p-5" id="SecondPostAnnouncement">
                <div class="row">
                    <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                </div>
                <div class="row">
                    <h3 class="text-center " id="title">Title</h3>
                </div>
                <div class="row">
                    <p id="content" class="text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                        soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                        facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                </div>
                <div class="row mt-3">
                    <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                </div>
            </div>


            <div class="col-3 h-75 bgg p-5" id="ThirdPostAnnouncement">
                <div class="bgg">
                    
                </div>
                <div class="row">
                    <img src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                </div>
                <div class="row">
                    <h3 class="text-center " id="title">Title</h3>
                </div>
                <div class="row">
                    <p id="content" class="text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus,
                        soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis
                        facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                </div>
                <div class="row mt-3">
                    <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                
                </div>  
           </div>
                   <div class="align-self-end mt-5 d-flex justify-end">
                    <a type="button" href="../HTMLPage/Announcement.html.php" class="btn btn-danger bg-primary w-5">See
                        More</a>

            </div>
        </div>


    </div> <br>

    <footer class="bg-body-tertiary text-center  kulay text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-light text-uppercase fw-bold">Mission</h5>

                    <p class="text-light">
                        The Camarines Sur National High School as the first national high school in the province,
                        provides quality basic education that is equitably accessible to all. It also lays down the
                        foundation for lifelong learning and total development of man through the Basic Education
                        Curriculum (BEC), Special Program in the Arts (SPA), Engineering and Science Education Project
                        (ESEP), Special Program in Sports (SPS), Family Farm Curriculum (FFC) and Strengthened Technical
                        Vocational Education Program (STVEP).
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class=" text-light text-uppercase fw-bold">Vision</h5>

                    <p class="text-light">

                        The Camarines Sur National High School turns out students who have profound love for God, great
                        respect of country and fellow human being. It also envisions every learner to be responsible and
                        highly productive citizens, functionally literate, equipped with lifelong skills, aware of the
                        environment and deeply involved in it's concerns, appreciative of the arts and sports, and
                        imbued with the desirable values of a TOTAL MAN.
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 text-light kulay">
            <p class="text-light fs-4 fw-bold">ONE-CAMHI: An Innovative Information Website of Camarines Sur National High School</p>
            <p class="text-light">
                Official creation of the group of Casaul, Verdejo, Calisura, Villaflor
            </p>
    </footer>


    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
    <script type="text/javascript" src="/ONE-CAMHI-USB/JS/sweetalert.js"></script>



</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../admin/css/home.css">
    <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/form.css">
    <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../home/css/sample.css">


    <script type="text/javascript" src="../admin/js/jquery-min.js"></script>
    <script type="text/javascript" src="../admin/js/popper.min.js"></script>
    <script type="text/javascript" src="../admin/js/jquery-confirm.js"></script>
    <script type="text/javascript" src="../admin/js/bootstrap.min.js"></script>

</head>

<style>
html{
    overflow-x: hidden;
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

.kulay{
    background-color:#293c91;
}

#pictures{
    width: 50%;
    height: 50%;
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

    <div>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php" class="text-dark fw-bolder fs-5">
            <img src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/back.png" alt="" height="25">Return Home
        </a>
    </div>
    <template id="sidenavTemplate">
        <a class="list-group-item list-group-item-action" id="link" href="#list-item-1"><p class="w-100"></p></a>
    </template>

    <template id="postTemplate">
    <div class="container p-0 m-0" id="con" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="row">
                 <div class="col " id="firstPost">
                    <div class="row">
                        <h3 class="text-center fw-bold p-0 m-0" id="title">Title</h3>
                    </div>
                    <div class="row d-flex justify-content-center">  
                        <img class="w-75 " src="../UploadsImages/LOVE OUGHT TO SHOW.png" id="pictures" alt="aaaaaaaaaaaa">
                    </div>
                    <div class="row">
                        <p id="content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum sit ducimus, soluta sed reiciendis, saepe quia quae ab deserunt magnam perspiciatis accusantium mollitia quis facilis, cumque fugiat! Laboriosam, voluptatum nesciunt?</p>
                    </div>
                    <div class="row mt-3">
                        <p class="fs-6 fs-light text-muted" id="EventStarts">Event Starts: April 1, 20124</p>
                    </div>
                    <div class="row ">
                        <p class="fs-6 fs-light text-muted" id="EventEnds">Event Ends: April 1, 20124</p>
                    </div>
                 </div>
            </div>
        </div>
    </template>




<div class="row h-100   h-100 " style="overflow-x: hidden;" >
    <div class="col-3  overflow-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="sideBarCon" class="list-group">
            <a class="list-group-item list-group-item-action fw-bold" href="#list-item-1">Item 1</a>
            <a class="list-group-item list-group-item-action fw-bold" href="#list-item-2">Item 2</a>
            <a class="list-group-item list-group-item-action fw-bold" href="#list-item-3">Item 3</a>
            <a class="list-group-item list-group-item-action fw-bold" href="#list-item-4">Item 4</a>
        </div>
    </div>
    <div class="col p-0" id="postCon" >

    </div>

</div>
  



    <script type="text/javascript" src="../JS/News.js"></script>
    <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>


</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../BootstrapCSS/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <script type="text/javascript" src="../JS/jquery-min.js"></script>
    <script type="text/javascript" src="../JS/popper.min.js"></script>
    <script type="text/javascript" src="../JS/jquery-confirm.js"></script>
    <script type="text/javascript" src="../JS/bootstrap.min.js"></script>


<title>Approved Post</title>




</head>


<style>
       body{
    background-color: rgb(192, 214, 232);
  }
.exx {
    color: white;
}

.logoo {
    margin-left: 1%;
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
    float: right;
}

hr {
    color: white;
}

.homeee{
    opacity: 50%;
    margin-left: 30%;
}

.homeee :hover{
    opacity: 150%;
}

.off{
    opacity: 50%;
}

.btn:hover{
    opacity: 100%;
}

.kulay{
    background-color:#293c91;
}

</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark kulay p-0 m-0">

        <a class="navbar-brand logoo" href="#"><img src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logo.png"
                alt="DBK Logo" height="72"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div>
            <p class="text-white fs-5 fw-bold mb-0 ">
                CAMARINES SUR NATIONAL HIGH SCHOOL
            </p>
            <p class="fst-italic text-white navvv mt-0">
                Basta taga-CAMHI, Matibay!
            </p>
        </div>
        
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto fs-5 ">
                    <!-- <li class="nav-item p-2">
                        <a class="nav-link mx-2  fw-bolder px-2" aria-current="page"
                            href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php"><img class="homeee"
                                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png"alt="DBK Logo" height="20" margin-left="30%"> <br>
                            Home</a>
                    </li>
                    <li class="nav-item p-2">

                        <a class="nav-link mx-2 fw-bolder px-2" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/contact/index.php"><img class="homeee"
                                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo"
                                height="20"><br> Contact</a>
                    </li>
                    <li class="nav-item p-2">

                        <a class="nav-link abt fw-bolder" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/geninfo/index.php"> <img
                                class=" homeee" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                                height="20"> <br> About
                            CamHi</a>
                    </li>
                    <a class="navbar-brand" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/admin/index.php">
                    </a> -->

                <button class="btn " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <img src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/admin.png" alt="DBK Logo" height="35"><br>
                    <p class="fw-bolder text-light">
                        ADMIN
                    </p>
                </button>
            </ul>
        </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end kulay" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header text-center">
            <h5 class="offcanvas-title text-light fw-bolder" id="offcanvasWithBothOptionsLabel"><img
                    src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logo.png" alt="DBK Logo" height="72">
                ADMIN SETTING
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <hr>
      
            
              
                <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/OrganizationalAccountCreation.html.php" class="btn text-white float-left fw-bold off"> <img class="mx-2"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/add-user.png"alt="DBK Logo" height="20"> ADD NEW ORGANIZATION ACCOUNT</a>
                <hr>
                <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminDashboard.html.php" class="btn text-white off float-left fw-bold "> <img class="mx-2 fw-bold"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/dashboard.png"alt="DBK Logo" height="20"> DASHBOARD</a>
                <hr>
                <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminApprovedPost.html.php"
            class="btn kulay text-white float-left fw-bold"> <img class="mx-2 fw-bold"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/table-grid.png" alt="DBK Logo" height="20">RECORD OF HOME'S POST</a>
        <hr>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Postarchived.php"
            class="btn kulay text-white float-left fw-bold off"> <img class="mx-2"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/box.png" alt="DBK Logo" height="20">ARCHIVED POST</a>
        <hr>
            <p class="text-light fw-bold fs-3 text-center">EDIT CONTENT</p>
            <hr>
           
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/PageApproval.html.php"
                class="btn kulay float-none fw-bold text-white off"> <img class="mx-2"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png"alt="DBK Logo" height="20">HOME'S POST APPROVAL</a>
            <hr>
            <a href="AdminContactCRUD.html.php"
                class="btn kulay float-left text-white fw-bold off"> <img
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo"
                            height="20">CONTACT</a>
            <hr>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/geninfo/index.php" class="btn kulay  text-white off float-left fw-bold"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                            height="20">ABOUT
                CAMHI</a>
            <hr> <br>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php" class="btn text-center off">
              <button type="button" class="btn kulay text-white text-light fw-bold"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logout.png" alt="DBK Logo"
                            height="20"> Log Out</button>
     </a>
        </div>
       <br><br>
      <p class="text-center fs-1 fw-bold">
        APPROVED POST
      </p>
        <br><br><br>
        <!-- <img src="../UploadsImages/Screenshot (2).png" alt=""> -->
        <!-- <div class="Post-container">

      </div> -->
        <template id="temp">
            <h2></h2>
            <div class="container mt-2 d-flex flex-row">
                <div class="card mb-3" style="min-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img href="..." src="..." class="img-fluid rounded-start cardimg" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text content">This is a wider card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <br>
                                <p class="card-text">Event Start : <input type="datetime-local"
                                        class="text-muted start bg-transparent border-0" readonly disable></input></p>
                                <p class="card-text">Event End : <input type="datetime-local"
                                        class="text-muted end bg-transparent border-0" readonly disable></input></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <button class="btn btn-danger deletebtn m-2" value="">Delete</button>
                </div>

            </div>
        </template>


        
  <div class="container d-flex flex-column " id="TemplteContainer">
    <h1 class="text-center">NONE</h1>
  </div>


        <!--  
  <div class="container d-flex flex-column " id="TemplteContainer">
  </div>

   <table id="post" class="table">
        <thead>
          <th>ContentID</th>
          <th>Title</th>
          <th>Content</th>
          <th>ImageURL</th>
          <th>Publication Date</th>
          <th>AdminID</th>
          <th>Event Starts</th>
          <th>Event Ends</th>
          <th>Content Type</th>
        </thead>
        <tbody></tbody>
      </table> -->




      <script src="../JS/jquery-min.js"></script>
        <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
        <script src="../BootstrapJS/bootstrap.bundle.min.js"></script>
        <script src="../JS/AdminApprovedPost.js"></script>

</body>

</html>
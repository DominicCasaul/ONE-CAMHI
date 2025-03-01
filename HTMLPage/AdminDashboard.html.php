<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../BootstrapCSS/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="/ONE-CAMHI-USB/admin/css/form.css">

    <script type="text/javascript" src="../JS/jquery-min.js"></script>
    <script type="text/javascript" src="../JS/popper.min.js"></script>
    <script type="text/javascript" src="../JS/jquery-confirm.js"></script>
    <script type="text/javascript" src="../JS/bootstrap.min.js"></script>

    <title>Dashboard</title>



</head>


<style>
body {
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

.btn:hover {
    opacity: 100%;
}

.kulay {
    background-color: #293c91;
}
.margz{
    margin-left: 5%;
}

.margzz{
    margin-left: 25%;
}

.margzzz{
    margin-left: 40%;
}

</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark kulay  p-0 m-0">

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

            <ul class="navbar-nav ms-auto fs-5 titulo">

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

                <button class="btn kulay text-white" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <img src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/admin.png" alt="DBK Logo" height="35"><br>
                    <p class="fw-bolder">
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



        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/OrganizationalAccountCreation.html.php"
            class="btn kulay text-white float-left fw-bold off"> <img class="mx-2"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/add-user.png" alt="DBK Logo" height="20"> ADD NEW
            ORGANIZATION ACCOUNT</a>
        <hr>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminDashboard.html.php"
            class="btn kulay text-white float-left fw-bold "> <img class="mx-2 fw-bold"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/dashboard.png" alt="DBK Logo" height="20"> DASHBOARD</a>
        <hr>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminApprovedPost.html.php"
            class="btn kulay text-white float-left fw-bold off"> <img class="mx-2 fw-bold"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/table-grid.png" alt="DBK Logo" height="20">RECORD OF HOME'S POST</a>
        <hr>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Postarchived.php"
            class="btn kulay text-white float-left fw-bold off"> <img class="mx-2"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/box.png" alt="DBK Logo" height="20">ARCHIVED POST</a>
        <hr>
        <p class="text-light fw-bold fs-3 text-center">EDIT CONTENT</p>
        <hr>

        <a href="PageApproval.html.php" class="btn kulay text-white float-none fw-bold off"> <img class="mx-2"
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png" alt="DBK Logo" height="20">HOME'S POST
            APPROVAL</a>
        <hr>
        <a href="AdminContactCRUD.html.php" class="btn kulay text-white float-left  off fw-bold "> <img
                src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo" height="20">CONTACT</a>
        <hr>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/geninfo/index.php" class="btn kulay text-white off float-left fw-bold">
            <img class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                height="20">ABOUT
            CAMHI</a>
        <hr> <br>
        <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php" class="text-center">


            <button type="button" class="btn kulay text-white  text-light fw-bold off"> <img class="mx-2"
                    src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logout.png" alt="DBK Logo" height="20"> Log
                Out</button>
        </a>
    </div>






    <br><br>
    <div class="container">
        <p class="text-center fw-bold fs-2">
            ONE-CAMHI DASHBOARD
        </p>
        <p class="text-center fs-5">
        Note: On this page, you will see the total number of approved and declined posts on the homepage. You will also see the number of created organization accounts.
        </p>
        <div class="container ">
              <p class="fw-bolder">
            <img src="../home/image/check.png" alt="" class="mx-auto " height="50">
             = Approved Post
        </p> <br>
        <p class="fw-bolder">
             <img src="../home/image/close.png" alt="" class="" height="45">
             = Declined Post
        </p>
        </div>
      
       
    </div>
    <br><br>


    <div class="container">
        <div class="row">
            <div class="col-3 "><p class="fw-bold fs-4 margz">Organization Accounts</p>
                <div class=" bg-primary p-4 rounded w-100 d-flex flex-row">
                    <div>
                        
                    </div>
                    <img src="../home/image/people.png" alt="" height="100">
                    
                    <h1 id="orgaCounter" class="w-100 text-center my-auto "></h1>
                </div>
            </div>
            <div class="col "><p class="fw-bold fs-4 margzz">Announcements</p>
                <div class=" bg-primary p-4 rounded w-100 d-flex flex-row">
                    <img src="../home/image/announcement.png" alt="" height="80">
                    <table class="w-100">
                        <thead>
                            <th class=" d-flex justify-content-center">
                                <img src="../home/image/check.png" alt="" class="mx-auto" height="50">
                            </th>
                            <th class="">
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="../home/image/close.png" alt="" class="" height="45">
                            </th>
                </div>
                </th>
                </thead>
                <tbody>
                    <td>
                        <h1 id="AnnounceCounterApproved" class="w-100 text-center my-auto"></h1>
                    </td>
                    <td>
                        <h1 id="AnnounceCounterDisqpproved" class="w-100 text-center my-auto"></h1>
                    </td>
                </tbody>
                </table>
            </div>
        </div>
        <div class="col "><p class="fw-bold fs-4 margzzz">News</p>
            <div class=" bg-primary p-4 rounded w-100 d-flex flex-row">
                <img src="../home/image/news.png" alt="" height="80">
                <table class="w-100">
                    <thead>
                        <th class=" d-flex justify-content-center">
                            <img src="../home/image/check.png" alt="" class="mx-auto" height="50">
                        </th>
                        <th class="">
                            <div class="w-100 d-flex justify-content-center">
                                <img src="../home/image/close.png" alt="" class="" height="45">
                        </th>
            </div>
            </th>
            </thead>
            <tbody>
                <td>
                    <h1 id="NewsCounterApproved" class="w-100 text-center my-auto"></h1>
                </td>
                <td>
                    <h1 id="NewsCounterDisqpproved" class="w-100 text-center my-auto"></h1>
                </td>
            </tbody>
            </table>
        </div>

    </div>
    </div>

    </div>

    <!-- <img src="../UploadsImages/Screenshot (2).png" alt=""> -->
    <!-- <div class="Post-container">
            

      </div> -->
    <div class="container p-5">
        <h2 class="text-center">Per Organization Post</h2>
        <canvas id="Chart" style="height:100%;max-height:600px;"></canvas>

    </div>

    </div>


    <script src="../JS/jquery-min.js"></script>
    <script src="../JS/jquery-confirm.js"></script>
    <script src="../JS/chart.umd.min.js"></script>
    <script src="../JS/AdminDashboard.js"></script>
    <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
    <script src="../BootstrapJS/bootstrap.bundle.min.js"></script>

</body>

</html>
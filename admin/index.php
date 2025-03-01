<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/css/form.css">
    <link rel="stylesheet" href="../admin/css/form.css">
    <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="../BootstrapCSS/bootstrap.min.css">

    
    <script type="text/javascript" src="../admin/js/jquery-min.js"></script>
    <script type="text/javascript" src="../admin/js/popper.min.js"></script>
    <script type="text/javascript" src="../admin/js/jquery-confirm.js"></script>
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>



</head>
<style>
.body{  
    background-color: rgb(210, 224, 241);
    background: linear-gradient(rgb(0, 0, 0, 0.5), rgb(41, 60, 145, 0.5)), url(/ONE-CAMHI-USB/home/image/csnhs.png);
    background-size: cover;
}
.title {
    font-weight: 700;
}

.rounded-container {
    border-radius: 15px;
    /* Adjust the value to change the roundness */
    overflow: hidden;
    /* Ensure content doesn't overflow rounded corners */
    display: flex;
    /* Use flexbox */
    justify-content: center;
    /* Horizontally center content */
    text-align: center;
}
.adminn{
  margin-top: 15%;
  font-weight: 800;
  margin-right: 10%;
}
.picmin{
  margin-right: 3%;
  margin-bottom: 7%;
  margin-top: 6%;
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

.logoo{
    margin-left: 1%;
}

.aktibo{
    margin-left: 30%;
}

.adminFE{
    margin-top: 3%;

}
.plssss{
    background-color: blue;
}

.kulay{
    background-color:#293c91;
}

</style>

<body class="makisamakapls">

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
            <ul class="navbar-nav ms-auto fs-6 ">
                <li class="nav-item p-2">
                    <a class="nav-link mx-2 fw-bolder px-2" aria-current="page"
                        href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php"><img class="off aktibo"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png"alt="DBK Logo" height="20" margin-left="30%"> <br>
                        Home</a>
                </li>
                <li class="nav-item p-2">

                    <a class="nav-link mx-2 fw-bolder   px-2" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Contact.html.php"><img class="off aktibo"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo"
                            height="24"><br> Contact</a>
                </li>
                <li class="nav-item p-2">

                    <a class="nav-link abt fw-bolder " href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/Geninfo.html.php"> <img
                            class="aktibo off" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                            height="20"> <br> About
                        CamHi</a>
                </li class="nav-item p-2">
                <a class="navbar-brand adminFE" href="../admin/index.php"><img src="../home/image/admin.png" alt="DBK Logo"
                        height="50"></a>
                    </p>
                </button>
            </ul>
        </div>
        </div>
    </nav>


    <form class="needs-validation" novalidate action="">


        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100S">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong bg-primary" style="border-radius: 1rem;">

                            <div class="bg-light container loginn rounded-container text-dark fw-bolder">
                            <a class="navbar-brand picmin" href="#"><img src="../home/image/logo.png" alt="DBK Logo" height="100" width="100"></a>
   
                                <h5 class="mb-5 adminn ">   CSNHS ADMIN PORTAL</h5>
                            </div>
                            <div class="card-body p-5 text-center">

                                <div>
                                    <div class="form-floating form-outline mb-4">
                                        <input type="text" class="form-control" id="username" required placeholder="-"
                                            name="username" required>
                                        <label for="floatingInput">Username</label>
                                        <div class="invalid-feedback">username is required</div>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="Password"
                                            placeholder="Password" required>
                                        <label for="floatingPassword">Password</label>
                                        <div class="invalid-feedback">Password is required</div>
                                    </div>

                                </div><br>

                                <!-- Checkbox -->
                                <!-- <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label text-white" for="form1Example3">  Remember password </label>
                                </div> -->
                                   <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </form>
    <!-- <div class="text-dark fs-bolder fs-2 text-center title">
        ADD NEW ORGANIZATION ACCOUNT
    </div>
    <button type="button" id="AddOrgAcc" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        Add New Organozational Account
    </button><br>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header bg-primary ">
                    <h5 class="modal-title text-light " id="staticBackdropLabel">Add New Organizational Account</h5>
                    <button type="button" class="btn-close close_modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="thisFORM" class="needs-validation" novalidate>
                    <div class="modal-body bg-primary-subtle">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtID" required placeholder="-" name="adminID"
                                disabled>
                            <label for="floatingInput">ADMINID</label>
                            <div class="invalid-feedback">adminID is required</div>
                        </div>
                        <br>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" required placeholder="-"
                                name="username">
                            <label for="floatingInput">Username</label>
                            <div class="invalid-feedback">username is required</div>
                        </div>
                        <br>
                        <div class="form-floating">
                            <select class="form-select" required aria-label="Floating label select example"
                                id="schooldept" name="schooldept">
                                <option selected value=""></option>
                                <option value="SSG PRESIDENT">SSG PRESIDENT</option>
                                <option value="Teacher">Teacher</option>
                                <option value="PrincipalS">PrincipalS</option>
                            </select>
                            <label for="floatingSelect">Organization Name</label>
                            <div class="invalid-feedback">Please select Organization Name</div>
                        </div>
                        <br>
                        <div class="form-floating mb-3">
                            <input type="text" id="txtEmail" class="form-control" required placeholder="-" name="email">
                            <label for="floatingInput">Password</label>
                            <div class="invalid-feedback">Password is required</div>
                        </div>


                    </div>
                    <div class="modal-footer bg-primary-subtle">
                        <button type="button" class="btn btn-secondary close_modal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submitbtn" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->






    <!-- <div class="container">
        <p class="fw-bolder"> CSNHS ADMIN RECORD</p>
   
    <table style="width:100%" id="admin" class="table  table-bordered">
        <thead class=" table-danger">
            <tr>
                <th>AdminID</th>
                <th>Username</th>
                <th>Organization</th>
                <th>Password</th>
                <th colspan="2" class="text-center">Action</th>

        </thead>
        <tbody class="class="table-primary"">
        </tbody>
    </table>
    </div> -->
<!-- 
<footer class="bg-body-tertiary  plssss bg-primary text-center text-lg-start">
    <div class="container p-4">
    
        <div class="row ">
         
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
      
        </div>

    </div>
   
    <div class="text-center p-3] text-light" style=" background-color: rgb(210, 224, 241);">
        <p class="text-dark">
            Official creation of the group of Casaul, Verdejo, Calisura, Villaflor
        </p>
</footer>
 -->


</body>

<script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
<html>

</html>
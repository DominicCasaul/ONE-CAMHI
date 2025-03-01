<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../BootstrapCSS/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../admin/js/bootstrap.min.css"> -->

  <script type="text/javascript" src="../admin/js/popper.min.js"></script>
  <script type="text/javascript" src="../admin/js/jquery-min.js"></script>

  <script type="text/javascript" src="../admin/js/bootstrap.min.js"></script>


  <title>
    Add General Information
  </title>

</head>

<style>
      body{
    background-color: rgb(192, 214, 232);
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

.btn:hover{
    opacity: 100%;
}

.kulay{
    background-color:#293c91;
}
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark kulay text-white p-0 m-0">

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
                </li> -->
                <a class="navbar-brand" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/admin/index.php">
                </a>

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

    <div class="offcanvas offcanvas-end kulay text-white" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
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
      
            
              
                <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/OrganizationalAccountCreation.html.php" class="btn kulay text-white float-left fw-bold off"> <img class="mx-2"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/add-user.png"alt="DBK Logo" height="20"> ADD NEW ORGANIZATION ACCOUNT</a>
                <hr>
                <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminDashboard.html.php" class="btn kulay text-white off float-left fw-bold "> <img class="mx-2 fw-bold"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/dashboard.png"alt="DBK Logo" height="20"> DASHBOARD</a>
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
           
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/PageApproval.html.php"
                class="btn kulay text-white float-none fw-bold off"> <img class="mx-2"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png"alt="DBK Logo" height="20">HOME'S POST APPROVAL</a>
            <hr>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/AdminContactCRUD.html.php"
                class="btn kulay text-white float-left fw-bold off"> <img
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo"
                            height="20">CONTACT</a>
            <hr>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/geninfo/index.php" class="btn kulay text-white float-left fw-bold"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                            height="20">ABOUT
                CAMHI</a>
            <hr> <br>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php" class=" text-center" >
                 <button type="button" class="btn kulay text-white  text-light fw-bold off"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logout.png" alt="DBK Logo"
                            height="20"> Log Out</button>
     
            </a>
             
        </div>
        <p class="fw-bolder fs-1 text-center">
ADD General Information about the School
            </p> 
            <p class="text-center">
      Note: The added Information here will be posted in the "About Us" page.
      </p>
       
    <!-- Navbar -->
  
    <br><br><br>

    <div class="container">
            
        <button type="button" id="AddGT" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Information about Camhi
        </button>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl bg-primary ">
            <div class="modal-content bg-primary">

                <div class="modal-header ggg bg-primary">
                    <h5 class="modal-title headerr text-light" id="staticBackdropLabel">General Information</h5>
                    <button type="button" class="btn-close bg-light close_modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form id="GenInfoForm" class="needs-validation " novalidate>
                    <div class="modal-body bg-primary-subtle">
                        <div class="row">
                        <div class="form-floating aaa col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="txtID" required placeholder="-"
                                    name="InfoID" disabled>
                                <label for="txtID">InfoID</label>
                                <div class="invalid-feedback">InfoID is required</div>
                            </div>
                        </div>
                        <div class="form-floating mb-3 kkk col-md-6">
                          <div class="form-floating mb-3">
                            <input type="datetime-local" id="txtDateUpdate" class="form-control kkk" required
                                placeholder="-" name="DateUpdate" disabled>
                            <label for="floatingInput">DateUpdate</label>
                            <div class="invalid-feedback">DateUpdate is required</div>
                          </div>
                        </div>
                        <div class="form-floating eee mb-3 ">
                                <input type="text" class="form-control" id="txtTitle" required placeholder="-"
                                    name="Title">
                                <label for="txtTitle">Title</label>
                                <div class="invalid-feedback">Title is required</div>
                          </div>
                        <br><br><br>
                        <div class="form-floating mb-3 iii col-12">
                            <textarea class="form-control type-progress-example iii" id="txtContent" cols="55"
                                placeholder="Whats the Event all about?" required maxlength="1000"></textarea>
                            <label for="floatingInput">Content</label>
                            <div class="invalid-feedback">Content is required</div>
                        </div>

                        <br>


                        <br>
                        <div class="form-floating mb-3 col-md-6" jjj>
                            <input type="text" id="txtAuthor" class="form-control jjj" required placeholder="-"
                                name="Author">
                            <label for="floatingInput">Author</label>
                            <div class="invalid-feedback">Author is required</div>
                        </div>

                        <br>
                        <div class="form-floating mb-3 col-md-6" jjj>
                            <input type="file" id="imageUploadInput" class="form-control jjj"
                                name="imageUploadInput">
                            <label for="floatingInput">Image</label>
                            <!-- <div class="invalid-feedback">Image is required</div> -->
                        </div>
                        
                        <h4>Image Preview</h4>
                        <div id="imagePreviewContainer" class=" d-flex justify-content-center">

                        </div>

                    </div>
                        </div>
                        
                    <div class="modal-footer bg-primary">
                        <button type="button" class="btn btn-info btn-secondary text-light close_modal "
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submitbtn" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

        <div class="container">
              <table style="width:100%" id="geninfo" class="table table-bordered my-5 col-md-8">
        <thead>
            <tr>
                <th scope="col">InfoID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">DateUpdate</th>
                <th scope="col">Author</th>
                <th scope="col">Image Link</th>
                <th colspan="2" class="text-center" scope="col">Action</th>
        </thead>
        <tbody>
        </tbody>
    </table>
        </div>
  

    <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
    <script type="text/javascript" src="geninfo.js"></script>
</body>
<html>

</html>>
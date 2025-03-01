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

    <title>Contact Settings</title>


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

    <div class="offcanvas offcanvas-end kulay text-white " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
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
           
            <a href="PageApproval.html.php"
                class="btn kulay text-white float-none fw-bold off"> <img class="mx-2"
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/home.png"alt="DBK Logo" height="20">HOME'S POST APPROVAL</a>
            <hr>
            <a href="AdminContactCRUD.html.php"
                class="btn kulay text-white float-left fw-bold "> <img
                            src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/phone.png" alt="DBK Logo"
                            height="20">CONTACT</a>
            <hr>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/geninfo/index.php" class="btn kulay text-white off float-left fw-bold"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/aboutcamhi.png" alt="DBK Logo"
                            height="20">ABOUT
                CAMHI</a>
            <hr> <br>
            <a href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php" class="text-center">

           
              <button type="button" class="btn kulay text-white text-light fw-bold off"> <img
                            class="mx-2" src="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/image/logout.png" alt="DBK Logo"
                            height="20"> Log Out</button>
      </a>
        </div>
       <p class="fw-bolder fs-1 text-center">
ADD Contact Information
            </p> 
            <p class="text-center">
      Note: The added contact Information here will be posted in the "Contact Us" page.
      </p>

      
    <br><br><br>

        <!-- <img src="../UploadsImages/Screenshot (2).png" alt=""> -->
        <!-- <div class="Post-container">

      </div> -->
        <div class="container">
            
<button type="button" id="AddContact" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add New Contact
          </button>
        </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Add New Organizational Account</h5>
              <button type="button" class="btn-close close_modal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form  id="ContactForm" class="needs-validation" novalidate>
                <div class="modal-body modal-xl bg-dark-subtle">

                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="txtID" required placeholder="-" name="adminID" disabled>
                          <label for="floatingInput">ContactID</label>
                          <div class="invalid-feedback">ContactID is required</div>
                      </div>
                    <br>
                    <div class="form-floating">
                        <input type="text"  class="form-control" name="floatingSelect" id="txtOfficeType" list="OfficeType" placeholder="Office Type" required>
                        <datalist id="OfficeType"> 
                            <option value="Registrar">Registrar</option>
                        </datalist>
                        <label for="floatingSelect">Office Type</label>
                        <div class="invalid-feedback">Office Type is required</div>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text"  class="form-control" name="floatingSelect" id="txtContactPerson" placeholder="Contact Person" required>
                        <label for="floatingSelect">Contact Person</label>
                        <div class="invalid-feedback">Contact Person is required</div>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="number"  class="form-control" name="floatingSelect" id="txtContact" placeholder="Contact" required>
                        <label for="floatingSelect">Contact</label>
                        <div class="invalid-feedback">Contact is required</div>
                    </div>
                    <br>
                    <div class="">
                        <label for="">Contact Type</label><br>
                        <input type="radio" class="form-check-input" id="RContactType" value="School" name="ContactType" required>
                        <label class="form-check-label" for="RSchool">School</label>
                        <input type="radio" class="form-check-input" id="RContactType" value="Emergency" name="ContactType" required>
                        <label class="form-check-label" for="REmergency">Emergency</label>
                        <div class="invalid-feedback">Contact Type is required</div>
                    </div>
                    <br>
                    


                   
                    
                    

                    
                
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary close_modal" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="submitbtn" class="btn btn-success">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>



    <div class="container">
        <p class="fw-bold text-center">CONTACT INFORMATION TABLE</p>
  
    <table style="width:100%" id="contact" class="table">
        <thead class="table-danger">
            <tr>
                <th>ContacttID</th>
                <th>Office Type</th>
                <th>Contact Value</th>  
                <th>Contact Person</th>   
                <th>Contact Type</th>        
                <th colspan="2" class="text-center">Action</th>
        </thead>
        <tbody>
        </tbody>
    </table>
  </div>
    <script src="../JS/jquery-min.js"></script>
        <script src="../JS/jquery-confirm.js"></script>
        <script src="../JS/AdminContactCRUD.js"></script>
        <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
        <script src="../BootstrapJS/bootstrap.bundle.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/css/jquery-confirm.css">
  <link rel="stylesheet" href="../BootstrapCSS/bootstrap.min.css">
  <link rel="stylesheet" href="css/organization.css">

  <script type="text/javascript" src="../admin/js/jquery-min.js"></script>
  <script type="text/javascript" src="../admin/js/popper.min.js"></script>
  <script type="text/javascript" src="../admin/js/jquery-confirm.js"></script>




</head>
<style>
  
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

.plssss{
    background-color: blue;
}

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
    float: right;
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
    <ul class="navbar-nav ms-auto fs-6 ">
        <!-- <li class="nav-item p-2">
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
                CamHi</a> -->
        </li class="nav-item p-2">
        <a class="navbar-brand adminFE" href="/ONECAMHI-DIWATA/ONE-CAMHI-USB/home/index.php"><img src="../home/image/admin.png" class="aktibo" alt="DBK Logo"
                height="30"><p class="fw-bold">
                  Log-out
                </p></a>
            </p>
        </button>
    </ul>
</div>
</div>
</nav>

  <br><br>
  <div class="container">
    <p class="text-center fw-bold fs-3"> CREATE POST</p>
    <p class="text-center ">Please take note that before it appears on the homepage, the post you submit must be approved by the administrator.</p>
  </div>

  <!-- <img src="../UploadsImages/Screenshot (2).png" alt=""> -->
  <div class="container">
     <button type="button" id="AddPost" class="btn btn-primary">
    New Post
  </button>
  </div>
 


  
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="PostForm" class="needs-validation" novalidate>
          <div class="modal-body bg-dark-subtle">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="txtID" placeholder="-" name="txtID" disabled>
              <label for="floatingInput">EventID</label>
              <div class="invalid-feedback">EventID Title is required</div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="txtEventName" required placeholder="-" name="txtEventName">
              <label for="floatingInput">Event Title</label>
              <div class="invalid-feedback">Event Title is required</div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="file" class="form-control" id="imageUploadInput" required placeholder="-" name="imageUploadInput">
              <label for="floatingInput">Image</label>
              <div class="invalid-feedback">Image is required</div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="datetime-local" class="form-control" id="PublicationDate" required placeholder="-" name="PublicationDate">
              <label for="PublicationDate">Publication Date</label>
              <div class="invalid-feedback">Publication Date date is required</div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="datetime-local" class="form-control" id="txtEventStart" required placeholder="-" name="txtEventStart">
              <label for="txtEventStart">Event Starts</label>
              <div class="invalid-feedback">Event Starting date is required</div>
            </div>
            <br>
            <div class="form-floating mb-3">
              <input type="datetime-local" class="form-control" id="txtEventEnds" required placeholder="-" name="txtEventEnds">
              <label for="txtEventEnds">Event Ends</label>
              <div class="invalid-feedback">Event Ends date is required</div>
            </div>
            <div class="mb-3">
              <label for="validationTextarea" class="form-label">Event Description</label>
              <textarea class="form-control type-progress-example" id="validationTextarea" placeholder="Whats the Event all about?" required maxlength="500"></textarea>
              <div class="w-100 position-relative">
                <div id="the-count">
                  <span id="current">0</span>
                  <span id="maximum">/ 500</span>
                </div>
              </div>

            </div>
            <div class="mb-3">
              <label for="" class="form-label">Content Type</label><br>
              <input type="radio" class="form-check-input" id="Announcement" name="radio-stacked" value="Announcement" required>
              <label class="form-check-label" for="radioAnnouncement">Announcement</label>
              <br>
              <input type="radio" class="form-check-input" id="News" name="radio-stacked" value="News" required>
              <label class="form-check-label" for="radioNews">News</label>
            </div>
            <br>
            <h4>Image Preview</h4>
            <div id="imagePreviewContainer">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary close_modal" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="submitbtn" class="btn btn-success">Submit</button>
          </div>
        </form>
    </div>
  </div>
</div>

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
              <p class="card-text content">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <br>
              <p class="card-text">Event Start : <input type="datetime-local" class="text-muted start bg-transparent border-0" readonly disable></input></p>
              <p class="card-text">Event End : <input type="datetime-local" class="text-muted end bg-transparent border-0" readonly disable></input></p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex flex-column">
        <!-- <button class="btn btn-success btnApprovePost m-2">Approve</button> -->
        <!-- <button class="btn btn-danger btnDisapprovePost m-2">Disapprove</button> -->
        <button class="btn btn-primary editbtn m-2" value="">Edit</button>
        <button class="btn btn-danger deletebtn m-2" value="">Delete</button>
      </div>
    </div>
  </template>


  <div class="container d-flex flex-column " id="TemplteContainer">
  </div>

  <!-- <table id="post" class="table">
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




    

  <script src="js/jquery-min.js"></script>
  <script type="text/javascript" src="../BootstrapJS/bootstrap.min.js"></script>
  <script src="../BootstrapJS/bootstrap.bundle.min.js"></script>
  <script src="organization.js"></script>

</body>

<html>

</html>
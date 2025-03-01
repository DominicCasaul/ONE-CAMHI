// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        } else {
          event.preventDefault()

          
          var data = new FormData();
          data.append('transaction', "ADD_RECORD");
          data.append('InfoID',  $('#txtID').val());
          data.append('Title', $('#txtTitle').val());
          data.append('imageUploadInput', $('#imageUploadInput').prop('files')[0]);
          data.append('Content', $('#txtContent').val());
          data.append('DateUpdate', $('#txtDateUpdate').val());
          data.append('Author', $('#txtAuthor').val());
          
          data.append('UpdateOrAdd', $("#submitbtn").html());
        console.log(data.getAll(data))
          //add some code here

          $.ajax({ 
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: data,
            enctype: 'multipart/form-data',
            url: "geninfo.php",
          })
          .done(function(msg) {
              $('#GenInfoForm').trigger("reset").removeClass('was-validated');
              console.log(msg)
              
                LoadData();   
                $('#staticBackdrop').modal('hide');
          });

        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()



// Image preview shower
$("#imageUploadInput").change(function () {
  var image = this.files[0];
  $("#imagePreviewContainer").html('');
  var imgElement = document.createElement("img");
  imgElement.setAttribute('width', '450')
  imgElement.src = window.URL.createObjectURL(image);
  imgElement.onload = function () {
      window.URL.revokeObjectURL(this.src);
  };
  $("#imagePreviewContainer").append(imgElement);
});


LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "geninfo.php",
            data: {
                transaction : "LOAD_DATA"
            }
        })
        .done(function(msg) {
            var studentList = JSON.parse(msg);
            $("#geninfo> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.InfoID + "</td>"
                s = s + "<td>" + element.Title + "</td>"
                s = s + "<td>" + element.Content + "</td>"
                s = s + "<td>" + element.DateUpdate + "</td>"
                s = s + "<td>" + element.Author + "</td>"
                s = s + "<td>" + element.ImageLink + "</td>"
               
                btnEdit = '<button class="editbtn btn btn-secondary">EDIT</button>'
                btnDelete = '<button  class="deletebtn btn btn-danger">DELETE</button>'
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#geninfo > tbody").append(s);

            });




        });

}



  
$( ".close_modal" ).on('click', function(){
    LoadData()
    $('#GenInfoForm').trigger("reset").removeClass('was-validated');
  });

$( "#AddGT" ).on('click', function(){
    // document.getElementById("txtID").disabled = false;
  $("#imagePreviewContainer").html('');
    GenerateNewID()
    $('#submitbtn').html('Save')
    $('#staticBackdropLabel').html("Add General Information");
    GetLocalDate()
});

function GetLocalDate(){
    let date = new Date().toLocaleDateString();
    let time = new Date().toLocaleTimeString();
    let datetime = date + " " + time;
    console.log(date); // 6/17/2022
    console.log(time); // 6/17/2022
    document.getElementById('txtDateUpdate').value = timestampToDatetimeInputString(Date.now());
}

function timestampToDatetimeInputString(timestamp) {
    const date = new Date((timestamp + _getTimeZoneOffsetInMs()));
    // slice(0, 19) includes seconds
    return date.toISOString().slice(0, 19);
  }
  
  function _getTimeZoneOffsetInMs() {
    return new Date().getTimezoneOffset() * -60 * 1000;
  }




$(document).on('click','.editbtn', function(e){
    e.preventDefault();
    let i = $(this).index('.editbtn');
    let txt = $('.editbtn').eq(i).text()

    let table = document.getElementById('geninfo')
    let stdnum = (table.rows[i+1].cells[0].innerHTML)
    console.log(stdnum)

    

    $.ajax({
        type: "POST",
        url: "geninfo.php",
        data: {
            transaction: "GET_ONE_INFO",
            InfoID: stdnum
        }
    })
    .done(function(msg) {
        console.log(msg)
        var studentList = JSON.parse(msg)

        
        const fileInput = document.querySelector('#imageUploadInput');

        // Create a new File object
        const myFile = new File(['Hello World!'], studentList.ImageLink);
    
        // Now let's create a DataTransfer to get a FileList
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;



            $('#txtID').val(studentList.InfoID);
            $('#txtTitle').val(studentList.Title);
            $('#txtContent').val(studentList.Content);
            GetLocalDate()
            $('#txtAuthor').val(studentList.Author);
        
          
            $("#imagePreviewContainer").html('');
            var imgElement = document.createElement("img");
            imgElement.setAttribute('width', '450')
            imgElement.src = studentList.ImageLink;
            imgElement.onload = function () {
                window.URL.revokeObjectURL(this.src);
            };
            $("#imagePreviewContainer").append(imgElement);
  
  

        });
        document.getElementById("txtID").disabled = true;
        $('#submitbtn').html('Update')
        $('#staticBackdropLabel').html('Edit General Information')        
  $('#staticBackdrop').modal('show');

    });


$(document).on('click','.deletebtn', function(e){
    e.preventDefault();
    let i = $(this).index('.deletebtn');
    let txt = $('.deletebtn').eq(i).text()

    let table = document.getElementById('geninfo')
    let stdnum = (table.rows[i+1].cells[0].innerHTML)
    console.log("To delete " + stdnum)


    $.ajax({
        type: "POST",
        url: "geninfo.php",
        data: {
            transaction: "DELETE_INFO",
            InfoID: stdnum
        }
    })
    .done(function(msg) {
        console.log(msg)
        LoadData();
        });
    });




    function GenerateNewID(){
      $.ajax({
        type: "POST",
        url: "geninfo.php",
        data: {
            transaction: "GET_NEW_ID"
        }
      })
      .done(function(msg) {
            console.log(msg)
            // var publisherID = JSON.parse(msg);
            // $("#txtTeacherID").val(publisherID)
            $("#txtID").val(msg)
        
      });
    
    }
  



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
          console.log("invalid form");
        } else {
          console.log($("#submitbtn").html());
          event.preventDefault()
          //add some code here
          $.ajax({
            type: "POST",
            url: "../DB-PHP/OrganizationalAccount.php",
            data : {
                transaction : "ADD_RECORD",
                AdminIDOG : $('#txtID').val(),
                username : $('#username').val(),
                schooldept : $('#schooldept').val(),
                txtEmail : $('#txtEmail').val(),
                NewOrUpdate : $('#submitbtn').html(),
                adminID: ''
                // schooldept : $('#schooldept').val(),
                // email : $('#txtEmail').val(),
                // UpdateOrAdd: $("#submitbtn").html()
            }
            
          })
          .done(function(msg) {
              console.log(msg)
              LoadData();   
              $('.close_modal').trigger("click");
            
            if(msg === 'true'){
              window.open("/ONECAMHI-DIWATA/ONE-CAMHI-USB/HTMLPage/PageApproval.html.php", "_self");
          }
              // $('#thisFORM').trigger("reset").removeClass('was-validated');
              
                // LoadData();
          });
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()
  // 
  
  
  
  


function GenerateNewID(){
  $.ajax({
    type: "POST",
    url: "../DB-PHP/OrganizationalAccount.php",
    data: {
        transaction: "GET_NEW_ID",
        adminID: ""
    }
  })
  .done(function(msg) {
        console.log(msg)
        // var publisherID = JSON.parse(msg);
        // $("#txtTeacherID").val(publisherID)
        $("#txtID").val(msg)
    
  });

}


LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/OrganizationalAccount.php",
            data: {
                transaction: "GET_DATA_ADMIN",
                adminID: ""
            }
        })
        .done(function(msg) {
            console.log(msg)
            var studentList = JSON.parse(msg);
            $("#admin> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.AdminID + "</td>"
                s = s + "<td>" + element.Username + "</td>"
                s = s + "<td>" + element.Organization + "</td>"
                s = s + "<td>" + element.Password + "</td>"
                btnEdit = '<button class="editbtn btn btn-secondary">EDIT</button>'
                btnDelete = '<button class="deletebtn btn btn-danger">DELETE</button>'
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#admin > tbody").append(s);

            });

            GenerateNewID()


        });

}


$( "#AddOrgAcc" ).on('click', function(){
    $('#staticBackdropLabel').html("Add New Teacher");
    $('#submitbtn').html("Submit");
  });
  
  $( ".close_modal" ).on('click', function(){
    LoadData()
    $('#thisFORM').trigger("reset").removeClass('was-validated');
  });


$(document).on('click','.editbtn', function(e){
    e.preventDefault();
    let i = $(this).index('.editbtn');
    let txt = $('.editbtn').eq(i).text()

    let table = document.getElementById('admin')
    let stdnum = (table.rows[i+1].cells[0].innerHTML)
    console.log(stdnum)

    

    $.ajax({
        type: "POST",
        url: "../DB-PHP/OrganizationalAccount.php",
        data: {
            transaction: "GET_ONE_ADMIN",
            adminID: stdnum
        }
    })
    .done(function(msg) {
        console.log(msg)
        var studentList = JSON.parse(msg)
            $('#txtID').val(studentList.AdminID);
            $('#username').val(studentList.Username);
            $('#schooldept').val(studentList.Organization).change();
            $('#txtEmail').val(studentList.Password);
        


        
        
        
        });
        document.getElementById("txtID").disabled = true;
        $('#submitbtn').html('Update')
        
  $('#staticBackdrop').modal('show');

    });


$(document).on('click','.deletebtn', function(e){
    e.preventDefault();
    let i = $(this).index('.deletebtn');
    let txt = $('.deletebtn').eq(i).text()

    let table = document.getElementById('admin')
    let stdnum = (table.rows[i+1].cells[0].innerHTML)
    console.log("To delete " + stdnum)


    $.ajax({
        type: "POST",
        url: "../DB-PHP/OrganizationalAccount.php",
        data: {
            transaction: "DELETE_ADMIN",
            adminID: stdnum
        }
    })
    .done(function(msg) {
        console.log(msg)
        LoadData();
        });
    });





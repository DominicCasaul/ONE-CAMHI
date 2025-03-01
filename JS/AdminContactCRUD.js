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
            url: "../DB-PHP/AdminContactCRUD.php",
            data : {
                transaction : "ADD_RECORD",
                ContactID : $('#txtID').val(),
                OfficeType : $('#txtOfficeType').val(),
                Contact : $('#txtContact').val(),
                ContactPerson : $('#txtContactPerson').val(),
                ContactType : $('input[name="ContactType"]:checked').val(),
                UpdateOrAdd: $("#submitbtn").html()
            }
            
          })
          .done(function(msg) {
              $('#ContactForm').trigger("reset").removeClass('was-validated');
              console.log(msg)
              
                LoadData();
                GenerateNewID()
                $('#staticBackdrop').modal('hide');

          });
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()











// alert(22222)
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/AdminContactCRUD.php",
            data : {
                transaction : "LOAD_DATA",
            }
        })
        .done(function(msg) {
            var studentList = JSON.parse(msg);
            $("#contact> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.ContactID + "</td>"
                s = s + "<td>" + element.OfficeType + "</td>"
                s = s + "<td>" + element.ContactValue + "</td>"
                s = s + "<td>" + element.ContactPerson + "</td>"
                s = s + "<td>" + element.ContactType + "</td>"
                btnEdit = '<button class="editbtn btn btn-primary">EDIT</button>'
                btnDelete ='<button class="deletebtn btn btn-danger">DELETE</button>'
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#contact > tbody").append(s);

            });




        });

}


$( ".close_modal" ).on('click', function(){
  LoadData()
  $('#ContactForm').trigger("reset").removeClass('was-validated');
});

$( "#AddContact" ).on('click', function(){
  GenerateNewID()
  $('#submitbtn').html('Save')
  $('#staticBackdropLabel').html("Add Contact");
});


$(document).on('click','.editbtn', function(e){
  e.preventDefault();
  let i = $(this).index('.editbtn');
  let txt = $('.editbtn').eq(i).text()

  let table = document.getElementById('contact')
  let stdnum = (table.rows[i+1].cells[0].innerHTML)
  console.log(stdnum)

  

  $.ajax({
      type: "POST",
      url: "../DB-PHP/AdminContactCRUD.php",
      data: {
          transaction: "GET_ONE_INFO",
          ContactID: stdnum
      }
  })
  .done(function(msg) {
      console.log(msg)
      var studentList = JSON.parse(msg)

          $('#txtID').val(studentList.ContactID)
          $('#txtOfficeType').val(studentList.OfficeType)
          $('#txtContact').val(studentList.ContactValue)
          $('#txtContactPerson').val(studentList.ContactPerson)
          $("input[name=ContactType][value='" + studentList.ContactType + "']").prop("checked",true);
      

      });
      document.getElementById("txtID").disabled = true;
      $('#submitbtn').html('Update')
      $('#staticBackdropLabel').html('Edit Contact')        
$('#staticBackdrop').modal('show');

  });


$(document).on('click','.deletebtn', function(e){
e.preventDefault();

  // var answer = confirm("Are you sure?");
  // return answer;

  let i = $(this).index('.deletebtn');
  let txt = $('.deletebtn').eq(i).text()

  let table = document.getElementById('contact')
  let stdnum = (table.rows[i+1].cells[0].innerHTML)
  console.log("To delete " + stdnum)
  
  $.ajax({
        type: "POST",
        url: "../DB-PHP/AdminContactCRUD.php",
        data: {
            transaction: "DELETE_INFO",
            ContactID: stdnum
        }
    })
    .done(function(msg) {
        console.log(msg)
        LoadData();
     });

  
  // var answer = $.confirm({"Are you sure?");

  //  $.confirm({
  //   theme: 'hololight',
  //   title: 'Confirm!',
  //   content: 'Delete ' + stdnum,
  //   confirm: function(){
  //     console.log("answer")
      
  //   },
  //   cancel: function(){
  //     alert('Canceled!')
  //   }
      
  // })  
  // console.log(answer)
});

function DeleteConfirmed(id){
  // alert(111)
        $.ajax({
            type: "POST",
            url: "../DB-PHP/AdminContactCRUD.php",
            data: {
                transaction: "DELETE_INFO",
                ContactID: id
            }
        })
        .done(function(msg) {
            console.log(msg)
            LoadData();
         });
}


  
 

  
  function GenerateNewID(){
    $.ajax({
      type: "POST",
      url: "../DB-PHP/AdminContactCRUD.php",
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


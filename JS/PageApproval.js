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
        //add some code here
        console.log("form s")
        let ContentType = $('input[name="radio-stacked"]:checked').val();


          // var pic = $("#profileImage").prop('files')[0];
      
          var data = new FormData();
          data.append('transaction', "ADD_RECORD");
          data.append('ContentID',  $('#txtID').val());
          data.append('Title', $('#txtEventName').val());
          data.append('imageUploadInput', $('#imageUploadInput').prop('files')[0]);
          data.append('PublicationDate', $('#PublicationDate').val());
          data.append('txtEventStart', $('#txtEventStart').val());
          data.append('txtEventEnds', $('#txtEventEnds').val());
          data.append('Content', $('#validationTextarea').val());
          data.append('ContentType', ContentType);
          data.append('UpdateOrAdd', $("#submitbtn").html());
        console.log(data.getAll(data))



          // $.ajax({
          //     url: 'data_ajax/users.php',
          //     data: data,
          //     type: "POST",
          //     cache: false,
          //     contentType: false,
          //     dataType: false,
          //     success: function(data) {
          //            location.reload();
          //     },
          //     error: function(e) {
          //         alert("error while trying to add or update user!");
          //     }
          // });   




        $.ajax({ 
          method: 'post',
          processData: false,
          contentType: false,
          cache: false,
          data: data,
          enctype: 'multipart/form-data',
          url: "../DB-PHP/PageApproval.php",
        })
        .done(function(msg) {
            $('#PostForm').trigger("reset").removeClass('was-validated');
            console.log(msg)
            
              LoadData();
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
            url: "../DB-PHP/PageApproval.php",
            data: {
                transaction : "LOAD_DATA"
            }
        })
        .done(function(msg) {
          console.log(msg.length)
            var studentList = JSON.parse(msg);
            let tempcon = document.getElementById('TemplteContainer')
          if(studentList.length !== 0 ){
            $('#TemplteContainer').empty()
          }
            // console.log(studentList.length)
            // $("#TemplteContainer").empty();

            let temp = document.getElementsByTagName("template")[0];
            // console.log(tempcon.html())
            studentList.forEach(element => {
              // if(element.Status !== "Approved" && element.Status !== "Disapproved"){
                let clone = temp.content.cloneNode(true);
                clone.querySelector('h2').innerHTML = element.ContentType;
                clone.querySelector('.card-title').innerHTML = element.Title;
                clone.querySelector('.content').innerHTML = element.Content;
                clone.querySelector('.cardimg').href = element.ImageURL;
                clone.querySelector('.cardimg').src = element.ImageURL;
                clone.querySelector('.start').value = element.EventStarts;
                clone.querySelector('.end').value = element.EventsEnds;
                clone.querySelector('.btnApprovePost').value = element.ContentID;
                clone.querySelector('.btnDisapprovePost').value = element.ContentID;
                
                // .appendChild(clone);
                tempcon.insertBefore(clone, tempcon.lastChild);
              // }
            });
        });
}


$( ".close_modal" ).on('click', function(){
  LoadData()
  $('#PostForm').trigger("reset").removeClass('was-validated');
});

$( "#AddPost" ).on('click', function(){
  $('#submitbtn').html('Submit')
  $('#staticBackdropLabel').html("Crete New Post");
  GenerateNewID()
});

// Show modal and Edit when edit button is clicked 
$(document).on('click','.btnApprovePost', function(e){
  e.preventDefault();
  let stdnum = this.value
  console.log(stdnum) 

  

  $.ajax({
      type: "POST",
      url: "../DB-PHP/PageApproval.php",
      data: {
          transaction: "APPROVE",
          ContentID: stdnum
      }
  })
  .done(function(msg) {
    console.log(msg)
    LoadData()
  });
})

$(document).on('click','.btnDisapprovePost', function(e){
  e.preventDefault();
  let stdnum = this.value
  console.log(stdnum) 

  

  $.ajax({
      type: "POST",
      url: "../DB-PHP/PageApproval.php",
      data: {
          transaction: "DISAPPROVE",
          ContentID: stdnum
      }
  })
  .done(function(msg) {
    console.log(msg)
    LoadData()
  });
})


  function GenerateNewID(){
    $.ajax({
      type: "POST",
      url: "../DB-PHP/PageApproval.php",
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











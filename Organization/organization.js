let OrgID = localStorage.getItem('OrgID');

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
          data.append('AdminID', OrgID);
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
          url: "organization.php",
        })
        .done(function(msg) {
            $('#PostForm').trigger("reset").removeClass('was-validated');
            console.log(msg)
            
              LoadData();       
              $('#staticBackdrop').modal('hide');
            
        });
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

console.log(OrgID)
document.getElementById('txtID').disable = true

$('#validationTextarea').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
      
    current.text(characterCount);
   
    
    /*This isn't entirely necessary, just playin around*/
    if (characterCount < 70) {
      current.css('color', '#666');
    }
    if (characterCount > 70 && characterCount < 90) {
      current.css('color', '#6d5555');
    }
    if (characterCount > 90 && characterCount < 100) {
      current.css('color', '#793535');
    }
    if (characterCount > 100 && characterCount < 120) {
      current.css('color', '#841c1c');
    }
    if (characterCount > 120 && characterCount < 139) {
      current.css('color', '#8f0001');
    }
    
    if (characterCount >= 1000) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
    
        
});

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


// console.log("ahahhaha")
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "organization.php",
            data: {
                transaction : "LOAD_DATA"
            }
        })
        .done(function(msg) {
          console.log(msg)
            var studentList = JSON.parse(msg);
            $("#TemplteContainer").empty();

            let temp = document.getElementsByTagName("template")[0];
            let tempcon = document.getElementById('TemplteContainer')
            // console.log(tempcon.html())
            studentList.forEach(element => {
              if(element.AdminID === OrgID){
                  let clone = temp.content.cloneNode(true);


                  clone.querySelector('h2').innerHTML = element.ContentType;
                  clone.querySelector('.card-title').innerHTML = element.Title;
                  clone.querySelector('.content').innerHTML = element.Content;
                  clone.querySelector('.cardimg').href = element.ImageURL;
                  clone.querySelector('.cardimg').src = element.ImageURL;
                  clone.querySelector('.start').value = element.EventStarts;
                  clone.querySelector('.end').value = element.EventsEnds;
                  clone.querySelector('.deletebtn').value = element.ContentID;
                  clone.querySelector('.editbtn').value = element.ContentID;
                  
                  // .appendChild(clone);
                  tempcon.insertBefore(clone, tempcon.lastChild);
              }
            });
        });
}


$( ".close_modal" ).on('click', function(){
  LoadData()
  $('#PostForm').trigger("reset").removeClass('was-validated');
});

$( "#AddPost" ).on('click', function(){
  $("#imagePreviewContainer").html('');
  $('#submitbtn').html('Submit')
  $('#staticBackdropLabel').html("Create New Post");
  $('#staticBackdrop').modal('show');
  // $('#staticBackdrop').html("Create New Post");
  GenerateNewID()
});

// Show modal and Edit when edit button is clicked 
$(document).on('click','.editbtn', function(e){
  e.preventDefault();
  let stdnum = this.value

  

  $.ajax({
      type: "POST",
      url: "organization.php",
      data: {
          transaction: "GET_ONE_INFO",
          ContentID: stdnum
      }
  })
  .done(function(msg) {
      var studentList = JSON.parse(msg)


          const fileInput = document.querySelector('#imageUploadInput');

          // Create a new File object
          const myFile = new File(['Hello World!'], studentList.ImageURL);
      
          // Now let's create a DataTransfer to get a FileList
          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(myFile);
          fileInput.files = dataTransfer.files;


          $('#txtID').val(studentList.ContentID);
          $('#txtEventName').val(studentList.Title);
          $('#PublicationDate').val(studentList.PublicationDate);
          $('#txtEventStart').val(studentList.EventStarts);
          $('#txtEventEnds').val(studentList.EventsEnds);
          $('#validationTextarea').val(studentList.Content);
          $('#txtAuthor').val(studentList.Author);

          
          $("#imagePreviewContainer").html('');
          var imgElement = document.createElement("img");
          imgElement.setAttribute('width', '450')
          imgElement.src = studentList.ImageURL;
          imgElement.onload = function () {
              window.URL.revokeObjectURL(this.src);
          };
          $("#imagePreviewContainer").append(imgElement);


          document.getElementById(studentList.ContentType).checked = true;

      });
      $('#submitbtn').html('Update')
      $('#staticBackdropLabel').html('Edit Post')        
$('#staticBackdrop').modal('show');

  });

// Delete when delete button is clicked
$(document).on('click','.deletebtn', function(e){
  e.preventDefault();
  // let i = $(this).index('.deletebtn');
  // let txt = $('.deletebtn').eq(i).text()

  // let btn = document.getElementsByClassName('deletebtn')
  let ContentID = this.value
  console.log(ContentID)

  $.ajax({
      type: "POST",
      url: "organization.php",
      data: {
          transaction: "DELETE_INFO",
          ContentID: ContentID
      }
  })
  .done(function(msg) {
      LoadData();
      });
  });



  function GenerateNewID(){
    $.ajax({
      type: "POST",
      url: "organization.php",
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









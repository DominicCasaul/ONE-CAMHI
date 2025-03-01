

LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/AdminApprovedPost.php",
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
                console.log(element.ContentID)
            // if(element.Status !== "Approved" && element.Status !== "Disapproved"){
                let clone = temp.content.cloneNode(true);
                clone.querySelector('h2').innerHTML = element.ContentType;
                clone.querySelector('.card-title').innerHTML = element.Title;
                clone.querySelector('.content').innerHTML = element.Content;
                clone.querySelector('.cardimg').href = element.ImageURL;
                clone.querySelector('.cardimg').src = element.ImageURL;
                clone.querySelector('.start').value = element.EventStarts;
                clone.querySelector('.end').value = element.EventsEnds;
                clone.querySelector('.deletebtn').value = element.ContentID;
                
                // .appendChild(clone);
                tempcon.insertBefore(clone, tempcon.lastChild);
            // }
            });
        });
}
$(document).on('click','.deletebtn', function(e){
  e.preventDefault();
  // let i = $(this).index('.deletebtn');
  // let txt = $('.deletebtn').eq(i).text()

  // let btn = document.getElementsByClassName('deletebtn')
  let ContentID = this.value
  console.log(ContentID)

  $.ajax({
      type: "POST",
      url: "../DB-PHP/AdminApprovedPost.php",
      data: {
          transaction: "DELETE_INFO",
          ContentID: ContentID
      }
  })
  .done(function(msg) {
      LoadData();
      });
  });



alert(222)
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "database_php/news.php",
        })
        .done(function(msg) {
            var studentList = JSON.parse(msg);
            $("#news> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.ContentID + "</td>"
                s = s + "<td>" + element.Title + "</td>"
                s = s + "<td>" + element.Content + "</td>"
                s = s + "<td>" + element.PublicationDate + "</td>"
                 s = s + "<td>" + element.AdminID + "</td>"
                s = s + "<td>" + element.ImageURL + "</td>"
                s = s + "<td>" + element.TemplateNo + "</td>"

               
                btnEdit = "<button>EDIT</button>"
                btnDelete = "<button>DELETE</button>"
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#news > tbody").append(s);

            });




        });

}


// let slides = document.querySelectorAll('.slide');
// let slideTexts = document.querySelectorAll('.slide-text');
// let currentSlide = 0;
// let slideInterval = setInterval(nextSlide, 1000); // Change slide every 2 seconds

// function nextSlide() {
//     slides[currentSlide].classList.remove('active');
//     slideTexts[currentSlide].classList.remove('active');
//     currentSlide = (currentSlide + 1) % slides.length;
//     slides[currentSlide].classList.add('active');
//     slideTexts[currentSlide].classList.add('active');
// }

// alert(222)
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "database_php/home.php",
            // data:{
            //     transaction:"GET_ALL_DATA"
            // }
        })
        .done(function(msg) {
            // console.log(msg)

            // let FirstNews = document.getElementById('FirstNews');
            let NewsfirstPost = document.getElementById('firstPost');
            // console.log(NewsfirstPost)
            let NewsSecondPost = document.getElementById('SecondPost');
            // console.log(NewsSecondPost)
            let NewsThirdPost = document.getElementById('ThirdPost');
            // console.log(NewsThirdPost)


            let firstPostAnnouncement = document.getElementById('firstPostAnnouncement');
            // console.log(firstPostAnnouncement)
            let SecondPostAnnouncement = document.getElementById('SecondPostAnnouncement');
            // console.log(SecondPostAnnouncement)
            let ThirdPostAnnouncement = document.getElementById('ThirdPostAnnouncement');
            // console.log(ThirdPostAnnouncement)
           
            var studentList = JSON.parse(msg);
            let newsCounter = 0;
            let AnnouncementCounter = 0;
            $("#home> tbody").empty();
            studentList.forEach(element => {
                
                if(element.Status === "Approved"){
                    console.log(11)
                
                
                if(element.ContentType === "News"){
                    if(newsCounter === 0 ){
                        // console.log("FIRST")
                        NewsfirstPost.querySelector('#title').textContent = element.Title;
                        NewsfirstPost.querySelector('#content').textContent = element.Content;
                        NewsfirstPost.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                        NewsfirstPost.querySelector('#pictures').src = element.ImageURL;
                        // NewsContainer.append
                        // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                        newsCounter += 1
                    }else if(newsCounter === 1){
                        // console.log("SECORD")
                        NewsSecondPost.querySelector('#title').textContent = element.Title;
                        NewsSecondPost.querySelector('#content').textContent = element.Content;
                        NewsSecondPost.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                        NewsSecondPost.querySelector('#pictures').src = element.ImageURL;
                        // NewsSecondPost.querySelector('.card-img-top').src = element.ImageURL;
                        // NewsContainer.append
                        // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                        newsCounter += 1
                    }else if(newsCounter === 2){
                        // console.log("THIRD")
                        NewsThirdPost.querySelector('#title').textContent = element.Title;
                        NewsThirdPost.querySelector('#content').textContent = element.Content;
                        NewsThirdPost.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                        NewsThirdPost.querySelector('#pictures').src = element.ImageURL;
                        // NewsThirdPost.querySelector('.card-img-top').src = element.ImageURL;
                        // NewsContainer.append
                        // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                        newsCounter += 1
                    }
                }

                    if(element.ContentType === "Announcement"){
                        if(AnnouncementCounter === 0 ){
                            // console.log("FIRST")
                            firstPostAnnouncement.querySelector('#title').textContent = element.Title;
                            firstPostAnnouncement.querySelector('#content').textContent = element.Content;
                            firstPostAnnouncement.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                            firstPostAnnouncement.querySelector('#pictures').src = element.ImageURL;
                            // NewsContainer.append
                            // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                            AnnouncementCounter += 1
                        }else if(AnnouncementCounter === 1){
                            // console.log("SECORD")
                            SecondPostAnnouncement.querySelector('#title').textContent = element.Title;
                            SecondPostAnnouncement.querySelector('#content').textContent = element.Content;
                            SecondPostAnnouncement.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                            SecondPostAnnouncement.querySelector('#pictures').src = element.ImageURL;
                            // NewsSecondPost.querySelector('.card-img-top').src = element.ImageURL;
                            // NewsContainer.append
                            // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                            AnnouncementCounter += 1
                        }else if(AnnouncementCounter === 2){
                            // console.log("THIRD")
                            ThirdPostAnnouncement.querySelector('#title').textContent = element.Title;
                            ThirdPostAnnouncement.querySelector('#content').textContent = element.Content;
                            ThirdPostAnnouncement.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                            ThirdPostAnnouncement.querySelector('#pictures').src = element.ImageURL;
                            // NewsThirdPost.querySelector('.card-img-top').src = element.ImageURL;
                            // NewsContainer.append
                            // NewsContainer.insertBefore(clFirstNews, NewsContainer.lastChild);
                            AnnouncementCounter += 1
                        }
                }
            }
                

                var s = "<tr>"
                s = s + "<td>" + element.ContentID + "</td>"
                s = s + "<td>" + element.Title + "</td>"
                s = s + "<td>" + element.Content + "</td>"
                s = s + "<td>" + element.ContentType + "</td>"
                s = s + "<td>" + element.PublicationDate + "</td>"
                btnEdit = "<button>EDIT</button>"
                btnDelete = "<button>DELETE</button>"
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#home > tbody").append(s);
                // LoadData()  
                $('#staticBackdrop').modal('hide');

            });




        });

}
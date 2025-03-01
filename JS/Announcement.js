
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/Announcement.php",
            // data:{
            //     transaction:"GET_ALL_DATA"
            // }
        })
        .done(function(msg) {
            console.log(msg)

            // let FirstNews = document.getElementById('FirstNews');
            let sidenavTemplate = document.getElementById('sidenavTemplate');
            console.log()
            let postTemplate = document.getElementById('postTemplate');
            console.log()
            let sideBarCon = document.getElementById('sideBarCon');
            let postCon = document.getElementById('postCon');
            console.log()
           
            var studentList = JSON.parse(msg);
            let newsCounter = 0;
            $("#sideBarCon").empty();
            $("#postCon").empty();
            studentList.forEach(element => {
                if(element.Status == "Approved"){
                    ClonesidenavTemplate = sidenavTemplate.content.cloneNode(true);
                    ClonepostTemplate = postTemplate.content.cloneNode(true);
                    
                    ClonesidenavTemplate.querySelector('#link').setAttribute('href', "#" + element.ContentID)
                    ClonesidenavTemplate.querySelector('p').textContent = element.Title;
                    ClonepostTemplate.querySelector('#con').setAttribute('id', element.ContentID)
                    ClonepostTemplate.querySelector('#title').textContent = element.Title;
                    ClonepostTemplate.querySelector('#content').textContent = element.Content;
                    ClonepostTemplate.querySelector('#EventStarts').textContent = element.EventStarts;                        ;
                    ClonepostTemplate.querySelector('#EventEnds').textContent = element.EventEnds;                        ;
                    ClonepostTemplate.querySelector('#pictures').src = element.ImageURL;
                            
                    sideBarCon.append(ClonesidenavTemplate)
                    postCon.append(ClonepostTemplate)
                }



            })
                
        })



}
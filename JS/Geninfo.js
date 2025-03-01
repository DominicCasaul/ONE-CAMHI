
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/genInf.php",
            // data:{
            //     transaction:"GET_ALL_DATA"
            // }
        })
        .done(function(msg) {
            console.log(msg)

            // let FirstNews = document.getElementById('FirstNews');
            let Gentemplate = document.getElementById('Gentemplate');
            let GEnCon = document.getElementById('GEnCon');
           
            var studentList = JSON.parse(msg);
            $("#sideBarCon").empty();
            $("#postCon").empty();
            studentList.forEach(element => {
                    CloneGentemplate = Gentemplate.content.cloneNode(true);
                    CloneGentemplate.querySelector('#title').textContent = element.Title;
                    CloneGentemplate.querySelector('#Content').textContent = element.Content;                     ;
                    CloneGentemplate.querySelector('#Image').src = element.ImageLink
                            
                    GEnCon.append(CloneGentemplate)



            })
                
        })



}
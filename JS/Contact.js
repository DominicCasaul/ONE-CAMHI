
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "../DB-PHP/AdminContactCRUD.php",
            data : {
                transaction : "LOAD_DATA_FOR_MAIN_PAGE",
            }
        })
        .done(function(msg) {
            console.log(msg)
            var studentList = JSON.parse(msg);
            $("#SchoolT> tbody").empty();
            $("#EmergencyT> tbody").empty();
            studentList.forEach(element => {
                console.log(element.ContactType)

                if(element.ContactType === "Emergency"){
                    console.log("HEREEEEwwwwwwwwwww " + element.ContactType)
                    var s = '<tr class="fw-bold text-center"><td>' + element.OfficeType + '</td></tr>'
                    s = s + '<tr class=" text-center text-muted"><td>' + element.ContactPerson + '</td></tr>'
                    s = s + '<tr class=" text-center text-muted"><td>' + element.ContactValue + '</td></tr>'
                        // s = s + "<tr><td>" + element.ContactPerson + "</td></tr>"
                        // s = s + "<tr><td>" + element.ContactValue + "</td></tr>"
                        s = s + "<tr><td></td></tr>"
                    $("#EmergencyT > tbody").append(s);
                    
                }else if(element.ContactType === "School"){
                    console.log("HEREEEE " + element.ContactType)
                    console.log("HEREEEE " + element.OfficeType)
                    console.log("HEREEEE " + element.ContactPerson)
                    console.log("HEREEEE " + element.ContactValue)
                    var s = '<tr class="fw-bold text-center"><td>' + element.OfficeType + '</td></tr>'
                        s = s + '<tr class=" text-center text-muted"><td>' + element.ContactPerson + '</td></tr>'
                        s = s + '<tr class=" text-center text-muted"><td>' + element.ContactValue + '</td></tr>'
                        s = s + "<tr><td></td></tr>"
                    
                    $("#SchoolT > tbody").append(s);
                }

                

            });




        });

}
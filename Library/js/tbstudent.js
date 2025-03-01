alert(222)
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "database_php/dbonecamhi.php",
        })
        .done(function(msg) {
            var studentList = JSON.parse(msg);
            $("#tablestudent> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.AdminID + "</td>"
                s = s + "<td>" + element.Username + "</td>"
                s = s + "<td>" + element.School_Department + "</td>"
                s = s + "<td>" + element.Email + "</td>"
                s = s + "<td>" + element.Lost_Login_Date + "</td>"
                btnEdit = "<button>EDIT</button>"
                btnDelete = "<button>DELETE</button>"
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#tablestudent > tbody").append(s);

            });




        });

}
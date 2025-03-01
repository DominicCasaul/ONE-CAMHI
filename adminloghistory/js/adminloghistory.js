alert(222)
LoadData();

function LoadData() {
    $.ajax({
            type: "POST",
            url: "database_php/adminloghistory.php",
        })
        .done(function(msg) {
            var studentList = JSON.parse(msg);
            $("#adminloghistory> tbody").empty();
            studentList.forEach(element => {
                var s = "<tr>"
                s = s + "<td>" + element.AdminID + "</td>"
                s = s + "<td>" + element.LogiD + "</td>"
                s = s + "<td>" + element.LogInTime + "</td>"
                s = s + "<td>" + element.LogInOut + "</td>"
                btnEdit = "<button>EDIT</button>"
                btnDelete = "<button>DELETE</button>"
                s = s + "<td>" + btnEdit + "</td>"
                s = s + "<td>" + btnDelete + "</td>"

                s = s + "</tr>"
                $("#adminloghistory > tbody").append(s);

            });




        });

}
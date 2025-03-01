

let chart =  document.getElementById('Chart')



CountOrgs()
CountAnnounement()
CountNews()
CountNewsPerOrg()

function CountOrgs(){
  $.ajax({
    type: "POST",
    url: "../DB-PHP/AdminDashboard.php",
    data:{
        transaction:"COUNT_ORGANIZATION"
    }
  })
  .done(function(msg) {
    console.log(msg)
    var studentList = JSON.parse(msg);
    studentList.forEach(element => {
      console.log(element.Total)
      $('#orgaCounter').text(Number(element.Total) - 1)
    })
  })
}

function CountAnnounement(){
  $.ajax({
    type: "POST",
    url: "../DB-PHP/AdminDashboard.php",
    data:{
        transaction:"COUNT_ANNOUNCEMENT_APPROVED"
    }
  })
  .done(function(msg) {
    console.log(msg)
    var studentList = JSON.parse(msg);
    studentList.forEach(element => {
      console.log(element.Total)
      $('#AnnounceCounterApproved').text(Number(element.Total))
    })


    $.ajax({
      type: "POST",
      url: "../DB-PHP/AdminDashboard.php",
      data:{
          transaction:"COUNT_ANNOUNCEMENT_DISAPPROVED"
      }
    })
    .done(function(msg) {
      console.log(msg)
      var studentList = JSON.parse(msg);
      studentList.forEach(element => {
        console.log(element.Total)
        $('#AnnounceCounterDisqpproved').text(Number(element.Total))
      })
    })



  })
}

function CountNews(){
  $.ajax({
    type: "POST",
    url: "../DB-PHP/AdminDashboard.php",
    data:{
        transaction:"COUNT_NEWS_APPROVED"
    }
  })
  .done(function(msg) {
    console.log(msg)
    var studentList = JSON.parse(msg);
    studentList.forEach(element => {
      console.log(element.Total)
      $('#NewsCounterApproved').text(Number(element.Total))
    })



    $.ajax({
      type: "POST",
      url: "../DB-PHP/AdminDashboard.php",
      data:{
          transaction:"COUNT_NEWS_DISAPPROVED"
      }
    })
    .done(function(msg) {
      console.log(msg)
      var studentList = JSON.parse(msg);
      studentList.forEach(element => {
        console.log(element.Total)
        $('#NewsCounterDisqpproved').text(Number(element.Total))
      })
    })

  })
}


function CountNewsPerOrg(){
  $.ajax({
    type: "POST",
    url: "../DB-PHP/AdminDashboard.php",
    data:{
        transaction:"COUNT_NEWS_PER_ORGANIZATION"
    }
  })
  .done(function(msg) {
    console.log(msg)

    let xValues = [];
    let yValues = [];
const barColors = ["red", "green","blue","orange","brown"];


    var studentList = JSON.parse(msg);
    studentList.forEach(element => {
      xValues.push(element.Organization)
      yValues.push(element.Total)
    })

    console.log(xValues)
    console.log(yValues)


    new Chart(chart, {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "World Wine Production 2018"
        }
      }
    });

  })
}


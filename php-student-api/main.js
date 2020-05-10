$(document).ready(init);

function init() {
  getData();
}

//chiamata ajax per inserire in pagina nome cognome e voti
function getData() {

  $.ajax({
    url: "api.php",
    success: function (data) {
      console.log(data);

      var target = $("#names");
      for (var key in data){

        var stud = data[key];
        target.append(stud["name"] + " " + stud["lastname"] + " => " + stud["scores"] + "<br>");
      }

    },
    error: function (err) {
      console.error(err);
    }
  });
}

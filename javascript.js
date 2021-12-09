function showMovies(str) {
    var Result = document.getElementById("txt1");

    if (str.length == 0) {
       
      document.getElementById("txtMovies").innerHTML = "";
       Result.innerHTML = "Movies: ";

       return;
    }

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

       if(this.readyState == 4 && this.status == 200){
           document.getElementById("txtMovies").innerHTML = this.responseText;
           console.log(str);
       }
    };
    xhttp.open("GET", "db.php?q="+str, true);
    xhttp.send();
 }
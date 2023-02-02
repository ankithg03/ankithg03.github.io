<?php
if(isset($_POST)){
    echo$_POST["abc"];
}
?>
<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>
<form id="formy">
    <input name="abc"/>
<button type="button" onclick="sendData()">Request data</button>
</form>
<p id="demo"></p>
 
<script>
function sendData() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "", true);
  xhttp.send();
}
</script>

</body>
</html>

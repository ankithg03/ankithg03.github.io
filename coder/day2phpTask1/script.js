function view(id){
  modal.style.display = "block";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
     singleData=JSON.parse(this.responseText)
     content="";
     content="id:"+singleData.id+"<br>"+"Name:"+singleData.employee_name+"<br>"+"age:"+singleData.employee_age+"<br>"+"Salary:"+singleData.employee_salary+"<br>";
    document.getElementById("somedata").innerHTML=content;
    }
  };
  xhttp.open("GET", "http://dummy.restapiexample.com/api/v1/employee/"+id, true); 
  xhttp.send();
}

function dis(a){
    b=JSON.parse(a);
    console.log(a);
    var id=0;
    var tab = document.getElementById("emptab") ;
    //tab.innerHTML="";
    content="<tr><td><div class='hide1'>Id</div></td><td><div class='hide1'>Name</div></td><td><div class='hide1'>Salary</div></td><td><div class='hide1'>Age</div></td><td><div class='hide1'>View</div></td></tr>";
    for (var i = 0; i < b.length; i++) {

        var row = document.createElement('tr');
        var idCol = document.createElement('td');
        idCol.innerText = (b[i].employee_name);
        row.appendChild(idCol);
        content += row
        content+="<tr>";
        content+="<td><div class='hide'>"+(b[i].id)+"</div></td>";
        content+="<td><div class='hide'>"+(b[i].employee_name)+"</div></td>";
        content+="<td><div class='hide'>"+(b[i].employee_salary)+"</div></td>";
        content+="<td><div class='hide'>"+(b[i].employee_age)+"</div></td>";
       content+="<td><button type='button' id='mybtn' class='myBtn' onClick='view("+(b[i].id)+")'>View</button></td>";
        content+="</tr>";
    }
    tab.innerHTML=content;
  }
  function loadXMLDoc() {
   // console.log("");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        a=this.responseText;
        console.log(a);
       dis(a);
      }
    };
    xhttp.open("GET", "http://dummy.restapiexample.com/api/v1/employees", true); 
    xhttp.send();
  }
loadXMLDoc();

var modal = document.getElementById("myModal");

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

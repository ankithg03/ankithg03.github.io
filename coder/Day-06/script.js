
function onclickfun(){
var obj;
fetch('https://jsonplaceholder.typicode.com/Posts')
    .then(response => response.json())
    .then(data => {	obj=data;
        //console.log(data)
        //obj[0].userId;
   
        //var n=0;
        //n=obj.length;
        //console.log(n);
        for(var i=0;i<obj.length;i++){
            //obj[i].userId;
            document.getElementById("api-data").innerHTML+="<tr><td>"+obj[i].userId+"</td><td>"+obj[i].id+"</td><td>"+obj[i].title+"</td></tr>";
        }
    });
}
document.getElementById("apifetch").addEventListener("click", onclickfun);

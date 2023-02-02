var v;
var tot=0;
var count=0;
function func(){
    
    document.getElementById("invoice").innerHTML ="";
    tot=0;
arr=[]
k=0
var c=document.getElementsByClassName("checkbox");
    for(var i=0;i<c.length;i++){
    if(c[i].checked){

        if(c[i].checked && k==0){
            count+=1;
            document.getElementById("invoice").innerHTML +="<tr><td>SL.NO</td><td>ProductName</td><td>Image</td><td>Price</td><td>Quantity</td><td>Price for the Quantity</td></tr>";

        }
        arr[k]=(c[i].parentElement.parentElement.id);
        //document.getElementById(arr[k]).getElementById("one-price").innerText;
        v=document.getElementById(arr[k]);
        var splitvalue= spliter(v.childNodes[9].innerText,'.');
        var price=(spliter(splitvalue[1],'/')[0])*(v.childNodes[11].childNodes[1].value);
        tot+=price;
        console.log(tot);
        document.getElementById("invoice").innerHTML +="<tr><td>"+(k+1)+"</td><td>"+v.children[1].textContent+"</td><td><img class='logo-image' src='"+v.childNodes[1].childNodes[1].src+"'></td><td>"+v.childNodes[9].innerText+"</td><td>"+v.childNodes[11].childNodes[1].value+"</td><td>"+price+"</td></tr>";
        console.log(v.childNodes[9].childNodes[0].textContent);
        console.log(arr[k++]);
    }

}
document.getElementById("cid").innerHTML=count;
document.getElementById("invoice").innerHTML +="<tr><td colspan='2'>Total is</td><td colspan='4'>"+tot+"</td> </tr>";
}
function func1(){
    count=0;
    document.getElementById("invoice").innerHTML ="";
    var tot=0;
    document.getElementById("cid").innerHTML=count;
   // location.reload();

}
function spliter( str,deli){
  var res = str.split(deli);
    return res;
}
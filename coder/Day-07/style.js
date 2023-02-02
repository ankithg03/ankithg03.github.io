var obj={
    fname:"ankith",lname:"g"
}
function fullname(obj){
    return obj.fname+" "+obj.lname;
}
document.getElementById("fastname").innerText="firstName: "+obj.fname;
document.getElementById("lastname").innerHTML="lastName: "+obj.lname;
document.getElementById("fullname").innerHTML="FullName: "+fullname(obj);

document.getElementById("addEmpbtn").addEventListener("click",function(){
    var regexName = /^[a-zA-Z ]{2,30}$/;
    if(!regexName.test(document.getElementById("name").value)){
     document.getElementById("nameErr").innerText="Please Enter Valid Name";
     document.getElementById("ageErr").innerText="";
     document.getElementById("salaryErr").innerText="";
        return false;
    }
    document.getElementById("nameErr").innerText="";
    if(((document.getElementById("salary").value)>0)&&((document.getElementById("salary").value)<10000000)){
        document.getElementById("salaryErr").innerText="Please Enter Salary Details";
        return false;
    }
    document.getElementById("salaryErr").innerText="";
    if((document.getElementById("age").value)> 18 && (document.getElementById("age").value)< 120){
        document.getElementById("ageErr").innerText="Please Enter Valid Age";
        return false;
    }
    document.getElementById("salaryErr").innerText="";
});
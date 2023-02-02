<?php
    if(isset($_POST["submit"])&&$_POST["name"]!=""&&$_POST["salary"]!=""&&$_POST["age"]!=""){
     
        $name = $_POST["name"];
        $name= preg_replace('/(<([^>]+)>)/', '', $name); 
        echo $name;
        $salary = $_POST["salary"];
       // $salary=preg_replace('/(<([^>]+)>)/ig', '', $salary); 
        $age = $_POST["age"];
       // $age=preg_replace('/(<([^>]+)>)/ig', '', $age); 
        require("FileIO.php");
        require("Employee.php");
        $fileName="myEmp.txt";
        $FileObj=new FileIO();
        $data=$FileObj->FileRead($fileName); 
        $rslt = unserialize($data);
        print_r($rslt);
       // print_r( serialize($data));
        if(!$data||$rslt==[]){
            $Employees=[];
            $Employees[]= new Employee(1001,$name,$salary,$age);
            $str=serialize($Employees);
            $FileObj->FileWrite($fileName,$str);
            header('location: index.php');
           }
        else{
            $newRow=[];
            $Employees=unserialize($data);
            $Employees[]= new Employee((end($Employees)->getEmployeeId()+1),$name,$salary,$age);
            $str=serialize($Employees);
            $FileObj->FileWrite($fileName,$str);
            header('location: index.php');
        }
    }
    require("head.php");
?>

<section class="heading">Add Employee Data</section>
    <section class="form">
        <form method="POST" onsubmit="return datavalidate(this)"">
            <div class="form-element">
                <input type="text" id="name" class="form-input" name="name" placeholder="Name" required/>
                <p id="nameErr" class="Err"></p>
            </div>
            <div class="form-element">
                <input class="form-input" id="salary" type="number" name="salary" placeholder="Salary" required/>
                <p id="salaryErr" class=" Err"></p>
            </div>
            <div  class="form-element">
                <input  class="form-input" id="age" type="number" name="age" placeholder="Age" required/>
                <p id="ageErr" class=" Err"></p>
            </div>
            <div class="form-element">
                <input id="addEmpbtn" class="btn" type="submit" name="submit">
            </div>
        </form>
    </section>
</body>
<script src="script.js"></script>
</html>

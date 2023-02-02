<?php
/**
 * @require FileIO Class 
 */
require("FileIO.php");
/**
 * @require Employee Class
 */
require("Employee.php");
$fileName="myEmp.txt";
$FileObj=new FileIO();
$data=$FileObj->FileRead($fileName);
 if(!$data){
    $Employees=[];
    $Employees[]= new Employee(1001,"Ankith G",10000.50,25);
    $Employees[]=new Employee(1002,"Basahid",10000.50,25);
    $Employees[]=new Employee(1003,"Karthik",10000.50,25);
    $Employees[]=new Employee(1004,"Rajath",10000.50,25);
    $str=serialize($Employees);
    $FileObj->FileWrite($fileName,$str);
    }
else{
    $Employees=unserialize($data);
    }
if(isset($_POST["deletebtn"])){
    $EmpId=$_POST["deletebtn"];
    foreach($Employees as $i=>$emp){
        if($emp->getEmployeeId()==$EmpId){
            break;
        }
    }
    array_splice($Employees, $i, 1);
    $str=serialize($Employees);
    $FileObj->FileWrite($fileName,$str);
    header('location: index.php');
}
require("head.php");
?>
    <section class="heading">Employee Data</section>
    <div>
    <form method="POST">    
     <table>
        <tr><th>Id</th><th>Name</th><th>Salary</th><th>Age</th><th>Delete</th></tr>
     <?php 
     if(count($Employees)!=0){
            foreach($Employees as $emp){     ?>
                    <tr>
                    <td><?php echo ($emp->getEmployeeId());?></td>
                        <td><?php echo ($emp->getEmployeeName());?></td>
                        <td><?php echo ($emp->getEmployeeSalary());?></td>
                        <td><?php echo ($emp->getEmployeeAge());?></td>
                        <td><button class="btn-primary" name="deletebtn" value="<?php echo ($emp->getEmployeeId()); ?>">Delete</button></td>
                    </tr>
    <?php           }
            } else{
    ?>
        <tr>
            <td colspan="5">
                <p class="Err">
                    <?php echo"No Employee Information Persent"; ?>
                </p>
            </td>
        </tr>
 <?php   } ?>
     </table>
     </form>
    </div>
</body>
</html>
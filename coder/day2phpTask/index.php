<?php 
include("top.php");
if(isset($_POST["submit"])){
    
    if(isset($_COOKIE["User"])){
    //echo"<script>alert('".$_POST['name']."');</script>";
        //$arr=[array("Ankith","Pass","c"),array("Bashid","Pass","c"),array("Rajath","Pass","c")];
       // setcookie('User',json_encode($arr),time() + 3600, '/');
        $a=$_COOKIE["User"];
        $a=json_decode($a);
        foreach($a as $row){
            $i=0;
            foreach($row as $ele){
                if($i==0){
                    echo("<script>console.log('".$ele."');</script>");
                }
                $i++;
            }
        }
        //$ele=["Pradumna","Pass","c"];
        $ele=[];
        array_push($ele,$_POST['name']);
        array_push($ele,$_POST['email']);
        array_push($ele,$_POST['password']);
        array_push($ele,$_POST['tel']);
        array_push($a,$ele);
        setcookie('User',json_encode($a),time() + 3600, '/');
       
        //array_push($a,$ele);
        foreach($a as $row){
            $i=0;
            foreach($row as $ele){
                if($i==0){
                    echo("<script>console.log('".$ele."');</script>");
                }
                $i++;
            }
        }
    }
    else{
        $arr=[];
        $ele=[];
        array_push($ele,$_POST['name']);
        array_push($ele,$_POST['email']);
        array_push($ele,$_POST['password']);
        array_push($ele,$_POST['tel']);
        array_push($arr,$ele);
        setcookie('User',json_encode($arr),time() + 3600, '/');
        //$_POST['name']
        echo("<script>console.log('No Cookie Present');</script>");
    }    
}

?>

            <div class="register">
                <form method="POST">
                    <input type="text" name="name" class="form-element" placeholder="Name">
                    <input type="email" name="email" class="form-element" placeholder="Email">
                    <input type="password" name="password" class="form-element" placeholder="password">
                    <input type="tel" name="teli" class="form-element" placeholder="Phone No">
                    <button type="submit" name="submit" class="btn">Register</button>
                </form>
            </div>
            <?php 
include("bottom.php");
?>
        
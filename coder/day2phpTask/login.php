<?php 
session_start();
include("top.php");
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    if(isset($_COOKIE["User"])){
            $a=$_COOKIE["User"];
            $a=json_decode($a);
            foreach($a as $row){
                $i=0;
                $flag=0;
                foreach($row as $ele){
                    if($i==1){
                        if($ele==$email){
                                $flag=1;
                        }
                        echo("<script>console.log('".$ele."');</script>");
                        
                    }
                    if($i==2){
                        echo("<script>console.log('".$ele."');</script>");
                        if($flag==1){
                            if($ele==$password){
                                   echo("<script>console.log('".$flag."');</script>");
                                   $_SESSION["Email"] = "".$email;
                                   header("Location: dashboard.php");
                            }
                        }
                    }
                    $i++;
                }
            }

        }
}

?>

            <div class="register">
                <form method="POST">
                    <input type="email" name="email" class="form-element" placeholder="Email">
                    <input type="password" name="password" class="form-element" placeholder="password">
                    <button type="submit" name="submit" class="btn">Sign In</button>
                </form>
            </div>
<?php 
include("bottom.php");
?>
        
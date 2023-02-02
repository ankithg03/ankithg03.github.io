<?php
$txt1=0;
$txt2=0;
$res=0;
if(isset($_POST['sub']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	
	if($oprnd=="+"){
			$res=$txt1+$txt2;
	}
	else if($oprnd=="-"){
			$res=$txt1-$txt2;
	}
	else if($oprnd=="x"){
			$res=$txt1*$txt2;
	}
	else if($oprnd=="/"){
		if($txt2!=0){
			$res=$txt1/$txt2;
		}
		else{
			$res="infinity";
		}	
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			My First Task
		</title>
		<link rel="stylesheet" href="style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

	<div class="topnav" id="myTopnav">
  		<a href="#home" class="active">myCalc</a>
		<a href="#task1">Task-1</a>
  		<a href="#task2">Task-2</a>
  		<a href="#task3">Task-3</a>
  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			<i>???</i>
  		</a>
	</div>

	<div class="mycontainer">
<form method="post" action="">
	<div>
		<p class="heading">Calculator</p>
	</div>
	<div>
	<table scrollable>
		<tr><td colspan="1">No1:</td><td colspan="3"> <input name="n1" type="number" value="<?php echo $txt1; ?>"></td></tr>
		<tr><td colspan="1">No2:</td><td colspan="3"> <input name="n2" type="number" value="<?php echo $txt2; ?>"></tr></td>
		<tr><td colspan="1">Res:</td><td colspan="3"> <input name="res" readonly value="<?php echo $res; ?>"> </tr></td>
		<tr>
		<td><input type="submit" name="sub" value="+"></td>
		<td><input type="submit" name="sub" value="-"></td>
		<td><input type="submit" name="sub" value="x"></td>
		<td><input type="submit" name="sub" value="/"></td></tr>
	</table>
</div>
</form>
<!--
	<form method="post" action="">
	<table>
	<tr><td colspan="4"><input name="n1" value=""></td></tr>
	<tr><td colspan="4"><input name="n2" value=""></td></tr>
	<tr>	
		<td colspan="1"><button class="num">1</button></td>
		<td><button colspan="1" class="num">2</button></td>
		<td><button colspan="1" class="num">3</button></td>
		<td colspan="1"><button class="num">4</button></td>
	</tr>
	<tr>	
		<td colspan="1"><button class="num">5</button></td>
		<td><button colspan="1" class="num">6</button></td>
		<td><button colspan="1" class="num">7</button></td>
		<td colspan="1"><button class="num">8</button></td>
	</tr>
	<tr>
		<td colspan="1"><button class="num">9</button></td>
		<td colspan="1"><button class="num">0</button></td>
		<td><button  type="submit" name="sub" value="+">+</button></td>
		<td colspan="1"><button  type="submit" name="sub" value="-">-</button></td>
	</tr>
	<tr>
		<td colspan="1"><button  type="submit" name="sub" value="*">*</button></td>
		<td colspan="1"><button  type="submit" name="sub" value="/">/</button></td>
		<td colspan="1"><button  type="submit" name="sub" value="=">=</button></td>
		<td><button  type="submit" name="sub" value="c">C</input></td>
	</tr>
	<tr></tr>
	</table>
	</form>
-->
	</div>
	<script>
	function myFunction() {
  		var x = document.getElementById("myTopnav");
  		if (x.className === "topnav") {
   			 x.className += " responsive";
  		} else {
    			x.className = "topnav";
  		}
	}
	</script>
	</body>
</hml>

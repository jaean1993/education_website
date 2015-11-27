<html>
	<title>practice</title>
	<body>
		<?php
			$mess="";
			if(isset($_POST["sub"])){
				if($_POST["num1"]==""){
					$mess .="The first blank cannot be empty!";
					
				}else{
					if(!isnumeric($_POST["num1"]))
						$mess .="Please input the number!";
				}
				if($_POST["num2"]==""){
					$mess .="The second blank cannot be empty!";
				}else{
					if(!is_numeric($_POST["num2"])){
						$mess .="input the number";
					}
					else{
						if($_POST["opt"]=="/"&&$_POST["num2"]==0)
							$mess .="it cannot be zero";
					}
				}
				
			}
			
		?>
	<table border=1  align="center" width="400" >
	<form action="" method="post">
		<caption><h1>calculator</h1></caption>
		<tr>
			<td>
				<input type="text" size="4" name="num1" value="<?php echo @$_POST["num1"] ?>" />
			</td>
			
			<td>
				<select name="opt">
					<option value="+"<?php echo @$_POST["opt"]=="+"? "selected":"" ?>>+</option>
					<option value="-"<?php echo @$_POST["opt"]=="-"? "selected":"" ?>>-</option>
					<option value="*"<?php echo @$_POST["opt"]=="*"? "selected":"" ?>>*</option>
					<option value="/"<?php echo @$_POST["opt"]=="/"? "selected":"" ?>>/</option>
				</select>
			</td>
			<td>
				<input type="text" size="4" name="num2" value="<?php echo @$_POST["num2"]?>"/>
			</td>
			<td>
				<input type="submit" name="sub" value="get"/>
			</td>
		</tr>
	</form>
	<?php 
		if( isset($_POST["sub"])){
			
		}
		
	?>
	<?php
		$contact = array("ID"=>1,"name"=>"gao","company"=>"A");
		echo '<dl>';
		while(list($key,$value)=each($contact)){
			echo "<dd> $key :$value </dd>";
		}
		echo '</dl>';
	?>
	<?php
		function myFun($var){
			if($var%2==0){
				return true;
			}
		}
		$cc=array("a"=>1,"b"=>2,"c">=3);
		print_r(array_filter($cc,"myFun"));
	?>
	</body>
</html>
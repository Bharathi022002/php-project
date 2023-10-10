<?php
// define variables and set to empty values
$num1 = $num2 = $num3 = $num4 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = check_input($_POST["num1"]);
  $num2 = check_input($_POST["num2"]);
  $num3 = check_input($_POST["num3"]);
  $num4 = check_input($_POST["num4"]);
}

function check_input($data) {
  $num = trim($data);
  $num = stripslashes($data);
  $num = htmlspecialchars($data);
  return $num;
}

if($num1==136 and $num2==120 and $num3==137 and $num4==121)
{
    ?>
    <script>
        alert("Your answer is correct!..")
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Sorry, your answer is wrong!..")
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>HTML <td> bgcolor Attribute</title>
    <style> 
        table { 
            border-collapse: collapse; 
            border: 1px solid black; 
            width:5000px;
            tabel-layout: fixed;
            height:250px;
        }   
        th, 
        td { 
            border: 1px solid black; 
            width: 60px;
            height: 60px;
        }  
        table#table1 { 
            table-layout: fixed; 
            width: 200px;
        } 
        h1 { 
            color: green; 
        } 
        
        
                
        input#button {
            display: inline-block;
                outline: 0;
                text-align: center;
                cursor: pointer;
                padding: 17px 30px;
                border: 0;
                color: #fff;
                font-size: 17.5px;
                background: #00d301;
                background: -webkit-linear-gradient(-196deg,#00d301,#36c275 50%,#00a562);
                background: -webkit-linear-gradient(164deg,#00d301,#36c275 50%,#00a562);
                background: linear-gradient(286deg,#00d301,#36c275 50%,#00a562);
                line-height: 30px;
                font-weight: 800;
                transition: background,color .1s ease-in-out;
}
    </style> 
</head>

<body>
  <div>
    <h2 style="color:black; font-size:25px;">Input Array : 16 × 16 </h2>
	<table id="table1">
		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>

		<tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        
	</table>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div>
    <h2 style="color:black; font-size:25px;">Output Array</h2>
    
	<table id="table1">
    <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>

		<tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> <input style="width:30px" type="text" name="num1" > </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> <input style="width:30px" type="text" name="num2" ></td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> <input style="width:30px" type="text" name="num3" > </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> <input style="width:30px" type="text" name="num4" ></td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00</td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 00 </td>
		</tr>
	</table>
    </div>
    <div>
        <br>
        <input type="submit" id="button"  value="Submit">
    </div>
    </form>
</body>

</html>

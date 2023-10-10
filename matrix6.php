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
    </style> 
</head>

<body>
  <div>
    <h2 style="color:black; font-size:25px;">Input Array : 6 × 6 </h2>
	<table id="table1">
		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 1 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 2 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 3 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 4 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 5 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 6 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 7 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 8 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 9 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 10 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 11 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 12 </td>
		</tr>
        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 13 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 14 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 15 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 16 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 17 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 18 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 19 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 20 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 21 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 22 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 23 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 24 </td>
		</tr>

        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 25 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 26 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 27 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 28 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 29 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 30 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 31 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 32 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 33 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 34 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 35 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 36 </td>
		</tr>
	</table>
    </div>

    <div>
    <h2 style="color:black; font-size:25px;">Output Array</h2>
	<table id="table1">
		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 6 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 12 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 18 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 24 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 30 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 36 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 5 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 8 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 9 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 10 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 11 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 35 </td>
		</tr>
        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 4 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 14 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 21 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 15 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 17 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 34 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 3 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 20 </td>
			<td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 22 </td>
            <td bgcolor="red" style="color:white; font-size:20px; text-align:center"> 16 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 23 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 33 </td>
		</tr>

        <tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 2 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 26 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 27 </td>
            <td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 28 </td>
			<td bgcolor="white" style="color:black; font-size:20px; text-align:center"> 29 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 32 </td>
		</tr>

		<tr>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 1 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 7 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 13 </td>
            <td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 19 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 25 </td>
			<td bgcolor="green" style="color:white; font-size:20px; text-align:center"> 31 </td>
		</tr>
	</table>
    </div>
</body>

</html>

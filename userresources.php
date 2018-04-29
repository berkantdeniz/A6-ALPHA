
<html>
<head>
<title>A6-ALPHA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<style type="text/css">

body {
	background-image: url(https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/moving-through-stars-in-space_-1zccenlb__F0000.png);
}
body,td,th {
	color: #CCCCCC;
	font-size: 16px;
	font-family: Courier;
}
a:link {
	color: #CCCCCC;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #CCCCCC;
}
a:hover {
	text-decoration: none;
	color:#454A61;
	background-color: #CCCCCC;
}
a:active {
	text-decoration: none;
	color: #CCCCCC;
}
.style2 {font-size: 18px; }
.style3 {font-size: 36px;
font-style: bold; }

</style></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center>
  <p>&nbsp;	</p>
  <table width="1123" height="357" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td colspan="4" bgcolor="#000000"><p>&nbsp;</p>      </td>
	</tr>
	<tr>
		<td width="4" height="254">&nbsp;</td>
		<td colspan="2" bgcolor="#343955"><img src="images/asd.png" alt="" width="1115" height="254" border="0" usemap="#Map">
		  <map name="Map">
            <area shape="rect" coords="945,170,1115,205" href="userresources.php">
            <area shape="rect" coords="763,170,918,205" href="userlands.php">
            <area shape="rect" coords="586,170,741,205" href="userguns.php">
            <area shape="rect" coords="415,170,570,205" href="userworkers.php">
            <area shape="rect" coords="239,170,394,205" href="usersoldiers.php">
            <area shape="rect" coords="46,170,201,205" href="userplanets.php">
          <area shape="rect" coords="264,50,776,161" href="userindex.php">
		  </map></td>
		<td width="4">&nbsp;</td>
	</tr>
	<tr>
		<td height="18">&nbsp;</td>
		<td colspan="2" bgcolor="#000000">
			<img src="images/a6a_06.gif" width="1115" height="6" alt=""></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="2">&nbsp;</td>

	    <p>&nbsp;</p>
	    <p>&nbsp;</p></td>
	  <td width="1115"  bordercolor="000000" bgcolor="071227" border="1" >
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<p>&nbsp;</p>
	    
		
		
		
		
		
		
		<!-- BEGININNG OF THE PHP CODE  --> 
		
		<div align="center">
          <table width="541" style = "border: 1px dashed">
            <thead>
              <tr>
          <th width="264" bgcolor="#333333" class="style8">Resource Name</th>
              <th width="264" bgcolor="#333333" class="style8">Yielded in</th>
                 
          
      </tr>
            </thead>
            <tbody>
		
		<?php

		$db = mysqli_connect('localhost', 'root', '', 'SPACE');

	if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
	}


$sql = 'SELECT R.rName, L.lName
        FROM Land L, Resource R, yield Y 
        WHERE R.rID = Y.rID AND Y.lID = L.lID';



$result = mysqli_query($db, $sql);

$sqlCount = 'SELECT COUNT(*) as count FROM Planet';
$resultCount = mysqli_query($db, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$count = $rowCount['count'];

		?>
		
 <?php

	while($row = mysqli_fetch_assoc($result)) {
    $rname = $row['rName'];
    $lname = $row['lName'];
    
  
	
    echo "<tr>
          <td><center><font color='#FFDC00'>$rname</font></center></td>
             <td><center><font color='#39CCCC'>$lname</font></center></td>
         
       
          </tr>";
}
 
?>
  



		  <!-- END OF THE PHP CODE  -->		
	      
	    </td>
		

</table>
		<td rowspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">
		  <p class="style2">2018 A6-ALPHA Space Station </p>
	    </div></td>
	</tr>
</center>
<div align="center">
</div>
</body>
</html>
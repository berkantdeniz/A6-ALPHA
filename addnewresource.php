
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
            <area shape="rect" coords="945,170,1115,205" href="resources.php">
            <area shape="rect" coords="763,170,918,205" href="lands.php">
            <area shape="rect" coords="586,170,741,205" href="guns.php">
            <area shape="rect" coords="415,170,570,205" href="workers.php">
            <area shape="rect" coords="239,170,394,205" href="soldiers.php">
            <area shape="rect" coords="46,170,201,205" href="planets.php">
          <area shape="rect" coords="264,50,776,161" href="index.php">
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
	  <td width="301" bgcolor="#040D1B" border=""  bordercolor="38394F" ><table width="276" height="389" border="1" align="center" bordercolor="#556B2F">
        <tr>
           <td width="266"><div align="center">MENU</div></td>
        </tr>
        <tr>
          <td><a href="addnewalien.php"><img src="images/icons.png" width="15" height="15" border="0"/> ADD ALIEN </a></td>
        </tr>
        <tr>
          <td><a href="addnewplanet.php"><img src="images/icons.png" width="15" height="15" border="0"/> ADD PLANET </a></td>
        </tr>
        <tr>
          <td><a href="addnewland.php"><img src="images/icons.png" width="15" height="15" border="0"/> CREATE A LAND </a></td>
        </tr>
        <tr>
          <td><a href="addnewgun.php"><img src="images/icons.png" width="15" height="15" border="0"/> CRAFT A GUN </a></td>
        </tr>
        <tr>
          <td><a href="addnewresource.php"><img src="images/icons.png" width="15" height="15" border="0"/> GENERATE RESOURCES </a></td>
        </tr>
        <tr>
                 <td><a href="modalien.php"><img src="images/icons.png" width="15" height="15" border="0"/> UPDATE ALIEN NAME </a></td>
        </tr>
        <tr>
          <td><a href="showminerals.php"><img src="images/icons.png" width="15" height="15" border="0"/> SHOW MINERALS </a></td>
        </tr>
        <tr>
          <td><a href="shownutritions.php"><img src="images/icons.png" width="15" height="15" border="0"/> SHOW NUTRITIONS </a></td>
        </tr>
        <tr>
           <td><a href="deletenut.php"><img src="images/icons.png" width="15" height="15" border="0"/> DELETE A NUTRITION </a></td>
        </tr>
      </table>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p></td>
	  <td width="814"  bordercolor="000000" bgcolor="071227" border="1" >
		
		
		
		
		
		
		<div align="center">
	      <p class="style3">Discover a Resource </p>
	      <p>You can add a new resource in this section. <br>
            <br>
	        
          </p>
          </p>
	      
		  
		  <?php

$db = mysqli_connect('localhost', 'root', '', 'Space');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

$sqlSailors = "SELECT L.lName, L.lID
				FROM Land 
				L ORDER BY lID";
$sailorsResult = mysqli_query($db, $sqlSailors);



$sqlCount = 'SELECT MAX(R.rID) as maxRid FROM Resource R';
$resultCount = mysqli_query($db, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$mypid = $rowCount['maxRid'];

$mypid = $mypid + 1;

?>



 <form action="addnewresource.php" method="post">
          <table width="415" height="140" border="1" bordercolor="#003333">

            <tr>
              <td width="121" height="26"><div align="center">Resource Name: </div></td>
              <td width="278"><div align="center">
                <input type="text" name="personname" size="36">
              </div></td>
            </tr>
            <tr>
              <td height="26"><div align="center">Yields in:</div></td>
              <td><div align="center">
                <select name="house">




                  <?php
        while($row = mysqli_fetch_assoc($sailorsResult)) {
            $housename = $row['lName'];
			$houseid = $row['lID'];

            echo "<option value=$houseid>$housename</option> \n";
        }
        ?>
                </select>
				
				
              </div></td>
            </tr>
            <tr bordercolor="#454A61">
              <td height="28" bordercolor="#454A61"><div align="center">Class:</div></td>
              <td bordercolor="#454A61">  
                <div align="center">
                  <select name="myclass">
                    <option value="Mineral">Mineral</option>
                    <option value="Nutrition">Nutrition</option>
                    
                  </select>
                </div></td>
            </tr>


			<tr>
              <td width="121" height="30"><div align="center">Rareness/Quality: </div></td>
              <td width="278"><div align="center">
                <input type="text" name="quality" size="36">
              </div></td>
            </tr>


            <tr bordercolor="#454A61">
              <td height="30">&nbsp;</td>
              <td>
                <div align="center">
                  <input name="submit" type="submit" value="Discover it !">
                  </div></td></tr>
          </table>
         

<br>

<input type="hidden" value="<?php echo $mypid; ?>" name="personid" />

    </form>

<?php


if(isset($_POST['personname']) && isset($_POST['quality']))

{

$pName = $_POST['personname'];
$yeild = $_POST['house'];
$myclass = $_POST['myclass'];

$iID = "0";
$pID = $_POST['personid'];
$ptp = $_POST['quality'];


$personquery = "INSERT INTO Resource (rID, rName)
VALUES ('$pID', '$pName');";
$yieldquery = "INSERT INTO yield (rID, lID)
VALUES ('$pID', '$yeild');";

$presult = mysqli_query($db, $personquery);
$yield = mysqli_query($db, $yieldquery);

$sresult = 0;
$wresult = 0;

			if($presult && $yield) 
			{
				if($myclass == "Mineral")
				{
					
				$fights = 0;
				$soldierquery = "INSERT INTO Mineral(resource_rID, rareness)
				VALUES ('$pID', '$ptp' );";
				$sresult = mysqli_query($db, $soldierquery);
				
				}
				
				else if ($myclass = "Nutrition")
				{
				$farms = 0;
				$speciality = "farmer";
				$workerquery = "INSERT INTO Nutrition (resource_rID, quality)
				VALUES ('$pID', '$ptp' );";
				
				$wresult = mysqli_query($db, $workerquery);
				}
			
			
		if(($sresult || $wresult))
		{
		echo "<font color = 'green'>The resource has been added successfully.</font>";
		}
		
		else 
		{
		echo "<font color = 'red'>The resource could not be added.</font>";
		}
			
			}
	
		

}

?>


        </div>        
		<br> 
		
		
		
		
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
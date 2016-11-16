<html>
<head>
             <link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<title>View</title>
</head>
<style>
img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
}
body
{
background-size:1366px 768px;
background-repeat:no-repeat;
}
table
{
font color="white";
}
</style>

<body  >
<form>
<center>
<font color="blue">
<h2>TECH HUNT</h2></font>
<h3><font color="blue">Find me....</font></h3>
<h4>Find the word from puzzle and put it on the text box</h4>
<img src="img\PIC2.jpg" alt="Puzzule" width="400" height="300" >
 <table>
        <tr>
            <td><font color="white">check:</font></td>
            <td><input type="text" name="t7" id="t7" autocomplete="off" /></td>
        <tr>
            <td><font color="white">Confirm to click on View</font></td>
            <td><button type="submit" value="Submit">Click</button></td>
        </tr>
</table>
    </center>
</form>    
    <?php
    if($_GET)
	{
	$i=$_GET['t7'];
	
    $con=  mysql_connect("localhost","root","");
    if(!$con)
    {
        die('connection Failed'.mysql_error());
    }
    mysql_select_db("techhunt",$con);
   $result=mysql_query("select * from que1");
    while($row=mysql_fetch_array($result))
    {
       if($row["answers"]==$i)
    {
        print"<center>";
        echo"welcome";
        print "<table border=1>";
        print "<tr><td>Answer correct:</td><td>".$row['answers']."<br></td></tr>";
		//$ans=$row['answers'];
		//print "<tr><td>Answer correct:</td><td>"$ans"<br></td></tr>";
		//header("location:"$i".pdf");
		
		//header("location:"+$i+".pdf");

		print "</table>";
        print "</center>";
    } 
			if($i=="linux")
			{
			header("location:linux.pdf");
			}
    }
	        if($i=="trojan")
			{
			header("location:trojan.pdf");
			}
			if($i=="microsoft")
			{
			header("location:microsoft.pdf");
			}
			if($i=="wifi")
			{
			if header("location:wifi.pdf");
			}
			if($i=="protocol")
			{
			header("location:protocol.pdf");
			}
	
	
	}
	?>
</body>
</html>

<html>
<head>
<title>Tech Hunt</title>
<link rel="stylesheet" href="xyz.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</head>
<body bgcolor="gray">

<center>
<h1><font color="blue"><img src="img\logo.png"  alt="logo" width="70" height="70">Dhirajlal Gandhi College of Technology<br></h1>

               <h2>Approved by AICTE| Affiliated to Anna University</h2>
			   <h3>Department of Computer Science and Engineering</h3>
			   <h4>Novitas 2K16 </font> </h4>
			   </center>

<br>
   <br>
   <br><center>
   <img src="img\Tech_hunt.jpg" class="" alt="logo" width="430" height="300"></center>
   <form > 
    <div class="col-md-4 col-md-offset-4">

	
	
      <input type="text" class="form-control lftxt text-center" id="nam" placeholder="Name" name="nam">
    
 
 
    
      <input type="text" class="form-control lftxt text-center" id="de" placeholder="Department" name="de">
    
	
    
      <input type="text" class="form-control lftxt text-center" id="clgn" placeholder="College Name" name="clgn">
	  
	  
	  <input type="text" class="form-control lftxt text-center" id="mobile" placeholder="Mobile" name="mobile">
	  
    
	
<br>	
<center>	<input type="submit"	 class="btn btn-success" value="Submit"></center></div>

  </form>
  </div>
<?php
if($_GET)  
{

  $name=$_GET['nam'];
  $d=$_GET['de'];
    $clg=$_GET['clgn']; 
	$numb=$_GET['mobile'];
if($name!="" && $d!="" && $clg!="" && $num!="")   
{ 
  $con=  mysql_connect("localhost","root","");
    if(!$con)
    {
        die('connection Failed'.mysql_error());
    }
    mysql_select_db("reg",$con);
   $result=mysql_query("insert into regtable(name,depart,clg,num) values('$name','$d','$clg','$numb')");
   

   if($result)
{
echo "<br>Record Added";
header("location:ques1.php");

}
}
}
?>      
  
  </body>
</html>


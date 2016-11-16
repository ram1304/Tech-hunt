<html>
<head>
<title>Tech Hunt</title>
<link rel="stylesheet" href="xyz.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style type="text/css">


.ghost
{

color:#000;
background-color:#f5f5f5;
border:1px solid #444c44;
border-radius:10px;
display:inline-block;
width:100px;
padding:4px;
margin:2px;
font-family:fantasy;

}
.ghost:hover, .ghost:focus
{

background-color:#e5ffe5;
color:Darkgreen;
}
#nam:hover
{
background-color:#e5ffe5;
color:#000;

}

#de:hover
{
background-color:#e5ffe5;
color:#000;

}
#clgn:hover
{
background-color:#e5ffe5;
color:#000;

}
#im
{
border-radius:15px;
opacity: 0.9;
}

</style>
</head>
<body bgcolor="gray">

<center>
<h1><font color="blue"><img src="img\logo.png"  alt="logo" width="70" height="70" >Dhirajlal Gandhi College of Technology<br></h1>

               <h2>Approved by AICTE| Affiliated to Anna University</h2>
			   <h3>Department of Computer Science and Engineering</h3>
			   <h4>Novitas 2K16 </font> </h4>
			   </center>

<br>
   <br>
   <br><center>
   <img src="img\Tech_hunt.jpg" class="" alt="logo" width="430" height="300" id="im"></center>
   <form > 
    <div class="col-md-4 col-md-offset-4">

	
	
      <input type="text" class="form-control lftxt text-center" id="nam" placeholder="Name" name="nam">
    
 
 
    
      <input type="text" class="form-control lftxt text-center" id="de" placeholder="Department" name="de">
    
	
    
      <input type="text" class="form-control lftxt text-center" id="clgn" placeholder="College Name" name="clgn">
	  
    
	
<br>	
<center>	<input type="submit"	 class="ghost" value="Submit"></center></div>

  </form>
  </div>
<?php
if($_GET)  
{

  $name=$_GET['nam'];
  $d=$_GET['de'];
    $clg=$_GET['clgn'];
if($name!="" && $d!="" && $clg!="" ) 
{ 
  $con=  mysql_connect("localhost","root","");
    if(!$con)
    {
        die('connection Failed'.mysql_error());
    }
    mysql_select_db("reg",$con);
   $result=mysql_query("insert into regtable(name,depart,clg) values('$name','$d','$clg')");
   

   if($result)
{
//echo "<br>Record Added";
header("location:ques.php");

}
}
}
?>      
  
  </body>
</html>


<html>  
 <head><title>POST Method in Action</title></head>  

 <style type="text/css">
 	body{	
			
			border: solid 4px;
			width: 680px;
			margin-right:1000 ; 
			
		
			}
 .spc{
		padding-left: 10px;
		height: 30px;
		width: 370px;
	}
.spc1{
		padding-left: 10px;
		height: 30px;
	}
.clk{
		float: center;
		width: 200px;
		height: 50px;
		background-color: black;
		color: white;
		padding: 10px;
		border-radius: 10px 10px 10px 10px;

	}

 	
 </style>
 <body>

 	<center><h1>BIODATA</h1>
</center>
<form action="post.php" method="post">

Name: <input class="spc" type="text" name="user"><br><br>

Pressent Address: <input class="spc" type="text" name="PA1"><br> <br>

Permanent Address: <input class="spc" type="text" name="PA2"><br> <br>

Date of Birt: <input class="spc1" type="text" name="DB"> 
Religion: <input class="spc1" type="text" name="Religion"><br> <br>

Civil Status: <input class="spc1" type="text" name="CS"> 
Age: <input class="spc1" type="text" name="Age"><br> <br>

Citizenship: <input class="spc1" type="text" name="Citizenship"> 
Weight: <input class="spc1" type="text" name="Weight"><br><br>

Place of Birt: <input class="spc1" type="text" name="PB">
 Heigh: <input class="spc1" type="text" name="Height"><br> <br>

Name of Father: <input class="spc" type="text" name="NF"><br> <br>

Name of Mother: <input class="spc" type="text" name="NM"><br> <br>

Address: <input class="spc" type="text" name="Address"><br> <br>

Languiages or Dialects Spoken :<input class="spc" type="text" name="LDS"><br> <br>

Person to be notified In Case if Emergency: <input class="spc" type="text" name="PE"> <br><br>

<h2><u>EDUCATIONAL BACKGROUND</u></h2><br><br>

Elementary: <input class="spc1" type="text" name="Elementary"> Year Graduate: <input class="spc1"  type="text" name="YD1"><br> <br>

High School: <input class="spc1"  type="text" name="HS"> Year Graduate: <input class="spc1"  type="text" name="YD2"><br> <br>

College: <input class="spc1"  type="text" name="College"> Year Graduate: <input class="spc1"  type="text" name="YD3"><br> <br>

Course: <input  class="spc" type="text" name="Course"><br> <br>

Special Skills: <input class="spc" type="text" name="SS"><br><br>

<input class="clk" type="submit" value=" Submit ">  

</form>  
 </body>
</html>  
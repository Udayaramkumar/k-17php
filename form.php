 
<html>
	<head><title>Sign-up</title>
	<script>
	function CheckPassword(inputtxt)   
{   
var passw=  /^[A-Za-z]\w{7,14}$/;  
if(inputtxt.value.match(passw))   
{   
alert('Pursue to LOGIN') ; 
return true;  
}  
else  
{   
alert('Please reenter the Password should contain (one caps,one num)!') ;
return false;  
}  
} 
</script>
	 <link rel="stylesheet" type="text/css" href="test.css"/> 
	</head>


<body class="padding" background="bg/03.jpg" style="font-family: @Dotum, @DotumChe, @FangSong, sans-serif; font-weight: normal; font-style: normal; text-decoration: none; font-size: 10pt;" >
	<form action="form1.php" method="POST "name="res">
		<!center><div class="darkshadow"><fieldset  class="padding">
		<center><legend>FILL THE DETAILS</legend></center>
		<pre>
	First Name               :<input type="text" name="fname" placeholder="Ex:Udaya" required autofocus size="20">

	Last Name                :<input type="text" name="lname" required placeholder="Ex:RamKumar">
	
	D.O.B                    :<input type="date" name="date" placeholder="Ex:12/12/1997" required >	
	
	Age			 :<input type="text" name="age" required placeholder="Ex:18" size="4">

	Gender                   :<input type="radio" name="gen" value="male">MALE<input type="radio" name="gen" value="female">Female
							
			
	Email Id		 :<input type="email" name="mailid" required placeholder="E-mail id">
			
	Mobile No                :<input type="text" name="mnum"  required placeholder="Ex:9600843076">

	State			 :<input type="text" name="state"  required placeholder="Ex:Tamil Nadu">

	City                     :<input type="text" name="city"  required  placeholder="Ex:Chennai">

	
				
					<center><input  type="submit" name="sub1" value="Submit" formaction="form1.php">   <input type="reset" name=re value="Reset"></center><div>
                          <br>
			
			</pre>
  			
		</fieldset></center></div>
	</form>

</body>

</html>
<style type="text/css">
p.one 
{
border-style:solid;
border-width:5px;
}
fieldset.two 
{
border-style:outset;
border-width:7	px ;
}
p.three
{
border-style:solid;
border-width:1px;
}
fieldset.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:5%;
padding-left:15px;
height:550px;
width:10%;
border-style:outset;
border-width:5px ;

}
body.padding
{
padding-top:2%;
padding-bottom:0%;
padding-right:100%;
padding-left:25%;
}
a { text-decoration:none }
html {
    font-family: "Lucida Sans", sans-serif;
}
button.rounded-corners
{
  background-color:lightgrey;
  width:250px;
  height:125px;
  padding:10px;

  border-radius: 10px 10px 10px 10px;
  -ms-border-radius: 10px 10px 10px 10px;
  -moz-border-radius: 10px 10px 10px 10px;
  -webkit-border-radius: 10px 10px 10px 10px;
  -khtml-border-radius: 10px 10px 10px 10px;
}
;;;

</style>
 
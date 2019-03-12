<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  	<meta charset="utf-8">
    <title>Mon premier script PHP !</title>
    <style>
    	table{border-collapse: collapse;}
    	td,tr {border:1px solid #000;padding: 5px }
    </style>
  </head>
  <body>
   	<center><h1>login</h1><style type="text/css">  h1{border:7px solid black ;width:100%;color: black;background-color:red;}</style></center>
  	<center>
  			<img src="nom" width="100" heigth="70" align="center">	
  	</center>
  	<center>
  	

<?php

$personne  = array("Prenom" => "Cheikh Tidiane","Nom"=>"Thiam","Adresse"=>"Bargny","Email"=>"Cheikh98thiam@gmail.com","Telephone"=>"780115045","Profile"=>"Futur docteur");
foreach ($personne as $key => $value)
{
	echo "<table><td> <style> td,table{border:1.5px solid black;width:20% ;background-color:red;}  </style> \t " .$key.":" .$value."<br></td></table>" ;
};

?>

</center>

</body>
</html>
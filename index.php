<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oddzielenie JS od HTML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Witam budujemy nową stronę www </h1> 

    <?php
        echo "<h2>Siemka Sebix</h2>";
    ?> 
	
	<script src="new.js"> 	</script>

<br>
<br>

<p id="jan"> Cześć to jest w HTML</p>


    <?php
        if(isset($_GET['name'])){
            $name = $_GET['name'];
        }
        else{
            $name = 'anonim';
        }        
     ?> 

    <?php
        if(isset($_GET['surname'])){
            $surname = $_GET['surname'];
        }
        else{
            $surname = 'anonim';
        }        
     ?> 

     <?php
        if(isset($_GET['aka'])){
            $aka = $_GET['aka'];
        }
        else{
            $aka = 'anonim';
        }        
     ?> 

    
<form action="index.php" method="get">
    <input type="text" name="name" value="Podaj Imię">  <br>
    <input type="text" name="surname" value="Podaj Nazwisko"> <br>
    <input type="text" name="aka" value="Ksywa?"> <br> <br>
    <input type="submit" value="wyślij">
</form>

<?php
        echo "<h4>Witam na mojej stronie o koszykówce $name $surname aka: $aka</h4>";
    ?> 

</body>
</html>


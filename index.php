<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require_once('models/etudiant.class.php');
 // jeu de test 
 $etudiant2=new Etudiant(102,'RAMI','Amina',24,13.5);
 $etudiant3=new Etudiant(102,'RAMI','Amina',24,13.5);
 $etudiant4=new Etudiant(102,'RAMI','Amina',24,13.5);
 $etudiant5=new Etudiant(102,'RAMI','Amina',24,13.5);


 //$etudiant1= new Etudiant(101,'Alami','amine',age: 22,12.5);

//$etudiant2->age=28;

/*$etudiant2->moyenne=9.5;

echo $etudiant2->statusEtudiant();
echo "<br>";
echo $etudiant2->mention();*/

echo Etudiant::$compteur;




?>

</body>
</html>
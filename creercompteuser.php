<?php
require_once('../LESFONCTIONS/fonctions.php');
if(isset($_POST['f'])){
$emailuser=$_POST['a'];
$nomuser=$_POST['b'];
$prenomuser=$_POST['c'];
$sexuser=$_POST['e'];
$motdepasseuser=$_POST['d'];

 
try{
    if(controlemail($emailuser)==true){
        echo "<div class='alert-danger'>DESOLE un COMPTE EXISTE DEJA AVEC CET EMAIL!! <a href='reinitialiser.php?emails=$emailuser'>Mot de Passe Oublié?</a></div>";
    }else{
        creercompteuser($emailuser,$nomuser,$prenomuser,$sexuser,$motdepasseuser);
        header('location:pageconnexionuser.php');
    }

}catch(PDOException $e){
    die("ERREUR CONNEXION BASE DE DONEE".$e->getMessage());
}
  
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CREER COMPTE UTILISATEUR</title>
    <meta charset="UTF -8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../CSS/bootstrap.min.js"></script>
    <style>
     /* .vag{
      width:200px;
      Display:block;
      height:150px;

   }*/
   .container{
       width: 400px;
        } 
    
 </style>

</head>

<body>
<form method="POST" class="container">
     EMAIL UTLISATEUR:<input type="text" name="a" class="form-control" >
     NOM UTLISATEUR:<input type="text" name="b" class="form-control" >
     PRENOM NOM UTLISATEUR:<input type="text" name="c" class="form-control" >
     MOT DE PASSE UTLISATEUR:<input type="password" name="d" class="form-control" ><br><br>
     SEX UTLISATEUR:<input type="radio" name="e" value="M">masculin<br><br>
     SEX UTLISATEUR:<input type="radio" name="e" value="F">feminin<br>
     <input type="submit" value="VALIDER" name="f" id="lax">
      <a href="afficherlisteuser.php">LISTE DES UTILISATEURS ENREGISTRES</a>


</form>
</body>
</html>
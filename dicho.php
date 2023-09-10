<?php
session_start();
//vérifier si l utilisateur a fait une proposition
if(!isset($_POST["guess"])){
//les variables
$_SESSION['random']=0;
$_SESSION['nbrguesses']=0;
$_SESSION['username']=$_POST['username'];
$_SESSION['difficulty']=$_POST['difficulty'];
$_SESSION['score']=20;


$text='Enter your guess';
//création du valeur aléatoire
switch ($_SESSION['difficulty']){
    case "easy" :
      $_SESSION['random']=rand(1,10);
      $_SESSION['nbrguesses']=5;
      $_SESSION['sanction']=4;
      break;
    case "medium" :
        $_SESSION['random']=rand(1,50);
        $_SESSION['nbrguesses']=10;
        $_SESSION['sanction']=2;
        break;
    case "hard" :
          $_SESSION['random']=rand(1,100);
          $_SESSION['nbrguesses']=20;
          $_SESSION['sanction']=1;
          break; 
  }
$button="Guess";
$color="#5893D4";
}

elseif(($_POST["guess"] > $_SESSION['random']) && ($_SESSION['nbrguesses']>1)){
    $text="Your guess (".$_POST["guess"].") is too high!";
    // Décrémente le nombre de suppositions restantes et le score
    $_SESSION['nbrguesses']--;
    $_SESSION['score']-=$_SESSION['sanction'];
    $button="Guess";
    $color="#FE4A49";
    }

    
elseif(($_POST["guess"] < $_SESSION['random']) && ($_SESSION['nbrguesses']>1)){
    $text="Your guess (".$_POST["guess"].") is too low!";
    // Décrémente le nombre de suppositions restantes et le score
    $_SESSION['nbrguesses']--;
    $_SESSION['score']-=$_SESSION['sanction'];
    $button="Guess";
    $color="#52C1B7";
    }
else if (($_POST["guess"] == $_SESSION['random']) && $_SESSION['nbrguesses']>=1) { 
    $_SESSION["nbrguesses"]--;
    $text = "Well done! You guessed the right number!. Your Score is :".$_SESSION["score"] ; 
    $_SESSION['score']=0;
    $button="Restart";
    $color="#088F8F";    
    }

else{
    $_SESSION["nbrguesses"]--;
    $text="You Lost .";
        $_SESSION['guesses']=0;
        $_SESSION['score']=0;
        $button="Restart";
        $color="#748770";

}
//si l'utilisateur clique sur le bouton "restart", nous redémarrons le jeu avec le nombre correspondant de suppositions et de score
if(isset($_POST['Restart']) ){
    $button="Guess";
    if($_SESSION['difficulty']=='easy'){
        $_SESSION['nbrguesses'] =5 ;
        $_SESSION['random']=rand(1,10);
     }
    elseif($_SESSION['difficulty']=='medium'){
        $_SESSION['nbrguesses'] =10 ;
        $_SESSION['random']=rand(1,50);
     }
    elseif($_SESSION['difficulty']=='easy'){
        $_SESSION['nbrguesses'] =20 ; 
        $_SESSION['random']=rand(1,100);
    }
    $_SESSION['score']=20;
    $text = 'Enter your guess';
    $color="#6F8FAF";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>the game</title>
</head>
<body>
<body  class="blockquote text-center" style="background-color:#93C5F3">
<nav class="navbar navbar-light" style="background-color:#379BF9;margin:auto;">
<span class="navbar-text">
   <h2 style="text-transform:uppercase; color:white;"> welcome to dicho</h2>
  </span>
</nav>

<div class="container" >
<div class="row" >
<div class="col-md-6 col-md-offset-3">
 <div class="panel panel-login" style="background-color:#93C5F3">

<div class="panel-body" style="background-color:#93C5F3" >
 <div class="row">
    <div class="col-lg-12">
     <form  action="dicho.php" method="POST"  style="display: block; ">
     <h1 style="text-align: center;"><u> Guess the number</u></h1>
      <div class="form-group">
       <h1>welcome <?php echo $_SESSION['username'] ?> </h1>
       <h1>you have choosed the difficulty : <u><?php  echo $_SESSION['difficulty'];    ?> </u></h1>
       <h1>you still have : <u><?php  echo  $_SESSION['nbrguesses']   ?></u></h1>
       <input style="margin-bottom:20px;" type="number" name="guess" id="guess" tabindex="1" class="form-control"  value="<?php if(isset($_POST['guess']) ){ echo $_POST['guess'];}  ?>">
       <button style="padding: 10px 100px;" type="submit" class="btn btn-success" name=<?php echo $button; ?>><?php echo  $button; ?></button>

        
       <h4 style="padding: 10px;; border:solid black 2px;border-radius:20px;background-color: <?php echo $color; ?>;"><?php echo $text;?></h4>
    </div>
      
                                
         
 



</form>
</body>
</html>
<?php 

      include "isset.php";
    
      //require "monstre.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jeu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="row">
        <div class="col-2">
            <div class="ps-5 ">
             HERO
            </div>
        </div>
        <div class="col-2">
            <div class="ps-5">
            MONSTRE
            </div>
        </div>
    </div>
    <!-- Hero -->
    <form class="row" action="start.php" method="POST">
        <div class="col-2">

        
        <div class="form-floating ">
            <input type="texte" class="form-control" id="experience" placeholder="commence à 10 points" name="experience" disabled value="<?php echo 'ciao' ?>">
            <label for="floatingInput">Point d'expérience</label>
        </div>
        <div class="form-floating ">
            <input type="texte" class="form-control" id="vie" placeholder="commence à 10 points" name="vie" disabled value="<?php echo 'ciao vie' ?>">
            <label for="floatingInput">Point de vie</label>
        </div>
        <div class="form-floating ">
            <input type="texte" class="form-control" id="force" placeholder="commence à 1 points (2 si arme)" name="force" disabled value="<?php echo 'ciao force' ?>">
            <label for="floatingInput">Point de force</label>
        </div>   
        <div class="form-floating ">
            <input type="texte" class="form-control" id="endurance" placeholder="commence à 10 points" name="endurance" disabled value="<?php echo 'ciao endu' ?>">
            <label for="floatingInput">Point d'endurance</label>
        </div>
        <div class="form-floating ">
            <input type="texte" class="form-control" id="arme" placeholder="commence à 1 arme" name="arme" disabled value="<?php echo 'ciao arme' ?>">
            <label for="floatingInput">Armes</label>
        </div>
        <div class="form-floating ">
            <input type="texte" class="form-control" id="sous" placeholder="commence à 20€" name="sous" disabled value="<?php echo 'ciao sous' ?>">
            <label for="floatingInput">Sous</label>
        </div>
                <button type="submit" class=" btn btn btn-outline-primary btn-lg" name="attaque">
                    Atatak
                </button>
                <button type="submit" class=" btn btn btn-outline-primary btn-lg" name="fuire">
                    Fuire
                </button>
        </div>
        
    <!--monstre-->
    <div class="col-2">
    <div class="form-floating ">
            <input type="texte" class="form-control" id="experience" placeholder="commence à 10 points" name="experience" disabled value="<?php echo '$_exp' ?>">
            <label for="floatingInput">Point d'expérience monstre</label>
        </div>
        <div class="form-floating ">
            <input type="texte" class="form-control" id="vie" placeholder="commence à 10 points" name="vie" disabled value="<?php echo 'ciao vie' ?>">
            <label for="floatingInput">Point de force</label>
        </div>
        <div class="form-floating">
            <input type="texte" class="form-control" id="force" placeholder="commence à 1 points (2 si arme)" name="force" disabled value="<?php echo 'ciao force' ?>">
            <label for="floatingInput">Point de force arme</label>
        </div>   
        <div class="form-floating">
            <input type="texte" class="form-control" id="endurance" placeholder="commence à 10 points" name="endurance" disabled value="<?php echo 'ciao endu' ?>">
            <label for="floatingInput">Point d'endurance</label>
        </div>
        <div class="form-floating">
            <input type="texte" class="form-control" id="arme" placeholder="commence à 1 arme" name="arme" disabled value="<?php echo $game->getMonstre()->getArme()->getEndurance() ?>">
            <label for="floatingInput">Point d'endurance arme</label>
        </div>

        <div class="form-floating">
            <input type="texte" class="form-control" id="sous" placeholder="commence à 20€" name="sous" disabled value="<?php echo $game->getMonstre()->getSous() ?>">
            <label for="floatingInput">Monstre sous </label>
        </div>
       
    </div>
   
    </form>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
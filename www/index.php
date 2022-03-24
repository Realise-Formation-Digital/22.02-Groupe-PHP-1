<?php 

      include "isset.php";
    /*include "hero.php";
      include "marchant.php";
      include "monstre.php";
    */
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
    <div align="center">HERO</div>
    <form action="index.php" method="post">
        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="experience" placeholder="commence à 10 points" name="experience">
            <label for="floatingInput">Point d'expérience</label>
        </div>
        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="vie" placeholder="commence à 10 points" name="vie">
            <label for="floatingInput">Point de vie</label>
        </div>
        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="force" placeholder="commence à 1 points (2 si arme)" name="force">
            <label for="floatingInput">Point de force</label>
        </div>   
        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="endurance" placeholder="commence à 10 points" name="endurance">
            <label for="floatingInput">Point d'endurance</label>
        </div>
        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="arme" placeholder="commence à 1 arme" name="arme">
            <label for="floatingInput">Armes</label>
        </div>
        
        
        <div class="col-2">
            <label for="disabledSelect" class="form-label">Sac d'armes</label>
            <select id="disabledSelect" class="form-select">
                <option>Arme 1000</option>
                <option>Arme 3000</option>
                <option>Arme 5000</option>
            </select>
        </div>


        <div class="form-floating col-2">
            <input type="texte" class="form-control" id="sous" placeholder="commence à 20€" name="sous">
            <label for="floatingInput">Sous</label>
        </div>
        <button type="submit" class="col-2 btn btn btn-outline-primary btn-lg" name="start">
            start
        </button>

    </form>
    
    <div class="dropdown">
            <button class="col-2 btn btn-secondary dropdown-toggle" type="button" id="sac-armes" name="sac-armes">jo
            </button>
            <!-- <label for="floatingInput">Sac d'armes</label> -->
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
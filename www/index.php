<?php
 include "isset.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!-- redirige depuis index vers start (idée de session start)-->
    <form class="row p-5" action="start.php" method="post">
        <button type="submit" class="row offset-5 col-2 btn btn btn-outline-primary btn-lg" name="start">
                start
        </button>
    </form>
</body>
</html>
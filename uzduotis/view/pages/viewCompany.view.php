<!DOCTYPE html>
<html lang="lt">

<?php include "view/_partials/head.view.php"; ?>
<body>
<?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
        <h1><?=$company['pavadinimas']?></h1>

                         
            <ul>
            <li>Imones kodas: <?=$company['kodas']?></li>
            <li>Pvm Kodas: <?=$company['pvm_kodas']?></li>
            <li>Buveines adresas: <?=$company['adresas']?></li>
            <li>Telefono numeris: <?=$company['telefonas']?></li>
            <li>Elektroninis Pastas: <?=$company['elpastas']?></li>
            <li>Veikla: <?=$company['veikla']?></li>
            <li>Vadovas: <?=$company['vadovas']?></li>
            </ul>
              <a href="/delete-company/<?=$company['id']?>" class="btn btn-danger">Delete</a>
              <a href="/edit-company/<?=$company['id']?>" class="btn btn-info">Keisti</a>
                       

</div>
</body>
</html>
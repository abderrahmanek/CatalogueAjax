
<?php require_once ('conn.php'); ?>
<?php
if (isset($_GET['idCat'])){
    $idCat = $_GET['idCat'];
}else{
    $idCat = 1;
}
/* Requête "Select" retourne un jeu de résultats */
if ($result = $mysqli->query("SELECT * FROM produits where ID_CAT = $idCat ")) {
   // printf("Select a retourné %d lignes.\n", $result->num_rows);
}

?>

<table>
    <tr>
        <th>ID</th><th>DES</th><th>PRIX</th><th>QUANTITE</th><th>PROMO</th>
    </tr>
    <?php while($p=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo($p['ID_PROD']) ?></td>
            <td><?php echo($p['DESIGNATION']) ?></td>
            <td><?php echo($p['PRIX']) ?></td>
            <td><?php echo($p['QUANTITE']) ?></td>
            <td><?php echo($p['PROMO']) ?></td>

        </tr>

    <?php }?>
</table>





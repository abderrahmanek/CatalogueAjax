<?php require_once ('conn.php'); ?>

<?php
if (isset($_GET['idCat'])){
    $idCat = $_GET['idCat'];
}else{
    $idCat = 1;
}
/* Requête "Select" retourne un jeu de résultats */
if ($result = $mysqli->query("SELECT * FROM person WHERE ID_CAT=$idCat")) {
    //  printf("Select a retourné %d lignes.\n", $result->num_rows);
}

?>

<table>
    <tr>
        <th>ID PERSON</th><th>NOM</th>
    </tr>
    <?php while($person=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo($person['ID_PERSON']) ?></td>
            <td><?php echo($person['NOM']) ?></td>
        </tr>

    <?php }?>
</table>
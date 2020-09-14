<?php require_once ('conn.php'); ?>

<?php
/* Requête "Select" retourne un jeu de résultats */
if ($result = $mysqli->query("SELECT * FROM categories")) {
  //  printf("Select a retourné %d lignes.\n", $result->num_rows);
}

?>

<select id = "cats">
    <?php while($cat = mysqli_fetch_assoc($result)) { ?>
        <option value="<?php echo ($cat['ID_CAT'])?>">
            <?php  echo ($cat['NOM_CAT'])?>
        </option>
    <?php } ?>
</select>

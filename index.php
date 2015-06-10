<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 10/06/2015
 * Time: 11:44
 */
require_once("autoload.php");

use \Personne\PersonneDTO;
use \Personne\PersonneDAO;

//$swagman = new PersonneDTO("Siam","Samm");
$personn = new PersonneDAO();
//echo $personn->insert($swagman);

if (isset($_POST)&&!empty($_POST)){
    $formResult = new PersonneDTO();
    $formResult->hydrate($_POST);
    $personn->insert($formResult);
}
$result = $personn->fetchAll();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Personnes</title>
</head>
<body>

<section>

    <form action="index.php" method="post">
        <fieldset>
            <legend>New superhero</legend>
                <label for="nom"><input name="nom" type="text"/></label>
                <label for="prenom"><input name="prenom" type="text"/></label>
                <label for="adresse"><input name="adresse" type="text"/></label>
                <label for="date"><input name="date" type="date"/></label>
                <input type="submit" value="go"/>
        </fieldset>
    </form>
</section>


<section>
    <table>
        <thead>
        <tr>
            <td class="">Nom</td>
            <td class="">Prenom</td>
        </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch()) {
                ?>
            <tr>
                <td><?php echo $row['nom_personne'];?></td>
                <td><?= $row['prenom_personne'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>
</body>
</html>
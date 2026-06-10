<?php
include("fonction.php");
$sql="SELECT * FROM departments";
$req=mysqli_query(dbconnexion(),$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des departements:</h1>
    <table>
        <?php while($ligne=mysqli_fetch_assoc($req)) { ?>
            <tr>
                <td><?php echo $ligne["dept_no"]; ?></td>
                <td><a href="employe.php?indice=<?php echo $ligne["dept_name"] ?>"><?php echo $ligne["dept_name"] ?></a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
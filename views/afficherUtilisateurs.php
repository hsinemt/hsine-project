<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC=new utilisateurC();
	$listeUsers=$utilisateurC->afficherUtilisateurs();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table100">
                <table>
                    <thead>
                    <tr class="table100-head">
                        <th class="column1">ID</th>
                        <th class="column2">PRENOM</th>
                        <th class="column3">NOM</th>
                        <th class="column3">AGE</th>
                        <th class="column4">EMAIL</th>
                        <th class="column5">LOGIN</th>
                        <th class="column6">DELETE</th>
                        <th class="column7">UPDATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?PHP
                    foreach($listeUsers as $user){
                        ?>
                        <tr>
                            <td><?PHP echo $user['id']; ?></td>
                            <td><?PHP echo $user['nom']; ?></td>
                            <td><?PHP echo $user['prenom']; ?></td>
                            <td><?PHP echo $user['age']; ?></td>
                            <td><?PHP echo $user['email']; ?></td>
                            <td><?PHP echo $user['login']; ?></td>
                            <td>
                                <form method="POST" action="supprimerUtilisateur.php">
                                    <input type="submit" name="supprimer" value="supprimer">
                                    <input type="hidden" value=<?PHP echo $user['id']; ?> name="id">
                                </form>
                            </td>
                            <td>
                                <a href="modifierUtilisateur.php?id=<?PHP echo $user['id']; ?>"> Modifier </a>
                            </td>
                        </tr>
                        <?PHP
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
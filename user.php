<?php
$exercice = 'User';
include 'header.php';


if(isset($_GET['lastname'])){
    $lastname = htmlspecialchars($_GET['lastname']);
}

if(isset($_GET['firstname'])){
    $firstname = htmlspecialchars($_GET['firstname']);
}

if(isset($_POST['lastname'])){
    $lastname = htmlspecialchars($_POST['lastname']);
}

if(isset($_POST['firstname'])){
    $firstname = htmlspecialchars($_POST['firstname']);
}

?>
<p>$lastname = <?= $lastname ?></p>
<p>$firstname = <?= $firstname ?></p>
</body>
</html>
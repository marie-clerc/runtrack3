<?php

$db = mysqli_connect('localhost', 'root', '', 'utilisateurs');

if (isset($_POST['email_check'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo "taken";
    } else {
        echo 'not_taken';
    }
    exit();
}
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM utilisateurs WHERE username='$username'";
    $results = mysqli_query($db, $sql);
    if (mysqli_num_rows($results) > 0) {
        echo "exists";
        exit();
    } else {
        $query = "INSERT INTO utilisateurs (username, email, password) 
  	       	VALUES ('$username', '$email', '" . md5($password) . "')";
        $results = mysqli_query($db, $query);
        echo 'Saved!';
        exit();
    }
}


?>

<?php
    if (!isset($_SESSION['loggedIN'])) {
        ?>
        <button><a href="connexion.php">Connexion</a></button>
        <button><a href="inscription.php">Inscription</button>
    <?php
    }

    else {
        $pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
        $email = $_SESSION['email'];
        $sql = "Select * from utilisateurs where email = :email";
        $data = $pdo->prepare($sql);
        $data->bindValue(':email', $email);;
        $data->execute();

        $user = $data->fetch();

        $_SESSION['user'] = $user;
        ?>
        You are logged IN !
        “Bonjour <?= $_SESSION['user']['prenom']?>”
<?php
    }
    ?>


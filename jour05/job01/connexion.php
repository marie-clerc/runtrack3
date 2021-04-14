<?php
session_start();

    if (isset($_SESSION['loggedIN'])) {
        header('location: index.php');
        exit();
    }

    if (isset($_POST['login'])) {

        $pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );

        $email = $_POST['emailPHP'];
        $password = md5($_POST['passwordPHP']);

        $sql = "Select id from utilisateurs where email = :email and password = :password";
        $data = $pdo->prepare($sql);
        $data->bindValue(':email', $email);;
        $data->bindValue(':password', $password);
        $data->execute();

        if ($data->rowCount()>0) {
            $_SESSION['loggedIN'] = '1';
            $_SESSION['email'] = $email;
            exit('Login success...');
        } else {
            exit('Something went wrong');
        }
    }

?><html>
<head>
    <title> Connexion </title>
</head>
<body>
    <form method="post" action="connexion.php">
        <input type="text" id="email" placeholder="email"> <br>
        <input type="password" id="password" placeholder="password"> <br>
        <input type="button" value="Connexion" id="login">
    </form>

    <p id="response"></p>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#login").on('click', function () {
                var email = $("#email").val();
                var password = $("#password").val();

                if (email == "" || password == "")
                    alert('Remplir tous les champs');
                else {
                    $.ajax(
                        {
                            url: 'connexion.php',
                            method: 'POST',
                            data: {
                                login: 1,
                                emailPHP: email,
                                passwordPHP: password,
                            },
                            success: function (response) {
                                $("#response").html(response);

                                if (response.indexOf('success') >=0)
                                    window.location = 'index.php';
                            },
                            dataType: 'text'
                        }
                    )
                }
            })
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set("display_errors", 1);
    require "user.php";

    $arrayUser = [];

    $user1 = new Users("michele", "di benedetto", "amministratore", 1);
    $user1->setEta(25);
    $user1->setEmail("michele@gmail.com");
    $user1->setUsername("m1ch3l3");
    $user1->setPassword("michele");
    // var_dump($user1);
    // foreach ($user1 as $user) {
    //     var_dump($user);
    // }


    $user2 = new Users("luca", "pratelli", "editore", 2);
    $user2->setEta(45);
    $user2->setEmail("luca@gmail.com");
    $user2->setUsername("luc4");
    $user2->setPassword("luca");
    // var_dump($user2);

    $user3 = new Users("lucia", "amico", "revisionatore", 3);
    $user3->setEta(32);
    $user3->setEmail("lucia@gmail.com");
    $user3->setUsername("luc14");
    $user3->setPassword("lucia");
    // var_dump($user3);

    array_push($arrayUser, $user1, $user2, $user3);
    ?>
    <?php foreach ($arrayUser as $user) { ?>
        <h1>UTENTE <?php echo $user->name . " " . $user->surname ?></h1>
        <h2>NOME</h2>
        <p><?php echo $user->name ?></p>
        <h2>COGNOME</h2>
        <p><?php echo $user->surname ?></p>
        <h2>ETA</h2>
        <p><?php echo $user->getEta() ?></p>
        <h2>EMAIL</h2>
        <p><?php echo $user->getEmail() ?></p>
        <h2>USERNAME</h2>
        <p><?php echo $user->username ?></p>
        <h2>PASSWORD</h2>
        <p><?php echo $user->getPassword() ?></p>
        <h2>TIPO DI USER</h2>
        <p><?php echo $user->tipo_user ?></p>
    <?php } ?>
</body>
</html>
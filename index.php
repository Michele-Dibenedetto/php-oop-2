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
    require_once "user.php";
    require_once "administrators.php";


    $arrayUser = [];
    $arrayAdministrator = [];

    try {

    $user1 = new Users("michele", "di benedetto", 1);
    $user1->setEta(25);
    $user1->setEmail("michele@gmail.com");
    $user1->setUsername("m1ch3l3");
    $user1->setPassword("michele");
    $user1->setUser();
    // var_dump($user1);
    // foreach ($user1 as $user) {
    //     var_dump($user);
    // }


    $user2 = new Users("luca", "pratelli", 2);
    $user2->setEta(45);
    $user2->setEmail("luca@gmail.com");
    $user2->setUsername("luc4");
    $user2->setPassword("luca");
    $user2->setUser();
    // var_dump($user2);


    $administrator1 = new Administrators("lucia", "amico", 3);
    $administrator1->setEta(32);
    $administrator1->setEmail("lucia@gmail.com");
    $administrator1->setUsername("luc14");
    $administrator1->setPassword("lucia");
    $administrator1->setUser();


    $administrator2 = new Administrators("Marco", "bellomo", 4);
    $administrator2->setEta(32);
    $administrator2->setEmail("marco@gmail.com");
    $administrator2->setUsername("m4rc0");
    $administrator2->setPassword("marco");
    $administrator2->setUser();

    } catch (Exception $e) {
        echo "ATTENZIONE:" . $e->getMessage();
    }

    array_push($arrayUser, $user1, $user2);
    array_push($arrayAdministrator, $administrator1, $administrator2);
    ?>

    <h1>Utenti</h1>

    <?php foreach ($arrayUser as $user) { ?>
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
        <p><?php echo $user->getUser() ?></p>
    <?php } ?>

    <h1>Amministratori</h1>

    <?php foreach ($arrayAdministrator as $administrator) { ?>
        <h2>NOME</h2>
        <p><?php echo $administrator->name ?></p>
        <h2>COGNOME</h2>
        <p><?php echo $administrator->surname ?></p>
        <h2>ETA</h2>
        <p><?php echo $administrator->getEta() ?></p>
        <h2>EMAIL</h2>
        <p><?php echo $administrator->getEmail() ?></p>
        <h2>USERNAME</h2>
        <p><?php echo $administrator->username ?></p>
        <h2>PASSWORD</h2>
        <p><?php echo $administrator->getPassword() ?></p>
        <h2>TIPO DI USER</h2>
        <p><?php echo $administrator->getUser() ?></p>
    <?php } ?>
</body>
</html>
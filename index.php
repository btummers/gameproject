<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NetShows</title>
    <link rel="stylesheet" href="style.css">
    <link rel="php" href="HighScoreQuickTest.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
<!--<section class="square"> <iframe width="450" height="200" src="https://www.youtube.com/embed/YAVvwv-YSJ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></section>-->
<!--<br>-->
<!--<section class="square2"><iframe width="450" height="200" src="https://www.youtube.com/embed/YGzQTjvrC2o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></section>-->
<!--<br>-->
<!--<section class="square3"><iframe width="450" height="200" src="https://www.youtube.com/embed/wm6vU23R2Qo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></section>-->

<form action="" method="POST" name="Highscore">
    <table>
        <tbody><tr>
            <td>Add score</td>
            <td><input type="text" name="Username" id="Username" minlength="3" maxlength="3"></td>
            <td><input type="text" name="Highscore" id="Highscore"></td>
            <td></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>

    </table>


    <div clas="button">
        <form method="post">
            <li><a class="allscores"> <form method="post"> <input type="submit" name="allscores" value="All Scores"></a></li>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<?php
$host = 'localhost';
$db   = 'highscore';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());

}



//$UN = $_REQUEST['Username'];
//$HS = $_REQUEST['Username'];
function Highscore($pdo, $name)
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $a1 = $pdo->prepare('INSERT INTO `score` (`Username`, `Highscore`) VALUES ("?", "?")');
    $a1->execute(['Username' . 'Highscore' =>$name]);

}



//if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    $name = $_POST['Highscore'];
//    Highscore($pdo, $name);
//    echo "New record created successfully";
//    die();
//}

function allscores($pdo)
{
    $t0 = 'SELECT * FROM `score` ORDER BY Highscore DESC LIMIT 10';
    $data = $pdo->query($t0)->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $row){
        echo "<tr>";
        echo $row['ID'] . "<br/ >";
        echo $row['Username'] . "<br/ >";
        echo $row['Highscore'] . "<br/ >";
        echo "<tr />";
    }

}if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['allscores'];
    allscores($pdo, $name);
    die();
}

?>
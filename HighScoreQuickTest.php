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

<?php
$host = 'localhost';
$db   = 'Highscore';
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




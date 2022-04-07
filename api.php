<?php
$con = mysqli_connect("localhost", "root", "", "highscore");
$response = array();
if ($con){
    $sql = "Select * from score";
    $result = mysqli_query($con, $sql);
    if ($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]["ID"] = $row ["ID"];
            $response[$i]["Username"] = $row ["Username"];
            $response[$i]["Highscore"] = $row ["Highscore"];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}
else
    echo "Connection failed";
?>
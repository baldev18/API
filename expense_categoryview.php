<?php
    include 'connect.php';
    $sql = "SELECT * FROM expense_category";
    $req = mysqli_query($con, $sql);
    $response = array();
    while($row=mysqli_fetch_array($req))
    {
        $value["id"] = $row["id"];
        $value["name"] = $row["category_name"];
      
        array_push($response, $value);
    }
    
    echo json_encode($response);

?>
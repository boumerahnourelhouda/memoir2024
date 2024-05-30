<?php
if(isset($_POST['n1']) && isset($_POST['p1'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $n1 = validate($_POST['n1']);
    $p1 = validate($_POST['p1']);

    if(empty($n1)){
        header("Location: index.php?error=Username is required");
        exit();
    }else if(empty($p1)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        echo "Valid input";
    }
}else{
    header("Location: index.php");
    exit();
}
    <?php

    include "db.php";

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";

    $result = mysqli_query($con, $sql);

    $count = mysqli_num_rows($result);

    $arr = [];

    if ($count > 0) {
        $arr["Success"] = "true";
        $_SESSION["uemail"] = $email;
        $arr["uemail"] = $_SESSION["uemail"];
    } else {
        $arr["Success"] = "false";
    }

    print(json_encode($arr));

    ?>
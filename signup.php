<?php

$title = "Add User";

include "db.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php

// if (isset($_POST["add_user"])) {

//     $username = mysqli_real_escape_string($con, $_POST['username']);

//     $Password = mysqli_real_escape_string($con, SHA1($_POST['password']));

//     $role = mysqli_real_escape_string($con, $_POST['role']);

//     $sql = "SELECT username FROM admin WHERE username = '{$username}'";

//     $result = mysqli_query($con, $sql) or die("Query Failed.");

//     if (mysqli_num_rows($result) > 0) {
//         echo "<div class='alert alert-danger text-center' role='alert'>Username already exists</div>";
//     } else {
//         $sql1 = "INSERT INTO `admin`(`username`, `password`, `role`) 
//                  VALUES ('$username','$Password','$role')";
//         if (mysqli_query($con, $sql1)) {
//             header("Location: {$hostname}/admin/user.php");
//         } else {
//             echo " query Failed";
//         }
//     }
// }

?>

<body>

    <div class="container my-5">
        <div class="row">

            <div class="col-md-9 m-auto col-lg-6 shadow-lg px-5 py-5">

                <h2 class="text-center fw-bold">Add User</h2>
                <!-- Form Start -->
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group my-3">
                        <label>firstname</label>
                        <input type="text" name="firstname" class="form-control py-2" placeholder="" required>
                    </div>
                    <div class="form-group my-3">
                        <label>lastname</label>
                        <input type="text" name="lastname" class="form-control py-2" placeholder="" required>
                    </div>
                    <div class="form-group my-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control py-2" placeholder="" required>
                    </div>
                    <div class="form-group my-3">
                        <label>email</label>
                        <input type="text" name="email" class="form-control py-2" placeholder="" required>
                    </div>
                    <div class="form-group my-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control py-2 mb-2" id="pass" required>
                        <input class="form-check-input" type="checkbox" onclick="showpass()">
                        <label class="form-check-label">Show Password</label>
                    </div>
                    <div class="form-group my-3">
                        <label>Role</label>
                        <select name="role" class="form-select" aria-label="Default select example">
                            <option selected disabled> Select Role</option>
                            <option value="0">Admin</option>
                            <option value="1">User</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" name="add_user" class="btn btn-login btn-danger btn-default col-12" value="Add User" />
                    </div>
                </form>

            </div>

        </div>
    </div>

    <?php

    include "db.php";

    session_start();

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $datetime = date('Y-m-d H:i:s');

    $createdat = $datetime;
    $lastupdated = $datetime;

    $pic = '';

    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`, `email`, `password`, `created_at`, `last_login`, `profile_picture`, `role`) VALUES ('$firstname','$lastname','$username', '$email', '$password', '$createdat', '$lastupdated', '$pic' ,$role)";

    if (mysqli_query($con, $sql)) {
        echo "data inserted";
    } else {
        echo '<div class="alert alert-danger" role="alert">Query Failed.</div>';
    }

    ?>

    <script>
        function showpass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="./css/jquery.min.js"></script>
    <script src="./css/owl.carousel.min.js"></script>
</body>

</html>
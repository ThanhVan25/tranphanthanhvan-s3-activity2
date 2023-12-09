<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in page</title>
</head>

<body>
    <form method="post" action="">
        <input type="password" name="password" id="password" placeholder="Password">
        <button type="submit" id="login_btn">Log in</button>
    </form>

    <div id="hidden" style="display:none">This is sensitive data visible only if the user knows the correct password
    </div>

    <?php
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    if ($password == "1234") {
        echo "<script>
                 document.getElementById('hidden').style.display = 'block';
            </script>";
    }
    ?>
</body>

</html>
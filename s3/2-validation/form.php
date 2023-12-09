<?php
function validate_message($message)
{
   $length = strlen(trim($message));
   return $length > 10 ? true : false;
}

function validate_username($username)
{
    return ctype_alnum(trim($username)) ? true : false;
}

function validate_email($email)
{   
    return strpos(trim($email), "@") ? true : false;
}

$user_error = "";
$email_error = "";
$terms_error = "";
$message_error = "";

$terms = "";
$username = "";
$email = "";
$message = "";


$form_valid = true;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $terms = isset($_POST['terms']) ? $_POST['terms'] : "";

    if(!validate_message($message)){

        $message_error = "Message must be at least 10 caracters long";
        $form_valid = false;

    }
    if(!validate_username($username)){

        $user_error = "Username should contains only letters and numbers";
        $form_valid = false;

    }
    if(!validate_email($email)){

        $email_error = "Email must contain '@'";
        $form_valid = false;

    }
    if($terms != "terms"){

        $terms_error = "You must accept the Terms of Service";
        $form_valid = false;

    }

}

?>

<form action="index.php" method="POST">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username">
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email">
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"></textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms"> <label for="terms">I accept the Terms of Service</label>
        <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
    </div>
    <div class="d-grid">
<button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<hr>

<?php
if ($form_valid) :
?>
    <div class="card">
        <div class="card-header">
            <p><?php echo $username; ?></p>
            <p><?php echo $email; ?></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $message; ?></p>
        </div>
    </div>
<?php
endif;
?>

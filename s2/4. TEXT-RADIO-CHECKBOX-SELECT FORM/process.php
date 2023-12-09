<?php require_once 'templates/header.php';
if (isset($_POST['submit'])) {
    $name = $_POST['text'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $_POST['message'];
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $subjects = $_POST['subject'];
}
?>

<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <tr>
        <td><?php
            echo $name;
            ?></td>
        <td><?php 
        echo $email;
            ?></td>
        <td><?php 
        echo $password;
            ?></td>
        <td><?php
        echo $phone; 
            ?></td>
        <td><?php
        echo $message; 
            ?></td>
        <td><?php
        echo $province;
            ?></td>
        <td>
            <?php
                echo $gender;
            ?>
        </td>
        <td><?php
        for ($i=0; $i<count($subjects); $i++){
            if($i<count($subjects)-1){
                echo $subjects[$i]."|";
            }else{
                echo $subjects[$i];
            }
        }
            ?></td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>
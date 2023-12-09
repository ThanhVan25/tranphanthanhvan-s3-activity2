<?php 
    $dir = __DIR__;
    require './templates/header.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $province = $_POST['province'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $subject = $_POST['subject'] ?? [];
}
?>

<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province; ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php
        if ($gender === 'Male') {
            echo '<img src="./images/male.png" style="width:100px; heigth:100px;" alt="Male">';
        } elseif ($gender === 'Female') {
            echo '<img src="./images/female.png" style="width:100px; heigth:100px;" alt="Female">';
        }
        ?>
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        foreach ($subject as $value) {
            echo "<button class='btn btn btn-primary ' style='margin-right: 5px;'>$value</button>";
        }
        ?>
    </div>
</div>

<?php 
    $dir = __DIR__;
    require './templates/footer.php';
?>
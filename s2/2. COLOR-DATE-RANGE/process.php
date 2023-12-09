<?php 
    $dir = __DIR__;
    require './templates/header.php';
?>

<div class="alert alert-secondary">
    <strong>Color: </strong> <span><?php echo $_POST['color'] ?? ''; ?></span>
</div>
<div class="alert alert-info">
    <strong>Range: </strong> <span><?php echo $_POST['number'] ?? ''; ?></span>
</div>
<div class="alert alert-danger">
    <strong>Date: </strong> <span><?php echo $_POST['date'] ?? ''; ?></span>
</div>

<?php 
    $dir = __DIR__;
    require './templates/footer.php';
?>
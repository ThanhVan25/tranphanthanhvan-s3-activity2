<?php 
    $dir = __DIR__;
    require './templates/header.php';

?>
<ul class="list-group">
    <li class="list-group-item"> <?php echo $_POST['text']; ?></li>
    <li class="list-group-item"> <?php echo $_POST['email']; ?></li>
    <li class="list-group-item"> <?php echo $_POST['password']; ?></li>
    <li class="list-group-item"> <?php echo $_POST['number']; ?></li>
    <li class="list-group-item"> <?php echo $_POST['message']; ?></li>
</ul>
<?php 
    $dir = __DIR__;
    require './templates/footer.php';
?>

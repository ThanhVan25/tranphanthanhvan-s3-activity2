<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE
if (isset($_POST['submit'])) {
}
?>
<div class="card">

    <div class="card-body">
        <?php
        // CODE HERE
        $a = implode(" ", $_POST["subject"]);
        $b = explode(" ", $a);
        foreach ($b as $subject) {
        ?>
            <?php if ($subject === "HTML") { ?>
                <span style="background-color: blue;color: white;  padding: 5px; margin: 5px; border-radius: 10px;">
                    <?php echo $subject; ?>
                </span>
            <?php
            }
            ?>


            <?php if ($subject === "CSS") { ?>
                <span style="background-color: red;color: white;  padding: 5px; margin: 5px; border-radius: 10px;">
                    <?php echo $subject; ?>
                </span>
            <?php
            }
            ?>

            <?php if ($subject === "JavaScript") { ?>
                <span style="background-color:aqua ;color: white;  padding: 5px; margin: 5px; border-radius: 10px;">
                    <?php echo $subject; ?>
                </span>
            <?php
            }
            ?>

            <?php if ($subject === "PHP") { ?>
                <span style="background-color:grey ;color: white;  padding: 5px; margin: 5px; border-radius: 10px;">
                    <?php echo $subject; ?>
                </span>
            <?php
            }
            ?>
        <?php
        };
        ?>
    </div>
</div>


<?php require_once 'templates/footer.php' ?>
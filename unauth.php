<!-- <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<?php
            
$id = $_SESSION['id'];
?>
    <h1 class="alert alert-warning">User not Athourized!</h1>
    <a href="activate.php?userid=<?=$userid?>&id=<?=$id?>" class="btn btn-primary">click to activate</a>

    <?php
    if(isset($_SESSION['sterr'])){?>
    <div class="alert alert-danger my-3"><?=$_SESSION['sterr']?></div>
    <?php } ?>
</body>
</html> -->
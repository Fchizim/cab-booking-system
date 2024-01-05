<link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
<?php
session_start ();
?>
<style>
    table tr.green{
        background: rgb(3, 117, 32);
    }
    .container-fluid{
        width: 100vw;
        height: 100vh;
    }
    .table-reponsive{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<?php
 
    require_once 'auth-check.php';
    require_once 'config.php';
 ?>

<div class="container-fluid">
    <div class='row' >
       <div class="col-12">
        <?php
    if(isset($_SESSION['deletemsg'])){?>
    <div class="alert alert-success my-3"><?=$_SESSION['deletemsg']?></div>
    <?php } ?>
            <div class="table-responsive">
                <table class="table mt-5 fs-4 fw-normal">
                <thead>
                   <tr class="green fw-bolder"> 
                        <th>#</th>
                        <th>ride id</th>
                        <th>email</th>
                        <th>Phone Number</th>
                        <th>location</th>
                        <th>destination</th>
                        <th>date</th>
                  </tr>
                </thead>
                <tbody>
                    <?php   
                    $sql = $conn->query("SELECT * FROM transport ORDER BY id DESC LIMIT 10");
                    if($sql->num_rows > 0){
                        $num = 1;
                        while($row = $sql->fetch_assoc()){ ?>
                          <tr>
                            <td><?=$num++?></td>
                        <td><?=$row['rideid']?></td>
                        <td><?=$row['demail']?></td>
                        <td><?=$row['dphone']?></td>
                        <td><?=$row['dlocation']?></td>
                        <td><?=$row['ddestination']?></td>
                        <td><?=$row['ddate']?></td>
                    </tr>
                        
                    <?php } } ?>
                </tbody>

                </table>
            </div>
        </div>
    </div>
    <a href="logout.php"><button style="background:red; border:none; border-radius:10px; padding:0.8rem;">Log out</button></a>
</div>


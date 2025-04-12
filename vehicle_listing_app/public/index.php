<?php
require_once "./../app/classes/VehicleManager.php";

$vehicleManager = new VehicleManager('', '', '', '');
$vehicles = $vehicleManager->getVehicles();

include './views/header.php';

?>


<div class="container my-4">
    <h1 class="text-center alert alert-success">Vehicle Listing App</h1>
    <a href="./../public/views/add.php" class="btn btn-success mb-4">ADD</a>
    <div class="row">

        <?php if (empty($vehicles)): ?>
            <div class="col-12 text-center">
                <div class="alert alert-warning" role="alert">
                    <strong>No vehicles available.</strong> Please add a vehicle to see it listed here.
                </div>
            </div>

            <?php else: ?>

         <?php foreach($vehicles as $id=>$vehicle): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $vehicle['image'] ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= ucwords($vehicle['name']) ?></h5> 
                         <p class="card-text">Type: <?= strtoupper($vehicle['type']) ?></p>
                        <p class="card-text">Price: BDT. <?= $vehicle['price'] ?></p>
                        <a href="./views/edit.php?id=<?= $id ?>" class="btn btn-primary">EDIT</a>
                        <a href="./views/delete.php?id=<?= $id ?>" class="btn btn-danger">DELETE</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            
    </div>
</div>

</body>
</html>
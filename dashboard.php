<?php 
    $title = 'Dashboard';
    require_once 'includes/db.php';
    require_once 'includes/header.php'; 
?>
    
<main class="container">
    <div class="mt-5">
        <div class="text-center bg-primary py-3">
            <h2 class="text-white mt-2">Wildcats Central Information System</h2>
        </div>
    </div>
    <div>
        <h5 class="text-center my-4">List of Buildings
        </h5>
    </div>
    <div>

        <?php 
            $resultset = $mysqli->query("SELECT * from tblbuilding") or die($mysqli->error);
        ?>

        <table id="tblStudentRecords " class="table
            table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>Floorcount</th>
                    <th>Building Name</th>
                    <th>Has Elevator</th>
                    <th>Location</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
                <?php while($row = $resultset->fetch_assoc()): ?>
                    <tr>
                        <a href="#"><td><?php echo $row['buildingid'] ?></td></a>
                        <td><?php echo $row['floorcount'] ?></td>
                        <td><?php echo $row['buildingname'] ?></td>
                        <td><?php echo $row['haselevator'] ?></td>
                        <td><?php echo $row['location'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><a href="#">Edit</a> <a href="./actions/delete.php?id=<?php echo $row['buildingid']; ?>">Delete</a></td>
                    </tr>
                <?php endwhile?>
            </tbody>
        </table>
    </div>
</main>


<?php require_once 'includes/footer.php'; ?>


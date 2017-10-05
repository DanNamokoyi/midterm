<?php
    require_once('database.php');


    $query = "SELECT firstName, lastName, city FROM technicians order by lastName";
    $technicians = $db->query($query);
    
  
?>


<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Technicians</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Tech support</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>



        <div id="content">
            <!-- display a list of customers -->
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Town</th>
                
                </tr>
                <?php foreach ($technicians as $technician) : ?>
                    <tr>
                        <td><?php echo $technician['firstName']; ?></td>
                        <td><?php echo $technician['lastName']; ?></td>
                        <td><?php echo $technician['city']; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Daniel Namokoyi, Columbus State University.</p>
    </div>

    </div><!-- end page -->
</body>
</html>
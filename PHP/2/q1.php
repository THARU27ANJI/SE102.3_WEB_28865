<?php
$fn = $_REQUEST["fname"];
$ln = $_REQUEST["lname"];
$user = $_REQUEST["user"];
$pass = $_REQUEST["pass"];
$gen = $_REQUEST["gen"];
$year = $_REQUEST["year"];
$prn = $_REQUEST["prn"];
?>



<table border="1">

    <tr>
        <th>First Name</th>
        <td><?php echo $fn;?></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><?php echo $ln;?></td>
    </tr>
    <tr>
        <th>Username</th>
        <td><?php echo $user;?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $pass;?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $gen;?></td>
    </tr>
    <tr>
        <th>Acadamic Year</th>
        <td><?php echo $year;?></td>
    </tr>
    <tr>
        <th>Phone No</th>
        <td><?php echo $prn;?></td>
    </tr>

</table>
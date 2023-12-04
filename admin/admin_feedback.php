<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {

            background-image: url("bg.jpg");
            background-size: cover;
        }

        .f_view_admin{
            margin-top: 75px;
            width: 200px;
            height: fit-content;
            box-shadow: 5px 5px 5px black;
            margin-left: 100px;
            margin-bottom: 80px;
        }
    </style>
</head>

<body>
    <?php
    require 'config.php';
    include 'adminmenu.php';
    $q1 = "SELECT * from cakes, feedback where feedback.pid=cakes.cakeid";
    $res1 = mysqli_query($conn, $q1) or die("can't execute");
    $f = 0;
    echo '<table>';
    while ($row1 = $res1->fetch_assoc()) {
        $oid = $row1['oid'];
        $q2 = "select * from ordermaster, customer where oid = $oid and customer.cid=ordermaster.cid ";
        $res2 = mysqli_query($conn, $q2);
        while ($row2 = $res2->fetch_assoc()) {
            if ($f == 0) {
                echo '<tr>';
            } {
    ?>
                    <td>
                        <center>
                        <div class="f_view_admin">
                        <img src="../images/<?php echo $row1['cakeimg']; ?>" width="100" height="100px">
                        <br>
            <?php
                echo strtoupper($row2['fname']), "  ", strtoupper($row2['lname']);
                echo '<br>';
                echo "Delivered On:" . $row2['ordate'];
                echo '<br>';
                echo $row1['feedback'];
                $f++;
                echo '</center>';
                echo '</td>';
                echo '</div>';
            }
            if ($f == 4) {
                echo '</tr>';
                $f == 0;
            }
        }
    }
    echo '</table> ';

            ?>

</body>

</html>
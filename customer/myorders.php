<?php
require 'usermenu.php';
if (isset($_SESSION['cid'])) {
?>
    <html>
    <style>

        .fbk {
            border: 2px solid;
            height: 350px;
            width: 350px;
            margin-top: 10%;
            margin-right: 30px;
            box-shadow: 5px 5px 5px black;
            color: black;
        }

        .pdetails {
            color: red;
            text-align: center;
        }
    </style>

    <body>


        <table style="width:100%" id="fb" border="1px">
            <caption align="center">
                <b>

                    <h1>
                        <font color="Blue">MY ORDERS</font>
                    </h1>
                    <center>
                        <?php
                        require('config.php');
                        $cid = $_SESSION['cid'];

                        // FEEDBACK SECTION 
                        $q1 = "SELECT * from ordermaster WHERE cid='$cid'";
                        $result1 = mysqli_query($conn, $q1);
                        echo '<table>';

                        $k=0;
                        while ($row1 = $result1->fetch_assoc()) {
                            $oid = $row1['oid'];
                            $q2 = "select * from cakes,orderdetails where orderdetails.oid ='$oid' and orderdetails.pid=cakes.cakeid";
                            $r2 = mysqli_query($conn, $q2);
                            while ($row2 = $r2->fetch_assoc()) {
                                $pid = $row2['cakeid'];
                                        {
                                        if($k==0)
                                        {
                                            echo '<tr>';
                                        }
                                        $k++;
                                        ?>  
                                        <td>
                                        <div class="fbk">
                                            <img src="../images/<?php echo $row2['cakeimg'] ?>" width="350px" height="200px">
                                            <br>
                                            <div class="pdetails">
                                            CAKE NAME:<?php echo $row2['cakename'] ?>
                                            <br>
                                            PRIZE: ₹<?php echo $row2['cakeprice'] ?>/-
                                            <br>
                                            ORDERED ON:<?php echo $row1['ordate'] ?>
                                            <br>
                                            REQUESTED ON:<?php echo $row2['rqddate'] ?>
                                            <br>
                                            QUANTITY:<?php echo $row2['cakequantity'] ?>
                                            <br>
                                            ORDER STATUS:<?php echo $row1['status']  ;
                                            echo '<br>';
                                            if($row1['status']=="Delivered")
                                            {
                                            echo '<a href="feedback.php?pid='.$pid.'&oid='.$oid.'">Write a Feedback</a>';
                                            }
                                            ?>
                                        </div>
                                        </div>
                                        </td>

                                    <?php
                                    
                                }
                                if($k==3)
                                {
                                    echo '</tr>';
                                    $k=0;
                                }  
                                 
                                   
                                    }
                                        
                
                        }
                            }
                        
             
else{
    header("location: custlogin.php");
}
                    ?>
                    </center>
                    
    </body>

    </html>
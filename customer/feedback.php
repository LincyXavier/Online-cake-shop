<?php 
require('usermenu.php');
 $pid= $_GET['pid'];            
 $oid= $_GET['oid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            /*background-image:url("../images/cbg6.jpg");*/
            background-image: url("slider-4.jpg");
            /*background-size: cover;*/
             margin: 0;
             /*margin-left: 50px;*/
              padding: 0;
              background-repeat: no-repeat;
              background-size:100% 100% ;
              height: 100vh;
              overflow: hidden;
              box-sizing: border-box;
              color: black;
              font-family: 'Times New Roman';

        }
        form{
            margin-left: 550px;
            margin-top: 100px;
        }
        form input[type="submit"]{
            margin-left: 340px;
        }
        textarea{
            border: none;
            font-size: 18px;
        }
        ::placeholder{
            color: black;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <form action="process_feedback.php" method="post">
        <br><br><br><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Write Here"></textarea>
        <input type="hidden" name="pid" value=<?php echo $pid ?>>
        <input type="hidden" name="oid" value=<?php echo $oid ?>>
        <br>    
        <input type="submit" value="POST">
    </form>
</body>
</html>

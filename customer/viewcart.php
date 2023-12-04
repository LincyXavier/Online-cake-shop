
<html>
<?php

	require('usermenu.php');
?>
<script type="text/javascript">
	
    function sureToApprove(id)
    {
        if(confirm("Are you sure you want to Remove this item from Cart?")){
            window.location.href ='process_viewcart.php?id='+id;
        }
    }
</script>
<style type="text/css">
	body{
		background-image: url("pqrs5.jpg");
	}
</style>
<div>
			
							<h1 class="title">Viewcart</h1>
							<div class="entry">
						
							<pre>
								<?php
							//print_r($_SESSION);
							?>
								
							</pre>
						
							<form action="process_viewcart.php" method="POST" color="black">
							<table width="100%" border="0">
								<tr>
									<td> <b>No
									<td> <b>Category
									<td> <b>Cake Name
								
									<td> <b>Cake Quantity
									<td> <b>Cake Price
									<td> <b>Delete
								</tr>
							<tr>
								<td colspan="7"><hr style="border:1px Solid #a1a1a1;">
							</tr>
							
								<?php
								$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
										<tr>
										    <td> '.$i.'
											<td> '.$x['catid'].'
											<td> '.$x['cakename'].'
										
						                    <td> <input type="number" min="1" max="10" size="2" value="'.$x['cakequantity'].'" name="'.$id.'">
											<td> '.$x['cakeprice'].'
											<td> '.$x['cakequantity']*$x['cakeprice'].'
							                
							                <td> <a href="javascript:sureToApprove(id='.$id.')">Delete</a>
										</tr>';										
										
							$tot = $tot + ($x['cakequantity']*$x['cakeprice']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<input type="submit" value=" Re-Calculate " > <br><br>
							<?php
                                echo '<a href="shipping.php?t='.$tot.'">CONFIRM & PROCEED</a>';
                            ?>

							</center>
							</form>
							
</div>
</html>

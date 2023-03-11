<?php
	error_reporting(1);
    ob_start();
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}


?>
<!-- header sercion -->
<?php
    include("header.php");
?>
<!-- end of header section -->

<!--order page start-->
    <section class="order_part padding_top mb-3">
        <div class="container" style="margin-top:100px;">
            <div class="row">
                <div class="col-lg-12 confirm_box">
                    <div class="col-lg-6 col-lx-4">
                        <div class="single_confirmation_details">
                            <?php
                            
                                $username = $_SESSION['username'];
                                $or_sel = mysqli_query($con, "SELECT * FROM `order` WHERE username='$username';");
                                $or_arr = mysqli_fetch_array($or_sel);
                                
                            ?>
                            <h4>Order Informations:</h4>
                            <ul>
                            <li>
                                <p>order number <span>: <?php echo $or_arr['order_id']?> </span></p>
                            </li>
                            <li>
                                <p>usernmae <span>: <?php echo $or_arr['username']?> </span></p>
                            </li>
                            <li>
                                <p>address <span>: <?php echo $or_arr['address']?> </span></p>
                            </li>
                            <li>
                                <p>street <span>: <?php echo $or_arr['street']?> </span></p>
                            </li>
                            <li>
                                <p>township <span>: <?php echo $or_arr['township']?></span></p>
                            </li>
                            <li>
                                <p>city<span>: <?php echo $or_arr['city']?> </span></p>
                            </li>
                            <li>
                                <p>phone.no <span>: <?php echo $or_arr['phone']?></span></p>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="order_details_iner">
                            <h3>Order Details</h3>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="2">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $cart_query = mysqli_query($con, "SELECT * FROM cart_table WHERE username='$username'");
                                        $sub_total = 0;
                                        $total = 0;
                                            if(mysqli_num_rows($cart_query) > 0) {
                                                while($fetch_cart = mysqli_fetch_assoc($cart_query)) {
                                                    $sub_total = $fetch_cart['cpro_price'] * $fetch_cart['cpro_qty'];
                                                    $total += $sub_total;
                                                // }
                                            // }
                                    ?>
                                    <tr>
                                        <th colspan="2"><span><?php echo $fetch_cart['cpro_name']; ?></span></th>
                                        <th><?php echo $fetch_cart['cpro_price']; ?></th>
                                        <th>x <?php echo $fetch_cart['cpro_qty']; ?></th>
                                        <th> <span><?php echo $sub_total; ?> Kyats</span></th>
                                    </tr>
                                    <?php
                                                };
                                            };
                                    ?>
                                    
                                </tbody>
                                
                                <tfoot style="border-top:1px solid #eee;">
                                    
                                    <tr>
                                        <th scope="col" colspan="4">Total</th>
                                        <th scope="col"><?php echo $total; ?> Kyats</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <a href="home.php" class="btn btn-danger" align="right">Back</a>
                </div>
            </div>
        </div>
    </section>
<!--order page start-->

<!-- footer section -->
<?php
  include("footer.php");
?>
<!-- end of footer section -->
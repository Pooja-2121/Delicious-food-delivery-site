<?php include('partials/menu.php'); ?>

<!-- Main contetn section Starts -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>

        <br /><br /><br />

        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Food</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>OrderDate</th>
                <th>Status</th>
                <th>Customer Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
            </tr>

            <?php
            //query to get all categories from database 
            $sql = "SELECT * FROM tbl_order ORDER BY id DESC";

            //execute query
            $res = mysqli_query($conn, $sql);

            //count rows
            $count = mysqli_num_rows($res);

            //create serial number variable and assign value as 1
            $sn = 1;

            //check whether we have data in database or not 
            if ($count > 0) {
                //we have data in database
                //get the data and display
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty = $row['qty'];
                    $total = $row['total'];
                    $order_date = $row['order_date'];
                    $status = $row['status'];
                    $customer_name = $row['customer_name'];
                    $customer_contact = $row['customer_contact'];
                    $customer_email = $row['customer_email'];
                    $customer_address = $row['customer_address'];

            ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $food; ?></td>
                        <td>$<?php echo $price++; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td>$<?php echo $total; ?></td>
                        <td><?php echo $order_date; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $customer_contact; ?></td>
                        <td><?php echo $customer_email; ?></td>
                        <td><?php echo $customer_address; ?></td>

                    </tr>
            <?php
                }
            } else {
                //Food not Added in Database
                echo "<tr><td colspan='12' class='error'>Order not available.</td></tr>";
            }
            ?>





        </table>

    </div>
</div>
<!-- Main content section Ends -->

<?php include('partials/footer.php'); ?>
<?php 
    include("header.php");
    include("connect.php");
    include ("product-bank.php");
?>
<div>
    <div>
        <h1>Products List</h1>
    </div>
<?php
            if(array_key_exists("removed", $_GET) && $_GET["removed"]=="true"){
?>
        <p class="alert-success">Product Deleted!</p>
<?php
            }
?>
        <table class="table table-striped table-bordered">
<?php
            //Show list
            $products = listProducts($connection);
            foreach($products as $product) {
?>
            <tr>
                <td><?=$product ['item'] ?></td>
                <td><?=substr($product ['description'], 0, 70)?></td>
                <td>€<?=$product ['price']?></td>
                <td>
                    <form action="remove-product.php" method="post">
                        <input type="hidden" name="id" value="<?=$product['id']?>">
                    <button class="btn btn-danger" >Remove</button></td>
                </form>
            </tr>
<?php
        }
?>
        </table>
</div>
<?php include("footer.php")?>
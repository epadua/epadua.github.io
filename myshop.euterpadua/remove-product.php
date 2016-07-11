<?php
include("header.php");
include("connect.php");
include ("product-bank.php");

        $id = $_POST['id'];
        removeProduct($connection, $id);
        header("Location: product-list.php?removed=true");
        die();

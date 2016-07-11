<?php

        //Insert products into DataBase
        function insertProduct ($connection, $nome, $preco, $description){
            $query = "insert into products (item, price, description) values ('{$nome}', {$preco}, '{$description}')";
            return mysqli_query($connection, $query);
        }


        //Access the DataBase and create the List of Products
        function listProducts($connection) {
            $products = [];
            $result = mysqli_query($connection, "select * from products");
            while($product = mysqli_fetch_assoc($result)) {
                array_push($products, $product);
            }
            return $products;
        }

        function removeProduct ($connection, $id){
            $query = "delete from products where id = {$id}";
            return mysqli_query($connection, $query);
        }
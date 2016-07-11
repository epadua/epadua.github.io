<?php
    include ("header.php");
    include ("connect.php");
    include ("product-bank.php");

        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $description = $_POST["description"];

        if (insertProduct($connection, $nome, $preco, $description)) {  ?>
            <p class="text-success">The Product <?= $nome; ?>, with the value of <?= $preco; ?>  was added!</p>
        <?php } else {
            $msg = mysqli_error($connection);
            ?>
            <p class="text-danger">Sorry, the product <?= $nome; ?> wasn't added! <br><?= $msg ?></p>
         <?php
        }
?>

<?php include ("footer.php"); ?>
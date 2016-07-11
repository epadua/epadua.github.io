<?php include ("header.php"); ?>

<form action="adiciona-produto.php" method="post">
    <h1>Insert Product:</h1>
        <table class="table">
            <tr>
                <td>Name:</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                 <td>Value: €</td>
                 <td><input class="form-control" type="number" name="preco"></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><textarea class="form-control" type="text" name="description"></textarea></td>
            </tr>
            <tr>
                 <td><input class="btn btn-primary" type="submit" name="cadastrar"></td>
            </tr>
        </table>
    </form>

<?php include ("footer.php"); ?>
<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Jawaban No. 7</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>

<body align="center"><br>
    <div class="container">
    <header align="center">
        <h2>List Kategori Dan Jumlah Produk Setiap Kategori</h2>
    </header>

    <br>

    <table  align="center" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah Produk</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT product_categories.id, product_categories.name, COUNT(products.category_id) AS Jumlah_product FROM products INNER JOIN product_categories ON products.category_id = product_categories.id GROUP BY product_categories.id";
        $query = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['Jumlah_product']."</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
</html>
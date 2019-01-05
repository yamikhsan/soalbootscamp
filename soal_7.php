<?php

    $conn = mysqli_connect("localhost", "root", "", "soal_6");

    $product = mysqli_query($conn, "SELECT * FROM products");
    $prod = [];
    while($row = mysqli_fetch_assoc($product)){
        $prod[] = $row;
    }

    $category = mysqli_query($conn, "SELECT * FROM categories");
    $cate = [];
    while($row = mysqli_fetch_assoc($category)){
        $cate[] = $row;
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="soal_7.css">

    <title>My Table</title>
  </head>
  <body>
    <div class="container">
        <div id="product">
            <h1 class="title">TABLE PRODUCT</h1>
            <table class="table table-striped table-dark">
                <thead>
                    <tr class="d-flex">
                        <th class="col-sm-4" scope="col">id</th>
                        <th class="col-sm-4" scope="col">Name</th>
                        <th class="col-sm-4" scope="col">Category_id</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($prod as $val) : ?>
                    <tr class="d-flex">
                        <th class="col-sm-4" scope="row"><?= $i; ?></th>
                        <td class="col-sm-4" ><?= $val["name"] ?></td>
                        <td class="col-sm-4" ><?= $val["category_id"] ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="Category">
            <h1 class="title">TABLE CATEGORY</h1>
            <table class="table table-striped table-dark">
                <thead>
                    <tr class="d-flex">
                        <th class="col-sm-6" scope="col">id</th>
                        <th class="col-sm-6" scope="col">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($cate as $val) : ?>
                    <tr class="d-flex">
                        <th class="col-sm-6" scope="row"><?= $i; ?></th>
                        <td class="col-sm-6" ><?= $val["name"] ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>    

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
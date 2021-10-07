<?php

if (!isset($_GET['chieudai']) || !isset($_GET['chieurong'])) {
   
    }
    $chieudai = $_GET['chieudai'];
    $chieurong = $_GET['chieurong'];

    $dientich = $chieudai * $chieurong;
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Lab03</title>
       <style>
        input[type=number] {
        -moz-appearance: textfield;
        }

        body{
            background-color: khaki;
        }

        .card-header{
            background-color: orange;
        }
        .btn{
            background-color: orange;
            color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <form action="hinhcn.php" method="GET">
                <div class="form-group">
                    <label for="">Nhap vao chieu dai</label>
                    <input class="form-control" type="number" name="chieudai" id="" value="<?= $chieudai ?>">
                </div>
                <div class="form-group">
                    <label for="">Nhap vao chieu rong</label>
                    <input class="form-control" type="number" name="chieurong" id="" value="<?= $chieurong ?>">
                </div>
                <div class="form-group">
                    <label for="">Dien tich</label>
                    <input class="form-control" type="number" id="" value="<?= $dientich ?>" disabled>
                </div>
                <div class="form-group">
                    <input type="submit" value="Tinh" class="btn btn-secondary">
                </div>
            </form>
        </div>
    <hr class="mb-3">
       
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
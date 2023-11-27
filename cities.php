<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Városok</title>
</head>
<body>
    <a href="./index.php"><i class="fa fa-home"></i></a>
    <h1>Városok</h1>
    <form>
        <label for="countyDropdown">Megye:</label>
        <select id="countyDropdown" name="countyDropdown">
            <option value="">Válassz megyét</option>
            <?php
            require_once('ItemRepository.php');

            $itemRepository = new ItemRepository();
            $counties = $itemRepository->getAllCounties();

            foreach ($counties as $county) {
                echo '<option value="' . $county['id'] . '">' . $county['name'] . '</option>';
            }
            ?>
        </select>
        <button type="submit" name="btn-city-search" method="post">Keres</button>
        <table>
    <thead>
        <th>#id</th><th>Város</th><th>Művelet&nbsp;<button><a href="./county.php"><i class="fa fa-plus"></i></a></button></th>
    </thead>
    <tbody>
    <form method="post" action="counties.php">
            <input type="text" name="needle" value="">
            <button type="submit" name="btn-search" method="post">Keres</button>
    </form>
    </form>
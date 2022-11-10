<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gene Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }

        body {
            background-image: url(bg1.jpg);
            background-size: cover;
        }

        .para {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            margin-top: 30px;
            margin-left: 50px;
        }

        .para h6,
        .para p {
            font-size: 24px;

        }

        .para h6 {
            color: rosybrown;
        }

        .para p {
            margin-left: 30px;
            color: #fff;
        }

        .para p a {
            color: grey;
            text-decoration: none;
            border-bottom: 2px solid;
        }

        .para p a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $gene = $_POST['gene'];
    $conn = mysqli_connect('localhost', 'root', '', 'combio');
    $query = "SELECT * from sheet1 where gene_name = '$gene'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {


        ?>
        <div class="content">
            <div class="para">
                <h6>Gene Code : </h6>
                <?php
                echo "<p id='gcode'>".$row['gene_code']."</p>";
                ?>

            </div>
            <div class="para">
                <h6>Gene Name : </h6>
                <?php
                echo "<p id='gname'>".$row['gene_name']."</p>";
                ?>
            </div>
            <div class="para">
                <h6>Gene Type : </h6>
                <?php
                echo "<p id='gtype'>". $row['gene_type']. "</p>";
                ?>
            </div>
            <div class="para">
                <h6>Location : </h6>
                <?php
                echo "<p id='location'>". $row['location']. "</p>";
                ?>
            </div>
            <div class="para">
                <h6>Discrption : </h6>
                <?php
                echo "<p id='disc'>".$row['discription']."</p>";
                ?>
            </div>
            <div class="para">
                <h6>Referrence Link : </h6>
                <p><a href="

                <?php
                echo $row['referrence']
                ?>
                
                " id="ref">Referrence</a></p>
            </div>
    <?php
    }
    ?>
    <center>
        <button style="background:transparent;"><a style="text-decoration: none; color: white; font-size: 20px; padding: 3px;" href="index.php">Back</a></button>
    </center>
</body>

</html>
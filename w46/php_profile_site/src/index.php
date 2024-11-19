<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $user_name = "Franz Kafka";
    $user_age = 40;
    $user_city = "Prague";
    $hobbies = array("Writing", "Reading", "Insects", "Exercise")



        ?>
    <div class="profile-card">
        <h1><?php echo $user_name ?></h1>
        <p class="greeting">
            <?php echo "Welcome to your profile, " . $user_name . "!" ?>
        </p>
        <p>Age: <?php echo " " . $user_age; ?></p>
        <p>City:<?php echo " " . $user_city; ?></p>

        <p class="status">
            <?php if ($user_age >= 18) {
                echo "Status: Adult";
            } else {
                echo "Status: Minor";
            }
            ?>
        </p>
        <h2>Hobbies</h2>
        <ul>
            <?php foreach ($hobbies as $hobby) {
                echo "<li>" . $hobby . "</li>";
            } ?>
        </ul>
    </div>
</body>

</html>
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
        <h1><?php echo $user_name ?> <!-- PHP: Place the user name here --></h1>
        <p class="greeting">
            <?php echo "Welcome to your profile, " . $user_name . "!" ?><!-- PHP: Display the personalized greeting here -->
        </p>
        <p>Age: <?php echo " " . $user_age; ?><!-- PHP: Display the user age here --></p>
        <p>City:<?php echo " " . $user_city; ?> <!-- PHP: Display the user city here --></p>

        <p class="status"><!-- PHP: Display status based on age (Adult or Minor) -->
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
            <!-- PHP: Loop through hobbies and display each hobby as a list item -->
        </ul>
    </div>
</body>

</html>
<?php
include 'user.php';

$user = new User("Franz Kafka", 40, "Prague", ["Writing", "Reading", "Insects", "Exercise"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="style.css" </head>

<body>
    <div class="profile-card">
        <h1><?php echo $user->getName(); ?></h1>
        <p class="greeting"><?php echo $user->getGreeting(); ?></p>
        <p> Age: <?php echo $user->getAge(); ?></p>
        <p> City: <?php echo $user->getCity(); ?></p>
        <p class="status"><?php echo $user->getStatus(); ?></p>
        <h2>Hobbies</h2>
        <?php echo $user->displayHobbies(); ?>
    </div>
</body>

</html>
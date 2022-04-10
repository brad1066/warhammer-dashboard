<?php
    // Get cookie from session user data (simulated here)
    // TODO: Set up User class and implement this using attributes
    $user = [
        "theme" => "default"
    ];
    $theme = $user["theme"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warhammer Dashboard</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="js/theme.js"></script>
</head>
<body data-theme="<?= $theme ?>">
    <header>
        <button type="button" id="site-nav_toggle" class="site-nav__toggle" toggled="false"> --> </button>
        <h1 class="site-title">Warhammer Dashboard</h1>
    </header>
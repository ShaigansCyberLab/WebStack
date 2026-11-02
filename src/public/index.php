<?php

declare(strict_types=1);

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebStack</title>
</head>
<body>
    <h1>WebStack</h1>
    <p>PHP application is running.</p>
    <p>PHP version: <?= htmlspecialchars(PHP_VERSION) ?></p>
</body>
</html>

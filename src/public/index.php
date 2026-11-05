<?php

declare(strict_types=1);

header('Content-Type: text/html; charset=utf-8');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebStack | Deployment Lab</title>
</head>
<body>
    <h1>Welcome to WebStack!</h1>

    <p>Our PHP application is running successfully.</p>

    <h2>Deployment Information</h2>
    <p>Environment: Production</p>
    <p>Web Server: Nginx</p>
    <p>Application Runtime: PHP-FPM</p>
    <p>PHP Version: <?= htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8') ?></p>

    <h2>CI/CD Pipeline</h2>
    <p>This application is automatically deployed using GitHub Actions.</p>
    <p>Docker images are built, tested, and published to GitHub Container Registry.</p>

    <h2>Deployment Update</h2>
    <p>New deployment successfully delivered through our automated CI/CD pipeline!</p>
</body>
</html>

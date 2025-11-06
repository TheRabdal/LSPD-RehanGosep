<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD - Rehan Gosep</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="hero">
        <div class="container">
            <h1 class="main-title">Los Santos Police Departement</h1>
            <h1 class="sub-title">Rehan Gosep</h1>
            <h1 class="badge-number">73514</h1>
            <p>Rehan Gosep adalah seorang officer polisi berpangkat Rookie dengan badge number 73514, beliau mengabdi di Los Santos Police Departeman sejak 25 Oktober 2025.</p>
            <p><a href="screens/dashboard.php" class="button">ON Duty!</a></p>
            <?php
                date_default_timezone_set('Asia/Jakarta');
                echo "<p class=\"current-datetime\">" . date("H:i:s T, l, d F Y") . "</p>";
            ?>
        </div>
    </div>
</body>
</html>
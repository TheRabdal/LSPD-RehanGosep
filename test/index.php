<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSPD Cheatsheet</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'miranda'; ?>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3><i class="fa-solid fa-book"></i> LSPD Notes</h3>
        </div>
        <ul class="nav-links">
            <li><a href="index.php?page=miranda" class="nav-link <?php echo ($page == 'miranda') ? 'active' : ''; ?>"><i class="fa-solid fa-gavel"></i> Miranda Rights</a></li>
            <li><a href="index.php?page=forum" class="nav-link <?php echo ($page == 'forum') ? 'active' : ''; ?>"><i class="fa-solid fa-link"></i> Forum SASP</a></li>
            <li><a href="index.php?page=radio" class="nav-link <?php echo ($page == 'radio') ? 'active' : ''; ?>"><i class="fa-solid fa-headset"></i> Respon Radio</a></li>
            <li><a href="index.php?page=mantra" class="nav-link <?php echo ($page == 'mantra') ? 'active' : ''; ?>"><i class="fa-solid fa-terminal"></i> Mantra</a></li>
            <li><a href="index.php?page=mobil" class="nav-link <?php echo ($page == 'mobil') ? 'active' : ''; ?>"><i class="fa-solid fa-car"></i> Mantra Mobil</a></li>
            <li><a href="index.php?page=kode" class="nav-link <?php echo ($page == 'kode') ? 'active' : ''; ?>"><i class="fa-solid fa-bullhorn"></i> Respon Kode</a></li>
            <li><a href="index.php?page=emote" class="nav-link <?php echo ($page == 'emote') ? 'active' : ''; ?>"><i class="fa-solid fa-face-smile"></i> Emote</a></li>
        </ul>
    </div>

    <div class="main-content">
        <?php
            $allowed_pages = ['miranda', 'forum', 'radio', 'mantra', 'mobil', 'kode', 'emote'];
            if (in_array($page, $allowed_pages)) {
                include 'pages/' . $page . '.php';
            } else {
                include 'pages/miranda.php'; // Default page
            }
        ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
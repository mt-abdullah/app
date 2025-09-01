<?php
include 'libs/load.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php load_template('_head'); ?>

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
    integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>


    
    <?php load_template('_theme');?>

    <header data-bs-theme="dark">
        <?php load_template('_header');?>
    </header>

    <main>
        <?php load_template('_login'); ?>
    </main>

    <footer class="text-body-secondary py-5">
        <?php load_template('_footer'); ?>
    </footer>

    <script src="./assets/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>

</html>
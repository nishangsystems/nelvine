<!DOCTYPE html>
<?PHP include 'templates/admin/includes/functions.php'; ?>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NEL-VINE</title>

        <link rel="stylesheet" href='./assets/css/styles.css'>
        <link rel="stylesheet" href='./assets/css/bootstrap.min.css'>
        <link rel="stylesheet" href='./assets/fontawesome/css/all.min.css'>
        <link rel="stylesheet" href='./assets/css/footer.css'>

    </head>
    <body class="antialiased">

        <?php 
        include('./templates/header.php');
       include('./templates/body2.php');
        include('./templates/footer.php'); ?>
        <!-- <script src='./assets/bootstrap-5/bootstrap-5.0.2-dist/js/bootstrap.min.js'></script>
        <script src='./assets/fontawesome-free-5/fontawesome-free-5.14.0-web/js/all.min.js'></script>
    </body> -->
</html>
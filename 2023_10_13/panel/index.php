<?php
session_start();

if(!isset($_SESSION['admin_name'])){
    header(header: 'Location: ./panel/login.php');
    die;
}

$title = 'Panel administracyjny';
$activePage = 'home';
?>

<!doctype html>
<html lang="pl">
<?php
require_once '../include/head.php';
?>
<body>
<div class="container-fluid p-0"></div>
    <?php
    require_once './include/nav.php'
    ?>
    <div class="container py-5">
        <h1>Hello panel</h1>
    </div>
</body>
</html>
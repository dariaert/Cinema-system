<?php

?>
<!doctype html>
<html lang="en">
<?php
include __DIR__ . '/../components/head.php';
?>
<body>

<div class="wrapper">

<?php
include __DIR__ . '/../components/header.php';
?>

<main class="main">
    <div class="container">

        <h1>Панель администрирования</h1>
        <hr>
        <div class="show-title">
            <h2>Сеансы</h2>
            <button class="btn-admin-panel">
                <div class="admin-panel-text">
                    <div class="panel-icon">
                        <img src="../public/assets/images/Admin/Plus.svg" alt="">
                    </div>
                    <h4>Добавить</h4>
                </div>
            </button>
        </div>


    </div>
</main>

<?php
include __DIR__ . '/../components/footer.php';
?>

</div>

</body>
</html>
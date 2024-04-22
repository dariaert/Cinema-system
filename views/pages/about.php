<!doctype html>
<html lang="en">
<?php
include __DIR__ . '/../components/head.php';
?>
<body>

<div class="wrapper">

<?
include __DIR__ . '/../components/header.php';
?>

<main class="main">
        <div class="container">

            <section class="about_film">
                <div class="about_film-container">
                    <div class="poster-about_film-container">
                        <div class="poster-about_film">
                            <img src="<?=$data['poster_film']?>" alt="" class="poster_about_film-img">
                        </div>
                        <span class="about_film-ageLimit"><?=$data['name_ageLimit']?></span>
                    </div>
                    <div class="about_film-text">
                        <div class="about_film-name-film">
                            <h1><?=$data['name_film']?></h1>
                        </div>

                        <div class="about_film-block-criteria">
                            <div class="about_film-criteria">Жанр:</div>
                            <div class="about_film-info"><?=$data['name_genre']?></div>
                        </div>

                        <div class="about_film-block-criteria">
                            <div class="about_film-criteria">Режиссер:</div>
                            <div class="about_film-info"><?=$data['filmmaker']?></div>
                        </div>

                        <div class="about_film-block-criteria">
                            <div class="about_film-criteria">В ролях:</div>
                            <div class="about_film-info"><?=$data['actors']?></div>
                        </div>

                        <div class="about_film-block-criteria">
                            <div class="about_film-criteria">Страна:</div>
                            <div class="about_film-info"><?=$data['country']?></div>
                        </div>

                        <div class="about_film-block-criteria">
                            <div class="about_film-criteria">Продолжительность:</div>
                            <div class="about_film-info">
                                <?php
                                $hours = floor($data['duration_film'] / 60);
                                $minutes = $data['duration_film'] % 60;
                                echo $hours . ' ' . (($hours == 1) ? 'час' : 'часа') . ' ' . $minutes . ' мин.';
                                ?>
                            </div>
                        </div>


                    </div>
                </div>
                <form action="/favourite" method="post" class="form-favourite">
                    <button type="submit" class="fovourite_btn">
                        <div class="heart-icon">
                            <img src="../../public/assets/images/Icons/header_heart.svg" alt="">
                        </div>
                    </button>
                </form>
                <div class="about_film-description">
                    <div class="about_film-description">
                        <h1>Описание</h1>
                    </div>
                    <div class="about_film-info"><p><?=$data['description']?></p></div>
                </div>

            </section>

        </div>
    </main>

<?php
include __DIR__ . '/../components/footer.php';
?>

</div>

</body>
</html>




<?php
/**
 * inner.php
 * @author: work
 */

use yii\helpers\Html;
use frontend\assets\MainAsset;

MainAsset::register($this);

?>

<?php $this->beginPage();0?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <?php $this->head() ?>

</head>

<body>

<?php $this->beginBody();?>

<!-- Header Starts -->
<?php echo $this->render("//common/header");?>
<!-- #Header Starts -->


<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Blogs</span>
        <h2><?=$this->title ?></h2>
    </div>
</div>
<!-- banner -->

<div class="container">
    <div class="spacer blog">
        <?=$content ?>
    </div>
</div>

<?php echo $this->render("//common/footer") ?>

<?php $this->endBody();?>

</body>
</html>

<?php $this->endPage();?>
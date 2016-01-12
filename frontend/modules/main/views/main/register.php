<?php
    /* @var $this yii\web\View */
    /* @var $form yii\bootstrap\ActiveForm */
    /* @var $model \frontend\models\SignupForm */

    use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;
?>

<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <?php
            $form = ActiveForm::begin([
                'enableClientValidation' => false,
                'enableAjaxValidation' => true
            ]);
            echo $form->field($model,'username');
            echo $form->field($model,'email');
            echo $form->field($model,'password')->passwordInput();
            echo $form->field($model,'repassword')->passwordInput();
            echo Html::submitButton('Регистрация', ['class' => 'btn btn-success']);
            $form = ActiveForm::end();
        ?>

    </div>
</div>
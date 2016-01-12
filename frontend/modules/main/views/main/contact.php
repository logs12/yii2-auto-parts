<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\captcha\Captcha;
use yii\helpers\Url;
?>

<div class="row register">
    <div class="col-lg-6 col-sm-6">

        <?php
        $form = ActiveForm::begin([
            //'enableClientValidation' => false,
            //'enableAjaxValidation' => true
        ]);
        echo $form->field($model,'name');
        echo $form->field($model,'email');
        echo $form->field($model,'subject');
        echo $form->field($model, 'body')->textArea(['rows' => 6]);
        echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            'captchaAction' => Url::to(['main/captcha'])
        ]);
        echo Html::submitButton('Отправить', ['class' => 'btn btn-success']);
        $form = ActiveForm::end();
        ?>

    </div>
</div>
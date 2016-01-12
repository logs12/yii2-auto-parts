<?php
namespace frontend\components;

use yii\base\Component;

class Common extends  Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject, $text, $emailFrom = 'autopart2yuu.ru', $nameFrom='Advert')
    {
       if (\Yii::$app->mail->compose()
           //->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name])
           ->setFrom(['vasiliys492@gmail.com' => 'Advert'])
           ->setTo([$emailFrom => $nameFrom])
           ->setSubject($subject)
           ->setTextBody($text)
           ->send()){
           $this->trigger(self::EVENT_NOTIFY);
           return true;
       }
    }

    public function notifyAdmin($event)
    {
        print "Notify Admin";
    }
}
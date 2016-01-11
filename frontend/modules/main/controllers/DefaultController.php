<?php

namespace app\modules\main\controllers;

use frontend\components\Common;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "bootstrap";
        return $this->render('index');
    }

    public function actionService()
    {
        $locator = \Yii::$app->locator;
        $cache = $locator->cache;

        //$cache = \Yii::$app->locator;

        $cache->set('test', 1);

        print $cache->get('test');
    }

    public function actionEvent()
    {
        //$component = new Common();
        $component = \Yii::$app->common;
        $component->on(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);
        $component->sendMail("test@domain.com","Test","TestBody");
        $component->off(Common::EVENT_NOTIFY,[$component,'notifyAdmin']);
    }

    public function actionPath()
    {
        // @yii
        // @app - путь до текущей активной папки
        // @runtime
        // @webroot
        // @web
        // @vendor
        // @bower
        // @npm
        // @frontend
        // @backend
        print \Yii::getAlias('@test');

    }
}

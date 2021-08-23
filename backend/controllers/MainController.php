<?php

namespace backend\controllers;

use common\models\Article;
use yii\httpclient\Client;
use common\models\Category;

class MainController extends AppAdminController
{
    public function actionIndex()
    {
        $articlesCount = Article::find()->count();
        $categoryCount = Category::find()->count();
        $weather = $this->getWeather('Belgorod');
        return $this->render('index', compact('articlesCount', 'categoryCount', 'weather'));
    }

    protected function getWeather($city, $lang = 'ru')
    {
        $url = 'https://api.openweathermap.org/data/2.5/weather';
        $options = [
            'q' => "$city",
            'appid' => '5068c7fd458b408329fb30212da2a2fb',
            'units' => 'metric',
            'lang' => "$lang",
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));
        $response = curl_exec($ch);
        $data = json_decode($response, true);
        curl_close($ch);

        return $data;
    }
}

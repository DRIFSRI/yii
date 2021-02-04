<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 04.02.2021
 * Time: 21:07
 */

namespace app\controllers;


use yii\web\Controller;

class RunTimeController extends Controller
{
    public function actionRun()
    {
        $this->render('view',[
            ''=>$this
        ]);
    }
}
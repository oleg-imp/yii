<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class NumberController extends Controller{
	
	public function actionShowSquare($num){
		$num *= $num;
		return $this->render('show-square', ['num' => $num]);
	}
	
	public function actionShowSum($num1, $num2){
		$sum = $num1 + $num2;
		return $this->render('show-sum', ['sum' => $sum]);
	}
}
?>
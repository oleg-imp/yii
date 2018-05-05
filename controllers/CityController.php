<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class CityController extends Controller{
	
	public $cities = ['Moscow','Kiev','Minsk'];
	
	public function actionShowOne($num){
		return $this->render('show-one', ['cities' => $this->cities, 'num' => $num]);
	}
	
	public function actionShowAll(){
		return $this->render('show-all', ['cities' => $this->cities]);
	}
}
?>
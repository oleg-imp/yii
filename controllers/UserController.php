<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class UserController extends Controller{
	
	public function actionShowUser(){
		$name = 'Николай';
		$surname = 'Иванов';
		return $this->render('show-user', ['title' => 'Просмотр пользователя '.$name, 'name' => $name, 'surname' => $surname]);
	}
	
	public function actionShowAllUsers(){
		$users = ['Василий','Евгений','Дмитрий'];
		return $this->render('show-all-users', ['users' => $users]);
	}
	
	public function actionShowAllUsersTable(){
		$users = [
			['name' => 'user1', 'age' => 25],
			['name' => 'user2', 'age' => 30],
			['name' => 'user3', 'age' => 35]
		];
		return $this->render('show-all-users-table', ['users' => $users]);
	}
	
}
?>
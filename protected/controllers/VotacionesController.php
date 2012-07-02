<?php

class VotacionesController extends Controller
{
	public $message;
	
	public function actionIndex()
	{
	//	$message = Obra::model()->findByPk(1);
	//	$this->message= $message->nombre;
	//	$this->message = "Hola de Votaciones.Index()";
	//	$this->render('index', array('content' => $this -> message ));
		echo "hola";
	}
	
	public function actionBrowse()
	{
		
		if($_GET["gid"]){
		
			$genero = $_GET["gid"];
			$listaobras = Obra::model()->findAll("generoId = " . $genero);
			$listavotos = Voto::model()->findAll();
			$listausuarios = User::model()->findAll();
			$this->render('index', array ('listaobras'=>$listaobras,'listavotos'=>$listavotos,'listausuarios'=>$listausuarios));
			
			//if($_GET["obra"]!=null)
			//{
			//$voto->new Voto;
			//$voto->puntuacion=5;
			//$voto->userId=Yii::app()->user->id;
			//$voto->obraId=$_GET["obra"];
			//$voto->save();
			//}
			
		}		
	 //echo CHtml::link("like", array('like'));
	}
	
	public function actionLike()
	{
	
		if($_GET["obra"]){
			$voto = new Voto;
			$voto->puntuacion=5;
			$voto->userId=Yii::app()->user->id;;
			$voto->obraId=$_GET["obra"];
			$voto->save();
			
			
			$genero = $_GET["gid"];
			$listaobras = Obra::model()->findAll("generoId = " . $genero);
			$listavotos = Voto::model()->findAll();
			$listausuarios = User::model()->findAll();
			$this->render('index', array ('listaobras'=>$listaobras,'listavotos'=>$listavotos,'listausuarios'=>$listausuarios));
			
		}
			
		
	
	}
	public function actionNotlike()
	{
	if($_GET["obra"]){
			$voto = new Voto;
			$voto->puntuacion=-3;
			$voto->userId=Yii::app()->user->id;;
			$voto->obraId=$_GET["obra"];
			$voto->save();
			
			
			$genero = $_GET["gid"];
			$listaobras = Obra::model()->findAll("generoId = " . $genero);
			$listavotos = Voto::model()->findAll();
			$listausuarios = User::model()->findAll();
			$this->render('index', array ('listaobras'=>$listaobras,'listavotos'=>$listavotos,'listausuarios'=>$listausuarios));
			
		}
		
		
		
		
		

	}
//	public function missingAction($actionID)
//{
 //   echo "jajaj";
//}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
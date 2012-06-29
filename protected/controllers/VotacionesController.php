<?php

class VotacionesController extends Controller
{
	public $message;
	
	public function actionIndex()
	{
	//	$message = Obra::model()->findByPk(1);
	//	$this->message= $message->nombre;
		$this->message = "Hola de Votaciones.Index()";
		$this->render('index', array('content' => $this -> message ));
	}
	
	public function actionBrowse()
	{
		if ($_GET["id"]){
			
			$generoCriteria = new CDbCriteria();
			$generoCriteria->select = "'generoId', 'nombre', 'descripcion'";
		//	$generoCriteria->condition = "generoId = "  . $_GET("id");
			
			$obraCriteria = new CDbCriteria();
			$obraCriteria -> alias = "t2";
			$obraCriteria->select = "'obraId', 'nombre', 'autor','director','actores','salas','horarios','precios','temporada','afiches','reseña','generoId'";
		//	$generoCriteria->condition ="generoId= " . $_GET("id");
			$generoCriteria->order = "'nombre' ASC";
			
			$this->render('index',array('Obras'=> Obra::model()->findAll($obraCriteria),
										'Generos'=> Genero::model()->findAll($generoCriteria)));
		}else{
			$this->message = 'Hola de Votaciones.Browse()';
			$this->render('index', array('content' => $this -> message ));
		}
		

	}
	
	public function actionDetails()
	{
		$this->message = "Hola de Votaciones.Details()";
		$this->render('index', array('content' => $this -> message ));

	}

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
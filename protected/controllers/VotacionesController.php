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
		
		if($_GET["gid"]){
			$genero = $_GET["gid"];
			$listaobras = Obra::model()->findAll("generoId = " . $genero);
			
			echo "generoId = " . $genero;
			$this->render('index', array ('listaobras'=>$listaobras));
			
	}		
		
		/*
		
		if ($_GET["id"]){
			
		//	$criteria= new CDbCriteria();
		//	$criteria-> select = "*";
		//	$criteria-> order = "Nombre ASC";
		
			$generoCriteria= new CDbCriteria();
			$generoCriteria-> select = "*";
			$generoCriteria-> condition = "'generoId' = " . $_GET["id"];
			$generoCriteria-> order = "nombre ASC";
			
			$obraCriteria = new CDbCriteria();
			$obraCriteria -> alias = "t2";
			$obraCriteria-> select = "*";
			$obraCriteria-> condition = "'generoId' = " . $_GET["id"];
			$obraCriteria-> order = "nombre ASC";
			
			$this->render('index',array('Obras'=> Obra::model()->findAll($obraCriteria),
										'Generos'=> Genero::model()->findAll($generoCriteria)));
		}else{
			$this->message = 'Hola de votaciones controller' ;
			$this->render('index', array('content' => $this -> message ));
		}
		*/
	
	}
	
	public function actionDetails()
	{
		if($_GET["oId"]){
			$obraCriteria = new CDbCriteria();
			$obraCriteria->select = "*";
			$obraCriteria->condition = "obraId = " . $_GET["oId"];
			
	//		$artistCriteria = new CDbCriteria();
	//		$artistCriteria->select = "*";
	//		$artistCriteria->condition = "ArtistId = " . $_GET["aid"];
			
			$this->render('index', array('Obras' => Obra::model()->findAll($obraCriteria)));
		}
		else{
			$this->message = "Please select an album to view it's details";
			$this->render('index', array('content'=>$this->message,));
		}


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
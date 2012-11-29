<?php

class FaleConoscoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'export'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new FaleConosco;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FaleConosco']))
		{
			$model->attributes=$_POST['FaleConosco'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FaleConosco']))
		{
			$model->attributes=$_POST['FaleConosco'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('FaleConosco');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FaleConosco('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FaleConosco']))
			$model->attributes=$_GET['FaleConosco'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Export all models to Excel.
	 */
	public function actionExport()
	{
		$model=new FaleConosco();
		$model->unsetAttributes();  // clear any default values
		$models = FaleConosco::model()->findAll();

		$labels = $model->attributeLabels();

		$d = date("Y-m-d-Hi");
		$report = array(array());
		foreach ($labels as $k => $t) {
			$report[0][] = $t;
		}
		foreach ($models as $k => $tele) {
			$attr = array();
			foreach ($tele->attributes as $y => $a) {
				$attr[] = $a;
			}
			$report[] = $attr;
		}

		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();

		// Set document properties
		$objPHPExcel->getProperties()->setCreator("Telhanorte")
									 ->setLastModifiedBy("Telhanorte")
									 ->setTitle("Office 2007 XLSX Document")
									 ->setSubject("Office 2007 XLSX Document")
									 ->setDescription("Fale Conosco informação")
									 ->setKeywords("fale conosco")
									 ->setCategory("Fale Conosco");
		// Add some data
		$i = 1;	
		foreach($report as $k => $tele) {
			$k = 1;
			foreach ($tele as $y => $a) {
				$objPHPExcel->getActiveSheet()->setCellValue(chr(64+$k) . $i, $a);
				$k++;
			}		
			$i++;	
		}

		// Rename worksheet
		$objPHPExcel->getActiveSheet()->setTitle("Fale Conosco");

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header("Content-Disposition: attachment;filename='FaleConosco_$d.xlsx'");
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');

		Yii::app()->end();
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=FaleConosco::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fale-conosco-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

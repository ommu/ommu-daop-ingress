<?php
/**
 * Daop Anothers (daop-anothers)
 * @var $this AnotherController
 * @var $model DaopAnothers
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */

	$this->breadcrumbs=array(
		'Daop Anothers'=>array('manage'),
		$model->another_id=>array('view','id'=>$model->another_id),
		Yii::t('phrase', 'Update'),
	);
?>

<div class="form">
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

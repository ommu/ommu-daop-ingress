<?php
/**
 * Daop Cities (daop-city)
 * @var $this CityController
 * @var $model DaopCity
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */

	$this->breadcrumbs=array(
		'Daop Cities'=>array('manage'),
		'Delete',
	);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'daop-city-form',
	'enableAjaxValidation'=>true,
)); ?>

	<div class="dialog-content">
		<?php echo Phrase::trans(172,0);?></div>
	<div class="dialog-submit">
		<?php echo CHtml::submitButton(Phrase::trans(173,0), array('onclick' => 'setEnableSave()')); ?>
		<?php echo CHtml::button(Phrase::trans(174,0), array('id'=>'closed')); ?>
	</div>
	
<?php $this->endWidget(); ?>

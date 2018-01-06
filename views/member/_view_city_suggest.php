<?php
/**
 * Daop Users (daop-users)
 * @var $this MemberController
 * @var $data DaopUsers
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (opensource.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */
 
if($render == 1) {
	$model = DaopCity::model()->findByAttributes(array('city_id'=>$data->city_id));
	
	if($model->city_photo == '')
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/daop_default.png', 100, 100, 2);
	else
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/city/'.$model->city_photo, 100, 100, 1);
	$title = str_replace('Kabupaten ', '', $data->city);
?>
	<div class="sep">
		<div class="img">
			<a href="<?php echo Yii::app()->controller->createUrl('cityadd',array('id'=>$data->city_id,'t'=>Utility::getUrlTitle($data->city)))?>" title="Add Daop: <?php echo $data->city?>">Add</a>
			<img src="<?php echo $images;?>" alt="<?php echo $data->city?>" />
		</div>
		<div>
			<a href="<?php echo Yii::app()->controller->createUrl('city/view',array('id'=>$data->city_id,'t'=>Utility::getUrlTitle($data->city)))?>" title="<?php echo $data->city?>, [<?php echo $model != null ? $model->users : 0;?> Agent]"><?php echo $title?></a>
		</div>
	</div>
	
<?php } else {?>
	<div class="empty">
		<h3>City Suggest "<strong><?php echo $_GET['DaopUsers']['city_input']?></strong>" Not Found</h3>
	</div>
<?php }?>
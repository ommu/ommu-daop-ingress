<?php
/**
 * Daop Users (daop-users)
 * @var $this MemberController
 * @var $data DaopUsers
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */ 

if($render == 1) {
	$model = DaopCity::model()->findByAttributes(array('city_id'=>$data->city_id));
	
	if($model->city_photo == '')
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/daop_default.png', 120, 150, 2);
	else
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/city/'.$model->city_photo, 120, 150, 1);
	$title = str_replace('Kabupaten ', '', $data->city_relation->city); 
?>

	<div class="sep">
		<div class="img">
			<a href="<?php echo Yii::app()->controller->createUrl('citydrop', array('id'=>$data->daop_id,'t'=>$this->urlTitle($data->city_relation->city)))?>" title="Drop: <?php echo $data->city_relation->city?>">Drop</a>
			<img src="<?php echo $images;?>" alt="<?php echo $data->city_relation->city?>" />
		</div>
		<div>
			<a href="<?php echo Yii::app()->controller->createUrl('city/view', array('id'=>$data->city_id,'t'=>$this->urlTitle($data->city_relation->city)))?>" title="<?php echo $data->city_relation->city?>, [<?php echo $model->users?> Agent]"><?php echo $title?></a>
			<span><?php echo Utility::dateFormat($data->creation_date, true);?></span>
		</div>
	</div>
	
<?php } else {?>
	<div class="empty">
		<h3>City Registered Not Found</h3>
	</div>
<?php }?>
<?php
/**
 * Daop Provinces (daop-province)
 * @var $this ProvinceController
 * @var $data DaopProvince
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */
 

	if($data->province_photo == '')
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/daop_default.png', 80, 80, 1);
	else
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/city/'.$data->province_photo, 80, 80, 1);
	$city = DaopUsers::model()->count(array(
		//'select'=>'folder, layout',
		'condition' => 'province_id = :id',
		'params' => array(
			':id' => $data->province_id,
		),		
	)); 
?>

<div class="sep">
	<?php /*
	<a class="photo" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->province_id,'t'=>Utility::getUrlTitle($data->province_relation->province)))?>" title="<?php echo $data->province_relation->province;?>"><img src="<?php echo $images;?>" alt="<?php echo $data->province_relation->province;?>"/></a>
	*/?>
	<a class="title" href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->province_id,'t'=>Utility::getUrlTitle($data->province_relation->province)))?>" title="<?php echo $data->province_relation->province;?>"><?php echo $data->province_relation->province;?></a>
	<div>
		<a href="" title="<?php echo $city;?> City"><?php echo $city;?> City</a> / 
		<a href="" title="<?php echo $data->users;?> Agent"><?php echo $data->users;?> Agent</a>
	</div>
</div>
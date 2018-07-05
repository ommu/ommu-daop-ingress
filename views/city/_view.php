<?php
/**
 * Daop Cities (daop-city)
 * @var $this CityController
 * @var $data DaopCity
 *
 * * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */
	if($data->city_photo == '') {
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/daop_default.png', 100, 100, 1);
	} else {
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/users/'.Yii::app()->user->id.'/'.Yii::app()->user->photo, 100, 100, 1);
	}
?>

<div class="sep"><div class="invers">
	<div class="photo">
		<a href="<?php echo Yii::app()->controller->createUrl('view', array('id'=>$data->city_id,'t'=>$this->urlTitle($data->city_relation->city)))?>" title=""><img src="<?php echo $images;?>" alt=""></a>
	</div>
	<?php echo $data->users;?>,
	<?php echo $data->city_relation->city;?>,
	<?php echo $data->city_relation->province->province;?>,
	<?php echo $data->city_relation->province->country->country;?>

</div></div>
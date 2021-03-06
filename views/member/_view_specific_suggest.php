<?php
/**
 * Daop Users (daop-users)
 * @var $this MemberController
 * @var $data DaopUsers
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */

if($render == 1) {
	if($data->another_photo == '')
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/daop_default.png', 100, 100, 1);
	else
		$images = Utility::getTimThumb(Yii::app()->request->baseUrl.'/public/daop/another/'.$data->another_photo, 100, 100, 1); 
	if($data->city_id != 0)
		$title = $data->another_name.', '.$data->city_relation->city;
	else
		$title = $data->another_name;
?>

	<div class="sep">
		<div class="img">
			<a href="<?php echo Yii::app()->controller->createUrl('anotherdrop', array('id'=>$data->another_id,'t'=>$this->urlTitle($data->another_name)))?>" title="Drop: <?php echo $title?>">Drop</a>
			<img src="<?php echo $images;?>" alt="<?php echo $title;?>" />
		</div>
		<a href="<?php echo Yii::app()->controller->createUrl('another/view', array('id'=>$data->another_id,'t'=>$this->urlTitle($title)))?>" title="<?php echo $title.' ['.$data->users.' Agent]';?>"><?php echo $title;?></a>
	</div>
	
<?php } else {?>
	<div class="empty">
		<h3>Specific City Registered Not Found</h3>
	</div>
<?php }?>
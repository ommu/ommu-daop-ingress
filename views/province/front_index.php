<?php
/**
 * Daop Provinces (daop-province)
 * @var $this ProvinceController
 * @var $model DaopProvince
 * @var $dataProvider CActiveDataProvider
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2014 Ommu Platform (www.ommu.co)
 * @link https://github.com/ommu/ommu-daop-ingress
 *
 */

	$this->breadcrumbs=array(
		'Daop Provinces',
	);
?>

<div class="boxed province">
	<div class="list-view">
		<div class="items">
			<?php echo $data;?>
		</div>
		<a class="pager <?php echo ($pager['itemCount'] == '0' || $pager['nextPage'] == '0') ? 'hide' : '';?>" href="<?php echo $nextPage;?>" title="Next..">Next..</a>
	</div>
</div>

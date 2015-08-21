<?php $title = 'Проекты домов с четырехскатной крышей, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с четырехскатной крышей от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с четырехскатной крышей';?>
<?php $breadcrumb = 'С четырехскатной крышей';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты домов и коттеджей с четырехскатной крышей</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-3 sample shadow-z-1 bl-pr';
include("../proekt-69-118/block.php");
include("../proekt-59-183/block.php");
include("../proekt-34-177/block.php");
include("../proekt-28-162/block.php");
include("../proekt-26-159/block.php");
include("../proekt-01-300/block.php");?>
    </div>
</div>
<?php include($root."./blocks/footer.php");?>
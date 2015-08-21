<?php $title = 'Проекты домов с двухскатной крышей, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с двухскатной крышей от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с двухскатной крышей';?>
<?php $breadcrumb = 'С двухскатной крышей';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты домов и коттеджей с двухскатной крышей</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-3 sample shadow-z-1 bl-pr';
include("../proekt-60-160/block.php");
include("../proekt-61-192/block.php");
include("../proekt-66-215/block.php");
include("../proekt-50-110/block.php");
include("../proekt-41-125/block.php");
include("../proekt-39-125/block.php");
include("../proekt-09-100/block.php");
include("../proekt-24-142/block.php");
include("../proekt-21-115/block.php");
include("../proekt-19-125/block.php");
include("../proekt-17-115/block.php");
include("../proekt-05-146/block.php");
include("../proekt-22-150/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>
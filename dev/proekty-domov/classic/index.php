<?php $title = 'Проекты домов в классическом стиле';?>
<?php $description = 'Проекты домов в классическом стиле от компании Golden Home. Наша компания проектирует и стоит дома в классическом стиле во Владимире и области';?>
<?php $keywords = 'классический стиль, классика';?>
<?php $breadcrumb = 'Классика';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

    <h1>Проекты в классическом стиле</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-3 sample shadow-z-1 bl-pr';
include("../proekt-73-245/block.php");
include("../proekt-72-290/block.php");
include("../proekt-71-143/block.php");
include("../proekt-59-183/block.php");
include("../proekt-66-215/block.php");
include("../proekt-49-179/block.php");?>
    </div>
	<article class="article">
          <h2>Классические дома</h2>
          <p>Дом в классическом стиле уже стал незыблемой традицией. Такие сооружения имеют определенный вид архитектуры и сочетают в себе практичность с доступной стоимостью. Но не следует думать, что такие дома похожи друг на друга. Каждое здание имеет свою неповторимую нотку или черту, отличаясь оригинальностью и презентабельностью.</p>
          <p>Наши специалисты предложат заказчику не только уже готовый для реализации проект, но и создадут при желании клиента индивидуальный проект с учетом всех пожеланий. В итоге клиент получит прекрасный дом в классическом стиле, воплощенный по согласованному проекту с точностью до мельчайших деталей.</p>
          <p>Проект классического дома представляет собой продуманное сочетание внешнего и наружного облика сооружения, чтобы добиться полной гармонии и цельности. В ходе строительства применяются современные материалы и инновационные технологии, позволяющие справиться с проектом любой степени сложности. При этом наши профессионалы включают в проект все блага цивилизации, например системы коммуникаций и сигнализации, чтобы заказчик мог наслаждаться функциональным домом, в котором приятно и уютно находиться.</p>
    </article>
</div>
<?php include($root."blocks/footer.php");?>
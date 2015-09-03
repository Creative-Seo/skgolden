<?php $title = 'Портфолио студии дизайна интерьера Golden Home';?>
<?php $description = 'Студия дизайна интерьеров Golden Home представляет Вам портфолио работ: ознакомьтесь с нашими проектами и фото по дизайну интерьеров и экстерьеров домов, коттеджей и квартир.и';?>
<?php $keywords = 'Дизайн-проекты, реализованные объекты, портфолио';?>
<?php $breadcrumb = 'Портфолио';?>
<?php $breadcrumb2 = 'Дизайн интерьера';?>
<?php $breadcrumb2_url = 'dizayn-interera';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="dizayn container-fluid"> 
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <a href="/dizayn-proekty/elegantnyy-interer-gostinoy-i-kuhni/">
      <div class="block">
        <div class="line1 lines"></div>
        <div class="line2 lines"></div>
        <div class="line3 lines"></div>
        <div class="line4 lines"></div>
        <div class="block-content"></div>
        <div class="block-title">Молоко и шоколад. Элегантный интерьер гостиной и кухни</div>
        
        <img src="http://www.sk-goldenhome.ru/dizayn-proekty/elegantnyy-interer-gostinoy-i-kuhni/elegantnyy-interer-gostinoy-i-kuhni.jpg" alt="" class="img-responsive">
      </div>
    </a>
    </div>

    <div class="col-md-4">
      <a href="/dizayn-proekty/dvuhkomnatnaya-kvartira/">
      <div class="block">
        <div class="line1 lines"></div>
        <div class="line2 lines"></div>
        <div class="line3 lines"></div>
        <div class="line4 lines"></div>
        <div class="block-content"></div>
        <div class="block-title">Двухкомнатная квартира с наливными полами</div>
        
        <img src="/dizayn-proekty/dvuhkomnatnaya-kvartira/nalivnoy-pol-s-uzorom.jpg" class="img-responsive" alt="Двухкомнатная квартира с наливными полами" />
      </div>
    </a>
    </div>

  </div>   
</div>
 
<?php include($root."blocks/footer.php");?>

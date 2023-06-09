<?php
  require_once('header.php');

  require_once('admin/class/category.class.php');

  $categoryObject = new Category();

  $CategoryList = $categoryObject->getAllActiveCategory();

 ?>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <?php foreach($CategoryList as $category) { ?>
        <li><a href=""><?php echo $category['name']; ?></a></li>
        <?php  }  ?>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="images/demo/1.gif" alt="" />
            <div class="panel-overlay">
              <h2>Nullamlacus dui ipsum</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/2.gif" alt="" />
            <div class="panel-overlay">
              <h2>Aliquatjusto quisque nam</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/3.gif" alt="" />
            <div class="panel-overlay">
              <h2>Dapiensociis temper donec</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/4.gif" alt="" />
            <div class="panel-overlay">
              <h2>Semvelit nonummy odio tempus</h2>
              <p>Justolacus eger at pede felit in dictum sempus elit curabitur ipsum. Ametpellentum.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/5.gif" alt="" />
            <div class="panel-overlay">
              <h2>Pedefamet orci orci quisque</h2>
              <p>Nonnam aenenasce morbi liberos malesuada risus id donec volutpat estibulum curabitae.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <li><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li class="last"><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Environment &raquo;</a></h2>
      <img src="images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Technology &raquo;</a></h2>
      <img src="images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
    </div>
    <br class="clear" />
    <div class="fl_left">
      <h2><a href="#">Entertainment &raquo;</a></h2>
      <img src="images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <div class="fl_right">
      <h2><a href="#">Politics &raquo;</a></h2>
      <img src="images/demo/100x100.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan sagittislaorem dolor sum at urna.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>Feugiatrutrum rhoncus semper</h2>
        <ul>
          <li><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img src="images/demo/190x130.gif" alt="" />
            <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
            <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <div class="column">
      <div class="holder"><a href="#"><img src="images/demo/300x250.gif" alt="" /></a></div>
      <div class="holder"><a href="#"><img src="images/demo/300x80.gif" alt="" /></a></div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?php

 require_once('footer.php')
?>
<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('pages/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "view" ); ?>'><?php echo Html::anchor('pages/view','View');?></li>
	<li class='<?php echo Arr::get($subnav, "insert" ); ?>'><?php echo Html::anchor('pages/insert','Insert');?></li>
	<li class='<?php echo Arr::get($subnav, "about" ); ?>'><?php echo Html::anchor('pages/about','About');?></li>
	<li class='<?php echo Arr::get($subnav, "contact" ); ?>'><?php echo Html::anchor('pages/contact','Contact');?></li>

</ul>
<p>Insert</p>
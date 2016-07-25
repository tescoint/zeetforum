<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ads">
	<?php 
		$ad4 = grab_ads(4);
		echo $ad4[0]['value'];
		?>
	</div>
	<div class="col-lg-4 col-md-4 ads col-sm-6 col-xs-12 ">
		<?php 
		$ad5 = grab_ads(5);
		echo $ad5[0]['value'];
		?>
	</div>
	<div class="col-lg-4 col-md-4 ads col-sm-12 col-xs-12 ">
		<?php 
		$ad6 = grab_ads(6);
		echo $ad6[0]['value'];
		?>
	</div>
</div>
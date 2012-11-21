<div class="middleContainer">
	<div class="pgTitle clearfix">
		<h2>Test Email</h2>
	</div>
	<div>
		<?php 
			//d($model);
			//d($model->attributes);
			$labels = $model->attributeLabels();
		?>
		<table>
			<?php foreach ($model->attributes as $key => $value) {
				if(isset($labels[$key])){
					echo "<tr><td style='padding: 0.5em 1em;'>{$labels[$key]}</td><td style='padding: 0.5em 1em;'>$value</td></tr>";
				}
			}
			?>			
		</table>
	</div>
</div><!--middleContainer-->

<div class="error">
	<p>eWAY Payment Gateway requires these missing PHP extensions. Please contact your website host to have these extensions installed.</p>
	<ul style="list-style-type: disc; padding-left: 2em;">
	<?php foreach ($missing as $ext): if (!extension_loaded($ext)): ?>
		<li><?php echo $ext; ?></li>
	<?php endif; endforeach; ?>
	</ul>
</div>

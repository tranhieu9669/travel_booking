<div class="ul-ft">
    <ul>
    	<?php foreach ($listItems as $value): ?>
    		<li><a href="<?php echo $value->url; ?>" title=""><?php e_( $value->title, 'bookawesome' ); ?></a></li>
    	<?php endforeach ?>
    </ul>
</div>

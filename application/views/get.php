<div class="span10">
	<article>
		<h1><?=$topic->title?></h1>
		<div>
			<div><?=kdate($topic->created)?></div>
			<?=$topic->description?>
		</div>
	</article>
</div>
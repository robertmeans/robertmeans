<?php if( $first_visit ): ?>

<div id="bobs-message-first-visit">
	<div class="inside-message-first">
			<p>I see this is your first visit</p>	

	</div>
	<div class="close-cc">
		<a class="cc-x" onClick="hideInitialBobsMessage(); return false;" href="#"><i class="far fa-window-close"></i></a>
	</div><!-- #close-cc -->
</div><!-- #bobs-message-first-visit -->


<?php endif; ?>


<?php if (!$first_visit): ?>
<div id="bobs-message">
	<div class="inside-message">
			<p>Welcome back!</p>	

	</div>
	<div class="close-cc">
		<a class="cc-x" onClick="hideBobsMessage(); return false;" href="#"><i class="far fa-window-close"></i></a>
	</div><!-- #close-cc -->
</div><!-- #bobs-message -->
<?php endif; ?>
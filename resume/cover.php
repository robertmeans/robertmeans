<?php $layout_context = "cover"; ?>
<?php require('_includes/head.php'); ?>
<body>
<?php require('_includes/first-visit-message.php'); ?>
	<div id="cv">
		<?php require('_includes/nav.php'); ?>
		<?php require('_includes/cv-header.php'); ?>
		<div id="cover-body">
			<p class="date"><?php echo date("l, F d, Y") ?></p>
			<!-- <p class="covid">*Coronavirus free!*</p> -->
			<p class="open">Hello,</p>
			<p class="body-copy">In full discolsure, this snazzy presentation is deliberately intended as a decoy. It aims to spotlight the care and attention I invest in my work while gracefully masking a dearth of traditional résumé fodder.</p>
			<p class="body-copy">Now that we're off to an honest start, I am wide open to entertaining virtually <i>any</i> business ideas. Please do not let a history of Web development typecast my skill setz. <!-- The aptitude required for this field of work combined with personality, motivation and spirit translates into a broad range of potential. --> &nbsp;<button id="button-box-01" class="click-box-01"><i class="far fa-eye"></i></button></p>

			<div id="box-01">
				<p>A perfect fit would utilize 
				be one where I would interact with clients while capitalizing to design and develop efficient systems to my advantage.</p>
			</div>

			<p class="body-copy">Let's talk!</p>
			<div id="signature">
				<img src="_images/signature.png" alt="Robert H. Means">
				<p>Cordially,</p>
				<p class="name">Robert H. Means</p>
			</div>
		</div>
		<div id="ornate-footer">
			<img src="_images/ornate-footer.png">
		</div>	
	</div><!-- #cv -->
	<div class="cf">&nbsp;</div>

<?php require('_includes/footer.php'); ?>	
</body>
</html>
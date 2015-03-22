		<input class=section_title type=text value='<?php echo($title); ?>' />
		<br/>
		<div class=section>
		<textarea class=section_textarea><?php echo($content); ?></textarea>
			<div class=stats>
				<div class='stats_for stats_bar' style='width:<?php echo($yay * 20);?>px'>Yes</div>
				<div class='stats_against stats_bar' style='width:<?php echo($nay * 20);?>px'>No</div>

				<div class='tools'>
					<img class='lefty interactive' src='DefaultIcon/png/32x32/check.png' alt='For' />
					<img class='lefty interactive' src='DefaultIcon/png/32x32/cancel.png' alt='Against' />
					<img class='lefty interactive' src='DefaultIcon/png/32x32/save.png' alt='Save' />
					<div class='lefty comment_counter interactive' title='Comments'><?php echo($comment_count);?></div>
				</div>
			</div>
			<div style='clear:both' />
		</div>


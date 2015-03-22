		<div class=section>
			<div class=section_data>
				<input class=section_title type=text value='<?php echo($title); ?>' />
				<textarea class=section_textarea><?php echo($content); ?></textarea>
			</div>
			<div class=stats>
				<div class='stats_for stats_bar' style='width:<?php echo($yay * 20);?>px'>Yes: <?php echo($yay);?></div>
				<div class='stats_against stats_bar' style='width:<?php echo($nay * 20);?>px'>No: <?php echo($nay);?></div>

				<div class='tools'>
					<a href='?ac=add_vote&id=<?php echo($id);?>&vote_type=yay'><img class='lefty interactive' src='DefaultIcon/png/32x32/check.png' alt='For' /></a>
					<a href='?ac=add_vote&id=<?php echo($id);?>&vote_type=nay'><img class='lefty interactive' src='DefaultIcon/png/32x32/cancel.png' alt='Against' /></a>
					<img class='lefty interactive' src='DefaultIcon/png/32x32/save.png' alt='Save' />
					<div onclick='show_comments("comments_box_<?php echo($id);?>");' class='lefty comment_counter interactive' title='Comments'><?php echo($comment_count);?></div>
					<div id='comments_box_<?php echo($id);?>' style='display:none' class="comments_box" onmouseout='hide_it(event, "comments_box_<?php echo($id);?>")'>
						2015-01-21 02:00 <br/>I think we can come to agree on this topic.<br/><br/>
						2015-02-17 16:03 <br/>I can appreciate this idea, and I see where you are comming from, but keep in mind that...<br/><br/>
						2015-03-22 16:22 <br/>I don't currently think this idea is the best but I imagine agreement is possible.<br/><br/>
						2015-03-22 17:43 <br/>Let's do it<br/><br/>
						2015-03-22 12:19 <br/>That's sounds great<br/><br/>
						<input class= comments_box_input type=text placeholder="Your comment here...">
						<input type=button value='Make Comment' />
					</div>
				</div>
			</div>
			<div style='clear:both' />
		</div>


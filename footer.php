			
			<img src='DefaultIcon/png/32x32/add.png' alt='Add' onclick='show_add_section()' />

			<div id='new_section' style='display:none'>
				<div class=section>
					<div class=stats>					
						<div class='tools'>
							<img class=lefty src='DefaultIcon/png/32x32/save.png' alt='Save' onclick='add_section()'/>
						</div>
					</div>
					
					<input id=new_section_title class=section_title type=text value='' placeholder='Section Title' />
					<br/>
					<textarea id=new_section_content class=section_textarea placeholder='Section Contents'></textarea>
					<div style='clear:both' />
				</div>
			</div>


		</div>
	</body>
</html>

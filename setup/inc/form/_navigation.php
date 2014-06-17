		<section class="navigation">
			<div class="contain">
				<ul class="navItems">
					<h2>Navigation</h2>
					<?php 

						$navItems = explode(',', $navOptions);
						$navObjects = array();

						for ($i=0; $i < sizeof($navItems) ; $i++) { 
							$temp = explode('|', $navItems[$i]);
							$newNav = array();
							$newNav['title'] = $temp[0];
							$newNav['position'] = $temp[1];
							$newNav['type'] = $temp[2];
							$newNav['parameters'] = $temp[3];
							array_push($navObjects, $newNav);
						}

						for ($i=0; $i < sizeof($navObjects); $i++) { 
							echo
							'<li class="navItem nav_'.$i.'">'.chr(13).
								'<div class="exit"></div>'.chr(13).
								'<label for="">Title:</label>'.chr(13).
								'<input value="'.$navObjects[$i]['title'].'" id="title'.$i.'" data-id="'.$i.'" type="text" />'.chr(13).
								// '<label for="">Position:</label>'.chr(13).
								// '<input value="'.$navObjects[$i]['position'].'" id="position'.$i.'" data-id="'.$i.'" type="number" name="" />'.chr(13).
								'<label for="">Type:</label>'.chr(13).
								'<select id="type'.$i.'" data-id="'.$i.'" type="select" name="">'.chr(13).
									'<option value="webpage">Webpage</option>'.chr(13).
									'<option value="marketplace">Marketplace</option>'.chr(13).
								'</select>'.chr(13).
								'<label for="">Parameters:</label>'.chr(13).
								'<input value="'.$navObjects[$i]['parameters'].'" id="parameters'.$i.'" data-id="'.$i.'" type="text" />'.chr(13).
								'<input id="hidden'.$i.'" data-id="'.$i.'" type="hidden" name="navOptions[]" value="'.$navObjects[$i]['title'].'|'.$navObjects[$i]['position'].'|'.$navObjects[$i]['type'].'|'.$navObjects[$i]['parameters'].'" />'.chr(13).
							'</li>';
						}

					?>

				</ul>
				<div>
					<button class="newNav">New Nav Item</button>
				</div>
			</div>
		</section>
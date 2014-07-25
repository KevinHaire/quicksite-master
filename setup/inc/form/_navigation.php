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
							$newNav['type'] = $temp[1];
							$newNav['target'] = $temp[2];
							$newNav['parameters'] = $temp[3];
							array_push($navObjects, $newNav);
						}

						for ($i=0; $i < sizeof($navObjects); $i++) { 
							echo
							'<li class="navItem nav_'.$i.'">'.chr(13).
								'<div class="exit"></div>'.chr(13).
								'<label for="">Title:</label>'.chr(13).
								'<input value="'.$navObjects[$i]['title'].'" id="title'.$i.'" data-id="'.$i.'" type="text" />'.chr(13).
								'<label for="">Type:</label>'.chr(13).
								'<select id="type'.$i.'" data-id="'.$i.'" type="select" name="">'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'home'?'selected': '').' value="home">Home</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'photos'?'selected': '').' value="photos">Photos</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'webpage'?'selected': '').' value="webpage">Webpage</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'events'?'selected': '').' value="events">Events</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'newsletter'?'selected': '').' value="newsletter">Newsletter</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'posts'?'selected': '').' value="posts">Posts</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'contact'?'selected': '').' value="contact">Contact</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'cart'?'selected': '').' value="cart">Shopping Cart</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'giftCertificates'?'selected': '').' value="giftCertificates">Gift Certificates</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'coupons'?'selected': '').' value="coupons">Coupons</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'reviews'?'selected': '').' value="reviews">Reviews</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'blog'?'selected': '').' value="blog">Blog</option>'.chr(13).
									'<option '.($navObjects[$i]['type'] == 'external'?'selected': '').' value="external">External Link</option>'.chr(13).
								'</select>'.chr(13).
								'<label for="">Target:</label>'.chr(13).
								'<select id="target'.$i.'" data-id="'.$i.'" type="select" name="">'.chr(13).
									'<option '.($navObjects[$i]['target'] == '_self'?'selected': '').' value="_self">_self (default)</option>'.chr(13).
									'<option '.($navObjects[$i]['target'] == '_blank'?'selected': '').' value="_blank">_blank (new tab)</option>'.chr(13).
								'</select>'.chr(13).
								'<label for="">Parameters:</label>'.chr(13).
								'<input value="'.$navObjects[$i]['parameters'].'" id="parameters'.$i.'" data-id="'.$i.'" type="text" />'.chr(13).
								'<input id="hidden'.$i.'" data-id="'.$i.'" type="hidden" name="navOptions[]" value="'.$navObjects[$i]['title'].'|'.$navObjects[$i]['type'].'|'.$navObjects[$i]['target'].'|'.$navObjects[$i]['parameters'].'" />'.chr(13).
							'</li>';
						}

					?>

				</ul>
				<div>
					<button class="newNav">New Nav Item</button>
				</div>
			</div>
		</section>
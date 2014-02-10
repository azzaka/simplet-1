<?php

	$TextTitle = 'Blog';
	$WebTitle = 'Blog';
	$Canonical = 'blog/';
	$PostType = 'Blog';
	$FeaturedImage = '';
	$Description = '';
	$Keywords = 'blog';

	require_once '../../request.php';

if(htmlentities($Request['path'], ENT_QUOTES, 'UTF-8') == $Place['path'].$Canonical) {

	require '../../header.php';

		echo '
		<div class="section group">';
		$loop = 0;
		$items = glob('*.php', GLOB_NOSORT);
		array_multisort(array_map('filemtime', $items), SORT_NUMERIC, SORT_DESC, $items);
		foreach($items as $entry) {
			if($entry!='index.php') {
				require $entry;
				if($PostType=='Post'){
					echo '
			<div class="col span_5_of_12">
				<h2><a href="'.$Sitewide_Root.$Canonical.'">' . $TextTitle . '</a></h2>
				<p class="textright faded"><small>' . date ('d/m/Y', filemtime($entry)) .'</small></p>
				<p>' . $Description . '</p>
			</div>';
					$loop = $loop + 1;
					if (is_int($loop/2)) {
						echo '
		</div>
		<div class="breaker"></div>
		<div class="section group">';
					} else {
						echo '
			<div class="col span_2_of_12"><br></div>';
					}
				}
			}
		}
		echo '
		</div>
		<div class="breaker"></div>';

	require '../../footer.php';

} ?>

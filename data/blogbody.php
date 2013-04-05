<div id="main">
	<div class="content">
		<div class="main_top">
			<?php
			if(getcwd()=='/home/content/12/10842712/html') {
			echo '<div id="pagetitle">';
				include $_SERVER['DOCUMENT_ROOT'].'/theme/title.txt';
			echo '</div>';
			} else {
			echo '<div id="pagetitle">'.substr(getcwd(),31).'</div>';
			}
			echo '<hr><p></p><hr>'


			?>
		</div>

		<div class="blog_body">
			<?php
			$src = scandir('.');
			foreach (array_reverse($src) as $path) {
				if (is_dir($path) === FALSE) {
					if ($path !== '..' and $path !== '.' and $path !== 'index.php') {
						echo("<div id='blogtitle'>" . substr($path, 12, -5) . "</div>");
						include ($path);
						echo("<div id='blogfooter'>Posted at " . substr($path, 8, 2) . ':' . substr($path, 10, 2) . " on the " . substr($path, 6, 2) . '/' . substr($path, 4, 2) . '/' . substr($path, 0, 4) . "</div>");
						echo("<hr/>");
					}
				}
			}
			?>
		</div>
		</ul>
		<div class="clear">
			&nbsp;
		</div>
	</div>
	<div id="footer">
		<p>
			This Website is running the <a href='http://www.codebundle.net/'>CodeBundle</a><a href='http://www.codebundle.net/Projects/'>CMS</a>
		</p>
	</div>

</div>

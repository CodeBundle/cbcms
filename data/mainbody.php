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
			echo '<hr>'
			?>
		</div>

		<div class="main_body">
		<?php
		include 'main.html';
		?>
		</div>
		<div class="clear">
			&nbsp;
		</div>
	</div>
	<div id="footer">
		<p>
			This Website is running the <a href='http://www.codebundle.net/'>CodeBundle</a> <a href='http://www.codebundle.net/Projects/'>CMS</a> 
		</p>
	</div>

</div>

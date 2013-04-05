<body>
	<div id="page">
		<div id="pagetop">
			<h1><a href="/">CodeBundle</a></h1>
			<div class="links">
				<ul>
					<?php
					$src=scandir($_SERVER['DOCUMENT_ROOT']);
					foreach($src as $path) {
					if(is_dir($_SERVER['DOCUMENT_ROOT'].'/'.$path)) {
					if($path!=='stats' and $path!=='data' and $path!=='..' and $path!=='.' and $path!=='sub' and $path!=='theme') {
					echo "<li><a href='/$path'>$path</a></li>";
					}
					}
					}
					?>
				</ul>
			</div>
		</div>
		<div id="header">
			<?php 
			include $_SERVER['DOCUMENT_ROOT'].'/theme/slogan.txt'
			?>
		</div>
</body>
</html>


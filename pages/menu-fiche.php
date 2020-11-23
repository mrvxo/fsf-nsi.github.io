<div id="home"<div class="post__content">
<div class="post__info">
	<div class="ARBRE"><center>
		<ul><li>
			<button><a href="#">Les cours</a></button>
			<ul><li>
			<?php  while($c = $Mat->fetch()){
				$Chapter->execute(array($c['id']))	
			?>
				<li>
					<button><a href="#"><?= $c['name']?></a></button>
					<ul><?php while($chap = $Chapter->fetch()){ ?>
						<li>
							<button><a href="#"><?= $chap['chapter']?></a></button>
						</li>
					<?php } ?>
					</ul>
				</li>	
			<?php }  ?>
			</li></ul>
		</li></ul>
	</center></div>
</div></div</dib>

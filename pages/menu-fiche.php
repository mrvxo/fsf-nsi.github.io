
<div class="ARBRE">
	<table>
		<thead>
			<svg>
				<circle  cx="50%" cy="50%" r="70"/>
				<text x="50%" y="50%" stroke="#872D62" text-anchor="middle" stroke-width="2px" dy=".3em">Première</text>	
			</svg>
		</thead>
		<tbody>
			<tr>
				<td>

					<?php  while($c = $Mat->fetch()){
						$Chapter->execute(array($c['id']))	
					?>	
					<td>
						<svg>
							<circle  cx="50%" cy="50%" r="70"/>
							<text x="50%" y="50%" stroke="#872D62" text-anchor="middle" stroke-width="2px" dy=".3em"><?= $c['name'] ?></text>	
						</svg>
						<table>
							<tbody>
							<?php while($chap = $Chapter->fetch()){ ?>
								<tr>
								<svg>
									<circle  cx="50%" cy="50%" r="70"/>
									<text x="50%" y="50%" stroke="#872D62" text-anchor="middle" stroke-width="2px" dy=".3em"><?= $chap['chapter'] ?></text>	
								</svg>
								<tr>
							<?php } ?>
							</tbody>
						</table>
					</td>
					<?php } ?>
				<td>
			</tr>
		</tbody>
	</table>
</div>
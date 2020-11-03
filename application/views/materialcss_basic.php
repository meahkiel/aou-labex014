

<div class="container">
	<div class="row">
		<div id="sidebar" class="col l3 grey lighten-1"> 
			<h3>Admin</h3>
			<ul class="navlist">
				<li class="nav-item"><a href="" class="nav-link">Pages</a></li>
				<li class="nav-item"><a href="" class="nav-link">Search</a></li>
				<li class="nav-item"><a href="" class="nav-link">Report</a></li>
			</ul>
		</div>
		<div id="main" class="col l9 grey lighten-3">
			<div class="row">
				<div class="col l12"><h2>Dashboard</h2></div>
			</div>
			<div class="row">
				<div class="col l12">
					<div class="col l4 yellow center-align">Card</div>
					<div class="col l4 blue center-align">Card</div>
					<div class="col l4 green center-align">Card</div>
				</div>
			</div>
			<div class="row">
			<div class="col l12">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Firstname</th>
							<th>Lastname</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($persons as $person) : ?>
							<tr>
								<td><?php echo $person["id"] ?></td>
								<td><?php echo $person["firstname"] ?></td>
								<td><?php echo $person["lastname"] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			
			</div>
			</div>
			
		</div>
	</div>
</div>

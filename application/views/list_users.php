<!-- Including template header -->
<?php include_once('header.php');?>

<div class="list_users-zone">

	<h3><b> List users: </b></h3>
	<!-- setting up table display with bootstrap classes -->
	<table class="table table-striped table-hover">
		<thead>
			<tr class="info">
				<th>Nr.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Website</th>
			</tr>
		</thead>
		<tbody>
		<?php 	//display all users				
				$index = 1;
				foreach ($list_users as $user) {?>
					<tr>
						<td><?= $index; ?></td>
						<td><?= $user->first_name; ?></td>
						<td><?= $user->last_name; ?></td>
						<td><?= $user->email; ?></td>
						<td><?= $user->website; ?></td>
					</tr>
<?php				$index++;
				}
			?>
		</tbody>
	</table>

</div>

<!-- Including template footer -->
<?php include_once('footer.php');?>
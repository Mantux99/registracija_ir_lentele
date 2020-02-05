<?php
include_once './app/php/php.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	
	<title>Hello, world!</title>
</head>
<body>
<section>
<h3>Tavo emailas yra: <?php print $_POST['email']; ?></h3>
<h3>Tavo slaptazodis yra: <?php print $_POST['password']?></h3>
<h3>Tavo adresas yra: <?php print $_POST['address']?></h3>
<h3>Tavo miestas yra: <?php print $_POST['city']?></h3>
<h3>Tavo salis yra: <?php print $_POST['state']?></h3>
<h3>Tavo zip yra: <?php print $_POST['zip']?></h3>


</section>
<section>
<form method="POST">
	<section class="container mt-5">
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputEmail4">Email</label>
			<input type="email" class="form-control" id="inputEmail4" name="email">
			</div>
			<div class="form-group col-md-6">
			<label for="inputPassword4">Password</label>
			<input type="password" class="form-control" id="inputPassword4" name="password">
			</div>
		</div>
		<div class="form-group">
			<label for="inputAddress">Address</label>
			<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
		</div>
		<div class="form-group">
			<label for="inputAddress2">Address 2</label>
			<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputCity">City</label>
			<input type="text" class="form-control" id="inputCity" name="city">
			</div>
			<div class="form-group col-md-4">
			<label for="inputState">State</label>
			<select id="inputState" class="form-control" name="state">

			<?php
				foreach ($countryArray as $key=>$country) {
				print "<option value=\"$key\">" . $country['name'] . "</option>";

			}
			?>

			</select>
			</div>
			<div class="form-group col-md-2">
			<label for="inputZip">Zip</label>
			<input type="text" class="form-control" id="inputZip" name="zip"  value="">
			</div>
		</div>
		<div class="form-group">
			<div class="form-check">
			<input class="form-check-input" type="checkbox" id="gridCheck">
			<label class="form-check-label" for="gridCheck">
				Check me out
			</label>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Sign in</button>
		</form>
</section>
</section>
<!-- array keys komanda padejo mums vietoje table head irasymo i html, ikelti table head tiesiogiai is php. usersData[0] nurodo, kad masyvas su name age ir t.t nesikartotu -->
			<section>
			<table>
				<thead>
				<?php foreach (array_keys($usersData[0]) as $userinfo):?> 
					<th><?php print $userinfo; ?></th>
					<?php endforeach; ?>
				</thead>
			<?php foreach ($usersData as $value):?>
<!-- idejome img taga ir i ji php print value komanda, kad rodytu nuotraukas salia esanciu asmenu prie ju informacijos -->
						<tr>
							<td><?php print $value['name'];?></td>
							<td><?php print $value['age'];?></td>
							<td><?php print $value['address'];?></td>
							<td><img src="<?php print $value['url'];?>" alt=""></td>
						</tr>

			<?php endforeach; ?>

					</table>



				
			</table>



			</section>

 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://kit.fontawesome.com/f41043dc75.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
</body>
</html>
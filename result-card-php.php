<!DOCTYPE html>
<html>
<head>
	<title>Result Card</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container-fluid">

<?php $tm = 100; ?>

	<div class="container">
	<form class="form text-center">
		<p class="h1 text-center mt-5 text-dark">Result Card</p>
		<table class="table mt-5">
			<tr>
				<th class="text-left">Name:</th>
				<th class="text-left text-primary">Hamza Aamir</th>
				<th class="text-left">Class:</th>
				<th class="text-left text-primary">BSCS (E)</th>
			</tr>
			<tr>
				<th class="text-left">Roll no.</th>
				<th class="text-left text-primary">191822</th>
				<th class="text-left">Semester:</th>
				<th class="text-left text-primary">3rd</th>
			</tr>
		</table>
		<table class="table mt-5">
			<tr class="bg-dark text-light">
				<th>Subject</th>
				<th>Total Marks</th>
				<th>Obtained Marks</th>
				<th>Percentage</th>
				<th>Status</th>
			</tr>
			<tr>
				<th>Physics</th>
				<th><?php echo "$tm"; ?></th>
				<th><input type="number" name="phy" style="border: none;text-align: center;" class="w-50" max="100" min="0" onkeydown="return false" value="0"></th>
				<th><?php $phy = @$_GET['phy']; echo (($phy / $tm)*100); ?></th>
				<?php if ($phy = @$_GET['phy'] >= 33) {
					echo ('<th class="text-success">Pass</th>');
				} else { echo ('<th class="text-danger">Fail</th>'); } ?>
			</tr>
			<tr>
				<th>Mathematics</th>
				<th><?php echo "$tm"; ?></th>
				<th><input type="number" name="math" style="border: none;text-align: center;" class="w-50" maxlength="3" max="100" onkeydown="return false" value="0"></th>
				<th><?php $math = @$_GET['math']; echo (($math / $tm)*100); ?></th>
				<?php if ($math = @$_GET['math'] >= 33) {
					echo ('<th class="text-success">Pass</th>');
				} else { echo ('<th class="text-danger">Fail</th>'); } ?>
			</tr>
			<tr>
				<th>Computer</th>
				<th><?php echo "$tm"; ?></th>
				<th><input type="number" name="comp" style="border: none;text-align: center;" class="w-50" max="100" onkeydown="return false" value="0"></th>
				<th><?php $comp = @$_GET['comp']; echo (($comp / $tm)*100); ?></th>
				<?php if ($comp = @$_GET['comp'] >= 33) {
					echo ('<th class="text-success">Pass</th>');
				} else { echo ('<th class="text-danger">Fail</th>'); } ?>
			</tr>
			<tr>
				<th>English</th>
				<th><?php echo "$tm"; ?></th>
				<th><input type="number" name="eng" style="border: none;text-align: center;" class="w-50" max="100" onkeydown="return false" value="0"></th>
				<th><?php $eng = @$_GET['eng']; echo (($eng / $tm)*100); ?></th>
				<?php if ($eng = @$_GET['eng'] >= 33) {
					echo ('<th class="text-success">Pass</th>');
				} else { echo ('<th class="text-danger">Fail</th>'); } ?>
			</tr>
			<tr>
				<th>Total</th>
				<th><?php $ltm = $tm*4; echo "$ltm"; ?></th>
				<th><?php sum(); ?></th>
				<th><?php percentage(); ?></th>
				<?php if (($phy >= 33)and($math >= 33)and($comp >= 33)and($eng >= 33)) {
					echo ('<th class="text-success">Congratulations!<br>You have passed the exam.</th>');
				} else { echo ('<th class="text-danger">Better luck next time!</th>'); } ?>
			</tr>
		</table>
		<button type="submit" name="result" class="btn btn-outline-dark form-control-lg mt-5 mb-5">Click here to check result</button>
	</form>



<?php  
function sum(){

	$phy = @$_GET['phy'];
	$math = @$_GET['math'];
	$comp = @$_GET['comp'];
	$eng = @$_GET['eng'];
	global $total;
	if (isset($_GET["result"])== true) {
		$total = $phy + $math + $comp + $eng;
	echo ($total);
}


}
function percentage(){

	global $ltm;
	global $percent;
	global $total;
		if (isset($_GET["result"])== true) {
	
	$percent = ($total / $ltm);
	echo ($percent*100);
}

}

?>

</div>
</div>
</body>
</html>
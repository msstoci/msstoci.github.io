<?php 

if(isset($_GET['x'])) {
  
  $x = $_GET['x'];
  
  $y = $_GET['y'];
  
  $a = 30;
  $b = 35;
  $c = 40;
  $d = 45;
  $e = 50;

  if($x <= $a) {
    $sepi = 1;
    $normal = 0;
    $padat  = 0;
  } elseif ($x > $c && $x < $c) {
    $sepi = ($c - $x) / ($c - $a);
    $normal = ($x - $a) / ($c - $a);
    $padat  = 0;
  } elseif ($x > $c && $x < $e) {
    $sepi = 0;
    $normal = ($e - $x) / ($e - $c);
    $padat  = ($x - $c) / ($e - $c);
  } elseif ($x >= $e) {
    $sepi = 0;
    $normal = 0;
    $padat  = 1;
  }


  $f = 15;
  $g = 30;
  $h = 45;
  $i = 60;
  $j = 75;
  $k = 90;
  $l = 105;

  if($y < $f) {
    $cepat  = 1;
    $sedang = 0;
    $lama   = 0;
  } elseif ($y >= $f && $y <= $i) {
    $cepat  = round(($i - $y) / ($i - $f), 1);
    $sedang = round(($y - $f) / ($i - $f), 1);
    $lama   = 0;
  } elseif ($y > $i && $y <= $l) {
    $cepat  = 0;
    $sedang = round(($l - $y) / ($l - $i), 1);
    $lama   = round(($y - $i) / ($l - $i), 1);
  } elseif ($y > $l) {
    $cepat  = 0;
    $sedang = 0;
    $lama   = 1;
  } 
  
?>

	<div class="row">
        <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Panel success</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Sepi</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $sepi; ?>" placeholder="Nilai Sepi">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Normal</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $normal; ?>" placeholder="Nilai Normal">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Padat</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $padat; ?>" placeholder="Nilai Padat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Cepat</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $cepat; ?>" placeholder="Nilai Cepat">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Sedang</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $sedang; ?>" placeholder="Nilai Sedang">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-6 control-label">Lama</label>
                                <div class="col-lg-10">
                                    <input type="text" disabled="true" class="form-control" value="<?php echo $lama; ?>" placeholder="Nilai Lama">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Rule Base</h3>
                </div>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sepi</th>
                            <th>Normal</th>
                            <th>Padat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Cepat</th>

      				<?php if($cepat != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Lengang</td>
  					<?php else : ?>
 					<td>Jam Lengang</td>
  					<?php endif; ?>

      				<?php if($cepat != 0 && $normal != 0) : ?>
      				<td class="success">Jam Lengang</td>
  					<?php else : ?>
 					<td>Jam Lengang</td>
  					<?php endif; ?>

      				<?php if($cepat != 0 && $padat != 0) : ?>
      				<td class="success">Jam Lengang</td>
  					<?php else : ?>
 					<td>Jam Lengang</td>
  					<?php endif; ?>
    			</tr>
    			<tr>
      				<th>Sedang</th>

      				<?php if($sedang != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Lengang</td>
  					<?php else : ?>
 					<td>Jam Lengang</td>
  					<?php endif; ?>

	      			<?php if($sedang != 0 && $normal != 0) : ?>
      				<td class="success">Jam Sibuk</td>
  					<?php else : ?>
 					<td>Jam Sibuk</td>
  					<?php endif; ?>

	      			<?php if($sedang != 0 && $padat != 0) : ?>
      				<td class="success">Jam Sibuk</td>
  					<?php else : ?>
 					<td>Jam Sibuk</td>
  					<?php endif; ?>
    			</tr>
		    	<tr>	
      				<th>Lama</th>

			      	<?php if($lama != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Sibuk</td>
  					<?php else : ?>
 					<td>Jam Sibuk</td>
  					<?php endif; ?>

      				<?php if($lama != 0 && $normal != 0) : ?>
      				<td class="success">Jam Sibuk </td>
  					<?php else : ?>
 					<td>Jam Sibuk</td>
  					<?php endif; ?>

      				<?php if($lama != 0 && $padat != 0) : ?>
      				<td class="success">Jam Sibuk</td>
  					<?php else : ?>
 					<td>Jam Sibuk</td>
  					<?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

	<div class="row">
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Min - Max</h3>
                </div>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sepi</th>
                            <th>Normal</th>
                            <th>Padat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Cepat</th>

      				<?php if($cepat != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Lengang <br/> NK : <?php echo min($cepat, $sepi) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

      				<?php if($cepat != 0 && $normal != 0) : ?>
      				<td class="success">Jam Lengang <br/> NK : <?php echo min($cepat, $normal) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

      				<?php if($cepat != 0 && $padat != 0) : ?>
      				<td class="success">Jam Lengang <br/>NK : <?php echo min($cepat, $padat) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>
    			</tr>
    			<tr>
      				<th>Sedang</th>

      				<?php if($sedang != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Lengang <br/>NK : <?php echo min($sedang, $sepi) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

	      			<?php if($sedang != 0 && $normal != 0) : ?>
      				<td class="success">Jam Sibuk <br/>NK : <?php echo min($sedang, $normal) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

	      			<?php if($sedang != 0 && $padat != 0) : ?>
      				<td class="success">Jam Sibuk <br/>NK : <?php echo min($sedang, $padat) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>
    			</tr>
		    	<tr>	
      				<th>Lama</th>

			      	<?php if($lama != 0 && $sepi != 0) : ?>
      				<td class="success">Jam Sibuk <br/>NK : <?php echo min($lama, $sepi) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

      				<?php if($lama != 0 && $normal != 0) : ?>
      				<td class="success"> Jam Sibuk <br/>NK : <?php echo min($lama, $normal) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>

      				<?php if($lama != 0 && $padat != 0) : ?>
      				<td class="success">Jam Sibuk <br/> NK : <?php echo min($lama, $padat) ?></td>
  					<?php else : ?>
 					<td>-</td>
  					<?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
		<dir class="col-lg-6">

      				<?php if($cepat != 0 && $sepi != 0) : ?>
					NK = Jam Lengang <?php $maxnyaminx = min(array_filter([$cepat, $sepi]));
					echo min(array_filter([$cepat, $sepi])); ?> ∨
  					<?php endif; ?>

      				<?php if($cepat != 0 && $normal != 0) : ?>
					NK = Jam Lengang <?php $maxnyaminx = min(array_filter([$cepat, $normal]));
					echo min(array_filter([$cepat, $normal])); ?> v
  					<?php endif; ?>

      				<?php if($cepat != 0 && $padat != 0) : ?>
					NK = Jam Lengang <?php $maxnyaminx = min(array_filter([$cepat, $padat]));
					echo min(array_filter([$cepat, $padat])); ?> v
  					<?php endif; ?>

      				<?php if($sedang != 0 && $sepi != 0) : ?>
					NK = Jam Lengang <?php $maxnyaminx = min(array_filter([$sedang, $sepi]));
					echo min(array_filter([$sedang, $sepi])); ?> v
  					<?php endif; ?>
					<br />

	      			<?php if($sedang != 0 && $normal != 0) : ?>
      				NK = Jam Sibuk <?php $maxnyaminy = min(array_filter([$sedang, $normal]));
					echo min(array_filter([$sedang, $normal])); ?> v
  					<?php endif; ?>

	      			<?php if($sedang != 0 && $padat != 0) : ?>
      				NK = Jam Sibuk <?php $maxnyaminy = min(array_filter([$sedang, $padat]));
					echo min(array_filter([$sedang, $padat])); ?> v
  					<?php endif; ?>

			      	<?php if($lama != 0 && $sepi != 0) : ?>
      				NK = Jam Sibuk <?php $maxnyaminy = min(array_filter([$lama, $sepi]));
					echo min(array_filter([$lama, $sepi])); ?><br />
  					<?php endif; ?>

      				<?php if($lama != 0 && $normal != 0) : ?>
      				NK = Jam Sibuk <?php $maxnyaminy = min(array_filter([$lama, $normal]));
					echo min(array_filter([$lama, $normal])); ?><br />
  					<?php endif; ?>

      				<?php if($lama != 0 && $padat != 0) : ?>
      				NK = Jam Sibuk <?php $maxnyaminy = min(array_filter([$lama, $padat]));
					echo min(array_filter([$lama, $padat])); ?><br />
  					<?php endif; ?>

					<hr />

					NK = Jam Lengang <?php 
					$maxlastx = min(array_filter([$maxnyaminx])); 
					echo $maxlastx; ?><br />

  					NK = Jam Sibuk <?php 
  					$maxlasty = min(array_filter([$maxnyaminy])); 
  					echo $maxlasty; ?><br />

		</dir>
    </div>

<?php } ?>

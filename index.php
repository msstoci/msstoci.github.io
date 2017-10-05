<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="M. Anshori">

    <title>Fuzzy Logic By M. Anshori</title>

    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">

</head>

<body class="theme-light" id="page-top">

    <nav class="navbar-default navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Fuzzy Logic</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Mamdani <span class="sr-only">(current)</span></a></li>
                    <li><a href="segano.php">Segano</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <br><br><br>
                <div class="row">
                    <div class="col-md-6 ">
                        <div id="chart1"></div>
                    </div>
                    <div class="col-md-6 ">
                        <div id="chart2"></div>
                    </div>
                </div>

<hr>

                <form class="form-horizontal">
                    <fieldset>

<?php if(isset($_GET['x'])) {
  
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
  } elseif ($x > $a && $x < $c) {
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
    $cepat  = ($i - $y) / ($i - $f);
    $sedang = ($y - $f) / ($i - $f);
    $lama   = 0;
  } elseif ($y > $i && $y <= $l) {
    $cepat  = 0;
    $sedang = ($l - $y) / ($l - $i);
    $lama   = ($y - $i) / ($l - $i);
  } elseif ($y > $l) {
    $cepat  = 0;
    $sedang = 0;
    $lama   = 1;
  } 
  
?>

                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Input</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Banyak Kendaraan</label>
                                                <div class="col-lg-10">
                                                    <input required type="number" max="60" name="x" class="form-control" value="<?php echo $x; ?>" placeholder="Banyak Kendaraan">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-lg-2 control-label">Lama Lampu Hijau</label>
                                                <div class="col-lg-10">
                                                    <input required type="number" max="120" name="y" class="form-control" value="<?php echo $y; ?>" placeholder="Lama Lampu Hijau">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-block btn-primary">Hitung</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </fieldset>
                </form>

                <?php } else { ?>

                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                                <div class="panel panel-info">
                                  <div class="panel-heading">
                                  <h3 class="panel-title">Input</h3>
                                  </div>
                                  <div class="panel-body">
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-2 control-label">Banyak Kendaraan</label>
                                        <div class="col-lg-10">
                                            <input required type="number" max="60" name="x" class="form-control" value="<?php echo $x; ?>" placeholder="Banyak Kendaraan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Lama Lampu Hijau</label>
                                        <div class="col-lg-10">
                                            <input required type="number" max="120" name="y" class="form-control" value="<?php echo $y; ?>" placeholder="Lama Lampu Hijau">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-12">
                                        <button type="submit" class="btn btn-block btn-primary">Hitung</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>

                    <?php } ?>

                        <?php include "proses.php";?>

                            <footer class="footer">
                                <div class="container">
                                    <p class="pull-left">&copy; M. Anshori 2017</p>
                                    <p class="pull-right">linear Graphics Paowered by <a href="http://www.shieldui.com/" rel="external">Shield UI</a></p>
                                </div>
                            </footer>
                            </div>

            </div>
        </div>

     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#chart1").shieldChart({
                theme: "light",
                primaryHeader: {
                    text: "GDP Changes per region"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ["0", "30", "40", "50", "60"]
                },
                axisY: {
                  title: {
                    text: "nilai μ"
                  },  
                },
                dataSeries: [{
                    seriesType: 'line',
                    collectionAlias: "Sepi",
                    data: [1, 1, 0, 0, 0]
                }, {
                    seriesType: 'line',
                    collectionAlias: "Normal",
                    data: [0, 0, 1, 0, 0]
                }, {
                    seriesType: 'line',
                    collectionAlias: "Padat",
                    data: [0, 0, 0, 1, 1]
                }]
            });
            $("#chart2").shieldChart({
                theme: "light",
                primaryHeader: {
                    text: "GDP Changes per region"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ["0", "15", "60", "105", "120"]
                },
                axisY: {
                  title: {
                    text: "nilai μ"
                  },  
                },
                dataSeries: [{
                    seriesType: 'line',
                    collectionAlias: "Cepat",
                    data: [1, 1, 0, 0, 0]
                }, {
                    seriesType: 'line',
                    collectionAlias: "Sedang",
                    data: [0, 0, 1, 0, 0]
                }, {
                    seriesType: 'line',
                    collectionAlias: "Lama",
                    data: [0, 0, 0, 1, 1]
                }]
            });
            $("#chart3").shieldChart({
                theme: "light",
                primaryHeader: {
                    text: "Min - Max"
                },
                exportOptions: {
                    image: false,
                    print: false
                },
                axisX: {
                    categoricalValues: ["0", "<?php echo $x ?>", "<?php echo $x ?>", "100"]
                },
                axisY: {
                  title: {
                    text: "nilai μ"
                  },  
                },
                dataSeries: [{
                    seriesType: 'line',
                    collectionAlias: "Cepat",
                    data: [1, 1, 0, 0]
                }, {
                    seriesType: 'line',
                    collectionAlias: "Lama",
                    data: [0, 0, 1, 1]
                }, {
                    seriesType: 'area',
                    collectionAlias: "Cepat",
                    data: [0.5, 0.5, 0, 0]
                }, {
                    seriesType: 'area',
                    collectionAlias: "Lama",
                    data: [0, 0, 0, 0.4]
                }]
            });
        });
    </script>

  </body>

</html>

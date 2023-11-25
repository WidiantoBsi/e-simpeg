<br>
<?php
$konek = mysqli_connect("localhost","root","","db_pegawai");
$conecc = mysqli_connect("localhost","root","","db_pegawai");
$conec = mysqli_connect("localhost","root","","db_pegawai");
?>
        <div class="row">
            <div class="col-xs-14 col-md-9 col-lg-4">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked female-user"><use xlink:href="#stroked-female-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_user"; 
                                $query = mysqli_query($konek, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " User";
                                mysqli_free_result($query); 
                                mysqli_close($konek);
                                ?>
                            </div>
                            <div class="text-muted">Jumlah User</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-4">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_pensiun"; 
                                $query = mysqli_query($conecc, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " Pensiun";
                                mysqli_free_result($query); 
                                mysqli_close($conecc);
                                ?>
                            </div>
                            <div class="text-muted">Laporan Pensiun</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_cuti"; 
                                $query = mysqli_query($conec, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " Cuti";
                                mysqli_free_result($query); 
                                mysqli_close($conec);
                                ?>
                            </div>
                            <div class="text-muted">Master Cuti</div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart Pegawai</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="160" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
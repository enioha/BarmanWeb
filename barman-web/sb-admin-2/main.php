<!DOCTYPE html>
<?php include 'layout.php'; ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
              <div class="col-lg-12">
                 <h2 class="page-header">Dashboard</h2>
              </div>
            <!-- Alterado Enio -->
  <?php

  $CountHosts = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-server|wc -l');
 // echo "Hosts Configurados: $CountHosts <br>";

  $ListServer = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-server|awk \'{print $1}\' ');

  $array = explode("\n", $ListServer);



     foreach ($array as $value) {
     if (empty($value)) {

      } else {
       $status_pg = shell_exec ('/usr/bin/sudo -u barman -S /usr/bin/barman check '.$value.' |grep PostgreSQL|awk \'{print $2}\' ');
       $status_backup = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Last available backup" |awk \'{print $4}\' ');
         
  ?>


  <div class="col-lg-3 col-md-6">
              
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i><img src="img/postgresql.png" width="60px" height="60px" align="center"></i> 
                                </div> 
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                      <?php echo $status_pg; ?>
                                    </div>
                                    <div><?php echo $value; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="detalhes.php?host=<?php echo $value; ?>" >
                            <div class="panel-footer">
                                <span class="pull-left">View Detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


 <?php } };?>
 
            </div>
                <!-- /.col-lg-12 -->
        </div>
            <!-- /.row -->
        <!-- /#page-wrapper -->



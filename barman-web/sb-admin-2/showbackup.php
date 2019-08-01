<!DOCTYPE html>
<?php 
  include 'layout.php';
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  

  $CountHosts = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-server|wc -l');
//  echo "Hosts Configurados: $CountHosts <br>";
  $ListServer = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-server|awk \'{print $1}\' ');
  //echo $ListServer;
  $array = explode("\n", $ListServer);
  //var_dump($array);
?>

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Relatorio de Backup por Host</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                        <tr>
                          <th>Host</th>
                          <th>Ultimo Backup</th>
                          <th>Segmento WAL atual</th>
                          <th>Ultimo Seg. WAL enviado</th>
                          <th></th>
                        </tr>
                      </thead>
                     <tbody>

<?
  foreach ($array as $value) {
    if (empty($value)) {
                            
       } else {
          $segwal = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Current WAL segment"|cut -d: -f 2 ');
          $lastbackup = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Last available backup"|cut -d: -f 2 ');
          $arqstatus= shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Archive status:"|cut -d: -f 2|awk \'{print $5}\' ');
          $showbkp = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman show-backup '.$value.' '.$lastbackup.' ');

         echo "<tr>";
         echo "<td>$value</td>";
         echo "<td><button class='btn btn-primary btn-small' data-toggle='modal' data-target='#myModal_$value'>$lastbackup</button></td>";
         echo "<td>$segwal</td>";
         echo "<td>$arqstatus</td>";
         echo "<td align='center'><a href='listfiles.php?host=$value&backupid=$lastbackup'><button type='button' class='btn btn-info btn-sm'>Files</button>";  
         echo "</tr>"; ?>

         <!-- Modal -->
<div class="modal fade" id="myModal_<?php echo $value; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">barman show-backup <?php echo "$value $lastbackup"; ?></h4>
      </div>
      <div class="modal-body">
        <?php echo nl2br($showbkp); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  
<?    } 
  }; ?>
                    </tbody>
               </table>
          </div>

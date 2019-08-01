<!DOCTYPE html>
<?php 
  include 'layout.php';
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  
$host = $_GET['host'];
$backupid = $_GET['backupid'];

//  $CountHosts = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-server|wc -l');
//  echo "Hosts Configurados: $CountHosts <br>";
    $ListWal = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman list-files '.$host.' '.$backupid.' --target wal');
  //echo $ListServer;
    $array = explode("\n", $ListWal);
  //var_dump($array);

?>

<!-- Page Content --> 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">List de Arquivos Wal - <?php echo "$host [$backupid]"; ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                        <tr>
                          <th>Data/Hora</th>
                          <th>Wal</th>
                        </tr>
                      </thead>
                     <tbody> 

<? 
  foreach ($array as $value) {
    if (empty($value)) {
                            
       } else {
   //       $segwal = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Current WAL segment"|cut -d: -f 2 ');
   //       $lastbackup = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Last available backup"|cut -d: -f 2 ');
   //       $arqstatus= shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$value.' | grep "Archive status:"|cut -d: -f 2|awk \'{print $5}\' ');
   //       $showbkp = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman show-backup '.$value.' '.$lastbackup.' ');
            $stat_datetime = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/stat '.$value.' |grep Change|awk \'{print $2,$3}\' '); 
         echo "<tr class='gradeA'>";
         echo "<td style='color:#1E90FF;'>$stat_datetime</td>";
         echo "<td>$value</td>";
         echo "</tr>"; ?>
  

<? } }; ?> 
                    </tbody>
               </table>
          </div> 

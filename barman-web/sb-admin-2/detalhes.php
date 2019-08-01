<!DOCTYPE html>
<?php include 'layout.php'; ?>
<?php $host = $_GET['host']; ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Status Backup - <?php echo $host; ?></h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php 
              $server = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$host.' | grep "Server" ');
              $segwal = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$host.' | grep "Current WAL segment"|cut -d: -f 2 ');
              $firstbackup = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$host.' | grep "First available backup"|cut -d: -f 2 ');
              $lastbackup = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$host.' | grep "Last available backup"|cut -d: -f 2 ');
              $description = shell_exec('/usr/bin/sudo -u barman -S /usr/bin/barman status '.$host.' | grep "Description:"|cut -d: -f 2 ');
              
             ?>
             <ul>
             <p><? echo $server; ?> </p>
             </ul>
             <ul>
               <li>  <? echo "Descricao:<font color='#425FB2'>$description</font>"; ?><br> </li>
               <li>  <? echo "Segmento WAL Corrent: $segwal"; ?></li>
               <li>  <? echo "Primeiro backup disponivel: $firstbackup"; ?></li>
               <li>  <? echo "Ultimo backup disponivel: $lastbackup"; ?></li>
             </ul> 
        <!-- /#page-wrapper -->


<!-- alterado -->


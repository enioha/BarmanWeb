<!DOCTYPE html>
<?php 
      include 'layout.php'; 
      require_once("tail/class.tail.php");
      //error_reporting(E_ALL);
      //ini_set("display_errors", 1);
?>

<head> <meta http-equiv="refresh" content="5"> </head>       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Log Barman</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ultimas 10 linhas</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" data-row-style="rowStyle">
                                    <tbody>
                                        <tr>
                                            <td>
                                              <?php 
                                             $tailfile = isset($_REQUEST['file'])?urldecode($_REQUEST['file']):"/var/log/barman/barman.log";
                                             $mytail = new tail($tailfile);


                                             if (isset($_REQUEST['grep'])) {
                                                  $mytail->setGrep($_REQUEST['grep']);
                                             }

                                             if (isset($_REQUEST['show']) && is_numeric($_REQUEST['show'])){
                                             $mytail->setNumberOfLines($_REQUEST['show']);
                                             }

                                             echo $mytail->output(HIGHLIGHT_BOLD+BREAKS); ?>
                                           </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


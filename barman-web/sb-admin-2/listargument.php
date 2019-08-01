<!DOCTYPE html>
<?php include 'layout.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Lista de Comandos</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Argumentos Disponiveis
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Argumento</th>
                                            <th>Descricao</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>cron</td>
                                            <td>Executar tarefas de manutencao</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>list-server</td>
                                            <td> Lista de servidores disponiveis, com informacoes uteis  </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>show-server</td>
                                            <td>Mostrar todos os parâtros de configuracoes para o especificado servidor</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>status</td>
                                            <td>Mostra informacoes online e status do servidor PostgreSQL</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>check</td>
                                            <td>Verifica se a configuracao do servidor esta funcionando</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>diagnose</td>
                                            <td>Comando de diagnostico(suporte e deteccao de problemas)</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>backup</td>
                                            <td>Faz backup completo do servidor PostgreSQL</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>list-backup</td>
                                            <td>Lista o(s) backup(s) disponiveis para o servidor Postgres(suporte p/ todos)</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>show-backup</td>
                                            <td>Este metodo mostra uma unica informacao de backup</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>list-files</td>
                                            <td>Lista todos os arquivos de um unico backup</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>recover</td>
                                            <td>Recupera um servidor(PostgreSQL) em um determinado time ou xid</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>delete</td>
                                            <td>deleta o backup</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>rebuild-xlogdb</td>
                                            <td>Recriar o banco de dados de arquivos WAL apartir do conteudo do disco</td>
                                        </tr>

 
                                          
                                    </tbody>
                                </table>
                            </div>


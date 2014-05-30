<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                    
                    <a href="<?php echo base_url();?>agregar_usuario" class="btn btn-primary">Agregar Usuario</a><br><br> 
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>                                    
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Celular</th>
                                            <th>Email</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                
                                        <?php
                                            foreach($usuarios as $usuario){
                                                ?>
                                                <tr>
                                                    <td><?=$usuario['nombres']?></td>
                                                    <td><?=$usuario['apellidos']?></td>
                                                    <td><?=$usuario['telefono']?></td>
                                                    <td><?=$usuario['celular']?></td>
                                                    <td><?=$usuario['email']?></td>
                                                    <td><a href="<?php echo base_url('editar_usuario').'/'.$usuario['codusr'];?>" type="button" class="btn btn-outline btn-info">Editar</a></td>
                                                    <td><a href="<?php echo base_url('eliminar_usuario').'/'.$usuario['codusr'];?>" type="button" class="btn btn-outline btn-danger">Eliminar</a></td>
                                                </tr>
                                                <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
            "ordering": false
        });
    });
    </script>

</body>

</html>

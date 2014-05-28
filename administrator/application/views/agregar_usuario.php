<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Agregar Usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <form role="form" action="<?php echo base_url()?>agregar_usuario" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Nombres" name="nombres">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Apellidos" name="apellidos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Teléfono" name="telefono">
                            </div>
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Celular" name="celular">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Contraseña" name="contrasena" type="password">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">                            
                                <div class="form-group col-lg-3">
                                    <label>Cargo</label>
                                    <select class="form-control" name="cargo">
                                        <?php
                                            foreach($cargos as $cargo){
                                            ?>
                                            <option value="<?=$cargo['codcarg']?>"><?=$cargo['nombre']?></option>
                                            <?php
                                            }
                                        ?>                                        
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Privilegio</label>
                                    <select class="form-control" name="privilegio">
                                        <?php
                                            foreach($privilegios as $privilegio){
                                            ?>
                                            <option value="<?=$privilegio['codprivilegio']?>"><?=$privilegio['nombre']?></option>
                                            <?php
                                            }
                                        ?>                                        
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Empresa</label>
                                    <select class="form-control" name="empresa">
                                        <?php
                                            foreach($empresas as $empresa){
                                            ?>
                                            <option value="<?=$empresa['codEmp']?>"><?=$empresa['nombre']?></option>
                                            <?php
                                            }
                                        ?>                                        
                                    </select>
                                </div>                            
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </div>
                    </form>
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
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>

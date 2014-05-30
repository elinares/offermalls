<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Usuario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <form role="form" action="<?php echo base_url('editar_usuario').'/'.$info_usuario['codusr'];?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Nombres" name="nombres" value="<?=$info_usuario['nombres']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Apellidos" name="apellidos" value="<?=$info_usuario['apellidos']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Teléfono" name="telefono" value="<?=$info_usuario['telefono']?>">
                            </div>
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Celular" name="celular" value="<?=$info_usuario['celular']?>">
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="form-group col-lg-3">                            
                                <input class="form-control" placeholder="Email" name="email"  value="<?=$info_usuario['email']?>">
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
                                                if($cargo['codcarg']==$info_usuario['codcarg']){
                                                    ?>                                            
                                                    <option value="<?=$cargo['codcarg']?>" selected><?=$cargo['nombre']?></option>
                                                    <?php
                                                }else{
                                                    ?>                                            
                                                    <option value="<?=$cargo['codcarg']?>"><?=$cargo['nombre']?></option>
                                                    <?php
                                                }                                            
                                            }
                                        ?>                                        
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Privilegio</label>
                                    <select class="form-control" name="privilegio">
                                        <?php
                                            foreach($privilegios as $privilegio){
                                                 if($privilegio['codprivilegio']==$info_usuario['codprivilegio']){
                                                    ?>                                            
                                                    <option value="<?=$privilegio['codprivilegio']?>" selected><?=$privilegio['nombre']?></option>
                                                    <?php
                                                }else{
                                                    ?>                                            
                                                    <option value="<?=$privilegio['codprivilegio']?>"><?=$privilegio['nombre']?></option>
                                                    <?php
                                                }
                                            }
                                        ?>                                        
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Empresa</label>
                                    <select class="form-control" name="empresa">
                                        <?php
                                            foreach($empresas as $empresa){
                                                 if($empresa['codEmp']==$info_usuario['codemp']){
                                                    ?>                                            
                                                    <option value="<?=$empresa['codEmp']?>" selected><?=$empresa['nombre']?></option>
                                                    <?php
                                                }else{
                                                    ?>                                            
                                                    <option value="<?=$empresa['codEmp']?>"><?=$empresa['nombre']?></option>
                                                    <?php
                                                }
                                            }
                                        ?>                                        
                                    </select>
                                </div>                            
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
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

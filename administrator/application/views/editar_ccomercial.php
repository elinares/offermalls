<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Centro Comercial</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <form role="form" action="<?php echo base_url('editar_ccomercial').'/'.$info_ccomercial['codccomerc'];?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Nombre" name="nombre" value="<?=$info_ccomercial['nombre']?>">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-lg-3">
                                    <label>Municipio</label>
                                    <select class="form-control" name="municipio">
                                        <?php                                        
                                            foreach($municipios as $municipio){
                                                if($municipio['codciudad']==$info_ccomercial['codciudad']){
                                                    ?>                                            
                                                    <option value="<?=$municipio['codciudad']?>" selected><?=$municipio['nombre_ci']?></option>
                                                    <?php
                                                }else{      
                                                    ?>                                            
                                                    <option value="<?=$municipio['codciudad']?>"><?=$municipio['nombre_ci']?></option>
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

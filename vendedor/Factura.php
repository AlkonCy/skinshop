<?php
require_once "../config/conexion.php";

include("includes/header.php");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Factura</h1>
    <a href="./facturacion.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirCategoria"><i class="fas fa-plus fa-sm text-white-50"></i> Crear Factura</a>
	 <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo Pedido</a>
</div>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="orders/css/style.css">
<script type="text/javascript" src="orders/js/script.js"></script>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <div class="table-filter">
				<div class="row">
                    
                    <div class="col-sm-9">
						<button type="button" class="btn btn-primary"><i class="fa fa-search" onclick="load(1);"></i></button>
						<div class="filter-group">
							<label>Nombre</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="filter-group">
							<label>Ubicación</label>
							<select class="form-control" id="location" onchange="load(1);"> 
								<option value="">Todos</option>
								<option value="Colombia">Colombia</option>
								<option value="Argentina">Argentina</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Chile">Chile</option>								
							</select>
						</div>
						<div class="filter-group">
							<label>Estado</label>
							<select class="form-control" id="status" onchange="load(1);">
								<option value="">Todos</option>
								<option value="Entregado">Entregado</option>
								<option value="Enviada">Enviada</option>
								<option value="Pendiente">Pendiente</option>
								<option value="Cancelado">Cancelado</option>
							</select>
						</div>
						<span class="filter-icon"><i class="fa fa-filter"></i></span>
                    </div>

                    <div class="col-sm-3 text-right">
						<div class="show-entries">
							<span>Mostrar</span>
							<select class="form-control" id="per_page" onchange="load(1);">
								<option>5</option>
								<option>10</option>
								<option selected="">15</option>
								<option>20</option>
							</select>
							
						</div>
					</div>
					<div class="datos_ajax">

		</div>	


                </div>
			</div>
        </div>
    </div>
	                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM orders");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        
                    <?php } ?>
                </tbody>
</div>
<div id="productos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary text-white">
                <h5 class="modal-title" id="title">Crear Pedido</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="on">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="location">Localizacion</label>
                                <input id="location" class="form-control" type="text" name="location" placeholder="Localizacion" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="total">Total</label>
                                <input id="total" class="form-control" type="text" name="total" placeholder="total" required>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado">Estado de envio</label>
                                <select id="estado" class="form-control" name="estado" required>
                                    <?php
                                    $categorias = mysqli_query($conexion, "SELECT * FROM estado");
                                    foreach ($categorias as $cat) { ?>
                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['estado']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
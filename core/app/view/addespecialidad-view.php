<!-- Main content -->
<section class="content">
	<div class="box">
		<!-- CABEZA DE LA CAJA -->
		<div class="box-header with-border">

			<h3 class="text-center">Agregar Especialidad</h3>

		</div>
		<!-- CUERPO DE LA CAJA -->
		<div class="box-body">

			<form class="form-horizontal" method="POST" action="index.php?action=addespecialidad">

				<!-- CAMPO NOMBRE -->
				<div class="form-group">

					<label class="control-label col-sm-2" for="ci">Nombre Especialidad:  </label>

					<div class="col-sm-10">

						<input type="text" class="form-control" name="nombre_espe" id="nombre_espe" placeholder="Ingrese nombre especialidad" maxlength="30" required>

					</div>

				<!-- CAMPO NOMBRE -->

				</div>

				
				
				<!--=============================================
				=            Section comment block            =
				=============================================-->
					

				<div class="form-group"> 

					<div class="col-sm-offset-2 col-sm-10">

						<button type="submit" class="btn btn-primary btn-md">Agregar Especialidad</button>
						<a href="index.php?view=especialidad" type="button" class="btn btn-default btn-md">Cancelar</a>
					</div>
				</div>

			</form>
		</div>
		<!-- /.box-body -->
		
	</div>
	<!-- /.box -->

</section>
<!-- Caja-box-->
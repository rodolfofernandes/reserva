<?php 
require"../inicialize.php";
require"../header.php"; ?>

<br><br>

<form method="POST" action="teste.php">
	<div class="container-fluid well">
		<h3 class="col-md-12">Cadastro de Fluxo de trabalho<hr></h3>


		<div id="txtStartDay" class="form-group col-md-3">
		<label for="txtStartDay"  >Inicio de Expediente</label>
			<div class="input-group clockpicker">
 				<span class="input-group-addon">
        		<span class="glyphicon glyphicon-time" style="color: green;"></span>
   				</span>
    			<input type="text" title="Digite o começo do Expediente" class="form-control" value="09:30">
   
			</div>
		</div>
		<div class="col-md-1">
		</div>
		<div id="txtStartDay" class="form-group col-md-3">
		<label for="txtStartDay" style="text-align: left;">Fim de Expediente</label>
			<div class="input-group clockpicker">
 				<span class="input-group-addon">
        		<span class="glyphicon glyphicon-time" style="color: #8B0000;"></span>
   				</span>
    			<input type="text" title="Digite o Fim do Expediente" class="form-control" value="09:30">
   
			</div>
		</div>
		<div class="col-md-1">
		</div>
		
		<div class="form-group col-md-3">
		<label for="txtPhone" style="text-align: left;">Dias Úteis</label>
			<div class="input-group margin-bottom-sm">
			  <span class="input-group-addon"><i class="fa fa-briefcase fa-fw"></i></span>
			  <input id="txtPhone" name="txtPhone" class="form-control" type="number" title="Digite A quantidade de dias úteis do seu negócio" placeholder="0">
			</div>
		</div>
		<h3 class="col-md-12"><hr>Cadastro de horário de almoço<hr></h3>

		<div id="txtStartDay" class="form-group col-md-3">
		<label for="txtStartDay" style="text-align: left;">Inicio de Almoço</label>
			<div class="input-group clockpicker">
 				<span class="input-group-addon">
        		<span class="glyphicon glyphicon-time" style="color: green;"></span>
   				</span>
    			<input type="text" class="form-control" value="09:30">
   
			</div>
		</div>
		<div class="col-md-1">
		</div>
		<div id="txtStartDay" class="form-group col-md-3">
		<label for="txtStartDay" style="text-align: left;">Fim do almoço</label>
			<div class="input-group clockpicker">
 				<span class="input-group-addon">
        		<span class="glyphicon glyphicon-time" style="color: #8B0000;"></span>
   				</span>
    			<input type="text" class="form-control" value="09:30">
   
			</div>
		</div>
			<div class="col-md-10"></div>
			<div class="col-md-2"><input type="submit" class="btn btn-success" name=""></div>
			
	</div><!-- container -->
<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>



	
</form>


<?php require"../footer.php";	?>
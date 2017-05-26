<?php 
require"../inicialize.php";
require"../header.php"; ?>
<br><br>
<form><!-- https://cdn2.iconfinder.com/data/icons/roundies-3/32/building-512.png 
		https://d30y9cdsu7xlg0.cloudfront.net/png/78763-200.png
-->
	<div class="container-fluid well">
		<img class="thumbnail col-md-3" src=" https://cdn2.iconfinder.com/data/icons/roundies-3/32/building-512.png ">
		<div class="col-md-1">
		   	<label class="btn btn-default fa fa-upload" style="color: blue;">
   			<input type="file" name="btnFoto" style="display: none;">
			</label>
		 </div>
		<div class="form-group col-md-8">
		<label for="TxtCompanyName" style="text-align: left;">Nome da empresa</label>
			<div class="input-group margin-bottom-sm">
			  <span class="input-group-addon"><i class="fa fa-building-o fa-fw"></i></span>
			  <input id="txtCompanyName" name="txtCompanyName" class="form-control" type="text" placeholder="Nome da empresa" title="Digite o nome da empresa">
			</div>
		</div>
		<div class="col-md-1">
		</div>
		<div class="form-group col-md-8">
		<label for="txtEmail" style="text-align: left;">Email de Contato</label>
			<div class="input-group margin-bottom-sm">
			  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			  <input id="txtEmail" name="txtEmail" class="form-control" type="text" placeholder="Email para contato" title="Digite um Email para contato">
			</div>
		</div>
		<div class="col-md-1">
		</div>
		<div class="form-group col-md-8">
		<label for="txtPhone" style="text-align: left;">Telefone para contato</label>
			<div class="input-group margin-bottom-sm">
			  <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
			  <input id="txtPhone" name="txtPhone" class="form-control" type="text" placeholder="Telefone para contato" title="Digite um Telefone para contato">
			</div>
		</div>
		<div class="col-md-1">
		</div>
		<div class="form-group col-md-8">
		<label for="txtContactName" style="text-align: left;">Nome do Responsável</label>
			<div class="input-group margin-bottom-sm">
			  <span class="input-group-addon"><i class="fa fa-user-circle-o fa-fw"></i></span>
			  <input id="txtContactName" name="txtContactName" class="form-control" type="text" placeholder="Nome da empresa" title="Digite o nome do contato">
			</div>
		</div>
		<div class="col-md-11"></div>
		<input  type="submit" class="btn btn-success" name="enviar" style="margin-left: -10px;">
	</div><!-- container -->
</form>

				
<?php require"../footer.php";	?>
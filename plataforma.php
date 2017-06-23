<?php include("cabecalho.php"); 
include("conecta.php");
 include("banco-plataforma.php"); 
?>	
    
			    <h1 class="title">Insira os dados da mercadoria:</h1>
			    
			                <form class="form-horizontal" action="index.php" method="post">
			                    <div class="form-group">
			                        <label for="cod_mercadoria" class="col-sm-4 control-label">Código da Mercadoria</label>
			                        <div class="col-sm-8">
			                            <input type="number" name="cod_mercadoria" class="form-control" id="cod_mercadoria" placeholder="Apenas números">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for"tipo+mercadoria" class="col-sm-4 control-label">Tipo da Mercadoria</label>
			                        <div class="col-sm-8">
			                            <select class="form-control" name="tipo_mercadoria">
			                                <option>Notebooks</option>
											<option>Celulares</option>
			                                <option>Carros</option>
			                                <option>Motos</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="nome" class="col-sm-4 control-label">Nome da Mercadoria</label>
			                        <div class="col-sm-8">
			                            <input type="text" name="nome_mercadoria" class="form-control"  placeholder="Insira o nome da mercadoria">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="quantidade" class="col-sm-4 control-label">Quantidade</label>
			                        <div class="col-sm-8">
			                           <input type="number" name="qtde" class="form-control" id="quantidade" placeholder="Insira a quantidade">
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="preco" class="col-sm-4 control-label">Preço</label>
			                        <div class="col-sm-8">
			                            <input type="number" name="preco" class="form-control" id="preco" placeholder="Amount">
			                        </div>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label for="tipo_negocio" class="col-sm-4 control-label">Tipo de negócio</label>
			                        <div class="col-sm-8">
			                            <select class="form-control" name="tipo_neogico">
			                              <option>Compra</option>
			                              <option>Venda</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <div class="col-sm-offset-4 col-sm-8">
			                            <button type="submit" name="submit" class="btn pull-right btn-danger">Enviar</button>
			                        </div>
			                    </div>
			                </form>
				
<?php include("rodape.php"); ?>	
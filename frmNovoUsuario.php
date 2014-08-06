<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Novo Usuário</title>
                <meta charset="UTF-8">
	        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
		<!-- Inclus�o do Jquery -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
                <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Inclus�o do Jquery Validate -->
		<!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
                <script type="text/javascript" src="js/validate.js"></script>
		<!-- Valida��o do foruml�rio -->
		<script type="text/javascript">
			
            
	</script>
                
 </head>
<body>
    
 
    
   
<h1>Cadastro de Usuário</h1>
<form id="meu_form" action="incluirusuario.php" method="post" >
           
		<!--Login:<br />-->
                 <label>Digite seu nome: </label><br/>
                <input type="text" name="nome" id="nome" autofocus/>
		<br />
                <label>Digite um email válido: </label><br/>
                <input type="text" name="login" id="login" />
		<br />
                  <label>Confirme o  email: </label><br/>
                <input type="text" name="conflogin" id="conflogin" />
		<br />
                <label>Senha:</label> <br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha: </label><br/>
		<input type="password" name="confsenha" id="confsenha"/><br />
                <label>Digite a sua data de nascimento: </label><br/>
                <input type="date" name="datanascimento" id="datanascimento" />
		<br />
                <label>Digite o seu CPF: </label><br/>
                <input type="text" name="cpf" id="cpf" />
		<br />
                <label>Digite o seu CEP: </label><br/>
                <input type="text" name="cep" id="cep" />
		<br />
                <label>Digite o seu logradouro: </label><br/>
                <input type="text" name="logradouro" id="logradouro" />
		<br />
                <label>Digite o seu bairro: </label><br/>
                <input type="text" name="bairro" id="bairro" />
		<br />
                <label>Digite a sua cidade: </label><br/>
                <input type="text" name="cidade" id="cidade" />
		<br />
                <label>Digite o seu UF: </label><br/>
                <input type="text" name="uf" id="uf" />
		<br />
                <label>Digite o seu telefone: </label><br/>
                <input type="tel" name="telefone" id="telefone"  />
		<br />
                <label>Digite o seu celular: </label><br/>
                <input type="tel" name="celular" id="celular" />
		<br />
                Aceito os termos e condições:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Cadastrar" />
	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
                
                 
</body>
</html>





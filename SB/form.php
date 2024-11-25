
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário| SB</title>
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
  <a href = "index.html"> voltar ao login</a>

    <div class="box">
        <form action="config.php" method = "post">
            <fieldset>
              <legend><b> cadastro de clientes </b> </legend>

              <br>

              <div class="inputBox">
               <input type="text" name="nome" id="nome" class="inputUser" required>
               <label for="nome" class="labelInput">Nome completo</label>
              </div>
             <br><br>
             
              <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">E-mail</label>
               </div>
               <br><br>
               <div class="inputBox">
               <input type="password" name="senha" id="senha" class="inputUser" required>
               <label for="senha" class="labelInput">Senha</label>
              </div>
             <br><br>
               <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">telefone</label>
               </div>
               <br>
               <p>Sexo:</p>
               <input type="radio" name="sexo" value="feminino" required>
               <label for="feminino">Feminino</label>
                 <br>
               <input type="radio" name="sexo" value="masculino" required>
               <label for="masculino">masculino</label>
                  <br>
               <input type="radio" name="sexo" value="outro" required>
               <label for="outro">outro</label>
               <br><br>

               <div class="inputBox">
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required>
               </div>

               <br><br>
               <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
               </div>
               <br><br>
               <div class="inputBox">
                <input type="text" name="Estado" id="Estado" class="inputUser" required>
                <label for="Estado" class="labelInput">Estado</label>
               </div>
               <br><br>
               <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
               </div>
               <br><br>
               <input type="submit" name="submit" id="submit_btn">

               




            </fieldset>



        </form>
    </div>
    
    
</body>
</html>
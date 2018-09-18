
<?php include('testando.php'); ?>
<?php
  if($_POST){
    if(file_exists('login.json')){
      $dados = json_decode(file_get_contents('login.json'), true);
    }else{
      $dados = [ "usuarios" => [] ];
    }
    if($_POST['senha'] == $_POST['confirma-senha']){
      $usuario = [
        "email" => $_POST['email'],
        "nome"  => $_POST['nome'],
        "sobrenome" => $_POST['sobrenome'],
        "nascimento" => $_POST['datan'],
        "rg" => $_POST['rg'],
        "rua" => $_POST['rua'],
        "cpf" => $_POST['cpf'],
        "numeror" => $_POST['numeror'],
        "bairro" => $_POST['bairro'],
        "estado" => $_POST['estado'],
        "cidade" => $_POST['cidade'],
        "cep" => $_POST['cep'],
        "login" => $_POST['login'],
        "hash" => password_hash($_POST['senha'], PASSWORD_DEFAULT)
      ];
      $dados['usuarios'][] = $usuario;
      $json = json_encode($dados);
      file_put_contents('login.json', $json);
    }
  }
  ?>
  <?php
if(isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == UPLOAD_ERR_OK){
  $file_to = "uploads/".$_FILES['arquivo']['name'];
  if(file_exists($file_to)){
      echo "ERRO: Arquivo já existe!";
  }else{
    $ok = move_uploaded_file($_FILES['arquivo']['tmp_name'], $file_to);
    if($ok) { echo "Arquivo enviado com sucesso!"; }
  }
}
?>
<div class="container">
<form class="text-center" action="login.php" method="post" enctype="multipart/form-data">            

 <div class="form-box">
    <!-- DADOS PESSOAIS -->
                <fieldset>
                        <legend class="legenda">Dados Pessoais</legend>
                        <table cellspacing="10">
                            <tr>
                            <td>
                            <label for="nome">Nome completo: </label>
                            </td>
                            <td align="left">
                            <input type="text" require name="nome" value='<?php echo isset($_POST['nome'])?$_POST['nome']:''; ?>'>
                            </td>
                            <td>
                            <!--<label for="sobrenome">Sobrenome: </label>
                            </td>
                            <td align="left">
                            <input type="text" name="sobrenome" value='<?php echo isset($_POST['sobrenome'])?$_POST['sobrenome']:''; ?>'>
                            </td>-->
                            </tr>
                            <tr>
                            <td>
                            <label>Data de nascimento: </label>
                            </td>
                            <td align="left">
                            <input type="text" require require name="datan" value='<?php echo isset($_POST['data'])?$_POST['data']:''; ?>'>
                            </td>
                            </tr>
                            <tr>
                            <td>
                            <label for="rg">RG: </label>
                            </td>
                            <td align="left">
                            <input type="text" name="rg" size="13" maxlength="13" value='<?php echo isset($_POST['rg'])?$_POST['rg']:''; ?>'> 
                            </td>
                            </tr>
                            <tr>
                            <td>
                            <label>CPF: </label>
                            </td>
                            <td align="left">
                            <input type="text" require name="cpf" size="13" maxlength="11">
                            </td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
                <div class="form-box">
        <!-- ENDEREÇO -->
                <fieldset>
                <legend class="legenda">Dados de Endereço</legend>
                    <table cellspacing="10">
                    <tr>
                    <td>
                    <label for="rua">Rua: </label>
                    </td>
                    <td align="left">
                    <input type="text" name="rua" value='<?php echo isset($_POST['rua'])?$_POST['rua']:''; ?>'>
                    </td>
                    <td>
                    <label for="numero">Número:</label>
                    </td>
                    <td align="left">
                    <input type="text" require name="numeror" size="4" value='<?php echo isset($_POST['numeror'])?$_POST['numeror']:''; ?>'>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="bairro">Bairro: </label>
                    </td>
                    <td align="left">
                    <input type="text" name="bairro" value='<?php echo isset($_POST['bairro'])?$_POST['bairro']:''; ?>'>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="estado">Estado:</label>
                    </td>
                    <td align="left">
                            <select name="estado"> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
                    </select>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="cidade">Cidade: </label>
                    </td>
                    <td align="left">
                    <input type="text" name="cidade" value='<?php echo isset($_POST['cidade'])?$_POST['cidade']:''; ?>'>
                    </td>
                    </tr>
                    <tr>
                    <td>
                    <label for="cep">CEP: </label>
                    </td>
                    <td align="left">
                    <input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
                    </td>
                    </tr>
                </table>
            </fieldset></div>
            <div class="form-box">
             <!-- DADOS DE LOGIN -->
             <fieldset>
                    <legend class="legenda">Dados de login</legend>
                    <table cellspacing="10">
                     <tr>
                      <td>
                       <label for="email">E-mail: </label>
                      </td>
                      <td align="left">
                       <input type="text" name="email" value='<?php echo isset($_POST['email'])?$_POST['email']:''; ?>'>
                      </td>
                     </tr>
                     <tr>
                      <td>
                       <label for="imagem">Imagem de perfil:</label>
                      </td>
                      <td>
                       <input type="file" name="arquivo" >
                   
                      </td>
                     </tr>
                     <tr>
                      <td>
                       <label for="login">Login de usuário: </label>
                      </td>
                      <td align="left">
                       <input type="text" name="login" value='<?php echo isset($_POST['login'])?$_POST['login']:''; ?>'>
                      </td>
                     </tr>
                     <tr>
                      <td>
                       <label for="pass">Senha: </label>
                      </td>
                      <td align="left">
                       <input type="password" name="senha">
                      </td>
                     </tr>
                     <tr>
                      <td>
                       <label for="passconfirm">Confirme a senha: </label>
                      </td>
                      <td align="left">
                       <input type="password" name="confirma-senha">
                      </td>
                     </tr>
                    </table>
                   </fieldset>
                   <br />
                  
        </td>  </div> 
        
                <input class="input-form" type="submit">
                <input class="input-form" type="reset" value="Limpar">
                 
</form></div>
<div class="container">
    <br>
    <div class="row text-center">
        <legend class="legenda">Fazer login com;</legend>
        <a class="icons-socials" href="#"><img src="imagens/icons/facebook-holly.png"></a>
        <a class="icons-socials" href="#"><img src="imagens/icons/twitter.png"></a>
        <a class="icons-socials" href="#"><img src="imagens/icons/search.png"></a>
        <a class="icons-socials" href="#"><img src="imagens/icons/instagram.png"></a>

    </div>
</div>

<form class="text-center" action="valida-login.php" method="post">            

    <div class="form-login">
       <!-- DADOS PESSOAIS-->
                   <fieldset>
                           <legend class="legenda">Já tenho uma conta</legend>
                           <table cellspacing="10">
                               <tr>
                               <td>
                               <label for="nome">E-mail </label>
                               </td>
                               <td align="left">
                               <input type="text" name="email">
                               </td>
                               </tr>
                               <td>
                                <label for="pass">Senha: </label>
                                </td>
                                <td align="left">
                                <input type="password" name="senha">
                                </td>
                                </tr>
                                <tr>
                           </table>
                           <input type="submit" value="Enviar">
                       </fieldset>
                       </div></form>

<?php include('footer.php'); ?>
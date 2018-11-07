<?php
   include('head_perfil.php')
   ?>   
<div class = "container-fluid">
   <form aciton="finalizarcad.php" method="post">
      <div class="row">
         <?php 
            if(isset($_SESSION['id'])){
               $a = $_SESSION['id'];
            }
            $usuarios = ListarUsuarioCerto($a);
            while ($usuario = $usuarios->fetch_array()){
            ?>
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <input type="hidden" name="cd1" id="cd"  value="<?php  echo($usuario['CD_USUARIO']); ?>">
                     <label for="nome">Nome <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "nome" class = "form-control" placeholder = "Nome" value = "<?php  echo($usuario['NM_USUARIO']); ?>" required >
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="form-group">
                     <label for="sobrenome">Sobrenome <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "sobrenome" class = "form-control" placeholder = "Sobrenome" value = "<?php  echo($usuario['NM_SOBRENOME']); ?>" required >
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="form-group">
                     <label for="email">E-mai <span class="obrigatorio">*</span> :</label><br>
                     <input type = "email" name = "email" class = "form-control" placeholder = "exemplo: nome@mc.com" value = "<?php  echo($usuario['DS_EMAIL']); ?>" required >
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="cpf">CPF <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "cpf" class = "form-control"  maxlength="14" id="cpf" placeholder="000.000.000-00"value = "<?php  echo($usuario['NR_CPF']); ?>" required >
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="data_nasc">Data de Nascimento <span class="obrigatorio">*</span> :</label><br>
                     <input type = "date" name = "data_nasc" class = "form-control"  value = "<?php  echo($usuario['DT_NASCIMENTO']); ?>" required >
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="sexo">Sexo <span class="obrigatorio">*</span> :</label><br>
                     Masculino: <input type = "radio" name = "sexo"    value = "M"  ><br>
                     Feminino:&nbsp;&nbsp; <input type = "radio" name = "sexo"    value = "F"  >
                  </div>
                  <div class="col-md-1">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="form-group">
                     <label for="endereco">Endereço <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "endereco" class = "form-control" placeholder = "exemplo: Rua Joaquina, 606" value = "<?php  echo($usuario['NM_ENDERECO']); ?>" required >
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="bairro">Bairro <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "bairro" class = "form-control" placeholder = "bairro" value = "<?php  echo($usuario['NM_BAIRRO']); ?>" required >
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="cidade">Cidade <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "cidade" class = "form-control" placeholder = "cidade" value = "<?php  echo($usuario['NM_CIDADE']); ?>" required >
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="cep">CEP <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "cep" class = "form-control" maxlength="9" id="cep" placeholder="00000-000" value = "<?php  echo($usuario['CD_CEP']); ?>" required >
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="cidade">Estado: <span class="obrigatorio">*</span> :</label><br>
                     <select name="estado" required="Por favor escolha seu Estado" class = "form-control">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AM">Amazonas</option>
                        <option value="AP">Amapá</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RO">Rondônia</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SE">Sergipe</option>
                        <option value="SP" selected>São Paulo</option>
                        <option value="TO">Tocantins</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="ponto">Ponto de Referencia <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "ponto" class = "form-control" placeholder = "Exemplo: proximo á escola joana" value = "<?php  echo($usuario['NM_PONTO_REFERENCIA']); ?>" required >
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="telefone">Telefone fixo:</label><br>
                     <input type = "text" name = "telefone" class = "form-control" id="telefone" maxlength="15" value = "<?php  echo($usuario['NR_TELEFONE']); ?>" placeholder="(00) 3333-3333">
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="celular">Celular <span class="obrigatorio">*</span> :</label><br>
                     <input type = "text" name = "celular" class = "form-control" id="celular" maxlength="16" value = "<?php  echo($usuario['NR_CELULAR']); ?>" placeholder="(00) 99999-9999">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <button  class="btn btn-lg btn-pill btn-warning" type="reset">Limpar</button>
                     <button class="btn btn-lg btn-pill btn-primary" type="submit">Atualizar</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php } ?>
   </form>
</div>
</div>
</div>
<?php 
   include('footer_perfil.php');
   ?>
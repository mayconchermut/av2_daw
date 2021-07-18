<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  // include 'cadastrar.php';
  ?>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  
    <title>Cadastro Loja Ximbolé Bahiano</title>
</head>
<body>
  
    <div class="container">
        <div calss="menu">
            <div class="menucadastrar">
                <a href="/av2_daw/cadastro.php">Cadastrar</a>
            </div>
            <div class="menubuscar">
                <a href="/av2_daw/buscar.html">Buscar</a> 
            </div>
            <div class="menulistar">
               <a href="/av2_daw/lsitar.html">Listar</a> 
            </div>
        </div>
       
        <div class="title">
            <h2>Cadastro Loja Ximbolé Bahiano</h2>
        </div>
      <div class="d-flex">
        <form action="cadastrar.php" method="POST">
          <label>
            <span class="pname">Nome do produto</span>
            <input type="text" name="pname">
          </label>
          <label>
            <span class="cbarras">Codigo de barras</span>
            <input type="text" name="cbarras">
          </label>
          <label>
            <span>Fabricante</span>
            <input type="text" name="fabricante">
          </label>
          <label>
            <span>Categoria</span>
            <select name="categoria">
              <option value="select">Selecione a categoria</option>
              <option value="AFG">Afghanistan</option>
              <option value="ALA">Åland Islands</option>
              <option value="ALB">Albania</option>
            </select>
          </label>
          <label>
            <span>Tipo de produto</span>
            <select name="tipoprod">
              <option value="select">Selecione a categoria</option>
              <option value="AFG">Afghanistan</option>
              <option value="ALA">Åland Islands</option>
              <option value="ALB">Albania</option>
            </select>
          </label>
          <label>
            <span>Preço de venda</span>
            <input type="text" name="precovenda" step="any"> 
          </label>
          <label>
            <span>Quantidade</span>
            <input type="number" name="qntdprod"> 
          </label>
          <label>
            <span>Peso (gramas)</span>
            <input type="text" name="pesog"> 
          </label>
          <label>
            <span>Descrição</span>
            <input type="text" name="desc"> 
          </label>
          <label>
            <span>Link da imagem</span>
            <input type="text" name="urlimg"> 
          </label>
          <label>
            <span>Data da inclusão</span>
            <input type="date" name="indata"> 
          </label>
          <label>
              <span>Ativar produto:</span>
              <input type="checkbox" id="situacaoprod" name="situacao" value="ativo">
            </label>
            <button type="submit">Cadastrar</button>     
        </form>
       </div>
      </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>


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
                <a href="/av2_daw/buscar.php">Buscar</a> 
            </div>
            <div class="menulistar">
               <a href="/av2_daw/listar.php">Listar</a> 
            </div>
        </div>
       
        <div class="title">
            <h2>Cadastro Loja Ximbolé Bahiano</h2>
        </div>
      <div class="d-flex">

        <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
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
              <option value="Categoria1">Categoria1</option>
              <option value="Categoria2">Categoria2</option>
              <option value="Categoria3">Categoria3</option>
              <option value="Categoria4">Categoria4</option>
              <option value="Categoria5">Categoria5</option>
            </select>
          </label>
          <label>
            <span>Tipo de produto</span>
            <select name="tipoprod">
              <option value="select">Selecione a categoria</option>
              <option value="Tipo1">Tipo1</option>
              <option value="Tipo2">Tipo2</option>
              <option value="Tipo3">Tipo3</option>
              <option value="Tipo4">Tipo4</option>
              <option value="Tipo5">Tipo5</option>

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
         
            <span>Upload da imagem (.jpg)</span>
              <input type="file" name="file"/>
          </label>
          <label>
            <span>Data da inclusão</span>
            <input type="date" name="indata"> 
          </label>
          <label>
              <span>Ativar produto:</span>
              <input type="checkbox" id="situacaoprod" name="situacao" value="ativo">
            </label>
            <button type="submit" name="acao">Cadastrar</button>     
        </form>
       </div>
      </div>
    
</body>
</html>
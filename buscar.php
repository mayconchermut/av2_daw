<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  
    <title>Buscar Loja Ximbolé Bahiano</title>
    <script>
        var xhr= new XMLHttpRequest();
        var method ="GET";
        var url = "listarproduto.php";
        
        function listar(){
          const codigobarras = document.getElementById("codigodebarras").value;
  
          // console.log(codigobarras);
            xhr.open(method, url, true);
            xhr.send();
            xhr.onreadystatechange = function(){
                if (this.readyState = 4 && this.status == 200){
                    var data = JSON.parse(this?.responseText || "{}");
                    var html ="";
                    var html2 ="";
                    
                    for(var a = 0; a< data.length; a++){
                      var nome = data[a].nome;
                      var codigobarra = data[a].codigobarra;
                      var categoria = data[a].categoria;
                      var preco = data[a].preco;
                      var estoque = data[a].quantidade;
                      var ativo = data[a].ativo;
                      var ativovalido;
                      var fabricante = data[a].fabricante;
                      var tipoprod = data[a].tipoprod;
                      var desc = data[a].descricao;
                      var dataform = data[a].data;
                      var peso = data[a].peso;
                      
                      if(ativo == 1){
                        var ativovalido = 'Ativo';
                      }else{
                        var ativovalido = 'Desativo';
                      }
                      
                      if(codigobarra == codigobarras){
                          html2+= "<tr>";
                               html2+= "<th>Nome</th><th>Codigo</th><th>Categoria</th><th>Preço</th><th>Quantidade</th> <th>Situação</th> <th>imagem</th>";
                           html2+="</tr>";

                          html += "<tr>";
                              html+= `<td>  ` + nome +  ` </td> 
                              <td>` +codigobarra+ `</td>
                              <td>` +categoria+ `</td>
                              <td>` +preco+ `</td>
                              <td>` +estoque+ `</td>
                              <td>` +ativovalido+ `</td> 
                              <td> <img src='img/`+codigobarra+`.jpg' width='50' height='50'> </td> 
                              <td><a href='#' onclick='buscar("`+nome+`", `+codigobarra+`, "`+fabricante+`", "`+categoria+`", "`+tipoprod+`", `+preco+`, `+estoque+`, `+peso+`, "`+desc+`", "`+dataform+`", `+ativo+`)'> Editar </a></td>
                              <td><a href='#' onclick='desativar(`+codigobarra+`)'> Desativar </a> </td>`;
                          html+= "</tr>";
                        }
                        // console.log(html);
                    }  
                  }
                document.getElementById("data2").innerHTML = html2 ;
                document.getElementById("data").innerHTML = html ;
            }
            
            
          }
          function desativar(e){

            document.getElementById("detalhes").innerHTML = `<form action='desativar.php' method='POST' enctype='multipart/form-data'>
          <label>
          <span class='cbarras'>Codigo de barras</span>
          <input type='text' name='cbarras' value='`+e+`'>  
          </label>
          <label>
            <span>Desativar produto:</span>
            </label>
            <button type='submit' name='acao' onclick="alert('Desativado com sucesso')">Confirmar</button>     
        </form>`
          }
          function buscar(name, cbarras, fabricante, categoria, tipoprod, preco, estoque, peso, desc, dataform, ativo){
            document.getElementById("detalhes").innerHTML = `<form action='editar.php' method='POST' enctype='multipart/form-data'>
          <label>
            <span class='pname'>Nome do produto</span>
            <input type='text' name='pname' value='`+name+`'>
          </label>
          <label>
            <span class='cbarras'>Codigo de barras</span>
            <input type='text' name='cbarras' value='`+cbarras+`'>
          </label>
          <label>
            <span>Fabricante</span>
            <input type='text' name='fabricante' value='`+fabricante+`'>
          </label>
          <label>
            <span>Categoria</span>
            <select name='categoria' >
              <option value='select'>`+categoria+`</option>
              <option value='AFG'>Afghanistan</option>
            </select>
          </label>
          <label>
            <span>Tipo de produto</span>
            <select name='tipoprod'>
              <option value='select'>`+tipoprod+`</option>
              <option value='AFG'>Afghanistan</option>
              <option value='ALA'>Åland Islands</option>
              <option value='ALB'>Albania</option>
            </select>
          </label>
          <label>
            <span>Preço de venda</span>
            <input type='text' name='precovenda' step='any' value='`+preco+`'> 
          </label>
          <label>
            <span>Quantidade</span>
            <input type='number' name='qntdprod' value='`+estoque+`'> 
          </label>
          <label>
            <span>Peso (gramas)</span>
            <input type='text' name='pesog' value='`+peso+`'> 
          </label>
          <label>
            <span>Descrição</span>
            <input type='text' name='desc' value='`+desc+`'> 
          </label>
          <label>
         
            <span>Upload da imagem (obrigatório)</span>
              <input type='file' name='file'/>
          </label>
          <label>
            <span>Data da inclusão</span>
            <input type='date' name='indata' value='`+dataform+`'> 
          </label>
          <label>
              <span>Ativar produto: (obrigatório)</span>
              <input type="checkbox" id='situacaoprod' name='situacao' value='ativo'>
            </label>
            <button type='submit' name='acao'>Editar</button>     
        </form>`;
          }
    </script>
</head>
<body>
    
    <a href=""></a>
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
            <h2>Buscar Loja Ximbolé Bahiano</h2>
        </div>
      <div class="d-flex-buscar">
        <input type="text" id="codigodebarras">
        <button type="submit" onclick="listar()">Buscar</button>     
            <table class="tabelalistar">
    
                
                <tbody id="data2">
                </tbody>
                <tbody id="data">
               </tbody>
            
               <tr>
                
                <!-- <th>Nome</th><th>Codigo</th><th>Categoria</th><th>Preço</th><th>Quantidade</th> -->
            </tr>
            </table>
            <div id="detalhes">
            </div>
       </div>
      </div>
    
</body>
</html>
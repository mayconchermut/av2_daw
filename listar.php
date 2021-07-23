<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  
    <title>Listar Produtos Loja Ximbolé Bahiano</title>
    <script>
        var xhr= new XMLHttpRequest();
        var method ="GET";
        var url = "listarproduto.php";

        function listar(){
            xhr.open(method, url);
            xhr.send();
            xhr.onreadystatechange = function(){
                if (this.readyState = 4 && this.status == 200){
                    var data = JSON.parse(this?.responseText || '{}');
                    var html ="";
                    var html2 ="";

                       html2+= "<tr>";
                            html2+= "<th>Nome</th><th>Codigo</th><th>Categoria</th><th>Preço</th><th>Quantidade</th> <th>Situação</th> <th>imagem</th>";
                        html2+="</tr>";

                    for(var a = 0; a< data.length; a++){
                        var nome = data[a].nome;
                        var codigobarra = data[a].codigobarra;
                        var categoria = data[a].categoria;
                        var preco = data[a].preco;
                        var estoque = data[a].quantidade;
                        var ativo = data[a].ativo;
                        var ativovalido;
                        
                        if(ativo == 1){
                            var ativovalido = 'Ativo';
                        }else{
                            var ativovalido = 'Desativo';
                            }
    
                            html += "<tr>";
                                html+= "<td> " + nome +  "</td> <td>" +codigobarra+ "</td><td>" +categoria+ "</td><td>" +preco+ "</td><td>" +estoque+ "</td><td>" +ativovalido+ "</td> <td> <img src='img/"+codigobarra+".jpg' width='50' height='50'> </td>";
                            html+= "</tr>";
                    }   
                }
                document.getElementById("data2").innerHTML = html2 ;
                document.getElementById("data").innerHTML = html ;

            }

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
            <h2>Listar produtos Loja Ximbolé Bahiano</h2>
        </div>
      <div class="d-flex-buscar">
          
            <button type="submit" onclick="listar()">Listar Produtos</button>     
        
            <table class="tabelalistar">
    
                
                <tbody id="data2">

                </tbody>
                <tbody id="data">
               </tbody>
            
               <tr>
            </tr>
            </table>
       </div>
      </div>
    
</body>
</html>
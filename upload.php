<html>
    <body>
        <?php
            if(isset($_POST['acao'])){
                $arquivo = $_FILES['file'];
                $codbarras = $_POST['cbarras'];
                $codbarras = $codbarras.'.jpg';
                echo "$codbarras";
                
                $arquivoNovo = explode('.', $arquivo['name']);

                if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
                    die('Você não pode fazer upload deste arquivo');
                }else{
                    echo "Upload feito com sucesso";
                    move_uploaded_file($arquivo['tmp_name'], 'img/'.$codbarras);
                }
            }
        ?>
    </body>

    <form action="" method="post" enctype="multipart/form-data" >
        <input type="text" name="cbarras"/>
        <input type="file" name="file"/>
        <input type="submit" name="acao" value="Enviar"/>
    </form>
</html>
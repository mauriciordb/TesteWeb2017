<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TesteWeb2017</title>
        <script>
            function ok(){
                var cd_mer = document.forms['form'].cd_mercadoria.value;
                var tp_mer = document.forms['form'].tp_mercadoria.value;
                var nm_mer = document.forms['form'].nm_mercadoria.value;
                var qt_mer = document.forms['form'].qt_mercadoria.value;
                var vl_mer = document.forms['form'].vl_mercadoria.value;
                var tp_neg = document.forms['form'].tp_negocio.value;
                if(cd_mer!=="" && tp_mer!=="" && nm_mer!=="" && qt_mer!=="" && vl_mer!==""){
                    return true;
                }
                else{
                    alert("Todos os campos precisam ser preenchidos");
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <h1>Teste Web</h1>
        <form name="form">
            Codigo da Mercadoria: <input type="text" name="cd_mercadoria" id="cd_mercadoria" value="" /><br>
            Tipo da Mercadoria: <input type="text" name="tp_mercadoria" id="tp_mercadoria" value=""><br>
            Nome da Mercadoria: <input type="text" name="nm_mercadoria" id="nm_mercadoria" value=""><br>
            Quantidade: <input type="text" name="qt_mercadoria" id="qt_mercadoria" value=""><br>
            Preco: <input type="text" name="vl_mercadoria" id="vl_mercadoria" value=""><br>
            Tipo do Negocio: <select name="tp_negocio" id="tp_negocio">
                <option>Compra</option>
                <option>Venda</option>
            </select><br>
            <input type="submit" value="Concluir" name="btn_concluir" onclick="ok()" />&nbsp;&nbsp;
            <input type="reset" value="Cancelar" name="btn_cancelar" />
        </form>
    </body>
</html>

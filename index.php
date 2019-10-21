<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css" />
</head>

<body>
    <div class="container">
        <form class="form-horizontal" action="index.php#formulario" method="post" role="form" data-toggle="validator">
            <div class="form-group">
                <label class="control-label col-sm-3">Nome*:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="seu nome"
                        required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Email*:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="email" value=""
                        placeholder="exemplo@dominio.com" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-3">Assunto*:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="assunto" required>
                        <option value="" selected="selected" disabled="disabled"> -- Escolha uma opção --</option>
                        <option value="duvida">Dúvida</option>
                        <option value="sugestao">Sugestão</option>
                        <option value="outros">Outros</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Mensagem*:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleTextarea" rows="6" id="mensagem" name="mensagem"
                        placeholder="sua mensagem" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-right">
                    <input class="btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                    <a name="formulario"></a>
                    <div class="mensagem-alerta"></div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<html>

<head>
  <title>Carrinho - DD Livros</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/istilu.css">
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">


  <script lang="javascript" src="js/carrinho.js"></script>
  <meta charset="UTF-8">


</head>

<body class="bg-light">
  <header class="justify-content-end">
    <div class="nav-container justify-content-end ">
      <nav class="navbar navbar-expand-md navbar-white fixed-top p-0 justify-content-end nav-color p-2">
        <div class="container">
          <a class="nav-link" href="index.html"><img src="img/DD-Paralax.png" height="35px"></a>

          <ul class="navbar-nav mr-auto nav justify-content-end">
            <li class="nav-item active">

            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- <a class="nav-link carrinho mt-1 mr-2" href="carrinho.html"><img src="img/loadsc7.png" class="rounded-circle mr-3" style="height: 30px;" title="Seu Perfil"><font class="mt-3">Olá Vanessa </font></a> -->
            </li>
            <li class="nav-item ">
              <a class="nav-link carrinho" href="carrinho.html"><img src="img/icone-carrinho.png" style="height: 40px;">
                <font class="mt-5">Meu Carrinho</font>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <nav class="sticky-top position-fixed bg-dark text-white p-0" style="width: 100%;margin-top: 56px;height: 40px;">
        <div class="container nav-item navbar text-left navbar-expand-md justify-content">
          <a class="nav-link" href="index.html">Home</a>
          <a class="nav-link" href="produtos.html">Produtos</a>
          <a class="nav-link" href="quemsomos.html">Quem Somos</a>
          <a class="nav-link" href="contato.html">Fale Conosco</a>
        </div>
      </nav>

    </div>
  </header>

  <main style="width: 100%;">

    <div class="p-2 bg-white border" style="margin-bottom: 5px">
      <img src="img/icone-carrinho.png" style="height: 60px;filter: brightness(0);">
      <font style="font-weight:bold; font-size:20px;">Meu Carrinho</font>
      <img src="img/logoML_horizontal_negativo.png" height="40px" alt="" class="float-right m-2">
    </div>
    <div class="row bg-white p-2 m-0 border">
      <div class="col p-3 bg-light rounded-sm border">
        <form name="formVenda">
          <label>Nome:</label>
          <input type="text" class="form-control" id="txtNome" placeholder="Digite seu Nome">
          <br>

          <label>CPF:</label>
          <input type="text" class="form-control" id="txtCPF" placeholder="Digite seu CPF" max="11">
          <br>

          <label>Email:</label>
          <input type="text" class="form-control" id="txtEmail" placeholder="Digite seu Email">
          <br>

          <label>Código do Produto:</label>
          <input type="number" class="form-control" id="codProduto" placeholder="Digite o código do Produto">
          <br>

          <label>Quantidade:</label>
          <input type="number" class="form-control" id="qtde" placeholder="Digite a quantidade">
          <br>

          <button type="button" class="btn btn-success" value="Add" onclick="addProduto()">Adicionar Produto</button>
        </form>
      </div>


      <div class="col-8">

        <form name="formVenda" class="rounded-sm bg-light" style="z-index: 1;position: relative;">
          <table class="table table-striped rounded-sm" id="tbProduto">
            <thead class="rounded-sm thead-dark ">
              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor (R$)</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor Total (R$)</th>
              </tr>
            </thead>
          </table>
        </form>
      </div>
    </div>
    <div class="mt-1 bg-white p-3 border">
      <div class="container bg-light pt-2 pb-2 rounded-sm border">
        <h3>Forma de entrega:</h3>
        <form name="formVenda bg-light">
          <div id="rdEntrega" class="pl-4">

            <input class="form-check-input" type="radio" name="r1" id="rdEntreg1" value="1" checked>
            <label class="form-check-label">Correios - Entrega em 20 dias</label>
            <br>
            <input class="form-check-input" type="radio" name="r1" id="rdEntreg2" value="2">
            <label class="form-check-label">Sedex - Endrega em 7 dias</label>
            <br>
            <input class="form-check-input" type="radio" name="r1" id="rdEntreg2" value="3">
            <label class="form-check-label">Retirar na loja</label>
          </div>





          <br>
          <label>SubTotal (R$): </label>
          <input type="text" class="form-control" id="txtValorTotal" name="txtEntregaSelec" value=" " disabled>



          <br>
          <div class="form-group">
            <label for="InputAssunto">Forma de Pagamento:</label>
            <select class="custom-select" id="slcFormaPagto">
              <option selected>Selecione</option>
              <option value="1">Transferência</option>
              <option value="2">Débito</option>
              <option value="3">Crédito</option>
              <option value="4">Boleto</option>
            </select>
          </div>
          <div class="form-group">
            <label for="InputAssunto">Número de Parcelas:</label>
            <select class="custom-select" id="slcFormaParc">
              <option selected>Selecione</option>
              <option value="1">1x</option>
              <option value="2">2x</option>
              <option value="3">3x</option>
              <option value="4">4x</option>
              <option value="5">5x</option>
              <option value="6">6x</option>
            </select>
          </div>
          <br>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="checkNL">
            <label class="form-check-label" for="exampleCheck1">Desejo receber no meu e-mail as novidades, promoções, e
              avisos da DD Livros.</label>
          </div>
          <br>
          <button type="button" class="btn btn-success" value="Cadastrar" onclick="Salvar()">Confirmar</button>
        </form>
        <hr>
        <h3>Resumo da Compra</h3>
        <br>
        <h4>Informações do cliente:</h4>
        <label>Cliente:</label>
        <input type="text" class="form-control" id="txtNomeCliente" name="txtNomeCliente" value="" disabled>
        <br>
        <label>CPF:</label>
        <input type="text" class="form-control" id="CPF" name="txtEntregaSelec" value=" " disabled>
        <br>
        <label>Email:</label>
        <input type="text" class="form-control" id="Email" name="txtEntregaSelec" value=" " disabled>
        <br>
        <h4>Informções da compra:</h4>
        <label>Formato de Entrega:</label>
        <input type="text" class="form-control" id="txtEntr" name="txtEntr" value=" " disabled>


        <br>
        <h4>Informações do pagamento:</h4>
        <label>Forma de Pagamento:</label>
        <input type="text" class="form-control" id="txtPag" name="txtPag" value=" " disabled>
        <br>

        <label>Valor de Parcelas:</label>
        <input type="text" class="form-control" id="txtPar" name="txtPar" value=" " disabled>
        <br>
        <label>Quantidade de Parcelas:</label>
        <input type="text" class="form-control" id="qPar" name="qPar" value=" " disabled>
        <br>
        <label>Valor Total (R$):</label>
        <input type="text" class="form-control" id="sbTotal" name="sbTotal" value=" " disabled>

        <a href="redirect.html"><button type="button" class="btn btn-success mt-3" value="Cadastrar">Finalizar
            Compra</button></a>
      </div>
    </div>

  </main>



  <footer class="text-white">
    <div class="p-3 text-left float-left">
      <img src="img/DD-Rmk-W.png" height="30px">
    </div>
    <div class="text-right p-3">
      <small>DD Livros é uma marca registrada Paralax Company © 2019</small>
      <br>
      <small>© 2019 Paralax Design Site 5 é uma marca Grupo Liga</small>
    </div>
    <img src="img/fBorder.png" width=100% height="2px">
  </footer>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>
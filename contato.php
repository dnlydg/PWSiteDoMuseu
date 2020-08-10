<html>

<head>
  <title>Contato - DD Livros</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/istilu.css">
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
</head>

<body>
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
  


  <form class="p-5 ">
    <h2 class="text-center m-3" style="font-weight: bold;">Fale Conosco</h2>
    <p class="text-center">Está com alguma dúvida? Gostou de algo ou foi bem atendido? Sugestão? ou reclamação? Mande
      uma mensagem, fale conosco e nós vamos tentar ajudar no que for possivel</p>
    
    <div class="form-group">
      <label for="InputName">Nome</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu Nome">
    </div>
    <div class="form-group">
      <label for="InputEmail1">Endereço de email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="Seu email">
      <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.

      </small>
    </div>
    <div class="form-group">
      <label for="InputAssunto">Assunto</label>
      <select class="custom-select">
        <option selected>Selecione</option>
        <option value="1">Elogios</option>
        <option value="2">Reclamações</option>
        <option value="3">Sugestões</option>
        <option value="4">Outros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Mensagem</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Manter-Me Anônimo</label>
    </div>

    <button type="cancel" class="btn btn-danger">Cancelar</button>
    <button type="submit" class="btn btn-primary ml-2">Enviar</button>
  </form>
  <hr>
  <div class="text-center p-5">
    <h2 class="text-center m-3" style="font-weight: bold;">Endereço Físico</h2>
    <center>
      <p class="text-justify">R. Timbó-de-Caiena - Vila Lourdes - SP cep:08412-180 (proximo a Assaí Atacadista) </p>
    </center>
    <hr>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.138206023623!2d-46.401248284871734!3d-23.52753106622926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce64f5c2018623%3A0xe18c0d88a345252b!2sR.%20Timb%C3%B3-de-Caiena%20-%20Vila%20Lourdes%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1574088459131!5m2!1spt-BR!2sbr"
      width="80%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  <div class="w-100 border-top">
  </div>


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
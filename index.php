<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Projeto Dev Web</title>
</head>

<body>


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Projeto Dev</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="">Home</a></li>
          <li><a href="sobre">Sobre</a></li>
          <li><a href="contato">Contato</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="box">
    <section class="banner">
      <div class="overlay"></div>
      <div class="container chamada-banner">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2><?php echo htmlentities('<') ?> DEV <?php echo htmlentities('>') ?></h2>
            <p>Dev na luta do aprendizado...</p>
            <a href="">Saiba Mais!</a>
          </div>
        </div>
      </div>
    </section>

    <section class="cadastro-lead">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6">
            <h2>Entre em nossa lista</h2>
          </div>

          <div class="col-md-6">
            <form action="" method="post">
              <input type="text" name="nome"><input type="submit" value="Enviar">
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="depoimento text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Depoimento</h2>
            <blockquote>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
              </p>
            </blockquote>
          </div>
        </div>
      </div>
    </section>

    <section class="diferenciais text-center">
      <h2>Conheça nossa Empresa!</h2>
      <div class="container  diferenciais-container">
        <div class="row">
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-glass"></span></h3>
            <h2>Diferencial #1</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
            </p>
          </div>

          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-star"></span></h3>
            <h2>Diferencial #2</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
            </p>
          </div>

          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-heart"></span></h3>
            <h2>Diferencial #3</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="equipe">
      <h2>Equipe</h2>
      <div class="container equipe-container">
        <div class="row">
          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-2">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>

                <div class="col-md-10">
                  <h3>Clévison</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-2">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>

                <div class="col-md-10">
                  <h3>Clévison</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-2">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>

                <div class="col-md-10">
                  <h3>Clévison</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="equipe-single">
              <div class="row">
                <div class="col-md-2">
                  <div class="user-picture">
                    <div class="user-picture-child"></div>
                  </div>
                </div>

                <div class="col-md-10">
                  <h3>Clévison</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias itaque, quod nulla quaerat ipsam deserunt.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="last-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Fale Conosco</h2>
            <form action="">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name='nome' class="form-control" id="nome">
              </div>

              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name='email' class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

          <div class="col-md-6">
            <h2>Nossos Planos</h2>
            <table class="table">
              <thead>
                <tr>
                  <th>Plano Semanal</th>
                  <th>Plano Diário</th>
                  <th>Plano Anual</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>R$ 199,00</td>
                  <td>R$ 299,00</td>
                  <td>R$ 399,00</td>
                </tr>

                <tr>
                  <td>R$ 199,00</td>
                  <td>R$ 299,00</td>
                  <td>R$ 399,00</td>
                </tr>

                <tr>
                  <td>R$ 199,00</td>
                  <td>R$ 299,00</td>
                  <td>R$ 399,00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <p class="text-center">Todos os direitos reservados!</p>
    </footer>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include 'imports.php'; ?>
  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
      <section class ="form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                    <h2>Entre em contato</h2>
                    <form action= "" method = "POST">
                        <div class= "form-group">
                            <input type = "text" placeholder = "Nome Completo" class= "form-control">
                        </div>
                        <div class= "form-group">
                            <input type = "text" placeholder = "email@exemplo.com" class= "form-control">
                        </div>

                        <div class= "form-group">
                            <input type = "text" placeholder = "Assunto" class= "form-control">
                        </div>
                        <div class= "form-group">
                            <textarea class="form-control" placeholder = "Menssagem"  rows ="3"></textarea>
                        </div>
                    </form>
                    </div>
                
                </div>
            </div>
        </div>
      </section>

     <footer>
          <?php include 'rodape.php'; ?>
    </footer>
    </body>
</html>
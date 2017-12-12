<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include 'imports.php'; ?>
  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
    </header>
    <section id="page-top">
      <div class="container-fluid">
        <div class="row">
          <div class="wrapper">
            <video autoplay="" loop="" muted="" poster="screenshot.jpg" id="background">
  		          <source src="img/zero6.mp4" type="video/mp4">
  	        </video>
            <div class="background-preto">
              <div class="col-sm-4"></div>
              <div class="col-sm-4 text-center zero">
                <h1>Zero6</h1>
                <p class="producoes">Produções</p>
              </div>
              <div class="col-sm-4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="">
      <div class="container-fluid">
        <div class="jumbotron">
          <h1>Lorem ipsum</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
          <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </section>

    <footer>
      <?php include 'rodape.php'; ?>
    </footer>

  </body>
</html>

<script>
    $(function() {
      $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
          $(".navbar").addClass("menu2");
        } else {
          $(".navbar").removeClass("menu2");
        }
      });
    }); 

</script>

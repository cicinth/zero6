<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include 'imports.php'; ?>
  </head>
  <body>
    <header>
      <?php include 'menu.php'; ?>
    </header>
    <section id="home" class = "home">
      <div class="container-fluid">
        <div class="row">
          <div class="wrapper">
            <video autoplay="" loop="" muted="" poster="screenshot.jpg" id="background">
                  <source src="img/zero6.mp4" type="video/mp4">
              </video>
            <!-- <img src="img/banner1.jpg" alt=""> -->
          </div>
        </div>
      </div>
    </section>
    <section id="quemsomos" class= "quemsomos">
        <?php include 'quemsomos.php'; ?>
    </section>
    <section id="galeria" class= "galeria">
        <?php include 'galeria.php'; ?>
    </section>
    <section id = "noticias" class = "noticias">
         <?php include 'noticias.php'; ?> 
    </section>
    <section id = "contato" class= "contato">
        <?php include 'contato.php'; ?>       
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


  jQuery(document).ready(function($) {
    $("#btnhome").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#home").offset().top}, 800);
   });
     $("#btnquemsomos").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#quemsomos").offset().top}, 800);
   });
   $("#btngaleria").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#galeria").offset().top}, 800);
   });
   $("#btnnoticias").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#noticias").offset().top}, 800);
   });
   $("#btncontato").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#contato").offset().top}, 800);
   });
  });

</script>

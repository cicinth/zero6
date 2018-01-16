<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id = "btnhome" href="#home">zerø6</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" id = "myNavbar" >
        <li><a id = "btnquemsomos" href="#quemsomos">Quem somos</a></li>
        <li><a id="btngaleria" href="#galeria">Galeria</a></li>
        <li><a id = "btnnoticias" href="#noticias">Noticias</a></li>
        <li><a id = "btncontato"  href="#contato">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>


<script>
$(function() {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
      $(".navbar").addClass("teste2");
    } else {
      $(".navbar").removeClass("teste2");
    }
  });
}); 

 </script>
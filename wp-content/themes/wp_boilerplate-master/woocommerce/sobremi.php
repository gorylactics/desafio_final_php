<?php get_header() ?>

<body>
<div>
<form>
  <div class="form-group mt-5">
    <h2 class="form-group__titulo">CONTACTENOS</h2>
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese sus nombres">
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su asunto">
    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Ingrese su email">
    
  </div>
  <div class="form-group">
    
    <input type="text-area" class="form-control--mensaje" placeholder="Envienos su mensaje">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

<div class="logo col-lg-12">
  <a href="inicio.html"><img src="./assets/img/inicio/logo2.svg" alt=""><p class="volver">volver</p></a>
</div>


<?php get_footer() ?>
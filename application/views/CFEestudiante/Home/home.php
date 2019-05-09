<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CFEhome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
<div id="contenedorhome">

<!-- NavBar -->
<!-- =================================================== -->
<nav class="navbar navbar-expand-lg" :style="navbar()">
  <a class="navbar-brand" href="#" :style="blanco()">CFE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a :style="blanco()" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a :style="blanco()" class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a :style="blanco()" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a :style="blanco()" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button :style="blanco()" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Panel Izquierdo -->
<!-- =================================================== -->
<section :style="panel()">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                <button :style="verdeclaro()" type="button" class="list-group-item list-group-item-action active" disabled>
                    Panel Administrativo
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                    Inicio
                </button>
                <button type="button" class="list-group-item list-group-item-action">
                   Solicitar </button>
                <button type="button" class="list-group-item list-group-item-action">Practicantes</button>
                <button type="button" class="list-group-item list-group-item-action">Registrar Estudiante</button>
                <button type="button" class="list-group-item list-group-item-action">Reglamento</button>
                </div>
            </div>
        </div>
    </div>
</section>

<center>
    <button type="button" class="btn btn-success" :style="solicitar()">Solicitar Practicante</button>
    <p :style="derechos()">COMISIÓN FEDERAL DE ELECTRICIDAD</p>
</center>



<!--<div class="container" :style="panel()">
    d
</div>-->

<script type="text/javascript">
	new Vue({
		el: "#contenedorhome",
		data:{
            
		},
		methods:{
			/*years_mas:function(){
				this.years_php += 1;
			},
			years_menos:function(){
				this.years_php -= 1;
				if(this.years_php <= 0){
					this.years_php = 0;
				}
            },*/
            navbar:function(){
				return {
                    'background-color': '#0C5101'};
			},
            panel:function(){
				return {
                    'margin-top': '5%'};
			},
            verde:function(){
                return {
                    'background-color': '#0C5101'};
            },
            verdeclaro:function(){
                return {
                    'background-color': '#6DA36E'};
            },
            solicitar:function(){
                return {
                    'margin-top': '-200px',
                    'width': '30%',
                    'height': '4rem',
                    'border-radius': '15px',
                    'font-size': '25px'};
            },
            blanco:function(){
                return {
                    'color': 'white'};
            },
            derechos:function(){
				return {
                    'font-size':'10px',
                    'color': 'green',
                    'margin-top':'10%'};
			},
		}
	});
</script>
</div>
</body>
</html>
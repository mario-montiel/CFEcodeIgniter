<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white;}

    @media (max-width: 600px)
	{
		#label{
		font-size: 5px;
        }
	}
	</style>
</head>
<body>
<div id="contenedorlogin">

<nav class="navbar" :style="navbar()">
  <span class="navbar-brand mb-0 h1" :style="logo()">CFE</span>
</nav>

<?php echo validation_errors(); ?>
<?php echo form_open('CFEestudiante/Login/LoginController/verificacion/'); ?>

<center>
    <div :style="contenedor()">
        <div id="card" class="card" :style="card()">
            <div class="card-body">
                <h3 id="title" class="card-title text-center" :style="titulo()">Iniciar Sesión</h3>
                        <div class="form-group row">
                            <div class="col-4">
                                <label id="label" for="inputEmail3" class="col col-form-label" :style="label()">Usuario</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario" name="usuario">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4">
                                <label id="label" for="inputPassword3" class="col col-form-label" :style="label()">Contraseña</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" name="password">
                            </div>
                        </div>
                        <button value="Login" class="btn btn-success" type="submit" :style="boton()">Acceder</button>
                    </form>
                    <p :style="derechos()">COMISIÓN FEDERAL DE ELECTRICIDAD</p>
            </div>
        </div>
    </div>
</center>

<script type="text/javascript">
	new Vue({
		el: "#contenedorlogin",
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
                    'background-color': '#277F18',
                    'margin': '0',
                    'color': 'white'};
			},
            logo:function(){
				return {
                    'font-size':'30px'};
			},
			card:function(){
				return {
                    'background-color':'#277F18',
                    'height': '430px',
                    'color': 'black',
                    'padding-top': '3%',
                    'padding-bottom': '3%'};
			},
            contenedor:function(){
				return {
                    'margin-top':'7%',
                    'width': '40%'};
			},
            titulo:function(){
				return {
                    'margin-top':'1%',
                    'padding-bottom':'7%',
                    'color': 'white'};
			},
            label:function(){
				return {
                    'font-size':'20px',
                    'color': 'white'};
			},
            boton:function(){
				return {
                    'font-size':'20px',
                    'color': 'white',
                    'width':'30%',
                    'margin-top':'20px'};
			},
            derechos:function(){
				return {
                    'font-size':'10px',
                    'color': 'white',
                    'margin-top':'10%'};
			},
            alerta:function(){
				return {
                    'font-size':'20px',
                    'text-align':'center'};
			}
		}
	});
</script>
</div>
</body>
</html>
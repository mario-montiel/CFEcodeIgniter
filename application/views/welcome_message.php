<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script>


	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<template v-if="nombre">
		<h1>Ingrese su Nombre</h1>
		<h1 >{{ gender == 'm' ?  'Bienvenido' : 'Bienvenida' }}, {{ nombre }}</h1>
		<p>Disfrute de su instancia</p>
	</template>
	<p v-else>Por favor escribe tu nombre</p>
	<p v-if="!nombre" class="alert alert-danger" >
		Este campo es obligatorio 
	</p>
	<select v-model="gender" class="form-control">
		<option value="m">Masculino</option>
		<option value="f">Femenino</option>
	</select>
	<input v-model="nombre" type="text" class="form-control">
	<h3>Seleccione los años de experiencia que tiene programando en php</h3>
	<br>
	Respuesta: {{ years_php}}
	<button type="button" 
			:class="{btn: true, 'btn-success': years_php > 9}"
			@click.prevent="years_mas"
			:style="estilos()">+</button>
	<button type="button" class="btn" @click.prevent="years_menos">-</button>
	<br>
	<br>
	<h3>Seleccione los años de experiencia que tiene programando en javascript</h3>
	<br>
	<br>
	<pre class="alert alert-success">{{ $data | json }}</pre>


<br>
<br>
<br>

<input type="text" class="form-control" v-model="nuevaTarea" v-on:keyup.enter="agregar()">
<button class="btn btn-success" @click="agregar()" >Agregar</button>

{{nuevaTarea}}

<div class="mt-3" v-for="(item, index) of tarea">
	<div :class="['alert', item.estado ? 'alert-success' : 'alert-danger']">
		<div class="d-flex justify-content-between align-items-center">

			<div>
				{{item.nombre}} - {{item.estado}}
			</div>
			<div>
				<button class="btn btn-success btn-sm" @click="editar(index, item.estado)">Ok</button>
				<button class="btn btn-danger btn-sm" @click="quitar(index)">X</button>
			</div>

		</div>
	</div>

</div>

<!-- Propiedades Computadas-->
<div>
	<center>{{invertido}}</center>
	<br>
	<br>
	<div class="progress">
		<div class="progress-bar" 
		role="progressbar" 
		:style="{'width': num+'%'}"
		:class="color"
		aria-valuenow="25" 
		aria-valuemin="0" 
		aria-valuemax="100">{{num}}</div>
	</div>
	<br>
	<br>
	<button class="btn btn-primary" @click="years_mas">+</button>
	<button class="btn btn-danger" @click="years_menos">-</button>
	{{num}}
</div>
<!-- .................. -->

</div>

<hr>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


<script type="text/javascript">

	/*const store = new Vuex.Store({
		state: {
			numero: 10
		}
	});*/

	new Vue({
		el: "#container",
		data:{
			nombre: "",
			gender : "",
			years_php: 0,
			num: 0,
			tarea: [],
			nuevaTarea: ''
		},
		methods:{
			years_mas:function(){
				this.years_php += 1;
				this.num += 1;
				if(this.num >= 100){
					this.num = 100;
				}
			},
			years_menos:function(){
				this.years_php -= 1;
				this.num -= 1;
				if(this.years_php <= 0 || this.num <= 0){
					this.years_php = 0;
					this.num = 0;
				}
			},
			estilos:function(){
				//return {'background-color':'transparent'};
			},
			agregar:function(){
				this.tarea.push({
					nombre: this.nuevaTarea,
					estado: false
				});
				this.nuevaTarea = '';
				localStorage.setItem('vue-pruebon', JSON.stringify(this.tarea));
			},
			editar:function(index, estado){
				this.tarea[index].estado = true;
				localStorage.setItem('vue-pruebon', JSON.stringify(this.tarea));
			},
			quitar:function(index){
				this.tarea.splice(index, 1);
				localStorage.setItem('vue-pruebon', JSON.stringify(this.tarea));
			}
		},
		created: function(){
			let datosDB = JSON.parse(localStorage.getItem('vue-pruebon'));
			console.log(datosDB);
			if(datosDB === null){
				this.tarea = [];
			}
			else{
				this.tarea = datosDB;
			}
		},
		computed:{
			invertido(){
				return this.nombre.split('').reverse().join('');
			},
			color(){
				return {
					'bg-success' : this.num <= 10,
					'bg-secondary' : this.num > 10 && this.num < 20,
					'bg-warning' : this.num > 30,
					'bg-danger' : this.num > 50,
				}
			}
		}
	});
</script>

</body>
</html>
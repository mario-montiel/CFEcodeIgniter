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
                    'background-color': '#00796b'}; //#00796b
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
                    'background-color': '#00796b',
                    'opacity': '.4'};
            },
            solicitar:function(){
                return {
                    'margin-top': '-600px',
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
$(document).ready(function(){
    $("#Busqueda").click(function(){
	 zona=$("#Zona").val();
	 precio=$("#Precio").val();
	 dormitorios=$("#Dormitorios").val();
	 banos=$("#Banos").val();
	 var todos=$("#form_buscar").serialize();
	 alert(todos);
	 $.ajax({
	    type: "POST",
	    url: "/php/buscar_bdd.php",
	    data: todos,
	    success: function(html){
  	     alert(html);
	 $("#respuesta").html(html);

},



	error:function(){
		alert("error de ajax");

	}
});

     });
});

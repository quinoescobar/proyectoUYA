$(document).ready(function()
{
document.body.onload = function() {novedades()};
// document.getElementsByTagName('body').onload = function() {novedades()};
  function novedades()
  {
    $.ajax(
    {
      url: "/alu4635/php/novedades.php",
      type: "POST",
      dataType:'json',

      success: function(response)
      {
        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // | id_pu | fk_pu | descripcion | zona         | precio | banho | habitaciones |
        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // |    81 |     4 |             | finca-espana |    400 |     3 |            3 |
        // |    80 |     4 | asdasd      | la-laguna    |    400 |     3 |            3 |
        // |    77 |     4 | sdfsdf      | la-laguna    |    300 |     4 |            3 |
        // |    75 |     4 | kkkkkk      | la-cuesta    |    500 |     2 |            2 |
        // +-------+-------+-------------+--------------+--------+-------+--------------+
        // if(response.type=='suss')
        //
        //

        //Aqui empieza a ponerse todo el json con un for

        if(response.type=='suss')
        {
        var length = Object.keys(response.novedad).length;
            for(i=0; i<length;i++)
            {
              var idCada="'"+response.novedad[i].id_pu+"'";
              var foto="'"+response.novedad[i].foto+"'";
              var numeroID=response.novedad[i].id_pu;
              var zona=response.novedad[i].zona;
              var habitaciones=response.novedad[i].habitaciones;
              var banos=response.novedad[i].banho;
              var precio=response.novedad[i].precio;
              var desc=response.novedad[i].descripcion;
              // var novedadesN="<div id='"+idCada+"'><p>Zona</p>"+zona+"</div>"
              // var botonVer="<button id="+idCada+" type='button' class='btn btn-default btn-xs' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Ver</button>";
              var botonCon="<button data-id="+idCada+"id='contactar' type='button' class='btn btn-default btn-lg' class='btn btn-default btn-lg'><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Contactar</button>";
              // var novedadesN ="<tr><td class='hidden-xs' style='visibility:hidden;'>"+numeroID+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+botonVer+"</td><td>"+botonCon+"</td></tr>";
              var novedadesN ="<tr><td class='hidden-xs' style='visibility:hidden;' >"+numeroID+"</td><td><img class='img-rounded img-responsive' alt='foto de la publicacion' width='200' height='200' src="+foto+"></td><td>"+precio+"</td><td>"+zona+"</td><td>"+habitaciones+"</td><td>"+banos+"</td><td>"+desc+"</td><td>"+botonCon+"</td></tr>";

              // $("#tablaNovedades").append(novedadesN);
              $('#nohayRes').css("visibility","hidden");
              $("#tablaNovedades").css("visibility","visible");
              $("#tablaNovedades").append(novedadesN);

            }
        }else{
          // var novedadesNo="<h1>No hay novedades</h1>";
          // $("#tablaNovedades").append(novedadesNo);
          $('#tablaNovedades').css("visibility","hidden");
          $("td").remove();
          $('#nohayRes').css("visibility","visible");

        }
        var elBoton="<script type='text/javascript' src='/alu4635/js/contactar.js' ></script>";
        $("#tablaNovedades").append(elBoton);
      },//cierro succes
      error: function(jqXHR,exception)
      {
        if (jqXHR.status === 0) {
           alert('Not connected.\nPlease verify your network connection.');
       } else if (jqXHR.status == 404) {
         alert('The requested page not found. [404]');
       } else if (jqXHR.status == 500) {
         alert('Internal Server Error [500].');
       } else if (exception === 'parsererror') {
         alert('Requested JSON parse failed.');
       } else if (exception === 'timeout') {
         alert('Time out error.');
       } else if (exception === 'abort') {
         alert('Ajax request aborted.');
       } else {
         alert('Uncaught Error.\n' + jqXHR.responseText);
       }
        alert("Error con ajax");
      },//cierro error

    });//cerrar ajax


  }//cerrar novedades



  $("#tablaNovedades tr td div").bind('keydown', function(event)
  {
    if(event.keyCode == 9)
    { //for tab key
      var currentDiv = event.target;
      $(currentDiv).parents("td").next("td").find("div").click();
      return false; // <== here
    }
  });








});//cerrar ready

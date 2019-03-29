$(function() {
  $("#btn-registro").on("click", function() {
    var formData = new FormData($("#registro")[0]);
    var ruta = "../acciones/accionregistro.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,

      success: function(datos) {

        //$("#resp").html(datos);
        alert('su registro fue creado con exito');
        document.location.href='login.php';
      }
    });
  });
});

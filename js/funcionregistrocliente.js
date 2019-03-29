$(document).on('ready',function(){

 $('#btn-registrocliente').click(function(){
 var url = "acciones/accionregistrocliente.php";
  alert('holas');
 $.ajax({
    type: "POST",
    url: url,
    data: $("#registrocliente").serialize(),
    success: function(data)
    {
      alert('su registro fue creado con exito');
      document.location.href='login.php';
    }
    }
  });

 });
});

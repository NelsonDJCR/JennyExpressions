function validarimg() {
  if (document.getElementById("img").files.length == 0) {
    Swal.fire({
      icon: "error",
      title: "Datos incompletos",
      text: "Seleccione una imagen para continuar",
    });
    return false;
  }
}
$("#btn_data").click(function () {
   var data = $("#form_data").serialize();
   
   $.ajax({
       type: "post",
       url:  "../controller/update.product.data.php",
       data: data,
       success:function (r) {
           if (r==1) {
            Swal.fire({
                icon: 'success',
                title: 'Perfecto',
                text: 'Los datos han sido actualizados',
              })
           } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Error del servidor',
              })
           }
       }
   });
   return false;
});

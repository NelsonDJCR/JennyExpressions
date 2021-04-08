$(document).ready(function () {

  var nameCatalog = $("#nameCatalog").val();
  var descriptionCatalog = $("#descriptionCatalog").val();
  var data = "name="+nameCatalog+"&"+"description="+descriptionCatalog;
  $("#RegisterCatalogue_Button").click(function () {

    alert(data);

    Swal.fire({
      title: "¿Desea guardar el catálogo?",
      text: 'Podrá editarlo en la sección "listas" ' + data,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Guardar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "POST",
          url: "controller/registerCatalogue.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              Swal.fire(
                "¡Guardado exitosamente!",
                "Ahora puedes agregar productos con este catálogo",
                "success"
              );
            } else {
              Swal.fire(
                "Error del Servidor",
                "Contacta al desarrollador para más info.",
                "error"
              );
            }
          },
        });
        return false;
      }
    });
    return false;
  });
});

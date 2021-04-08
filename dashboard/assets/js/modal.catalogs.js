$("#myTable").load("tables/table.catalogs.php");

$(document).ready(function () {
  $("#btnClose").click(function () {
    $("#contanier_modal").css("display", "none");

    return false;
  });
  $("#modal").click(function () {
    $("#contanier_modal").css("display", "none");
    return false;
  });
  $("#modalUpdate").click(function () {
    var data = $("#updateData").serialize();

    Swal.fire({
      title: "¿Actualizar?",
      text: "¿Desea actualizar el Catálogo?",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, Actualizar!",
      cancelButtonText: "No, Cancelar",
    }).then((result) => {
      if (result.value) {
        $.ajax({
          type: "post",
          url: "../controller/update.catalog.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              $("#myTable").load("tables/table.catalogs.php");
              $("#contanier_modal").css("display", "none");
              Swal.fire({
                icon: "success",
                title: "Perfecto",
                text: "Los cambios han sido aplicados",
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error del Servidor",
                text: "Si persiste el error comuniquese con el desarrollador",
              });
            }
          },
        });
        return false;
      } else {
        Swal.fire({
          icon: "error",
          title: "Perfecto",
          text: "No se aplicaron cambios",
        });
      }
    });
    return false;
  });
});
function edit(data) {
  $("#contanier_modal").css("display", "block");
  d = data.split("||");
  $("#update_name").val(d[0]);
  $("#update_description").val(d[1]);
  $("#uptate_id").val(d[2]);
}
function deleteCatalog(data) {
  Swal.fire({
    title: "Desea eliminar este Catálogo",
    text: "Si elimina este Catálogo eliminará todos los productos que continen",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    confirmButtonText: "Eliminar Catálogo y sus productos",
    cancelButtonText: "No, cancelar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "post",
        url: "../controller/delete.catalogs.php",
        data: data,
        success: function (r) {
          $("#myTable").load("tables/table.catalogs.php");
          
          if (r == 1) {
            // =============//===============
            let timerInterval;
            Swal.fire({
              icon: "warning",
              title: "Procesando...",
              html: "Eliminando catálogo y producto, completado en  <b></b> milisegundos.",
              timer: 7000,
              timerProgressBar: true,
              onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                  const content = Swal.getContent();
                  if (content) {
                    const b = content.querySelector("b");
                    if (b) {
                      b.textContent = Swal.getTimerLeft();
                    }
                  }
                }, 100);
              },
              onClose: () => {
                clearInterval(timerInterval);
              },
            }).then((result) => {
              /* Read more about handling dismissals below */
              if (result.dismiss === Swal.DismissReason.timer) {
                Swal.fire("Perfecto", "Se ha completado la solicitud", "success");
              }
            });
            // =============//===============
          } else {
            Swal.fire("Error", "Error del servidor", "error");
          }
        },
      });
    }
  });
  return false;
}

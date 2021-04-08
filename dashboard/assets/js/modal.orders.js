$("#myTable").load("tables/table.orders.php");
function edit(data) {
  $("#contanier_modal").css("display", "block");
  d = data.split("||");
  $("#id").val(d[0]);
  $("#state").val(d[1]);
}
$(document).ready(function () {
  $("#btnClose").click(function () {
    $("#contanier_modal").css("display", "none");
  });
  $("#modal").click(function () {
    $("#contanier_modal").css("display", "none");
  });
  //   ACTUALIZAR DATOS
  $("#btn_state").click(function () {
    var data = $("#form_state").serialize();
    var state = $("#state").val();
    if (state == 0) {
      Swal.fire({
        icon: "warning",
        title: "Error",
        text: "Seleccione un estado",
      });
      return false;
    }
    Swal.fire({
      title: "¿Actualizar?",
      text: "¿Desea actualizar el estado?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, actualizar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "../controller/update.state.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              $("#myTable").load("tables/table.orders.php");
              Swal.fire({
                icon: "success",
                title: "¡Perfecto!",
                text: "El estado ha sido actualizado",
              });
              $("#contanier_modal").css("display", "none");
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Error en el servidor",
              });
            }
          },
        });
        return false;
      }
    });
    return false;
  });
});
// DELETE USER

function deleteOrder(data) {
  var d = "id=" + data;
  Swal.fire({
    title: "Eliminar Orden?",
    text: "Esta acción no tiene retorno",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "post",
        url: "../controller/delete.order.php",
        data: d,
        success: function (r) {
          if (r == 1) {
            $("#myTable").load("tables/table.orders.php");
            Swal.fire("Eliminado!", "El pedido ha sido eliminado", "success");
          } else {
            Swal.fire("Error", "Error en el servidor", "error");
          }
        },
      });
    }
  });
}

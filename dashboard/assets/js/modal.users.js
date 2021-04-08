$("#myTable").load("tables/table.users.php");
function updateUser(data) {
  $("#contanier_modal").css("display", "block");
  d = data.split("||");
  $("#id").val(d[0]);
  $("#name").val(d[1]);
  $("#phone").val(d[2]);
  $("#city").val(d[3]);
  $("#email").val(d[4]);
  $("#address").val(d[5]);
}
$(document).ready(function () {
  $("#btnClose").click(function () {
    $("#contanier_modal").css("display", "none");
  });
  $("#modal").click(function () {
    $("#contanier_modal").css("display", "none");
  });
  //   ACTUALIZAR DATOS
  $("#btn_user").click(function () {
    var data = $("#form_user").serialize();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var city = $("#city").val();
    var email = $("#email").val();
    if (name == "" || phone == "" || city == "" || email == "") {
      Swal.fire({
        icon: "warning",
        title: "Error",
        text: "Hay campos vacios",
      });
      return false;
    }
    Swal.fire({
      title: "¿Desea eliminar el usuario?",
      text: "Esta acción no se puede deshacer",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "post",
          url: "../controller/update.user.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              $("#myTable").load("tables/table.users.php");
              Swal.fire({
                icon: "success",
                title: "¡Perfecto!",
                text: "El usuario ha sido eliminado",
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

function deleteUser(data) {
  var d = "id=" + data;
  Swal.fire({
    title: "¿Eliminar?",
    text: "¿Desea eliminar este usuario?",
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
        url: "../controller/delete.user.php",
        data: d,
        success: function (r) {
          if (r == 1) {
            $("#myTable").load("tables/table.users.php");
            Swal.fire("Eliminado!", "El usuario ha sido eliminado", "success");
          } else {
            Swal.fire("Error", "Error en el servidor", "error");
          }
        },
      });
    }
  });
}

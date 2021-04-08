$("#myTable").load("tables/table.products.php");

function editProduct(data) {
  location.href = "update.product.php?id=" + data;
}
function deleteProduct(data) {
  var d = "id=" + data;
  Swal.fire({
    title: "¿Eliminar?",
    text: "¿Desea eliminar este producto?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, eliminar",
    cancelButtonText: "No, cancelar",
  }).then((result) => {
    if (result.value) {
      $.ajax({
        type: "post",
        url: "../controller/delete.product.php",
        data: d,
        success: function (r) {
          if (r == 1) {
            $("#myTable").load("tables/table.products.php");
            Swal.fire("Eliminado!", "El producto ha sido eliminado", "success");
          } else {
            Swal.fire("Error", "Error en el servidor", "error");
          }
        },
      });
    }
  });
}

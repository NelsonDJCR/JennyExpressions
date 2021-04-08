$(document).ready(function () {
  $("#productBtn").click(function () {
    var name = $("#productName").val();
    var price = $("#productPrice").val();
    var size = $("#productSize").val();
    if (name == "" || price == "" || size == "") {
      Swal.fire({
        icon: "error",
        title: "Datos incompletos",
        text: "Complete todos los campos para continuar",
      });
      return false;
    } else if (document.getElementById("img").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "Datos incompletos",
        text: "Seleccione una imagen para continuar",
      });
      return false;
    } else if (name.length < 5 || name.length > 30) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El nombre debe tener entre 5 a 15 carácteres",
      });
      return false;
    } else if (isNaN(price)) {
      Swal.fire("Error", "No ha ingresado un número en el precio", "error");
      return false;
    } else if (price.length < 4 || price.length > 6) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El precio debe ser mayor a $1.000 y menor de $900.000",
      });
      return false;
    } else if (size.length < 1 || size.length > 14) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Debe incluir al menos una talla",
      });
      return false;
    }
  });
});

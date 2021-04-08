$(document).ready(function () {
  $("#catalogSave_btn").click(function () {
    var data = $("#catalogSave_form").serialize();
    var name = $("#catalogSave_name").val();
    var desc = $("#catalogSave_desctiption").val();

    if (name == "" || desc == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "No puedes dejar espacios en blanco",
      });
      return false;
    } else if (name.length < 3) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "El nombre es muy corto",
      });
      return false;
    } else if (desc.length < 15) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "La descripción debe tener minimo 15 caracteres",
      });
      return false;
    } else {
      Swal.fire({
        title: "Guardar Catálogo",
        text: "¿Desea agregar productos al catálogo?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, agregar Productos",
        cancelButtonText: "No, solo guardar",
      }).then((result) => {
        if (result.value) {
          SaveRedic();
        } else {
          justSave();
        }
      });
      $("#catalogSave_name").val("");
      $("#catalogSave_desctiption").val("");
      return false;

      function justSave() {
        $.ajax({
          type: "post",
          url: "../controller/save.catalog.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              Swal.fire(
                "¡Catálogo Guardado!",
                "Puede agregar productos más adelante",
                "success"
              );
            } else {
              Swal.fire("Error!", "Error en el servido" + data, "error");
            }
          },
        });
        return false;
      }
      function SaveRedic() {
        $.ajax({
          type: "post",
          url: "../controller/save.catalog.php",
          data: data,
          success: function (r) {
            if (r == 1) {
              // Top
              let timerInterval;
              Swal.fire({
                title: "Catálogo guardado",
                html: "Redireccionando en <b></b> milisegundos.",
                icon: "success",
                timer: 3000,
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
                if (result.dismiss === Swal.DismissReason.timer) {
                  var data = "name=" + name + "&description=" + desc;
                  $.ajax({
                    type: "post",
                    url: "../controller/captureId.php",
                    data: data,
                    success: function (r) {
                      window.location = "save.newProducts.php?id=" + r;
                    },
                  });
                }
              });

              // End
            } else {
              Swal.fire("Error!", "Error en el servido" + data, "error");
            }
          },
        });
        return false;
      }
    }
  });
});

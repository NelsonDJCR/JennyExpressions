<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../assets/css/styles.form.css" />
  <link rel="stylesheet" href="../assets/plugins/font/font.css" />
  <link rel="stylesheet" href="../../plugins/animate/animate.min.css">
  <script src="../../plugins/jquery.js"></script>
  <title></title>
</head>
<!-- https://images.pexels.com/photos/3315286/pexels-photo-3315286.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 -->



<body>
  <div id="loader" class="box_before ">
    <img src="https://i.pinimg.com/originals/47/92/69/4792695880c4d5a9462ca00ff6ff1050.gif" alt="">
  </div>


  <div class="container__">
    <div class="container">

      <form action="" method="post" class="form" id="catalogSave_form">
        <h1 class="title title-brig">Agregar nueva Brigada</h1>
        <br>
        <label for="catalogSave_name" class="label ">Nombre</label>
        <input name="catalogSave_name" id="catalogSave_name" type="text" class="input input-text border " placeholder="Nombre de la brigada">

        <label for="catalogSave_desctiption">Descripción</label>
        <textarea name="catalogSave_desctiption" id="catalogSave_desctiption" class="input textarea border" placeholder="Descripción de la brigada"></textarea>
        <br>
        <input type="submit" id="catalogSave_btn" value="¡Publicar!" class="btn">
      </form>
    </div>
  </div>

</body>
<script src="../assets/plugins/Jquery/jquery.js"></script>
<script src="../assets/js/save.catalog.js"></script>
<!-- <link rel="stylesheet" href="../controller/save.catalog.php"> -->

</html>
<style>
  .container__ {
    background-image: url("https://i.pinimg.com/originals/36/f0/94/36f0949c623b61a235fd6645fa507236.jpg");
  }
</style>
<script>
  $(document).ready(function() {

    setTimeout(function() {
      $("#loader").addClass('animate__animated').addClass('animate__fadeOut');
    }, 2000);
    setTimeout(function() {
      $("#loader").remove();
    }, 3000);
    setTimeout(function() {
      $(".title-brig").addClass('animate__animated').addClass('animate__bounce');
    }, 2200);
    
  });
  $("#catalogSave_btn").click(function () {
    $(this).addClass('animate__animated').addClass('animate__tada')
    setTimeout(function() {
      $("#catalogSave_btn").removeClass('animate__animated').removeClass('animate__tada');
    }, 2200);
    return false;
  })
</script>
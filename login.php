<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Chat Time!! <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/kjkiqtxg.json"
                trigger="hover"
                colors="outline:#121331,primary:#000000,secondary:#000000,tertiary:#ffffff"
                style="width:100px;height:80px; top:20px; left: 10px;">
            </lord-icon>

      </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Correo Electrónico</label>
          <input type="text" name="email" placeholder="Email" required>
        </div>
        <div class="field input">
          <label>Contraseña</label>
          <input type="password" name="password" placeholder="********" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="vamos al chat!!">
        </div>
      </form>
      <div class="link">No te has registrado? <a href="index.php">Registrate ahora!!</a></div>
    </section>
  </div>
  
  <script src="./javascript/pass-show-hide.js"></script>
  <script src="./javascript/login.js"></script>

</body>
</html>

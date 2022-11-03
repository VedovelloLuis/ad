<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SAGRAC - Edição de Cursos</title>
  <link rel="icon" type="image/x-icon" href="../img/sagracIcone.ico" />
  <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/diretorStyle.css" />
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <img src="../img/sagracletras.png" width="110%" height="110%" align="center" />

      </div>
      <ul class="list-unstyled components">
        <hr>
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Criação de Grade</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="diretorInserirCurso.php">Inserir Curso </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php">Editar Curso</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php">Visualização dos Cursos</a>
            </li>
          </ul>
        </li>
        <hr>
        <li class="active">
          <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Professores</a>
          <ul class="collapse list-unstyled" id="homeSubmenu2">
            <li>
              <a href="diretorInserirCurso.php">Inserir Professor </a>
            </li>
            <li>
              <a href="diretorEditarCurso.php">Editar Professor</a>
            </li>
            <li>
              <a href="diretorVisualizarCursos.php">Visualizar Professores</a>
            </li>
          </ul>
        </li>
        <hr>


        <li>

          <a href="diretorHome.php">Home</a>
          <a href="sobre.php">Sobre</a>
          <a href="login.php">Dashboard</a>
          <a href="login.php">Configurações</a>
          <a href="login.php">Logout</a>
          <ul class="list-unstyled CTAs"></ul>
        </li>
      </ul>
    </nav>
    </nav>
    <div id="content">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="navbar-btn">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <h4>Edição de Cursos</h4>
          <form action="edita.php" method="POST" target="iframeEdita">

            <select name="Curso" id="curso">
              <!-- FAZ A VISUALIZAÇÃO PARA CONECTAR -->
              <?php

              include('config.php');

              $selecao = "SELECT * FROM tab_curso WHERE periodo = 'Vespertino'";
              $result_query = mysqli_query($conexao, $selecao);
              if (mysqli_query($conexao, $selecao)) {
                echo "<label for='Curso'>Escolha um curso:</label>";
                echo "<optgroup label='Vespertino'>";
                while ($row = mysqli_fetch_array($result_query)) {
                  print "<option value=" . $row['cursoId'] . ">";
                  print $row['cursoTurma'];
                  print "</option>";
                };
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
              }
              ?>

              </optgroup>
            </select>
            <input type="submit" name="selecionar" value="Selecionar" id="selecionar" />
          </form>
        </div>
      </nav>
      <iframe frameborder="0" name="iframeEdita" width="100%" height="100%" sandbox="allow-forms";>...</iframe>
    </div>
  </div>

  <script src="../js/sidebar.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>
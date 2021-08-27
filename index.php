<?php 
  include_once 'header.php';
  include_once 'controllers/db_connect.php';

  $sql = "SELECT P.nome AS nome_professor, C.nome AS nome_curso, A.sala AS sala_aula, A.turno AS turno_aula, A.hora_inicio AS hora_inicio_aula, A.hora_fim AS hora_fim_aula FROM `aulas` AS A LEFT JOIN `professor` AS P ON A.id_professor = P.id LEFT JOIN `curso` AS C ON A.id_curso = C.id WHERE A.hora_fim > NOW();";
  $result = mysqli_query($conn, $sql);

?>

<div class="content alignVertical">
  <h1 class='oi col-12'>Horários</h1>
  <div class="listAulas col-10 p-10 alignVertical">

  <?php
    while ($row = mysqli_fetch_assoc($result)):
  ?>

    <div class="col-4 flex flex-wrap">
      <div class="listAulas__aula col-11 alignVertical">
        <div class="col-4 alignVertical">
          <img src="https://via.placeholder.com/150/0000FF/808080">
        </div>
        <div class="col-8">
          <p>Professor: <?= $row["nome_professor"] ?></p>
          <p>Curso: <?= $row["nome_curso"] ?></p>
          <p>Hora de Início: <?= $row["hora_inicio_aula"] ?></p>
          <p>Hora do Fim: <?= $row["hora_fim_aula"] ?></p>
          <p>Sala: <?= $row["sala_aula"] ?></p>
        </div>
      </div>
    </div>

    <?php 
      endwhile;
    ?>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
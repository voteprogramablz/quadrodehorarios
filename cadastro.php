<?php
include_once 'header.php';
?>

</head>
<body>
  <div class="content alignVertical formContainer">
    <div class="col-12">
      <button class="tablink" onclick="tabForm('ProfessorTab')" id="defaultOpen">Cadastrar Professor</button>
      <button class="tablink" onclick="tabForm('AulaTab')">Cadastrar Aula</button>
      <button class="tablink" onclick="tabForm('CursoTab')">Cadastrar Curso</button>
    </div>
    <div id="ProfessorTab" class="tabcontent col-12">
      <form class="form alignVertical" id="professor">
        <div class="col-7" style="align-self: flex-start;">
          <h2>Cadastro de Professor</h2>
          <div class="input-container">
            <input id="professorName" class="input" type="text"/>
            <div class="cut"></div>
            <label for="professorName" class="placeholder">Professor</label>
          </div>
          <input type="submit" class="submit" value="Cadastrar"></input>
        </div>
      </form>
    </div>

    <div id="AulaTab" class="tabcontent col-12">
      <form class="form alignVertical" id="aula">
        <div class="col-7" style="align-self: flex-start;">
          <h2>Cadastro de Aula</h2>
          <div class="input-container">
            <input id="firstname" class="input" type="text"/>
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Aula</>
          </div>
          <input type="submit" class="submit" value="Cadastrar"></input>
        </div>
      </form>
    </div>

    <div id="CursoTab" class="tabcontent col-12">
      <form class="form alignVertical" id="curso">
        <div class="col-7" style="align-self: flex-start;">
          <h2>Cadastro de Curso</h2>
          <div class="input-container">
            <input id="cursoName" class="input" type="text"/>
            <div class="cut"></div>
            <label for="cursoName" class="placeholder">Curso</>
          </div>
          <input type="submit" class="submit" value="Cadastrar"></input>
        </div>
      </form>
    </div>


  </div>
<script>
function tabForm(cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  document.getElementById(cityName).style.display = "block";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<?php
include_once 'footer.php';
?>
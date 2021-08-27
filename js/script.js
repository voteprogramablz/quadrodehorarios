// Cadastro de professor

$('form#professor').submit(function () {
  if ($('#professorName').val().trim()) {
    $.ajax({
        url: 'controllers/controllerProfessor.php',
        type: 'POST',
        dataType: 'json',
        data: {
            'professor': $('#professorName').val()
        }
    }).always(function (response) {cursoName
        console.log(response);
    });
  
    return false;
  }
});

// Cadastro curso

if ($('#cursoName').val().trim()) {
  $('form#curso').submit(function () {
    $.ajax({
        url: 'controllers/controllerCurso.php',
        type: 'POST',
        dataType: 'json',
        data: {
            'curso': $('#cursoName').val()
        }
    }).always(function (response) {
        console.log(response);
    });
  
    return false;
  }); 
}

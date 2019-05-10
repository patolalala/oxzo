// Validacion de RUT Chileno
$('#rutEmpresa, #ErutEmpresa').Rut({
  on_error: function(){
    swal({
      type: 'warning',
      title: 'Malas noticias',
      text: 'RUT incorrecto, intente nuevamente'
    }).then((result) => {
      if (result.value) {
        document.getElementById("rutEmpresa").focus()
        document.getElementsByName("rutEmpresa")[0].value="";
        document.getElementsByName("rutEmpresa")[0].placeholder="11.111.111-1";
        $("#rutEmpresa").get(0).setSelectionRange(0,0)
      }
    })
  },
  format_on: 'keyup'
})
// ToolTip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()

})
$(document).ready(function () {
$('#dtBasicExample').DataTable({
  "info": false,
  "paging": false
});

});

$(document).ready(function () {
  // Event ketika keyword ditulis
  $('#keyword').on('keyup', function () {
    $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());
  });
});

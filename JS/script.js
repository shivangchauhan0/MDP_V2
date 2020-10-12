window.onload = function triggerFunction() {
  var width = window.innerWidth;
  if (width > 600) {
    $("#menu-toggle").trigger("click");
  }
};
// Sidebar script
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
// Ajax
$(document).ready(function () {
  $("#sup-depart").on("change", function () {
    var supDepart = $(this).val();
    $.ajax({
      method: "POST",
      url: "register.php",
      data: { sup_depart: supDepart },
      dataType: "html",
      success: function (data) {
        $("#department").html(data);
      },
    });
  });
});
function checkDelete() {
  return confirm("Are you sure you want to Delete?");
}
function checkUndo() {
  return confirm("Are you sure you want to undo?");
}
// PRINT REPORT
// function printData() {
//   var divToPrint = document.getElementById("show-records-table");
//   newWin = window.open("");
//   newWin.document.write(divToPrint.outerHTML);
//   newWin.print();
//   // newWin.close();
// }

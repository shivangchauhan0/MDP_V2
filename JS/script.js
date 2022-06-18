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

let toggleSideNav = () => {
  let sideNav = document.getElementById('wrapper');
  sideNav.toggleClass("toggled");
  console.log('toggled');
}
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
function checkRecordDelete() {
  return confirm("Are you sure you want to Delete the records of this user?");
}
function checkTimetableDelete() {
  return confirm("Are you sure you want to Delete the time table of this user?");
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

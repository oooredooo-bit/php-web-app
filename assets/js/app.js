$(document).ready(function () {
  // code here
  $("#btnSubmit").on("click", function () {
    $("form").submit();
  });

  $("#products").on("change", function () {
    $("#brand").html("<option>I was changed!</option>");
  });
});

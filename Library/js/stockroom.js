$("#showModal").click(function() {
  $(".modal").addClass("is-active");
});

$(".delete").click(function() {
   $(".modal").removeClass("is-active");
});

$(".is-danger").click(function() {
   $(".modal").removeClass("is-active");
});

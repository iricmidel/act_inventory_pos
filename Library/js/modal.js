$("#showModal").click(function() {
  $(".modal").addClass("is-active");
  $(".modal").removeClass("animated fadeOut");
});

$(".is-danger").click(function() {
  $(".modal").addClass("animated fadeOut").delay(500);
  setTimeout(func, 1000);
  function func() {
      $(".modal").removeClass("is-active");
    }
});


$("#showModalStockOut").click(function() {
  $(".modal2").addClass("is-active");
  $(".modal2").removeClass("animated fadeOut");
});

$(".is-danger").click(function() {
  $(".modal2").addClass("animated fadeOut").delay(500);
  setTimeout(func, 1000);
  function func() {
      $(".modal2").removeClass("is-active");
    }
});

  $(".form-check-input").on("change", function() {
    var filter = $("#filter");
    $.ajax({
      url: filter.attr("action"),
      data: filter.serialize(), // form data
      type: filter.attr("method"), // POST
      beforeSend: function(xhr) {
        filter.find("button").text("filteren..."); // changing the button label
        $("#response").fadeTo("normal", 0.4, function() {
          // Animation complete.
        });
        var img = $("<img />")
          .attr({
            id: "loaderImg",
            src: "/wp-content/uploads/2019/11/giphy.gif",
            alt: "loader",
            title: "loader"
          })
          .appendTo("#response");
      },
      success: function(data) {
        filter.find("button").text("filter bestemming"); // changing the button label back
        $("#response").html(data); // insert data
        $("#response").fadeTo("snormal", 1, function() {
          // Animation complete.
        });
      }
    });
    return false;
  });

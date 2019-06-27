/* attach a submit handler to the form */
$("#playlist").submit(function (event) {
    /* stop form from submitting normally */
    event.preventDefault();

    /* get some values from elements on the page: */
    var $form = $(this),
        term = $form.find('input[name="search"]').val();
        url = $form.attr("action");
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          })
    /* Send the data using post */
    var posting = $.post(url, {
        search: term
    });
    console.log(url);

    posting.done(function (data) {
        var result = $(data).find("#result");
        $("#result").empty().append(result);
    });
});

$("#playlist").on("click",function (event) {
    /* stop form from submitting normally */
    event.preventDefault();

    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })
    /* get some values from elements on the page: */
    var $form = $(this),
        term = $form.find('input[name="search"]').val();
        url = $form.attr("action");

    /* Send the data using post */
    var posting = $.post(url, {
        search: term
    });
    console.log(url);

    posting.done(function (data) {
        var result = $(data).find("#result");
        $("#result").empty().append(result);
    });
});

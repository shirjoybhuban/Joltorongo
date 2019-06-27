
/* attach a submit handler to the form */
$("#searchForm").submit(function (event) {

    /* stop form from submitting normally */
    event.preventDefault();

    /* get some values from elements on the page: */
    var $form = $(this),
        term = $form.find('input[name="search"]').val(),
        url = $form.attr('action');

    /* Send the data using post */
    var posting = $.get(url, {
        search: term
    });



    /* Put the results in a div */
    posting.done(function (data) {
        var result = $(data).find('#result');
        $("#result").empty().append(result);

    });
});

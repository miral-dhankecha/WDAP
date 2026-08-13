$(document).ready(function () {

    $("nav a").click(function (event) {

        event.preventDefault();

        var page = $(this).data("page");

        $("#content").load(page, function (response, status) {

            if (status == "error") {
                $("#content").html(
                    "<h2>Error</h2><p>Unable to load the content.</p>"
                );
            }

        });

    });

});
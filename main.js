$(document).ready(function() {

    $("#files tr").click(function() {
        let url = $(this).children(":first").text();
        window.open(url);

        //window.location.href = '/' + url;
    });

    $(".share-btn").click(function(event) {
        event.stopPropagation();
        let fname = $(this).parent().parent().children(":first").text();
        let url = "http://files.borjavicinay.com/" + fname;
        let field = $("#clip");
        field.val(url);
        field.select();
        document.execCommand("copy");
    })

}
)
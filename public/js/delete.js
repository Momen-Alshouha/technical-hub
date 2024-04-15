$(document).ready(function () {
    $(".delete-btn").click(function () {
        var id = $(this).data("id");
        $("#confirmDeleteBtn").attr("data-id", id);
    });

    $("#confirmDeleteBtn").click(function () {
        var id = $(this).data("id");
        $("#deleteForm" +id).submit();
    });
});

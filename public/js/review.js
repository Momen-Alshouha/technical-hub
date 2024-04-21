var form = "#addReviewForm"; // Corrected form selector

$("#submitReviewBtn").click(function () {
    var url = $(form).data("action"); // Get form action URL
    var formData = new FormData($(form)[0]); // Serialize form data

    $.ajax({
        url: url,
        method: "POST",
        data: formData,
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
    });
    $("#addReviewModal .closeReviewModal").trigger("click");
    // Show the "thank you" modal
    $("#reviewSuccessModal .thanksForReviewModal").trigger("click");
});

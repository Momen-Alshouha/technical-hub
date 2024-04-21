<!-- Thank you modal -->
<div class="modal fade" id="reviewSuccessModal" tabindex="-1" role="dialog" aria-labelledby="reviewSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewSuccessModalLabel">Thank you!</h5>
            </div>
            <div class="modal-body">
                Your review has been submitted successfully. Thank you for your feedback!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button style="display: none; visibility:hidden;" type="button" class="btn btn-secondary thanksForReviewModal" data-toggle="modal" data-target="#reviewSuccessModal"></button>
            </div>
        </div>
    </div>
</div>


<!-- Review Modal -->
<div class="modal fade" id="addReviewModal" tabindex="-1" role="dialog" aria-labelledby="addReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addReviewModalLabel">Review Our Platform</h5>
            </div>
            <div class="modal-body">
                <form id="addReviewForm" data-action="{{route('reviews.store')}}">
                    @csrf
                    <textarea class="form-control" name="description" id="description" cols="50" rows="5" placeholder="Write your review here..."></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeReviewModal" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitReviewBtn">Submit</button>
            </div>
        </div>
    </div>
</div>

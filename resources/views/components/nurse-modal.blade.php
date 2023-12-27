
<button type="button" class="btn btn-primary getSignatureButton"
        data-toggle="modal" data-target=".signatureFormModal"
        data-role="{{ $role }}"
        data-pin-input-id="{{ $pinInputId }}"
        data-signature-container-id="{{ $signatureContainerId }}">Add Signature</button>

<div id="{{ $signatureContainerId }}" style="display: none;">
    <img id="{{ $role }}SignatureImage" src="" alt="{{ $role }} Signature">
</div>

<!-- Signature Modal -->
<div class="modal fade signatureFormModal" tabindex="-1" role="dialog" aria-labelledby="signatureModalLabel" aria-hidden="true">
    {{-- <div class="modal fade nurseFormModal" id="" tabindex="-1" role="dialog" aria-labelledby="nurseModalLabel" aria-hidden="true"> --}}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nurseModalLabel">Enter Nurse's PIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nursePin">PIN:</label>
                        <input type="text" class="form-control" id="nursePin" placeholder="Enter Nurse's PIN">
                    </div>
                    <div class="form-group">
                        <label for="nurseCpin">Confirm PIN:</label>
                        <input type="text" class="form-control" id="nurseCpin" placeholder="Confirm Nurse's PIN">
                    </div>

                    <div id="nurseErrorMessage" class="text-danger"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="nurseGetSignatureButton" class="btn btn-primary" data-dismiss="modal">Get Signature</button>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>

<script>
    $(document).ready(function () {
        function getSignature(role, pinInputId, signatureContainerId) {
            var pinSelector = '#' + pinInputId;
            var pin = $(pinSelector).val();
            var encodedPin = encodeURIComponent(pin);
            var url = '/check-pin?pin=' + encodedPin;
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function (response) {
                    if ('signature' in response) {
                        // PIN is correct, display the signature image
                        var signatureImageSrc = response.signature;
                        var assetSignatureImageSrc = "{{ asset('') }}" + signatureImageSrc;
                        $('#' + role + 'SignatureImage').attr('src', assetSignatureImageSrc);
                        $('#' + role + 'SignatureImageContainer').show();
                        $('#' + role + 'ErrorMessage').hide();
                        $('#' + role + 'FormModal').modal('hide');
                    } else if ('error' in response) {
                        // Incorrect PIN, show an error message
                        $('#' + role + 'SignatureImageContainer').hide();
                        $('#' + role + 'ErrorMessage').text(response.error).show();
                    }
                },
                error: function (error) {
                // Handle AJAX error
                console.error(error);
                var errorMessageDiv = $('#' + role + 'ErrorMessage');
                errorMessageDiv.text("An error occurred. Please try again.").show();
                $('#' + role + 'SignatureImageContainer').hide();
            }
            });
        }

        // Click event for the get signature button
        $(".getSignatureButton").click(function () {
            var role = $(this).data('role');
            var pinInputId = $(this).data('pin-input-id');
            var signatureContainerId = $(this).data('signature-container-id');

            getSignature(role, pinInputId, signatureContainerId);
        });
    });
</script>

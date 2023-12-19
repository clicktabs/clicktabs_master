<!-- Doctor Modal -->
<div class="modal fade" id="doctorFormModal" tabindex="-1" role="dialog" aria-labelledby="doctorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctorModalLabel">Enter Doctor's PIN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="doctorPin">PIN:</label>
                    <input type="text" class="form-control" id="doctorPin" placeholder="Enter Doctor's PIN">
                </div>
                <div class="form-group">
                    <label for="doctorCpin">Confirm PIN:</label>
                    <input type="text" class="form-control" id="doctorCpin" placeholder="Confirm Doctor's PIN">
                </div>
                <div id="doctorSignatureImageContainer" style="display: none;">
                    <img id="doctorSignatureImage" src="" alt="Doctor's Signature">
                </div>
                <div id="doctorErrorMessage" class="text-danger"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="doctorGetSignatureButton" class="btn btn-primary">Get Signature</button>
            </div>
        </div>
    </div>
</div>

<!-- Nurse Modal -->
<div class="modal fade" id="nurseFormModal" tabindex="-1" role="dialog" aria-labelledby="nurseModalLabel" aria-hidden="true">
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
</div>

<script>
    $(document).ready(function () {
        // Function to handle the AJAX request
        function getSignature(role) {
            var pinSelector = '#' + role + 'Pin';
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

                        // Close the modal
                        $('#' + role + 'FormModal').modal('hide');

                        // Optionally hide the button
                        // $('#' + role + 'GetSignatureButton').hide();
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

        // Click event for the doctor's get signature button
        $("#doctorGetSignatureButton").click(function () {
            getSignature('doctor');
        });

        // Click event for the nurse's get signature button
        $("#nurseGetSignatureButton").click(function () {
            getSignature('nurse');
        });
    });
    </script>

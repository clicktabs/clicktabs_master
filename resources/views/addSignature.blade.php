
<link rel="stylesheet" href="https://unpkg.com/signature_pad/dist/signature-pad.css">

<style>
    .signature-container {
        max-width: 400px;
        margin: 0 auto;
    }

    #signatureCanvas {
        border: 2px solid #333;
        width: 100%;
        height: 200px;
        cursor: crosshair;
    }
</style>


<div class="row p-3">
    <div class="col-md-6">
        <div class="signature-container">
            <div>
                <canvas id="signatureCanvas" width="400" height="200" style="border: 2px solid black"></canvas>
            </div>
            <br>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password" class="label">Password:</label>
            <input type="password" class="form-control" id="passwordq" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="pin" class="label">PIN:</label>
            <input type="password" class="form-control" id="pin" placeholder="Enter PIN">
        </div>
        <div class="form-group">
            <label for="confirmPin" class="label">Confirm PIN:</label>
            <input type="password" class="form-control" id="confirmPin" placeholder="Confirm PIN">
        </div>
        <div class="button-container mt-3">
            <button id="saveButton" class="btn ho xi ye">Save</button>
            <button id="clearButton" class="btn btn-danger">Clear</button>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="https://unpkg.com/signature_pad"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var canvas = document.getElementById('signatureCanvas');
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('saveButton').addEventListener('click', function () {
            var signatureData = signaturePad.toDataURL();
            var password = document.getElementById('passwordq').value;
            var pin = document.getElementById('pin').value;
            var confirmPin = document.getElementById('confirmPin').value;

            // Send the signatureData, password, and pin to the server for saving to the database
            fetch('signatures/upload', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    signatureImage: signatureData,
                    password: password,
                    pin: pin,
                    confirmPin: confirmPin
                })
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.json(); // Parse the response JSON
                    } else {
                        throw new Error('Failed to save the signature.');
                    }
                })
                .then(function (data) {
                if (data.success) {
                    console.log('Signature saved successfully!');
                    toastr.success(data.success);
                    signaturePad.clear();
                    document.getElementById('passwordq').value = '';
                    document.getElementById('pin').value = ''; // Clear pin field
                    document.getElementById('confirmPin').value = '';
                } else if (data.danger) {
                    console.error(data.danger);
                    toastr.error(data.danger);
                }
            })
                .catch(function (error) {
                    console.error('Failed to save the signature:', error);
                });
        });

        document.getElementById('clearButton').addEventListener('click', function () {
            signaturePad.clear();
        });
    });
</script>

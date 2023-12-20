<div id="signature" class="mt-[30px]">
    <div class="bg-white bd rounded-sm rc">
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
                    <button id="saveButton" data-signature-upload-route="{{ route('signatures.upload') }}" class="btn ho xi ye">Save</button>
                    <button id="clearButton" class="btn btn-danger">Clear</button>
                </div>
            </div>
        </div>
    </div>
</div>
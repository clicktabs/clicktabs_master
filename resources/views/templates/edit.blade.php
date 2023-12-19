@extends('layouts.app')
@section('extra_css')
    <style>
        .select2-container {
            margin-bottom: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="row mb-4">
        <div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
            <div class="dk">
                <!-- Table -->
                <div class="lf">
                    <div class="tab-pane fade show" id="page-28" role="tabpanel" tabindex="0">
                        <form name="template_save" method="post" action="/templates/{{$templates->id}}">
                            @csrf
                            @method('PUT')
                            @php
                                $new_goals_arr = json_decode($templates->new_goals_templates, true);
                                $new_interventions_arr = json_decode($templates->new_intervention_templates, true);

                                $section_gg_functional_abilities_goals_templates_arr = json_decode($templates->section_gg_functional_abilities_goals_templates, true);
                                $section_g_functional_status_templates_arr = json_decode($templates->section_g_functional_status_templates, true);
                                $bims_summary_score_templates_arr = json_decode($templates->bims_summary_score_templates, true);
                            @endphp
                            <div class="bg-body-secondary p-4 rounded">
                                <label for="" class="form-label font-bold">Orders for Discipline and Treatments (Specify
                                    Amount/Frequency/Duration) (#21)</label>
                                <select class="form-select mb-2" id="new_intervention" style="max-width: 400px;" name="new_interventions[]"
                                        multiple="multiple">
                                    <option disabled>-- Select Template --</option>
                                    @if($new_interventions)
                                        @foreach($new_interventions as $new_intervention)
                                            <option {{in_array($new_intervention->name, $new_interventions_arr) ? 'selected' : ''}} value="{{$new_intervention->name}}">{{$new_intervention->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <textarea name="new_intervention_content" id="new_intervention_content" cols="30" rows="10" placeholder="New Goals"
                                          class="form-control">{{$templates->template_new_intervention_content}}</textarea>
                            </div>

                            <div class="bg-body-secondary p-4 mt-3 rounded">
                                <label for="" class="form-label font-bold">Goals/Rehabilitation Potential/Discharge Plans (#22)</label>
                                <select class="form-select mb-2" id="new_goals" style="max-width: 400px;"
                                        name="new_goals[]" multiple="multiple">
                                    <option disabled>-- Select Template --</option>
                                    @if($new_goals)
                                        @foreach($new_goals as $new_goal)
                                            <option {{in_array($new_goal->name, $new_goals_arr) ? 'selected' : ''}} value="{{$new_goal->name}}">{{$new_goal->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <textarea name="new_goal_content" id="new_goals_content" cols="30" rows="10" placeholder="Goals/Rehabilitation Potential/Discharge Plans (#22)" class="form-control">{{$templates->template_new_goals_content}}</textarea>
                            </div>

                            <div class="bg-body-secondary p-4 mt-3 rounded">
                                <label for="" class="form-label font-bold">Section GG Functional Abilities and Goals</label>
                                <select class="form-select mb-2" id="section_gg_functional_abilities_goals_templates" style="max-width: 400px;"
                                        name="section_gg_functional_abilities_goals_templates[]" multiple="multiple">
                                    <option disabled>-- Select Template --</option>
                                    @if($section_gg_functional_abilities)
                                        @foreach($section_gg_functional_abilities as $single_gg_functional_abilities)
                                            <option {{in_array($single_gg_functional_abilities->name, $section_gg_functional_abilities_goals_templates_arr) ? 'selected' : ''}} value="{{$single_gg_functional_abilities->name}}">{{$single_gg_functional_abilities->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <textarea name="section_gg_functional_abilities_goals_content" id="section_gg_functional_abilities_goals_content" cols="30" rows="10" placeholder="Section GG Functional Abilities and Goals" class="form-control">{{$templates->section_gg_functional_abilities_goals_content}}</textarea>
                            </div>

                            <div class="bg-body-secondary p-4 mt-3 rounded">
                                <label for="" class="form-label font-bold">Section G Functional Status</label>
                                <select class="form-select mb-2" id="section_g_functional_status_templates" style="max-width: 400px;"
                                        name="section_g_functional_status_templates[]" multiple="multiple">
                                    <option disabled>-- Select Template --</option>
                                    @if($section_g_functional_status)
                                        @foreach($section_g_functional_status as $section_g_functional)
                                            <option {{in_array($section_g_functional->name, $section_g_functional_status_templates_arr) ? 'selected' : ''}} value="{{$section_g_functional->name}}">{{$section_g_functional->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <textarea name="section_g_functional_status_content" id="section_g_functional_status_content" cols="30" rows="10" placeholder="Section G Functional Status" class="form-control">{{$templates->section_g_functional_status_content}}</textarea>
                            </div>

                            <div class="bg-body-secondary p-4 mt-3 rounded">
                                <label for="" class="form-label font-bold">C0500. BIMS Summary Score</label>
                                <select class="form-select mb-2" id="bims_summary_score_templates" style="max-width: 400px;"
                                        name="bims_summary_score_templates[]" multiple="multiple">
                                    <option disabled>-- Select Template --</option>
                                    @if($bims_summary_scores)
                                        @foreach($bims_summary_scores as $bims_summary_score)
                                            <option {{in_array($bims_summary_score->name, $bims_summary_score_templates_arr) ? 'selected' : ''}} value="{{$bims_summary_score->name}}">{{$bims_summary_score->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <textarea name="bims_summary_score_content" id="bims_summary_score_content" cols="30" rows="10" placeholder="C0500. BIMS Summary Score" class="form-control">{{$templates->bims_summary_score_content}}</textarea>
                                <button class="btn ho xi ye mt-[30px]" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_js')
    <script>
        $(document).ready(function () {
            const new_goals = $('#new_goals');
            new_goals.select2();
            new_goals.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                    $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            new_goals.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
                $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
            });

            const new_intervention = $('#new_intervention');
            new_intervention.select2();
            new_intervention.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#new_intervention_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                    $('#new_intervention_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            new_intervention.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#new_goals_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
                $('#new_goals_content').val(updatedText); // Set the updated value of the textarea
            });


            $('#section_gg_functional_abilities_goals_templates').select2();
            const section_gg_functional_abilities_goals_templates = $('#section_gg_functional_abilities_goals_templates');
            section_gg_functional_abilities_goals_templates.select2();
            section_gg_functional_abilities_goals_templates.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#section_gg_functional_abilities_goals_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                    $('#section_gg_functional_abilities_goals_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            section_gg_functional_abilities_goals_templates.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#section_gg_functional_abilities_goals_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
                $('#section_gg_functional_abilities_goals_content').val(updatedText); // Set the updated value of the textarea
            });


            $('#section_g_functional_status_templates').select2();
            const section_g_functional_status_templates = $('#section_g_functional_status_templates');
            section_g_functional_status_templates.select2();
            section_g_functional_status_templates.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#section_g_functional_status_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                    $('#section_g_functional_status_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            section_g_functional_status_templates.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#section_g_functional_status_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
                $('#section_g_functional_status_content').val(updatedText); // Set the updated value of the textarea
            });

            $('#bims_summary_score_templates').select2();
            const bims_summary_score_templates = $('#bims_summary_score_templates');
            bims_summary_score_templates.select2();
            bims_summary_score_templates.on('select2:select', function (e) {
                let selectedValue = e.params.data.id; // Get the selected value

                let textareaValue = $('#bims_summary_score_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Check if the selected value is already in the textarea
                if (!existingValues.includes(selectedValue)) {
                    existingValues.push(selectedValue); // Add the selected value to the existing values array

                    let updatedText = existingValues.join('\n'); // Convert the array to a comma-separated string
                    $('#bims_summary_score_content').val(updatedText); // Set the updated value of the textarea
                }
            });
            bims_summary_score_templates.on('select2:unselect', function (e) {
                let deselectedValue = e.params.data.id; // Get the deselected value

                let textareaValue = $('#bims_summary_score_content').val(); // Get the current value of the textarea

                // Split the current textarea value into an array
                let existingValues = textareaValue ? textareaValue.split('\n') : [];

                // Remove the deselected value from the existing values array
                let updatedValues = existingValues.filter(value => value !== deselectedValue);

                let updatedText = updatedValues.join('\n'); // Convert the array to a comma-separated string
                $('#bims_summary_score_content').val(updatedText); // Set the updated value of the textarea
            });
        });
    </script>
@endsection


<option {{in_array($new_intervention->name, $new_interventions_arr) ? 'selected' : ''}} value="{{$new_intervention->name}}">{{$new_intervention->name}}</option>

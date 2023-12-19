@section('extra_css')
<style>
.application-title h2 {
text-align: center;
padding: 20px 0;
}

.application-title h6 {
font-size: 17px;
}

.employee_application input {
margin-right: 5px;
}

.employee_application .btn-primary{
background-color: #0b5ed7;
border-color: #0a58ca;
}
.employee_application .sub_heading {
font-size: 18px;
font-weight: 500;
margin-right: 10px;
}
.mt-3_5 {
margin-top: 20px !important;
}
.overflow {
overflow: hidden;
}
.overflow-x {
overflow-x: auto;
}
table tr {
white-space: nowrap;
}
</style>
@endsection

<div class="vs jj ttm vl ou uf na">
<h1 class="fw-bolder display-4 text-primary text--certer">{{ Auth::user()->organization->name }}</h1>
<div class="row mb-4">
<div class="tz tni bg-white bd rounded-sm border border-slate-200 col-md-12">
<div class="dk">
<div class="application-title">
<h2 class="gu teu text-slate-800 font-bold rt text-center">Standard Application for Employment</h2>
<h5 class="text-center"><em class="text-center">It is our policy to comply with all applicable state and
        federal laws
        prohibiting
        discrimination in employment based on
        race, age, color, sex,
        religion, national origin, disability or other protected classifications.</em></h5>
<h6 class="text-center gu teu text-slate-800 font-bold rt">Please carefully read and answer all questions. You will not be considered for
    employment if you fail to
    completely
    answer all the questions
    on this application. You may attach a résumé, but all questions must be answered.</h6>
</div>
{{-- @if(session::get('success'))
<div class="alert alert-success">
{{ session::get('success')}}
</div>
@endif
@if(session::get('success'))
<div class="alert alert-danger">
{{ session::get('fail')}}
</div>
@endif --}}
<form action="{{route('hiring.storeApplication')}}" name="newhiringform" id="newhiringform"  method="POST">
@csrf
<div class="row">
    {{-- <div class="col-md-6">
        <label for="ssn">“Employer” <span class="text-red">*</span></label>
        <input id="ssn" type="text" class="form-control s ou" name="ssn" value=""/>
    </div> --}}
    <div class="col-md-6">
        <label for="appl_position">Position applying for</label>
        <input id="appl_position" type="text" class="form-control s ou" name="appl_position" value="" />
    </div>
</div>
{{-- <div class="p-3 mb-2 bg-light text-dark">
    <h5 class="sub_heading">PERSONAL DATA</h5>
</div> --}}
<div class="row">
    <div class="col-md-3">
        <label for="appl_lastName" class="col-form-label">Last Name</label>
        <input type="text" class="form-control" name="appl_lastName">
    </div>
    <div class="col-md-4">
        <label for="appl_firstName" class="col-form-label">First Name</label>
        <input type="text" class="form-control" name="appl_firstName">
    </div>
    <div class="col-md-2">
        <label for="appl_middleName" class="col-form-label">MI</label>
        <input type="text" class="form-control" name="appl_middleName">
    </div>
    <div class="col-md-3">
        <label for="appl_address" class="col-form-label">Other Last Name</label>
        <input type="text" class="form-control" name="appl_address">
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <label for="application_address">Street Address and Apt No.<span class="text-red">*</span></label>
        <input id="address" type="text" class="form-control s ou" name="application_address" value=""/>
        <!-- <span id="1680315602607-4" data-dashlanecreated="true"
            style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
    </div>
    <div class="col-md-3">
        <label for="appl_city">City <span class="text-red">*</span></label>
        <input id="appl_city" type="text" class="form-control s ou" name="appl_city" value="" />

    </div>
    <div class="col-md-2">
        <label for="appl_state">State <span class="text-red">*</span></label>
        <input id="appl_state" type="text" class="form-control s ou" name="appl_state" value=""/>
        <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                        style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
    </div>
    <div class="col-md-2">
        <label for="appl_zip">Zip <span class="text-red">*</span></label>
        <input id="appl_zip" type="text" class="form-control s ou" name="appl_zip" value=""/>

    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label for="appl_cellphone">Home Telephone Number <span class="text-red">*</span></label>
        <input id="" type="text" class="form-control s ou" name="appl_cellphone" value=""/>

    </div>
    <div class="col-md-4">
        <label for="appl_cellphone">Cell Telephone Number <span class="text-red">*</span></label>
        <input id="" type="text" class="form-control s ou" name="appl_cellphone" value=""/>
        <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                    style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
    </div>
    <div class="col-md-4">
        <label for="appl_email">Email<span class="text-red">*</span></label>
        <input id="" type="email" class="form-control s ou" name="appl_email" value=""/>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <label for="app_workstartdate">Date you can start work <span class="text-red">*</span></label>
        <input id="" type="date" class="form-control s ou" name="app_workstartdate" value=""/>
    </div>
    <div class="col-md-4">
        <label for="appl_salarydesire">Salary Desired <span class="text-red">*</span></label>
        <input id="" type="text" class="form-control s ou" name="appl_salarydesire" value=""/>
        <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                            style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
    </div>
    <div class="col-md-4">
        <label for="application_gender">Do you have a High School Diploma or GED? <span class="text-red">*</span></label>
        <div>
            <label class="form-check-label" for="appl_Yes">Yes</label>
            <input class="radio" type="radio" name="appl_Diploma" id="appl_Yes">

            <label class="form-check-label" for="appl_No">No</label>
            <input class="radio" type="radio" name="appl_Dipolma" id="appl_No">
        </div>
    </div>
</div>
<div class="row">
    <div class="p-3 mb-2 bg-light text-dark d-flex align-items-md-center align-items-start flex-md-row flex-column">
        <h5 class="sub_heading">PERSONAL INFORMATION</h5>
        <h6 class="mt-3 mt-md-0">Check all that you are willing to work</h6>
    </div>
</div>
<div class="row">

    <div class="col-md-3">
        <label for="Hours">Hours: <span class="text-red">*</span></label>
        <div>
            <label class="form-check-label" for="appl_Full_Time">Full Time</label>
            <input class="radio" type="radio" name="appl_Hours" id="appl_Full_Time">

            <label class="form-check-label" for="appl_Part_Time">Part Time</label>
            <input class="radio" type="radio" name="appl_Hours" id="appl_Part_Time">
        </div>
    </div>
    <div class="col-md-2">
        <label></label>
        <!-- <label for="gender">Do you have a High School Diploma or GED? <span class="text-red">*</span></label> -->
        <div>
            <label class="form-check-label" for="appl_Day">Days</label>
            <input class="radio" type="radio" name="app_workingdays" id="appl_Day">
            <label class="form-check-label" for="appl_Evenings"> Evenings</label>
            <input class="radio" type="radio" name="app_workingdays" id="appl_Evenings">

            <label class="form-check-label" for="appl_Weekends">Weekends</label>
            <input class="radio" type="radio" name="app_workingdays" id="appl_Weekends">
        </div>
    </div>
    <div class="col-md-4">
        <label></label>
        <div>
            <label class="form-check-label" for="appl_nursing">Nursing</label>
            <input class="radio" type="radio" name="app_postion" id="appl_nursing">

            <label class="form-check-label" for="appl_hha">HHA</label>
            <input class="radio" type="radio" name="app_postion" id="appl_hha">
        </div>
    </div>
    <div class="col-md-3">
        <label for="gender">Status: <span class="text-red">*</span></label>
        <div>
            <label class="form-check-label" for="appl_Regular">Regular</label>
            <input class="radio" type="radio" name="appl_Status" id="appl_Regular">

            <label class="form-check-label" for="appl_Temporary">Temporary</label>
            <input class="radio" type="radio" name="appl_Status" id="appl_Temporary">
        </div>
    </div>
</div>
<hr class="hr-st">
<!-- <hr class="hr-st"> hr_line -->
<div class="row">
    <div class="col-md-8">
        <label for="gender">Are you authorized to work in the U.S. on an unrestricted basis? <span class="text-red">*</span></label>
    </div>

    <div class="col-md-4">
        <div>
            <label class="form-check-label" for="appl_authorized_yes">yes</label>
            <input class="radio" type="radio" name="appl_Workauthorization" id="appl_authorized_yes">
            <label class="form-check-label" for="appl_authorized_No"></label>
            <input class="radio" type="radio" name="appl_Workauthorization" id="appl_authorized_No">
        </div>
    </div>
</div>
<hr class="hr-st">

<div class="row">
    <div class="col-md-9">
        <h6 class="sub_heading">Have you ever been convicted of a felony? (Convictions will not necessarily disqualify an applicant for employment.)If yes, explain:</h6>
    </div>
    <div class="col-md-3">
        <div>
            <label class="form-check-label" for="appl_convited_yes">yes</label>
            <input class="radio" type="radio" name="appl_conviction" id="appl_convited_yes">
            <label class="form-check-label" for="appl_convitedNo">No</label>
            <input class="radio" type="radio" name="appl_conviction" id="appl_convitedNo">
        </div>
    </div>
</div>
<hr class="hr-st">
<div class="row">
    <div class="col-md-10">
        <h6 class="sub_heading">Have you been told the essential functions of the job or have you been viewed a copy of the job description listing the essential functions of the job?</h6>
    </div>
    <div class="col-md-2">
        <div>
            <label class="form-check-label" for="appl_essentialyes">yes</label>
            <input class="radio" type="radio" name="appl_jobFunctions" id="appl_essentialyes">
            <label class="form-check-label" for="appl_essentialNo">No</label>
            <input class="radio" type="radio" name="appl_jobFunctions" id="appl_essentialNo">
        </div>
    </div>
</div>
<hr class="hr-st">
<div class="row">
    <div class="col-md-8">
        <h6 class="sub_heading">Can you perform these essential functions of the job with or without reasonable accommodation?</h6>
    </div>
    <div class="col-md-4">
        <div>
            <label class="form-check-label" for="appl_functionyes">yes</label>
            <input class="radio" type="radio" name="appl_jobEssential" id="appl_functionyes">

            <label class="form-check-label" for="appl_functionNo">No</label>
            <input class="radio" type="radio" name="appl_jobEssential" id="appl_functionNo">
        </div>
    </div>
</div>
<hr class="hr-st">
<div class="row">
    <div class="p-3 mb-2 bg-light text-dark d-flex flex-md-row flex-column align-items-md-center align-items-start">
        <h4 class="sub_heading">QUALIFICATIONS</h4>
        <h6 class="mt-3 mt-md-0">Please list any education or training you feel relates to the position applied for that would help you perform the work, such as schools, colleges, degrees, vocational or technical programs, and military training.</h6>
    </div>
</div>

<div class="row overflow">
    <div class="col overflow-x">
        <table class="table table-bordered mt-4 col-md-12" style="overflow: scroll;">
            <thead>
            <th></th>
            <th>School Name</th>
            <th>Degree</th>
            <th>Address/City/State</th>
            </thead>
            <tbody>
            <tr class="border">
                <td>school</td>
                <label for=""></label>
                <td><input type="text" name="appl_school_name" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_school_degree" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_school_address" class="w-100 p-3"></td>
            </tr>
            <tr class="border">
                <td>school</td>
                <label for=""></label>
                <td><input type="text" name="appl_school_1" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_school_2" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_school_3" class="w-100 p-3"></td>
            </tr>
            <tr class="border">
                <td>other</td>
                <label for=""></label>
                <td><input type="text" name="appl_other_1" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_other_2" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_other_3" class="w-100 p-3"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="p-3 mb-2 bg-light text-dark d-flex flex-md-row flex-column align-items-md-center align-items-start">
        <h4 class="shrink-0 sub_heading">SPECIAL SKILLS</h4>
        <h6 class="mt-3 mt-md-0">List any special skills or experience that you feel would help you in the position that you are
            applying for (leadership, organizations/teams, etc).</h6>
    </div>
</div>
<!-- <hr class="hr-st"> -->
<div class="row">
    <div class="col">
        <textarea class="form-control" name="appl_Example6" rows="9"></textarea>
    </div>
</div>
<div class="row">
    <div class="p-3 mb-2 bg-light text-dark d-flex flex-md-row flex-column align-items-md-center align-items-start">
        <h4 class="sub_heading">REFERENCES</h4>
        <h6 class="mt-3 mt-md-0">Please list three professional references not related to you, with full name, address, phone number,
            and relationship.
            If you don’t have three
            professional references, then list personal, unrelated references</h6>
    </div>
</div>
<div class="row overflow">
    <div class="col overflow-x">
        <table class="table table-bordered mt-4">
            <thead>
            <th>Name</th>
            <th>Address/City/State</th>
            <th>Phone</th>
            <th>Relationship</th>
            </thead>
            <tbody>
            <tr class="border">
                <label for=""></label>
                <td><input type="text" name="appl_proName" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proAddress" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proPhone" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proRelationship" class="w-100 p-3"></td>
            </tr>
            <tr class="border">
                <label for=""></label>
                <td><input type="text" name="appl_proName1" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proAddress1" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proPhone1" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proRelationship1" class="w-100 p-3"></td>
            </tr>
            <tr class="border">
                <label for=""></label>
                <td><input type="text" name="appl_proName2" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proAddress2" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proPhone2" class="w-100 p-3"></td>
                <label for=""></label>
                <td><input type="text" name="appl_proRelationship2" class="w-100 p-3"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <h6 class="sub_heading">May we contact your present employer?</h6>
    </div>
    <div class="col-md-4">
        <div>
            <label class="form-check-label" for="appl_contactyes">yes</label>
            <input class="radio" type="radio" name="appl_contact" id="appl_contactyes">
            <label class="form-check-label" for="appl_contactNo">No</label>
            <input class="radio" type="radio" name="contact" id="appl_contactNo">
            <label class="form-check-label" for="appl_contact">N/A</label>
            <input class="radio" type="radio" name="appl_contact" id="appl_contactNa">
        </div>
    </div>
</div>
<hr class="hr-st">
<div class="row">
    <div class="p-3 mb-2 bg-light text-dark d-flex flex-md-row flex-column align-items-md-center align-items-start">
        <h4 class="sub_heading">WORK HISTORY</h4>
        <h6 class="mt-3 mt-md-0">Start with your present or most recent employment and work back. Use separate sheet if necessary.
            (INCLUDE PAID AND
            UNPAID POSITIONS)</h6>
    </div>
</div>
<div class="row overflow">
    <div class="col overflow-x">
        <table class="table table-bordered mt-4">
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_Job">Job Title #1</label>
                        <input type="text" id="appl_Job" name="appl_Job"  class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_startDate">Start Date (mo/day/yr)</label>
                        <input type="Date" id="appl_startDate" name="appl_startDate" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_endDate">End Date (mo/day/yr)</label>
                        <input type="Date" id="appl_endDate"  name="appl_endDate" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>application_companyName
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_companyName">Company Name</label>
                        <input type="text" name="appl_companyName" id="appl_companyName" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_supervisorsName">Supervisor’s Name </label>
                        <input type="text" id="appl_supervisorsName"  name="appl_supervisorsName" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_supervisorsNumber">Phone Number</label>
                        <input type="number" id="appl_supervisorsNumber" name="appl_supervisorsNumber" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_employorCity">City</label>
                        <input type="text" id="appl_employorCity" name="appl_employorCity" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_employorState">State</label>
                        <input type="text" id="appl_employorState" name="appl_employorState" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_employorZip">Zip</label>
                        <input type="number" id="appl_employorZip" name="appl_employorZip" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="form-outline w-100">
                        <label class="form-label" for="appl_duties">Duties:</label>
                        <textarea class="form-control" id="appl_duties" name="appl_duties" rows="5"></textarea>
                        <!-- <input type="text" id="text" class="form-control" /> -->
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_reasonforleaving">Reason for Leaving</label>
                        <input type="text" id="appl_reasonforleaving" name="appl_reasonforleaving" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_startingSalary">Starting Salary</label>
                        <input type="number" id="appl_startingSalary" name="appl_startingSalary" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_endinfSalary">Ending Salary</label>
                        <input type="number" id="appl_endinfSalary" name="appl_endinfSalary" class="form-control p-3" />
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="row overflow">
    <div class="col overflow-x">
        <table class="table table-bordered mt-4">
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_Job1">Job Title #2</label>
                        <input type="text" id="appl_Job1" name="appl_Job1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_startDate1">Start Date (mo/day/yr)</label>
                        <input type="Date" id="appl_startDate1" name="appl_startDate1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_endDate1">End Date (mo/day/yr)</label>
                        <input type="Date" id="appl_endDate1" name="appl_endDate1" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_companyName1">Company Name</label>
                        <input type="text" id="appl_companyName1" name="appl_companyName1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_supervisorsName1">Supervisor’s Name </label>
                        <input type="text" id="appl_supervisorsName1" name="appl_supervisorsName1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_supervisorPhone">Phone Number</label>
                        <input type="number" id="appl_supervisorPhone" name="appl_supervisorPhone" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_City1">City</label>
                        <input type="text" id="appl_City1" name="appl_City1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_State1">State</label>
                        <input type="text" id="appl_State1" name="appl_State1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_Zip1">Zip</label>
                        <input type="number" id="appl_Zip1" name="appl_Zip1" class="form-control p-3" />
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="form-outline w-100">
                        <label class="form-label" for="appl_duties1">Duties:</label>
                        <textarea class="form-control" id="appl_duties1" name="appl_duties1" rows="5"></textarea>
                        <!-- <input type="text" id="text" class="form-control" /> -->
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_reasonforleaving1">Reason for Leaving</label>
                        <input type="text" id="appl_reasonforleaving1" name="appl_reasonforleaving1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_Startingsalary1">Starting Salary</label>
                        <input type="number" id="appl_Startingsalary1" name="appl_Startingsalary1" class="form-control p-3" />
                    </div>
                </td>
                <td>
                    <div class="form-outline">
                        <label class="form-label" for="appl_endingSalary1">Ending Salary</label>
                        <input type="number" id="appl_endingSalary1" name="appl_endingSalary1" class="form-control p-3" />
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col">
        <h6 class="text-center">I certify that the facts set forth in this Application for Employment are true and complete to the
            best of my knowledge.
            I understand that if I am
            employed, false statements, omissions or misrepresentations may result in my dismissal. I authorize
            the Employer to make
            an investigation of any of the facts
            set forth in this application and release the Employer from any liability. The employer may contact
            any listed
            references on this application.
            <br/>
            I acknowledge and understand that the company is an “at will” employer. Therefore, any employee
            (regular, temporary, or
            other type of category
            employee) may resign at any time, just as the employer may terminate the employment relationship
            with any employee at
            any time, with or without cause, with
            or without notice to the other party</h6>
    </div>
</div>
<div class="row mt-3">
    <div class="row">
        <Label for="app-signature_10">Signature</Label>
        <div class="col-md-6">
              <textarea id="app-signature_10" name="app-signature_10"></textarea>
        </div>
        <div class="col-md-6"></div>
     </div>
    {{-- <div class="col-md-6 mt-3_5">
        <input type="file" accept="image/*" onchange="loadFile(event)">
        <img id="output"/>
        <hr class="vr-st">
        <h5 class="sub_heading">Applicant Signature</h5>
    </div>
    <div class="col-md-6 ">
        <input type="date">
        <hr class="vr-st">
        <h5>Date</h5>
    </div> --}}
<div>
    <button type="submit" class="btn btn-primary active">Save and Continue</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


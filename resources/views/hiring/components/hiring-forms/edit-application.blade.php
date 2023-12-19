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
                <form action="#" class="employee_application">
                    <div class="row mt-1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="position_applying" name="position_applying" id="position_applying" value="position_applying">Position applying for <span class="text-red">*</span></label>
                            <input type="text" class="form-control s ou" name="app_applying" id="position_applying" value="{{ old('position_applying') }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="first_name" class="col-form-label">First Name </label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="middle_name" class="col-form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" id="middle_name" value="{{ old('middle_name') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="last_name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" iname="last_name" id="last_name" value="{{ old('last_name') }}">
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="streetAddress">Street Address and/or Mailing Address<span class="text-red">*</span></label>
                            <input type="text" class="form-control s ou" name="streetAddress" id="streetAddress" value="{{ old('streetAddress') }}"/>
                            <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
                        </div>
                        <div class="col-md-3">
                            <label for="city">City <span class="text-red">*</span></label>
                            <input id="city" type="text" class="form-control s ou" name="city" id="city" value="{{ old('city') }}" />

                        </div>
                        <div class="col-md-2">
                            <label for="state">State <span class="text-red">*</span></label>
                            <input id="state" type="text" class="form-control s ou" name="state" id="state" value="{{ old('state') }}"/>
                            <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                            style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
                        </div>
                        <div class="col-md-2">
                            <label for="zip">Zip <span class="text-red">*</span></label>
                            <input id="zip" type="text" class="form-control s ou" name="zip" id="zip" value="{{ old('zip') }}"/>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="home_phone">Home Telephone Number <span class="text-red">*</span></label>
                            <input type="text" class="form-control s ou" name="home_phone" id="home_phone" value="{{ old('home_phone') }}"/>

                        </div>
                        <div class="col-md-4">
                            <label for="email">Email<span class="text-red">*</span></label>
                            <input id="email" type="email" class="form-control s ou" name="email" id="email" value="{{ old('email') }}"/>
                            <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                                        style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
                        </div>
                        <div class="col-md-4">
                            <label for="cellular_phone">Cellular Telephone Number <span class="text-red">*</span></label>
                            <input  type="text" class="form-control s ou" name="cellular_phone" id="cellular_phoner" value="{{ old('cellular_phone') }}"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="start_work">Date you can start work <span class="text-red">*</span></label>
                            <input type="text" class="form-control s ou" name="start_work" id="start_work" value="{{ old('start_work') }}"/>
                        </div>
                        <div class="col-md-4">
                            <label for="salary_desired">Salary Desired <span class="text-red">*</span></label>
                            <input type="text" class="form-control s ou" name="salary_desired" id="salary_desired" value="{{ old('salary_desired') }}"/>
                            <!-- <span id="1680315602607-4" data-dashlanecreated="true"
                                                                style="color: initial; font: initial; font-palette: initial; font-synthesis: initial; forced-color-adjust: initial; text-orientation: initial; text-rendering: initial; -webkit-font-smoothing: initial; -webkit-locale: initial; -webkit-text-orientation: initial; -webkit-writing-mode: initial; writing-mode: initial; zoom: initial; accent-color: initial; place-content: initial; place-items: initial; place-self: initial; alignment-baseline: initial; animation: initial; app-region: initial; appearance: initial; aspect-ratio: initial; backdrop-filter: initial; backface-visibility: initial; background: url(&quot;chrome-extension://fdjamakpfbbddfjaooikfcpapjohcfmg/content/injected/logo-autofill-unknown.svg&quot;) center center / contain no-repeat; background-blend-mode: initial; baseline-shift: initial; baseline-source: initial; block-size: initial; border-block: initial; border: none; border-radius: initial; border-collapse: initial; border-end-end-radius: initial; border-end-start-radius: initial; border-inline: initial; border-start-end-radius: initial; border-start-start-radius: initial; bottom: initial; box-shadow: initial; box-sizing: initial; break-after: initial; break-before: initial; break-inside: initial; buffered-rendering: initial; caption-side: initial; caret-color: initial; clear: initial; clip: initial; clip-path: initial; clip-rule: initial; color-interpolation: initial; color-interpolation-filters: initial; color-rendering: initial; color-scheme: initial; columns: initial; column-fill: initial; gap: initial; column-rule: initial; column-span: initial; contain: initial; contain-intrinsic-block-size: initial; contain-intrinsic-size: initial; contain-intrinsic-inline-size: initial; container: initial; content: initial; content-visibility: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; cursor: pointer; cx: initial; cy: initial; d: initial; display: inline; dominant-baseline: initial; empty-cells: initial; fill: initial; fill-opacity: initial; fill-rule: initial; filter: initial; flex: initial; flex-flow: initial; float: initial; flood-color: initial; flood-opacity: initial; grid: initial; grid-area: initial; height: 16px; hyphenate-character: initial; hyphenate-limit-chars: initial; hyphens: initial; image-orientation: initial; image-rendering: initial; initial-letter: initial; inline-size: initial; inset-block: initial; inset-inline: initial; isolation: initial; left: 555.8px; letter-spacing: initial; lighting-color: initial; line-break: initial; list-style: initial; margin-block: initial; margin: initial; margin-inline: initial; marker: initial; mask: initial; mask-type: initial; math-depth: initial; math-shift: initial; math-style: initial; max-block-size: initial; max-height: initial; max-inline-size: initial; max-width: initial; min-block-size: initial; min-height: initial; min-inline-size: initial; min-width: 16px; mix-blend-mode: initial; object-fit: initial; object-position: initial; object-view-box: initial; offset: initial; opacity: 1; order: initial; orphans: initial; outline: initial; outline-offset: initial; overflow-anchor: initial; overflow-clip-margin: initial; overflow-wrap: initial; overflow: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; overscroll-behavior: initial; padding-block: initial; padding: initial; padding-inline: initial; page: initial; page-orientation: initial; paint-order: initial; perspective: initial; perspective-origin: initial; pointer-events: initial; position: absolute; quotes: initial; r: initial; resize: initial; right: initial; rotate: initial; ruby-position: initial; rx: initial; ry: initial; scale: initial; scroll-behavior: initial; scroll-margin-block: initial; scroll-margin: initial; scroll-margin-inline: initial; scroll-padding-block: initial; scroll-padding: initial; scroll-padding-inline: initial; scroll-snap-align: initial; scroll-snap-stop: initial; scroll-snap-type: initial; scrollbar-gutter: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; shape-rendering: initial; size: initial; speak: initial; stop-color: initial; stop-opacity: initial; stroke: initial; stroke-dasharray: initial; stroke-dashoffset: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-width: initial; tab-size: initial; table-layout: initial; text-align: initial; text-align-last: initial; text-anchor: initial; text-combine-upright: initial; text-decoration: initial; text-decoration-skip-ink: initial; text-emphasis: initial; text-emphasis-position: initial; text-indent: initial; text-overflow: initial; text-shadow: initial; text-size-adjust: initial; text-transform: initial; text-underline-offset: initial; text-underline-position: initial; top: 183.4px; touch-action: initial; transform: initial; transform-box: initial; transform-origin: initial; transform-style: initial; transition: initial; translate: initial; user-select: initial; vector-effect: initial; vertical-align: initial; view-transition-name: initial; visibility: visible; border-spacing: initial; -webkit-box-align: initial; -webkit-box-decoration-break: initial; -webkit-box-direction: initial; -webkit-box-flex: initial; -webkit-box-ordinal-group: initial; -webkit-box-orient: initial; -webkit-box-pack: initial; -webkit-box-reflect: initial; -webkit-highlight: initial; -webkit-line-break: initial; -webkit-line-clamp: initial; -webkit-mask-box-image: initial; -webkit-mask: initial; -webkit-mask-composite: initial; -webkit-print-color-adjust: initial; -webkit-rtl-ordering: initial; -webkit-ruby-position: initial; -webkit-tap-highlight-color: initial; -webkit-text-combine: initial; -webkit-text-decorations-in-effect: initial; -webkit-text-fill-color: initial; -webkit-text-security: initial; -webkit-text-stroke: initial; -webkit-user-drag: initial; -webkit-user-modify: initial; white-space: initial; widows: initial; width: 16px; will-change: initial; word-break: initial; word-spacing: initial; x: initial; y: initial; z-index: auto;"></span> -->
                        </div>
                        <div class="col-md-4">
                            <label for="school_diploma">Do you have a High School Diploma or GED? <span class="text-red">*</span></label>
                            <div>
                                <label class="form-check-label" for="school_diploma">Yes</label>
                                <input class="radio" type="radio" name="high_btn" id="school_diploma" value="{{ old('school_diploma') }}">

                                <label class="form-check-label" for="school_diploma_1">No</label>
                                <input class="radio" type="radio" name="high_btn" id="school_diploma_1" value="{{ old('school_diploma_1') }}">
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
                                <label class="form-check-label" for="full_time">Full Time</label>
                                <input class="radio" type="radio" name="personal_btn" id="full_time" value="{{ old('full_time') }}">

                                <label class="form-check-label" for="part_time">Part Time</label>
                                <input class="radio" type="radio" name="personal_btn" id="part_time" value="{{ old('part_time') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label></label>
                            <!-- <label for="gender">Do you have a High School Diploma or GED? <span class="text-red">*</span></label> -->
                            <div>
                                <label class="form-check-label" for="days">Days</label>
                                <input class="radio" type="radio" name="information_days" id="days" value="{{ old('days') }}">

                                <label class="form-check-label" for="evenings"> Evenings</label>
                                <input class="radio" type="radio" name="information_days" id="evenings" value="{{ old('evenings') }}">
                                <label class="form-check-label" for="weekends">Weekends</label>
                                <input class="radio" type="radio" name="information_days" id="weekdends" value="{{ old('weekdends') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <div>
                                <label class="form-check-label" for="nursing">Nursing</label>
                                <input class="radio" type="radio" name="app_information" id="nursing" value="{{ old('nurse') }}">

                                <label class="form-check-label" for="hha">HHA</label>
                                <input class="radio" type="radio" name="app_information" id="hha" value="{{ old('hha') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="gender">Status: <span class="text-red">*</span></label>
                            <div>
                                <label class="form-check-label" for="Regular">Regular</label>
                                <input class="radio" type="radio" name="app_status" id="regular" value="{{ old('regular') }}">

                                <label class="form-check-label" for="Temporary">Temporary</label>
                                <input class="radio" type="radio" name="app_status" id="temporary" value="{{ old('temporary') }}">
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
                                <label class="form-check-label" for="yes_authorized_to_work">yes</label>
                                <input class="radio" type="radio" name="app_authorized" id="yes_authorized_to_work" value="{{ old('yes_authorized') }}">
                                <label class="form-check-label" for="no_authorized_to_work">No</label>
                                <input class="radio" type="radio" name="app_authorized" id="no_authorized_to_work" value="{{ old('no_authorized') }}">
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
                                <label class="form-check-label" for="felony_convertion">yes</label>
                                <input class="radio" type="radio" name="felony_convertion" id="felony_convertion" value="{{ old('felony_convertion') }}">
                                <label class="form-check-label" for="felony_convertion_1">No</label>
                                <input class="radio" type="radio" name="felony_convertion_1" id="felony_convertion_1" value="{{ old('felony_convertion_1') }}">
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
                                <label class="form-check-label" for="essential_functions">yes</label>
                                <input class="radio" type="radio" name="essential" id="essential_functions" value="{{ old('essential_functions') }}">
                                <label class="form-check-label" for="essential_functions_1">No</label>
                                <input class="radio" type="radio" name="essential" id="essential_functions_1" value="{{ old('essential_functions_1') }}">
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
                                <label class="form-check-label" for="job_functions">yes</label>
                                <input class="radio" type="radio" name="app_accommodation" id="job_functions" value="{{ old('job_functions') }}">

                                <label class="form-check-label" for="job_functions_1">No</label>
                                <input class="radio" type="radio" name="app_accommodation" id="job_functions_1" value="{{ old('job_functions_1') }}">
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
                                    <td><input for="school_1" type="text" class="w-100 p-3" name="app_training-1" id="school_1" value="{{ old('school_1') }}"></td>
                                    <td><input for="school_2" type="text" class="w-100 p-3" name="app_training-2" id="school_2" value="{{ old('school_2') }}"></td>
                                    <td><input for="school_3" type="text" class="w-100 p-3" name="app_training-3" id="school_3" value="{{ old('school_3') }}"></td>
                                </tr>
                                <tr class="border">
                                    <td>school</td>
                                    <td><input for="degree_1" type="text" class="w-100 p-3" name="app_education-1" id="degree_1" value="{{ old('app_education-1') }}"></td>
                                    <td><input for="degree_2" type="text" class="w-100 p-3" name="app_education-2" id="degree_2" value="{{ old('app_education-2') }}"></td>
                                    <td><input for="degree_3" type="text" class="w-100 p-3" name="app_education-3" id="degree_3" value="{{ old('"app_education-3') }}"></td>
                                </tr>
                                <tr class="border">
                                    <td>other</td>
                                    <td><input for="school_address_1" type="text" class="w-100 p-3" name="school_address_1" id="school_address_1" value="{{ old('school_address_1') }}"></td>
                                    <td><input for="school_address_2" type="text" class="w-100 p-3" name="school_address_2" id="school_address_2" value="{{ old('school_address_2') }}"></td>
                                    <td><input for="school_address_3" type="text" class="w-100 p-3" name="school_address_3" id="school_address_3" value="{{ old('school_address_3') }}"></td>
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
                            <textarea class="form-control" id="textAreaExample6" rows="9"></textarea>
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
                                    <td><input for="name_1" type="text" class="w-100 p-3" name="name_1" id="name_1" value="{{ old('name_1') }}"></td>
                                    <td><input for="name_2" type="text" class="w-100 p-3" name="name_2" id="name_2" value="{{ old('name_2') }}"></td>
                                    <td><input for="name_3" type="text" class="w-100 p-3" name="name_3" id="name_3" value="{{ old('name_3') }}"></td>
                                    <td><input for="name_4" type="text" class="w-100 p-3" name="name_4" id="name_4" value="{{ old('name_4') }}"></td>
                                </tr>
                                <tr class="border">
                                    <td><input for="address_1" type="text" class="w-100 p-3" name="app_references_1" id="address_1" value="{{ old('address_1') }}"></td>
                                    <td><input for="address_2"type="text" class="w-100 p-3" name="app_references_2" id="address_2" value="{{ old('address_2') }}"></td>
                                    <td><input for="address_3" type="text" class="w-100 p-3" name="app_references_3" id="address_3" value="{{ old('address_3') }}"></td>
                                    <td><input for="address_4" type="text" class="w-100 p-3" name="app_references_4" id="address_4" value="{{ old('address_4') }}"></td>
                                </tr>
                                <tr class="border">
                                    <td><input for="relationship_1" type="text" class="w-100 p-3" name="app_personal_1" id="relationship_1" value="{{ old('relationship_1') }}"></td>
                                    <td><input for="relationship_2" type="text" class="w-100 p-3" name="app_personal_2" id="relationship_2" value="{{ old('relationship_2') }}"></td>
                                    <td><input for="relationship_3" type="text" class="w-100 p-3" name="app_personal_3" id="relationship_3" value="{{ old('relationship_3') }}"></td>
                                    <td><input for="relationship_4" type="text" class="w-100 p-3" name="app_personal_4" id="relationship_4" value="{{ old('relationship_4') }}"></td>
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
                                <label class="form-check-label" for="present_employer">yes</label>
                                <input class="radio" type="radio" name="app_contact" id="present_employer" value="{{ old('present_employer') }}">
                                <label class="form-check-label" for="present_employer_1">No</label>
                                <input class="radio" type="radio" name="app_contact" id="present_employer_1" value="{{ old('present_employer_1') }}">
                                <label class="form-check-label" for="present_employer_2">N/A</label>
                                <input class="radio" type="radio" name="present_employer_2" id="present_employer_2" value="{{ old('present_employer_2') }}">
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
                                            <label class="form-label" for="present_job_title">Job Title #1</label>
                                            <input type="text" name="present_job_title" id="present_job_title" value="{{ old('present_job_title') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_job_Job_start_date">Start Date (mo/day/yr)</label>
                                            <input type="Date" name="present_job_Job_start_date" id="present_job_Job_start_date" value="{{ old('present_job_Job_start_date') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_job_Job_start_end_date">End Date (mo/day/yr)</label>
                                            <input type="Date" name="present_job_Job_start_end_date" id="present_job_Job_start_end_date" value="{{ old('present_job_Job_start_end_date') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment">Company Name</label>
                                            <input type="text" name="present_employment" id="present_employment" value="{{ old('present_employment') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_supervisor_name">Supervisor’s Name </label>
                                            <input type="text" name="present_supervisor_name" id="present_supervisor_name" value="{{ old('present_supervisor_name') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_phone">Phone Number</label>
                                            <input type="number" name="present_employment_phone" id="present_employment_phone" value="{{ old('present_employment_phone') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_city">City</label>
                                            <input type="text" name="present_employment_city" id="present_employment_city" value="{{ old('present_employment_city') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_state">State</label>
                                            <input type="text" name="present_employment_state" id="present_employment_state" value="{{ old('present_employment_state') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_zip">Zip</label>
                                            <input type="text" name="present_employment_zip" id="present_employment_zip" value="{{ old('present_employment_zip') }}"  class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="form-outline w-100">
                                            <label class="form-label" for="present_employment_duties">Duties:</label>
                                            <textarea class="form-control" name="present_employment_duties" id="present_employment_duties" value="{{ old('present_employment_duties"') }}"  rows="5"></textarea>
                                            <!-- <input type="text" id="text" class="form-control" /> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_reason_for_leaving">Reason for Leaving</label>
                                            <input type="text" name="present_reason_for_leaving" id="present_reason_for_leaving" value="{{ old('present_reason_for_leaving') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_starting_salary">Starting Salary</label>
                                            <input type="number" name="present_employment_starting_salary" id="present_employment_starting_salary" value="{{ old('present_employment_starting_salary') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="present_employment_ending_salary">Ending Salary</label>
                                            <input type="number" name="ending_salary" id="present_employment_ending_salary" value="{{ old('application_ending_salary') }}" class="form-control p-3" />
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
                                            <label class="form-label" for="recent_job_title">Job Title #2</label>
                                            <input type="text" name="recent_job_title" id="recent_job_title" value="{{ old('recent_job_title"') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_job_start_date">Start Date (mo/day/yr)</label>
                                            <input type="Date" name="recent_job_start_date" id="recent_job_start_date" value="{{ old('recent_job_start_date') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_job_end_date">End Date (mo/day/yr)</label>
                                            <input type="Date" name="recent_job_end_date" id="recent_job_end_date" value="{{ old('recent_job_end_date') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_CompanyName">Company Name</label>
                                            <input type="text" name="recent_CompanyName" id="recent_CompanyName" value="{{ old('recent_CompanyName') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_supervisor_name">Supervisor’s Name </label>
                                            <input type="text" name="recent_supervisor_name" id="recent_supervisor_name" value="{{ old('recent_supervisor_name') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_supervisor_phone">Phone Number</label>
                                            <input type="number" name="recent_supervisor_phone" id="recent_supervisor_phone" value="{{ old('recent_supervisor_phone') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_employer_city">City</label>
                                            <input type="text" name="recent_employer_city" id="recent_employer_city" value="{{ old('recent_employer_city') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_employer_state">State</label>
                                            <input type="text" name="recent_employer_state" id="recent_employer_state" value="{{ old('recent_employer_state') }}"class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_employer_zip">Zip</label>
                                            <input type="text" name="recent_employer_zip" id="recent_employer_zip" value="{{ old('recent_employer_zip') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <div class="form-outline w-100">
                                            <label class="form-label" for="recent_employer_duties">Duties:</label>
                                            <textarea class="form-control" name="recent_employer_duties" id="recent_employer_duties" value="{{ old('recent_employer_duties') }}"  rows="5"></textarea>
                                            <!-- <input type="text" id="text" class="form-control" /> -->
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="reason_for_leaving">Reason for Leaving</label>
                                            <input type="text" name="reason_for_leaving" id="reason_for_leaving" value="{{ old('reason_for_leaving') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_starting_salary">Starting Salary</label>
                                            <input type="number" name="recent_starting_salary" id="recent_starting_salary" value="{{ old('recent_starting_salary') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-outline">
                                            <label class="form-label" for="recent_ending_salary">Ending Salary</label>
                                            <input type="number" name="recent_ending_salary" id="recent_ending_salary" value="{{ old('recent_ending_salary') }}" class="form-control p-3" />
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6 class="">I certify that the facts set forth in this Application for Employment are true and complete to the
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
                        <div class="col-md-3">
                            <label for="signature" name="signature" id="signature" value="signature">Signature</label>
                            <input type="text">
                            {{-- <input type="file" accept="image/*" onchange="loadFile(event)">
                            <img id="output"/>
                            <h5 class="sub_heading">Applicant Signature</h5> --}}
                        </div>
                        <div class="col-md-3 ">
                            <label for="signature_date" name="signature_date" id="signature_date" value="signature_date">Signature</label>
                            <input type="date">
                        </div>
                        <div class=" mb-5 mt-5">
                            <button type="button" class="d-flex px-5 btn btn-primary float-left">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
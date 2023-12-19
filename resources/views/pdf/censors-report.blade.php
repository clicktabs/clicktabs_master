<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Censors Report</title>

    <style>
        @charset "UTF-8";

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
        }

        a {
            color: #000;
        }

        .m-0 {
            margin: 0 !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 5px !important;
        }

        .mt-2 {
            margin-top: 10px !important;
        }

        .mb-1 {
            margin-bottom: .25rem !important;
        }
        .mb-0 {
            margin-bottom: 0 !important;
        }
        .mb-2 {
            margin-bottom: 10px !important;
        }

        .p-0 {padding: 0 !important;}
        .pb-0 {padding-bottom: 0 !important;}
        .pb-1 {padding-bottom: 5px !important;}
        .pb-2 {padding-bottom: 10px !important;}
        .pt-1 {padding-top: 5px !important;}
        .pt-2 {padding-top: 10px !important;}
        .pt-0 {padding-top: 0 !important;}

        .bg-black {
            background-color: #000 !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-center {
            text-align: center !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .input-group {
            position: relative;
            display: table;
            vertical-align: middle !important;
        }

        .input-group-text {
            display: table-cell;
            padding: 0 10px;
            font-size: 0.9rem;
            font-weight: 400;
            color: #212529;
            text-align: center;
            white-space: nowrap;
            background-color: #f8f9fa;
            border: 1px solid #999;
            border-radius: 0.375rem 0 0 0.375rem;
            height: 24px;
            line-height: 22px;
        }

        .input-group>.form-control,
        .input-group>.form-floating,
        .input-group>.form-select {
            display: table-cell;
            width: 150px;
            min-width: 0;
            border-radius: 0;
            height: 24px;
        }

        .form-control {
            display: block;
            width: 100%;
            min-height: 24px;
            padding: 0;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #999;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.375rem;
        }

        .form-check-input[type=checkbox] {
            margin: 0;
            position: relative;
            top: 5px;
        }

        .d-md-flex {
            display: flex !important;
        }

        .border {
            border: 1px solid #999 !important;
        }

        .section-heading>span {
            padding: 5px 15px;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            vertical-align: top;
            border-color: #999;
        }

        .table table {
            margin-bottom: -1px;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 1px;
        }

        .table>tbody {
            vertical-align: inherit;
        }

        .table td,
        .table th {
            padding: .5rem .5rem;
            color: initial;
            background-color: #fff;
            border-bottom-width: 1px;
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 9999px inset;
            vertical-align: middle;
        }

        .table-borderless tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead,
        .table-borderless tr {
            border-width: 0;
        }

        .table-borderless td .table-bordered tbody,
        .table-borderless td .table-bordered td,
        .table-borderless td .table-bordered th,
        .table-borderless td .table-bordered thead,
        .table-borderless td .table-bordered tr {
            border-width: 1px;
        }

        table td p, table th p {
            margin: 0 0 5px;
        }

        table td p:last-child, table th p:last-child {
            margin-bottom: 0
        }

        .bg-secondary-subtle {
            background-color: #f0f0f0 !important;
        }

        nav {
            display: none;
        }

        .h1,
        h1 {
            font-size: 1.9rem;
        }

        .h2,
        h2 {
            font-size: 1.5rem;
        }

        body {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        h2.d-md-flex {
            display: flex !important;
        }

        h2>.border-md-end-1 {
            border-right: 1px solid #999 !important;
        }

        .row>.col-auto>.input-group>.form-control {
            max-width: 130px;
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%;
        }

        .navbar-expand-lg .navbar-nav {
            flex-direction: row;
            column-gap: 20px;
        }

        body {
            background-color: #fff;
        }

        .nm-3 {
            margin-left: -15px !important;
            margin-right: -15px !important;
        }

        .nmt-1 {
            margin-top: -1px !important;
        }

        .nmb-1 {
            margin-bottom: -1px !important;
        }

        @media (min-width: 992px) {
            .nmt-lg-1 {
                margin-top: -1px !important;
            }
        }

        .labels-mt-1 label {
            margin-top: 5px;
        }

        .clean-input-group {
            align-items: flex-end;
            column-gap: 10px;
        }

        .clean-input-group .input-group-text,
        .clean-input-group .form-control {
            border-radius: 0;
            border: 0 none;
            padding: 0;
        }

        .clean-input-group .form-control {
            border-bottom: 1px solid #999;
        }

        .clean-input-group .form-control:focus {
            border-color: transparent;
            box-shadow: none;
            border-bottom: 1px solid #000;
        }

        img {
            max-width: 100%;
        }

        @media (max-width: 991px) {
            .mt-md-2 {
                margin-top: 10px !important;
            }
        }

        @media (min-width: 992px) {
            .border-lg-end-2 {
                border-right: 2px solid #999 !important;
            }
        }

        @media (min-width: 768px) {
            .border-md-end-2 {
                border-right: 2px solid #999 !important;
            }

            .border-md-end-1 {
                border-right: 1px solid #999 !important;
            }
        }

        .form-holder h2>span {
            padding: 5px 15px;
        }

        @media (max-width: 767px) {
            .form-holder h2>span {
                display: block;
            }
        }

        @media (max-width: 767px) {
            #oasis-e-form .table-responsive {
                max-width: calc(540px - var(--bs-gutter-x));
            }
        }

        @media (max-width: 575px) {
            #oasis-e-form .table-responsive {
                max-width: calc(100vw - var(--bs-gutter-x));
            }
        }

        @page {
            margin: 60px;
            size: 300mm;
        }
    </style>
</head>
<body>
    <table class="table table-bordered align-top">
        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>

        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>

        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>

        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>

        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>

        <tr>
            <td class="bg-secondary-subtle"></td>
            <td class="bg-secondary-subtle">SN</td>
            <td class="bg-secondary-subtle"><b>Case Manager</b> Barake, Mariame</td>
        </tr>
        <tr>
            <td>
                <p><b>Patient MB6199</b> | <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>1. <b>BROWN, MARIE (F)</b></p>
                <p>DOB: 09/17/1953 | Age: 69</p>
                <p>1978 ARTANE PLACE<br>COLUMBUS OH 43219</p>
            </td>
            <td>
                <p><b>Episode</b> (Palmetto GBA) (3)</p>
                <p>SOC: 03/20/23 | <span style="color: red;font-weight:500">Current: 05/19-07/17</span></p>
                <p>PDX: Gastro-esophageal reflux</p>
                <p>SDX: Chronic obstructive pulmo</p>
                <p>Triage/Risk Code: 3 <span style="margin-left: 10%">Disaster Code: 3</span></p>
            </td>
            <td>
                <p><b>Physician</b></p>
                <p>ALEX ALAHAKOON NPI: <a href="#">1073672531</a></p>
                <p>Phone: <a href="tel:6146705998">(614) 670-5998</a></p>
                <p>Fax: <a href="fax:6148610930">(614) 861-0930</a></p>
                <p style="border-top: 1px solid">M. Baraka / M. Baraka</p>
            </td>
        </tr>
        
    </table>
</body>
</html>
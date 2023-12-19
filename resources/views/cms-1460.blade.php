<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CMS-1460</title>
   <link rel="stylesheet" href="{{asset('outass/css/style.css')}}">
   <link rel="stylesheet" href="bs/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style>body {font-size: 14px;} #oasis-e-form .table td {padding-left: 0.5rem;padding-right: 0.5rem;}.form-control{padding: .27rem .4rem;font-size: 14px;}
   @media screen {
      .table td{position: relative;}
      .table td.line-after::after{content: "";position: absolute;right: 21px;top: 0;height: 100%;border-right: 1px solid var(--bs-table-border-color);}
      .table td::before {content: attr(data-text);position: absolute;left: -16px;top: 50%;transform: translateY(-50%);font-size: 16px;}
      .table tr{position: relative;}
      .table tr::before, .table tr::after {content: attr(data-text);position: absolute;top: 50%;transform: translateY(-50%);}
      .table tr::before{left: -16px;}.table tr::after{right: -16px;}
   }
   </style>
</head>

<body>
   <div class="container pt-5 px-4" style="max-width: 1600px;;">
      <div class="form-holder">
         <form action="" method="post" id="oasis-e-form">
            <table class="table table-bordered align-middle not-responsive mb-0 default-td">
               <tr>
                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">1</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>
                  <td>
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">2</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>
                  <td>3a PAT<br>CNTL #</td>
                  <td colspan="2"><input type="text" name="" class="form-control"></td>
                  <td class="text-bg-dark">4 TYPE OF BILL</td>
               </tr>
               <tr>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">b MED REC</td>
                  <td class="bg-body-secondary" colspan="2"><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td>5 FED. TAX NO.</td>
                  <td class="bg-body-secondary" colspan="2">
                     <div class="d-flex">
                        <span class="me-3">6 STATEMENT<br>FROM</span>
                        <span>COVERS PERIOD<br>THROUGH</span>
                     </div>
                  </td>
                  <td rowspan="2">
                     <label class="input-group clean-input-group">
                        <span class="input-group-text">7</span>
                        <input type="text" id="" class="form-control" style="min-width: 150px;">
                     </label>
                  </td>
               </tr>
               <tr>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">8 BPATIENT NAME</td>
                  <td class="bg-body-secondary">a</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">9 PATIENT ADDRESS</td>
                  <td class="bg-body-secondary">a</td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">b</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">b</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">c</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">d</td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary">e</td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td rowspan="2">10 BIRTHDATE</td>
                  <td rowspan="2">11 SEX</td>
                  <td class="bg-body-secondary text-center" colspan="4">ADMISSION</td>
                  <td rowspan="2">16 DHR</td>
                  <td rowspan="2">17 STAT</td>
                  <td class="bg-body-secondary text-center" colspan="11">CONDITION CODES</td>
                  <td class="bg-body-secondary" rowspan="2">ACDT 30 STATE</td>
                  <td class="bg-body-secondary" rowspan="2">30</td>
               </tr>
               <tr>
                  <td class="bg-body-secondary">12 DATE</td>
                  <td class="bg-body-secondary">13 HR</td>
                  <td class="bg-body-secondary">14 TYPE</td>
                  <td class="bg-body-secondary">15 SRC</td>
                  <td class="bg-body-secondary">18</td>
                  <td class="bg-body-secondary">19</td>
                  <td class="bg-body-secondary">20</td>
                  <td class="bg-body-secondary">21</td>
                  <td class="bg-body-secondary">22</td>
                  <td class="bg-body-secondary">23</td>
                  <td class="bg-body-secondary">24</td>
                  <td class="bg-body-secondary">25</td>
                  <td class="bg-body-secondary">26</td>
                  <td class="bg-body-secondary">27</td>
                  <td class="bg-body-secondary">28</td>
               </tr>
               <tr>
                  <td><input type="date" name="" class="form-control" style="width:140px"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="date" name="" class="form-control" style="width:140px"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td colspan="2" class="bg-body-secondary text-center">31 OCCURRENCE</td>
                  <td colspan="2" class="text-bg-dark text-center">32 OCCURRENCE</td>
                  <td colspan="2" class="bg-body-secondary text-center">33 OCCURRENCE</td>
                  <td colspan="2" class="text-bg-dark text-center">34 OCCURRENCE</td>
                  <td colspan="3" class="bg-body-secondary text-center">35 OCCURRENCE SPAN</td>
                  <td colspan="3" class="bg-body-secondary text-center">36 OCCURRENCE SPAN</td>
                  <td rowspan="2" class="bg-body-secondary">37</td>
               </tr>
               <tr>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">DATE</td>
                  <td class="text-bg-dark">CODE</td>
                  <td class="text-bg-dark">DATE</td>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">DATE</td>
                  <td class="text-bg-dark">CODE</td>
                  <td class="text-bg-dark">DATE</td>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">FROM</td>
                  <td class="bg-body-secondary">THROUGH</td>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">FROM</td>
                  <td class="bg-body-secondary">THROUGH</td>
               </tr>
               <tr>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="date" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="date" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="date" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="date" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr>
                  <td rowspan="6" colspan="9" class="align-top pe-5 line-after">
                     <label for="" class="form-label">38</label>
                     <input type="text" name="" class="form-control">
                  </td>
                  <td colspan="2" class="bg-body-secondary text-center">39 VALUE CODES</td>
                  <td colspan="2" class="text-bg-dark text-center">40 VALUE CODES</td>
                  <td colspan="2" class="bg-body-secondary text-center">41 VALUE CODES</td>
               </tr>
               <tr>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">AMOUNT</td>
                  <td class="text-bg-dark">CODE</td>
                  <td class="text-bg-dark">AMOUNT</td>
                  <td class="bg-body-secondary">CODE</td>
                  <td class="bg-body-secondary">AMOUNT</td>
               </tr>
               <tr>
                  <td data-text="a"><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr>
                  <td data-text="b" class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
               </tr>
               <tr>
                  <td data-text="c"><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
                  <td><input type="text" name="" class="form-control"></td>
               </tr>
               <tr>
                  <td data-text="d" class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td>42 REV. CD</td>
                  <td>43 DESCRIPTION</td>
                  <td>44 HCPCS/RATE/HIPPS CODE</td>
                  <td>45 SERV. DATE</td>
                  <td>46 SERV. UNITS</td>
                  <td>47 TOTAL CHARGES</td>
                  <td>48 NON-COVERED CHARGES</td>
                  <td>49</td>
               </tr>
               <tr data-text="1">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="2">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="3">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="4">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="5">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="6">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="7">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="8">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="9">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="10">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="11">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="12">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="13">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="14">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="15">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="16">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="17">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="18">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="19">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="20">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="21">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="22">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="23">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2">
                     <label class="input-group clean-input-group">
                        <span class="input-group-text fw-medium"><i>PAGE</i></span>
                        <input type="text" id="" class="form-control">
                        <span class="input-group-text fw-medium"><i>OF</i></span>
                        <input type="date" id="" class="form-control" step="min-width: 120px">
                        <span class="input-group-text fw-medium"><i>CREATION DATE</i></span>
                     </label>
                  </td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td class="text-bg-dark"><span class="fw-medium"><i>TOTALS ⇒</i></span></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">50 PAYER NAME</td>
                  <td class="bg-body-secondary">51 HEALTH PLAN ID</td>
                  <td class="bg-body-secondary">52 REL INFO</td>
                  <td class="bg-body-secondary"></td>
                  <td class="bg-body-secondary">53 ASG. BEN.</td>
                  <td class="bg-body-secondary">54 PRIOR PAYMENTS</td>
                  <td class="bg-body-secondary">55 EST. AMOUNT DUE</td>
                  <td>56 NPI</td>
                  <td></td>
               </tr>
               <tr data-text="A">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td>57</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="B">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">OTHER</td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="C">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td>PRV ID</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">58 INSURED'S NAME</td>
                  <td class="bg-body-secondary">59 P.REL</td>
                  <td class="bg-body-secondary">60 INSURED'S UNIQUE ID</td>
                  <td class="bg-body-secondary">61 GROUP NAME</td>
                  <td class="bg-body-secondary">62 INSURANCE GROUP NO</td>
               </tr>
               <tr data-text="A">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="B">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="C">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">63 TREATMENT AUTHORIZATION CODES</td>
                  <td class="bg-body-secondary">64 DOCUMENT CONTROL NUMBER</td>
                  <td class="bg-body-secondary">65 EMPLOYER NAME</td>
               </tr>
               <tr data-text="A">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="B">
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr data-text="C">
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td style="width: 50px;">66<br>DX</td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">67</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">A</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">B</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">C</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">D</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">E</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">F</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">G</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">H</span></td>
                  <td><span>68</span></td>
               </tr>
               <tr>
                  <td></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">I</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">J</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">K</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">L</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">M</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">N</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">O</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">P</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">Q</span></td>
                  <td></td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td class="bg-body-secondary">69 ADMIT<br>DX</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">70 PATIENT <br>REASON DX</td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">a</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">b</span></td>
                  <td class="text-center"><span class="fs-3 fw-bold opacity-25">c</span></td>
                  <td class="bg-body-secondary">71 PPS<br>CODE</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">72<br>ECI</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td>73</td>
               </tr>
            </table>
            <table class="table table-bordered align-middle not-responsive mb-0 default-td" style="margin-top: -1px;">
               <tr>
                  <td colspan="2" class="bg-body-secondary text-center">74 PRINCIPAL PROCEDURE</td>
                  <td colspan="2" class="text-bg-dark text-center">a. OTHER PROCEDURE</td>
                  <td colspan="2" class="bg-body-secondary text-center">b. OTHER PROCEDURE</td>
                  <td rowspan="6" class="align-top">75</td>
                  <td rowspan="10" style="padding: 1px;"></td>
                  <td class="bg-body-secondary">76 ATTENDING</td>
                  <td>NPI</td>
                  <td class="bg-body-secondary">QUAL</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr>
                  <td class="bg-body-secondary text-center">CODE</td>
                  <td class="bg-body-secondary text-center">DATE</td>
                  <td class="text-bg-dark text-center">CODE</td>
                  <td class="text-bg-dark text-center">DATE</td>
                  <td class="bg-body-secondary text-center">CODE</td>
                  <td class="bg-body-secondary text-center">DATE</td>
                  <td colspan="2">LAST</td>
                  <td colspan="3">FIRST</td>
               </tr>
               <tr>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">77 OPERATING</td>
                  <td>NPI</td>
                  <td class="bg-body-secondary">QUAL</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               
               <tr>
                  <td colspan="2" class="text-bg-dark text-center">c. OTHER PROCEDUR</td>
                  <td colspan="2" class="bg-body-secondary text-center">d. OTHER PROCEDURE</td>
                  <td colspan="2" class="text-bg-dark text-center">e. OTHER PROCEDURE</td>
                  <td colspan="2">LAST</td>
                  <td colspan="3">FIRST</td>
               </tr>
               <tr>
                  <td class="text-bg-dark text-center">CODE</td>
                  <td class="text-bg-dark text-center">DATE</td>
                  <td class="bg-body-secondary text-center">CODE</td>
                  <td class="bg-body-secondary text-center">DATE</td>
                  <td class="text-bg-dark text-center">CODE</td>
                  <td class="text-bg-dark text-center">DATE</td>
                  <td class="bg-body-secondary">78 OTHER</td>
                  <td>NPI</td>
                  <td class="bg-body-secondary">QUAL</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="date" name="" id="" class="form-control"></td>
                  <td colspan="2">LAST</td>
                  <td colspan="3">FIRST</td>
               </tr>
               <tr>
                  <td colspan="2">80 REMARKS</td>
                  <td>81CC a</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">79 OTHER</td>
                  <td>NPI</td>
                  <td class="bg-body-secondary">QUAL</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
               </tr>
               <tr>
                  <td colspan="2"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">b</td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2" class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2">LAST</td>
                  <td colspan="3">FIRST</td>
               </tr>
               <tr>
                  <td colspan="2"><input type="text" name="" id="" class="form-control"></td>
                  <td>c</td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2"><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="5"></td>
               </tr>
               <tr>
                  <td colspan="2"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary">d</td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="2" class="bg-body-secondary"><input type="text" name="" id="" class="form-control"></td>
                  <td colspan="5"></td>
               </tr>
            </table>
            <table class="table table-borderless align-middle not-responsive default-td mb-5">
               <tr>
                  <td class="ps-0">UB-04 CMS-1460</td>
                  <td>APPROVED OMB NO.</td>
                  <td class="pe-0 text-end">THE CERTIFICATIONS ON THE REVERSE APPLY TO THIS BILL AND ARE MADE A PART HEREOF</td>
               </tr>
            </table>
         </form>
      </div><!--/ .form-holder -->
   </div>

   <script src="bs/js/bootstrap.min.js"></script>
</body>

</html>
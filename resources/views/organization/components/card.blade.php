<div class="flex ak tz _c tns bg-white bd rounded-sm border border-slate-200">
    <div class="vc mb">
        <header class="flex fe aj ru">
            <!-- Icon -->
            {{-- <img src="images/icon-01.svg" width="32" height="32" alt="Icon 01"> --}}

        </header>
        <h2 class="ga gh text-slate-800 ru">{{ $card_name ?? "N/A" }}</h2>
        {{-- <div class="go gh gq gv rt">Sales</div> --}}
        <div class="flex aj">
            <div class="text-3xl font-bold text-slate-800 mr-2">{{ $patients ?? 0 }}</div>
            <div class="text-sm gh ye vk hd rounded-full">+0</div>
        </div>
    </div>
    <!-- Chart built with Chart.js 3 -->
    <!-- Check out src/js/components/dashboard-card-01.js for config -->
    <div class="uw">
        <!-- Change the height attribute to adjust the chart height -->
        <canvas id="dashboard-card-01" width="389" height="128"></canvas>
    </div>
</div>

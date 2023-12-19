@extends('layouts.app')

@section('content')

<div class="flex ss la">

    @include('layouts.navigation')

    <div class="y flex ak ug ll lc">

        @include('layouts.site_header')

        <main>
            <div class="tef teb">

                <!-- Content -->
                <div class="vs jj ttm vl ou uf na">

                    <!-- Page header -->
                    <div class="je jd jc ii">

                        <!-- Left: Title -->
                        <div class="ri _y">
                            <h1 class="gu teu text-slate-800 font-bold">{{ $addon->name }} Sub Categories</h1>
                        </div>

                        <!-- Add card button -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn ho xi ye" @click.prevent="modalOpen = true" aria-controls="feedback-modal">
                                Add new
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="display: inline-block;" class="bi bi-folder-plus" viewBox="0 0 16 16">
                                    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
                                    <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </button>
                            <div class="m w bg-slate-900 pu tx bz" x-show="modalOpen" x-transition:enter="wt wa wr" x-transition:enter-start="opacity-0" x-transition:enter-end="ba" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                            <div id="feedback-modal" class="m w tx la flex items-center np justify-center vs jj" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="wt wu wr" x-transition:enter-start="opacity-0 u_" x-transition:enter-end="ba uj" x-transition:leave="wt wu wr" x-transition:leave-start="ba uj" x-transition:leave-end="opacity-0 u_" x-cloak="">
                                <form  class="bg-white rounded bd lu up ou oe" action="{{ route('addonSub.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate accept-charset="utf-8">
                                    @csrf
                                    <div class="bg-white rounded bd lu up ou oe" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="vc vo cs border-slate-200">
                                            <div class="flex fe items-center">
                                                <div class="gh text-slate-800">

                                                </div>
                                                <button class="gq xv" @click="modalOpen = false">
                                                    <div class="d">Close</div>
                                                    <svg class="oo sl du">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="vc vu">
                                            <div class="text-sm">
                                                <div class="gp text-slate-800 ro">Add New Sub Category</div>
                                            </div>

                                            <div class="fw">
                                                <div>
                                                    <label class="block text-sm gp rt" for="name">Name <span class="yl">*</span></label>
                                                    <input id="name" name="name" class="s ou vi vf" type="text" required="">
                                                    @if ($errors->has('name'))
                                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                                    @endif
                                                    <label class="block text-sm gp rt" for="description">Description</label>
                                                    <input id="description" name="description" class="s ou" type="text">

                                                    <input id="addon_id" name="addon_id" value={{ $addon->id }} type="number" hidden>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc vu co border-slate-200">
                                            <div class="flex flex-wrap justify-end fc">
                                                <button class="r border-slate-200 hover--border-slate-300 g_" @click="modalOpen = false">Cancel</button>
                                                <button class="r ho xi ye">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="fb">

                        <!-- Card 1 -->
                        @isset($addonSubs)
                            @foreach ($addonSubs as $addonSub)
                                <label class="y block al gt ou">
                                    <input type="radio" name="radio-buttons" class="_r d" checked="">
                                    <div class="dw rounded border border-slate-200 hover--border-slate-300 bv wi wu">
                                        <div class="sn ag items-center fo">
                                            <!-- Card -->
                                            <div class="ne tj _l _h flex items-center fy tt_ trl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                                                    <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                                    <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                                                </svg>
                                            </div>
                                            <!-- Name -->
                                            <div class="ne tq _l _h gt qt ttq trh">
                                                <div class="text-sm gp text-slate-800 ld">{{ $addonSub->name }}</div>
                                            </div>
                                            <!-- Card limits -->
                                            <div class="ne tj _l _p gr qt tt_ trc">
                                                <div class="text-sm">
                                                    {{ $addonSub->description ?? 'Description not provided' }} 
                                                    
                                                </div>
                                            </div>
                                            <!-- Card status -->
                                            <div class="ne tq _l _d gr ttq trh">
                                                <div class="go inline-flex gp ys rounded-full gn vp vf">
                                                    <a href="0#" class="gq xv rounded-full">
                                                        <span class="d">Edit</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="0#" class="gq xv rounded-full">
                                                        <span class="d">Download</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M16 20c.3 0 .5-.1.7-.3l5.7-5.7-1.4-1.4-4 4V8h-2v8.6l-4-4L9.6 14l5.7 5.7c.2.2.4.3.7.3zM9 22h14v2H9z"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="0#" class="yl xy rounded-full">
                                                        <span class="d">Delete</span>
                                                        <svg class="os sf du" viewBox="0 0 32 32">
                                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z"></path>
                                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="g w cr cp _i rounded pointer-events-none" aria-hidden="true"></div>
                                </label>
                            @endforeach
                        @endisset

                    </div>

                </div>

            </div>
        </main>

    </div>

</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="flex ss la">

    @include('layouts.navigation')

    <div class="y flex ak ug ll lc">

        @include('layouts.site_header')

        <main>
            <div class="vs jj ttm vl ou uf na">
                <div class="rc">
                    <h1 class="gu teu text-slate-800 font-bold">Category Creation ✨</h1>
                </div>
                <div class="bg-white bd rounded-sm rc">
                    <div class="flex ak zc qv">
                        <div class="flex a_ lh l qx z_ vn vh cs zz tee border-slate-200 ur zg">
                            <div>
                                <div class="go gh gq gv ro"></div>
                                <ul class="flex a_ qx ra qm">
                                    <li class="rv qm qg">
                                        <a class="flex items-center vp vr rounded lm hm" href="settings.html">
                                            <svg class="oo sl ub du text-indigo-400 mr-2" viewBox="0 0 16 16">
                                                <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                            </svg>
                                            <span class="text-sm gp text-indigo-500">New Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="uw">
                            <form action="{{ route('addon.create') }}" method="POST" autocomplete="off" enctype="multipart/form-data" novalidate accept-charset="utf-8">
                                @csrf
                                <div class="d_ fd">
                                    <section>
                                        <h3 class="gf gb text-slate-800 font-bold rt">Add Category Profile</h3>
                                        <div class="text-sm">This cuts across all companies that use the platform.</div>
                                        <div class="je jc fg jm jb rw">
                                            <div class="jr">
                                                <label class="block text-sm gp rt" for="name">Category Name</label>
                                                <input id="name" name="name" class="s ou" type="text">
                                                @if ($errors->has('name'))
                                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <footer>
                                    <div class="flex ak vm vg co border-slate-200">
                                        <div class="flex ls">
                                            <a href="{{ url('/addons') }}" class="btn border-slate-200 hover--border-slate-300 g_">Cancel</a>
                                            {{-- <button class="btn border-slate-200 hover--border-slate-300 g_">Cancel</button> --}}
                                            <button class="btn ho xi ye ml-3">Save Changes</button>
                                        </div>
                                    </div>
                                </footer>
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </main>

    </div>

</div>

@endsection

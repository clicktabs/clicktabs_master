<div x-show="open" x-data="{ open: true }">
    <div class="vs vr rounded-sm text-sm ha ye">
        <div class="flex ou fe aj">
            <div class="flex">
                <svg class="oo sl ub du bl ie ra" viewBox="0 0 16 16">
                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                </svg>
                <div class="gp">{{ session('error') }}</div>
            </div>
            <button class="bc x_ ml-3 ie" @click="open = false">
                <div class="d">Close</div>
                <svg class="oo sl du">
                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

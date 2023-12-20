<div class="container mx-auto">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-3"></div>
        
        <div class="col-span-6">
            <div class="max-w-md mx-auto my-8 p-6 bg-zinc-100 rounded shadow-md">
                <div class="mb-4 text-md text-gray-600">
                    <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Update Password</h1>
                    <span class="text-sm text-center text-gray-800 mb-6">{{ __('This is a secure area of the application. Please update your password from here.') }}</span>
                </div>
                
                <form method="POST" action="{{ route('update.password') }}">
                    @csrf
                    <div>
                        <div class="mb-4">
                            <label for="current_password" class="block text-gray-700 font-bold mb-2">Current Password</label>
                            <input type="password" name="current_password" id="current_password" class="form-input w-full rounded border-gray-300">
                        </div>
                    
                        <div class="mb-4">
                            <label for="new_password" class="block text-gray-700 font-bold mb-2">New Password</label>
                            <input type="password" name="new_password" id="new_password" class="form-input w-full rounded border-gray-300">
                        </div>
                    
                        <div class="mb-6">
                            <label for="new_password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm New Password</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-input w-full rounded border-gray-300">
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out" style="background-color: #4133BF">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-span-3"></div>
    </div>
</div>


@if (session('success'))
    @include('components.notifications.success')
@elseif (session('error'))
    @include('components.notifications.error')
@endif

{{-- FORM ERROR NOTIFICATION --}}
@if (isset($errors) && $errors->any())
    @include('components.notifications.form_errors')
@endif


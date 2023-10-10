@extends('layouts.template2')
@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        
        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow-lg rounded-lg slide-in-from-left">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    /* Define the keyframes animation for sliding in from the left */
@keyframes slideInFromLeft {
    0% {
        opacity: 0;
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
    }
}

.slide-in-from-left {
    animation: slideInFromLeft 0.5s ease-in-out; 
}

</style>

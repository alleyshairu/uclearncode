@section('title')
    Profile
@endsection

<x-portal-layout>
    <x-slot name="header">
        <h1 class="text-xl font-bold text-gray-900 sm:text-2xl">Profile</h1>
    </x-slot>

    <div class="grid gap-3 p-4">
        @include('portal.profile.partials.update-profile-information-form')
        @include('portal.profile.partials.update-password-form')
    </div>
</x-portal-layout>
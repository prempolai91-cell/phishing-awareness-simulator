<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Campaign
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white shadow rounded-lg p-6">

                <form action="{{ route('campaigns.store') }}" method="POST">

                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium">Campaign Name</label>
                        <input
                            type="text"
                            name="campaign_name"
                            class="w-full border rounded px-3 py-2"
                            value="{{ old('campaign_name') }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Email Subject</label>
                        <input
                            type="text"
                            name="email_subject"
                            class="w-full border rounded px-3 py-2"
                            value="{{ old('email_subject') }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Target Email</label>
                        <input
                            type="email"
                            name="target_email"
                            class="w-full border rounded px-3 py-2"
                            value="{{ old('target_email') }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Landing Page</label>
                        <input
                            type="text"
                            name="landing_page"
                            class="w-full border rounded px-3 py-2"
                            placeholder="Example: Microsoft Login"
                            value="{{ old('landing_page') }}">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Status</label>

                        <select
                            name="status"
                            class="w-full border rounded px-3 py-2">

                            <option value="Draft">Draft</option>
                            <option value="Scheduled">Scheduled</option>
                            <option value="Running">Running</option>
                            <option value="Completed">Completed</option>

                        </select>
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium">
                            Scheduled At
                        </label>

                        <input
                            type="datetime-local"
                            name="scheduled_at"
                            class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="flex justify-between">

                        <a href="{{ route('campaigns.index') }}"
                           class="bg-gray-500 text-white px-4 py-2 rounded">
                            Back
                        </a>

                        <button
                            class="bg-blue-600 text-white px-6 py-2 rounded">
                            Save Campaign
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
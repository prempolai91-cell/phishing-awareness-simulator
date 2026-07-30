<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Campaign
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

                <form action="{{ route('campaigns.update', $campaign) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium">Campaign Name</label>
                        <input type="text"
                               name="campaign_name"
                               value="{{ old('campaign_name', $campaign->campaign_name) }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Email Subject</label>
                        <input type="text"
                               name="email_subject"
                               value="{{ old('email_subject', $campaign->email_subject) }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Target Email</label>
                        <input type="email"
                               name="target_email"
                               value="{{ old('target_email', $campaign->target_email) }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Landing Page</label>
                        <input type="text"
                               name="landing_page"
                               value="{{ old('landing_page', $campaign->landing_page) }}"
                               class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium">Status</label>

                        <select name="status" class="w-full border rounded px-3 py-2">

                            <option value="Draft" {{ $campaign->status=='Draft' ? 'selected' : '' }}>Draft</option>

                            <option value="Scheduled" {{ $campaign->status=='Scheduled' ? 'selected' : '' }}>Scheduled</option>

                            <option value="Running" {{ $campaign->status=='Running' ? 'selected' : '' }}>Running</option>

                            <option value="Completed" {{ $campaign->status=='Completed' ? 'selected' : '' }}>Completed</option>

                        </select>

                    </div>

                    <div class="mb-5">
                        <label class="block font-medium">Scheduled At</label>

                        <input type="datetime-local"
                               name="scheduled_at"
                               value="{{ $campaign->scheduled_at }}"
                               class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="flex justify-between">

                        <a href="{{ route('campaigns.index') }}"
                           class="bg-gray-600 text-white px-4 py-2 rounded">
                            Cancel
                        </a>

                        <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded">
                            Update Campaign
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>
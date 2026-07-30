<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Campaign Management
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-end mb-4">
                <a href="{{ route('campaigns.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    + Create Campaign
                </a>
            </div>

            <div class="bg-white shadow rounded-lg overflow-hidden">

                <table class="min-w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left">ID</th>
                            <th class="px-6 py-3 text-left">Campaign</th>
                            <th class="px-6 py-3 text-left">Email Subject</th>
                            <th class="px-6 py-3 text-left">Target Email</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($campaigns as $campaign)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $campaign->id }}</td>
                            <td class="px-6 py-4">{{ $campaign->campaign_name }}</td>
                            <td class="px-6 py-4">{{ $campaign->email_subject }}</td>
                            <td class="px-6 py-4">{{ $campaign->target_email }}</td>
                            <td class="px-6 py-4">{{ $campaign->status }}</td>

                            <td class="px-6 py-4 flex gap-2">

                                <a href="{{ route('campaigns.show',$campaign) }}"
                                   class="bg-green-600 text-white px-3 py-1 rounded">
                                    View
                                </a>

                                <a href="{{ route('campaigns.edit',$campaign) }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Edit
                                </a>

                                <form action="{{ route('campaigns.destroy',$campaign) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Delete this campaign?')"
                                        class="bg-red-600 text-white px-3 py-1 rounded">
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="6" class="text-center py-8">
                                No Campaigns Found
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>
</x-app-layout>
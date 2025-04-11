<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-start mb-6">
                    <h1 class="text-2xl font-bold">User Dashboard</h1>
                    
                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Logout
                        </button>
                    </form>
                </div>
                
                <div class="flex items-center space-x-4 mb-6">
                    @if(auth()->user()->avatar)
                        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" 
                             alt="Avatar" 
                             class="h-16 w-16 rounded-full object-cover">
                    @else
                        <div class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500 text-xs">No Avatar</span>
                        </div>
                    @endif
                    
                    <form action="{{ route('avatar.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center space-x-2">
                            <input type="file" name="avatar" id="avatar" class="hidden" onchange="this.form.submit()">
                            <label for="avatar" class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Change Avatar
                            </label>
                        </div>
                    </form>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Name</h2>
                        <p class="mt-1 text-sm text-gray-900">{{ auth()->user()->name }}</p>
                    </div>
                    
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Email</h2>
                        <p class="mt-1 text-sm text-gray-900">{{ auth()->user()->email }}</p>
                    </div>
                    
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Account Created</h2>
                        <p class="mt-1 text-sm text-gray-900">{{ auth()->user()->created_at->format('F j, Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
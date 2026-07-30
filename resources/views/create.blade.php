<x-layout>
    <div class="max-w-2xl mx-auto mt-12 px-4">
        <!-- Form Container -->
        <form action="#" method="POST" class="bg-slate-800 border border-slate-700 rounded-xl shadow-xl p-6 space-y-4">
            @csrf
            <!-- Header -->
            <div>
                <h2 class="text-xl font-semibold text-white tracking-tight">Create Note</h2>
                <p class="text-sm text-slate-400">Capture your thoughts, ideas, or reminders.</p>
            </div>

            <!-- Title Input -->
            <div>
                <label for="title" class="sr-only">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    class="w-full bg-slate-900 border border-slate-700 rounded-lg p-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition" 
                    placeholder="Title" 
                    required
                />
            </div>

            <!-- Content Input -->
            <div>
                <label for="content" class="sr-only">Note Content</label>
                <textarea 
                    id="content" 
                    name="description" 
                    rows="4" 
                    class="w-full bg-slate-900 border border-slate-700 rounded-lg p-3 text-sm text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition resize-none" 
                    placeholder="Write your thoughts here..."
                    required
                ></textarea>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-3 pt-2">
                <!-- Secondary Button -->
                <button 
                    type="button" 
                    class="px-4 py-2 text-sm font-medium text-slate-300 bg-slate-700 hover:bg-slate-600 focus:ring-2 focus:ring-slate-500 rounded-lg transition-colors duration-150"
                >
                    Cancel
                </button>

                <!-- Primary Button -->
                <button 
                    type="submit" 
                    class="px-5 py-2 text-sm font-medium text-white bg-amber-600 hover:bg-amber-500 focus:ring-2 focus:ring-amber-400 rounded-lg shadow-md transition-colors duration-150 cursor-pointer"
                >
                    Save Note
                </button>

                <!-- The Button -->

                <button 
                    type="button" 
                    onclick="document.getElementById('deadline').showPicker()" 
                    class="inline-flex items-center gap-2 px-3 py-2 bg-slate-900 hover:bg-slate-700 border border-slate-700 text-slate-300 text-sm font-medium rounded-lg transition cursor-pointer">
                    
                    <!-- Calendar Icon -->

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Deadline
                </button>

                <!-- Hidden Date Input -->
                <input 
                    type="date" 
                    id="deadline" 
                    name="deadline" 
                    min="{{ date('Y-m-d') }}"
                    class="sr-only"/>
                    
            </div>
        </form>
    </div>
</x-layout>
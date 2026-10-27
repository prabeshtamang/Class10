{{-- resources/views/upcoming-classes.blade.php --}}
<x-layout title="Upcoming Classes">

    {{-- Page Hero --}}
    <section class="bg-indigo-600 text-white py-14 text-center px-4">
        <h1 class="text-3xl sm:text-4xl font-bold">Next Batches Starting Soon</h1>
        <p class="mt-2 text-indigo-100">Upcoming Classes in Google Meet</p>
        <p class="mt-1 text-indigo-200 text-sm">
            Miss a live class? No problem—recorded videos will be available for every session.
        </p>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Class Card 1 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="p-5 flex flex-col flex-1">

                    <span class="self-start bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                        ⏳ Starts Tomorrow
                    </span>

                    <h3 class="text-lg font-semibold text-gray-900">Git & Github Training</h3>

                    <ul class="mt-3 space-y-1.5 text-sm text-gray-600">
                        <li><span class="font-medium text-gray-800">Starts:</span> September 08, 2026</li>
                        <li><span class="font-medium text-gray-800">Mode:</span> Online (Google Meet)</li>
                        <li><span class="font-medium text-gray-800">Duration:</span> 3 Days</li>
                        <li><span class="font-medium text-gray-800">Class Time:</span> 8:00 - 9:30 pm</li>
                    </ul>

                    <p class="mt-3 text-sm font-medium text-red-600">Limited seats left</p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 500</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 2,500</span>
                        <span class="text-xs font-semibold text-green-600">80% off</span>
                    </div>

                    <div class="mt-5 flex flex-col gap-2">
                        <a href=""
                           class="text-center bg-indigo-600 text-white px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Enroll Now
                        </a>
                        <a href="" target="_blank"
                           class="text-center border border-indigo-600 text-indigo-600 px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-50 transition">
                            Watch Demo Video
                        </a>
                    </div>
                </div>
            </div>

            {{-- Class Card 2 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="p-5 flex flex-col flex-1">

                    <span class="self-start bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                        🎯 Starts in 3 days
                    </span>

                    <h3 class="text-lg font-semibold text-gray-900">Flutter Workshop</h3>

                    <ul class="mt-3 space-y-1.5 text-sm text-gray-600">
                        <li><span class="font-medium text-gray-800">Starts:</span> September 10, 2026</li>
                        <li><span class="font-medium text-gray-800">Mode:</span> Online (Google Meet)</li>
                        <li><span class="font-medium text-gray-800">Duration:</span> 14 Days</li>
                        <li><span class="font-medium text-gray-800">Class Time:</span> 8:00 - 9:30 pm</li>
                    </ul>

                    <p class="mt-3 text-sm font-medium text-red-600">Only 2 seats left</p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 1,499</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 8,500</span>
                        <span class="text-xs font-semibold text-green-600">82% off</span>
                    </div>

                    <div class="mt-5 flex flex-col gap-2">
                        <a href=""
                           class="text-center bg-indigo-600 text-white px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Enroll Now
                        </a>
                        <a href="" target="_blank"
                           class="text-center border border-indigo-600 text-indigo-600 px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-50 transition">
                            Watch Demo Video
                        </a>
                    </div>
                </div>
            </div>

            {{-- Class Card 3 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="p-5 flex flex-col flex-1">

                    <span class="self-start bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full mb-3">
                        🎯 Starts in 6 days
                    </span>

                    <h3 class="text-lg font-semibold text-gray-900">Advanced Excel</h3>

                    <ul class="mt-3 space-y-1.5 text-sm text-gray-600">
                        <li><span class="font-medium text-gray-800">Starts:</span> September 13, 2026</li>
                        <li><span class="font-medium text-gray-800">Mode:</span> Online (Google Meet)</li>
                        <li><span class="font-medium text-gray-800">Duration:</span> 21 Days</li>
                        <li><span class="font-medium text-gray-800">Class Time:</span> 8:00 to 9:30 PM</li>
                    </ul>

                    <p class="mt-3 text-sm font-medium text-green-600">Seats available - Register now</p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 1,999</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 12,500</span>
                        <span class="text-xs font-semibold text-green-600">84% off</span>
                    </div>

                    <div class="mt-5 flex flex-col gap-2">
                        <a href="https://codeit.com.np/enroll/check/advanced-excel-training-in-nepal"
                           class="text-center bg-indigo-600 text-white px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">
                            Enroll Now
                        </a>
                        <a href="https://youtu.be/ObxQdIjSWdI" target="_blank"
                           class="text-center border border-indigo-600 text-indigo-600 px-4 py-2.5 rounded-lg font-medium hover:bg-indigo-50 transition">
                            Watch Demo Video
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>

{{-- resources/views/all-courses.blade.php --}}
<x-layout title="All Courses">

    {{-- Page Hero --}}
    <section class="bg-indigo-600 text-white py-14 text-center px-4">
        <h1 class="text-3xl sm:text-4xl font-bold">Learn the Skills Employers Want</h1>
        <p class="mt-3 text-indigo-100 max-w-2xl mx-auto">
            Master in-demand technical skills, work on real-world projects, and gain practical experience
            that companies are actively looking for in today's job market.
        </p>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Course Card 1 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="relative">
                    <img src="" alt="Git & Github Training"
                         class="w-full h-44 object-cover bg-gray-100">
                    <span class="absolute top-3 left-3 bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full">
                        ⏳ Starts Tomorrow
                    </span>
                </div>

                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-1 text-sm text-yellow-500 mb-2">
                        <span>★★★★★</span>
                        <span class="text-gray-500">5.0</span>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-900">
                        <a href="" class="hover:text-indigo-600">
                            Git & Github Training
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 mt-1 flex-1">
                        Git & GitHub Course – Learn Version Control & Collaborative Coding Best Practices
                    </p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 500</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 2,500</span>
                        <span class="text-xs font-semibold text-green-600">80% off</span>
                    </div>
                    <p class="text-xs text-gray-400">Excluding VAT</p>

                    <a href=""
                       class="mt-4 inline-block text-indigo-600 font-medium hover:underline">
                        Curriculum →
                    </a>
                </div>
            </div>

            {{-- Course Card 2 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="relative">
                    <img src="{{ asset('images/courses/flutter-workshop.jpg') }}" alt="Flutter Workshop"
                         class="w-full h-44 object-cover bg-gray-100">
                    <span class="absolute top-3 left-3 bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full">
                        🎯 Starts in 3 days
                    </span>
                </div>

                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-1 text-sm text-yellow-500 mb-2">
                        <span>★★★★★</span>
                        <span class="text-gray-500">5.0</span>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-900">
                        <a href="" class="hover:text-indigo-600">
                            Flutter Workshop
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 mt-1 flex-1">
                        From Beginner to App Developer in One Workshop
                    </p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 1,499</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 8,500</span>
                        <span class="text-xs font-semibold text-green-600">82% off</span>
                    </div>
                    <p class="text-xs text-gray-400">Excluding VAT</p>

                    <a href=""
                       class="mt-4 inline-block text-indigo-600 font-medium hover:underline">
                        Curriculum →
                    </a>
                </div>
            </div>

            {{-- Course Card 3 --}}
            <div class="border border-gray-200 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden flex flex-col">
                <div class="relative">
                    <img src="" alt="Advanced Excel"
                         class="w-full h-44 object-cover bg-gray-100">
                    <span class="absolute top-3 left-3 bg-yellow-400 text-gray-900 text-xs font-semibold px-3 py-1 rounded-full">
                        🎯 Starts in 6 days
                    </span>
                </div>

                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-1 text-sm text-yellow-500 mb-2">
                        <span>★★★★★</span>
                        <span class="text-gray-500">5.0</span>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-900">
                        <a href="" class="hover:text-indigo-600">
                            Advanced Excel
                        </a>
                    </h3>

                    <p class="text-sm text-gray-600 mt-1 flex-1">
                        Advanced Excel Training Course – Master Formulas, Pivot Tables & Data Analysis
                    </p>

                    <div class="mt-4 flex items-end gap-2">
                        <span class="text-xl font-bold text-indigo-600">Rs. 1,999</span>
                        <span class="text-sm text-gray-400 line-through">Rs. 12,500</span>
                        <span class="text-xs font-semibold text-green-600">84% off</span>
                    </div>
                    <p class="text-xs text-gray-400">Excluding VAT</p>

                    <a href=""
                       class="mt-4 inline-block text-indigo-600 font-medium hover:underline">
                        Curriculum →
                    </a>
                </div>
            </div>

        </div>

    </div>

</x-layout>

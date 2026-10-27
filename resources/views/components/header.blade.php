{{-- resources/views/components/header.blade.php --}}
<nav class="bg-white shadow-md sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Logo --}}
            <div class="flex-shrink-0">
                <a href="" class="text-2xl font-bold text-indigo-600">
                    Zack.np
                </a>
            </div>

            {{-- Desktop Nav Links --}}
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">Home</a>
                <a href="{{ route('all-courses') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">All Courses</a>
                <a href="{{ route('upcoming-classes') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">Upcoming Classes</a>
                <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">Testimonials</a>
                <a href="{{ route('mentors') }}" class="text-gray-700 hover:text-indigo-600 font-medium transition">Mentors</a>
                <a href="/course/index" class="text-gray-700 hover:text-indigo-600 font-medium transition">Courses</a>
                <a href="{{route('contact-us')}}"
                   class="bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                    Contact Us
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <div class="md:hidden">
                <button @click="open = !open" type="button"
                        class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                    <svg x-show="!open" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" x-cloak class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Nav Links --}}
    <div x-show="open" x-cloak class="md:hidden px-4 pb-4 space-y-1">
        <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">Home</a>
        <a href="{{ route('all-courses') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">All Courses</a>
        <a href="{{ route('upcoming-classes') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">Upcoming Classes</a>
        <a href="{{ route('testimonials') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">Testimonials</a>
        <a href="{{ route('mentors') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">Mentors</a>
        <a href="/course/index" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 font-medium">Courses</a>
        <a href="{{ route('contact-us') }}" class="block px-3 py-2 rounded-md bg-indigo-600 text-white font-medium text-center">Contact Us</a>
    </div>
</nav>

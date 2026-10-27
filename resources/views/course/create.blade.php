<x-layout>
    <section class="container mx-auto max-w-4xl px-6 py-10">

        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Courses
            </h1>

            <a class="text-sm text-gray-500" href="/course/index">Go back</a>

        </div>

        <!-- Form Card -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8">

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Create a New Course
            </h2>

            <form action="/course/store" method="POST" class="space-y-6">

                @csrf

                <!-- Course Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Course Name
                    </label>

                    <input type="text" name="name" id="name" placeholder="Enter course name"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Price -->
                <div>
                    <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">
                        Price
                    </label>

                    <input type="number" name="price" id="price" min="0" step="0.01"
                        placeholder="Enter course price"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                        Course Description
                    </label>

                    <textarea name="description" id="description" rows="6" placeholder="Describe what students will learn..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>

                <!-- Buttons -->
                
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-200">
                    Create Course
                </button>

            </form>
        </div>

    </section>
</x-layout>

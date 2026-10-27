{{-- resources/views/contact-us.blade.php --}}
<x-layout title="Contact Us">

    {{-- Page Hero --}}
    <section class="bg-indigo-600 text-white py-14 text-center px-4">
        <h1 class="text-3xl sm:text-4xl font-bold">Get in Touch</h1>
        <p class="mt-2 text-indigo-100">We're here to help – reach out to the right team</p>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-16">

        {{-- Location + Contact Details --}}
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

            {{-- Map --}}
            <div class="rounded-xl overflow-hidden shadow-md h-80 lg:h-full">
                <iframe src="https://www.google.com/maps?q=Prithvi+Path,+Dharan,+Nepal&output=embed"
                    class="w-full h-full border-0" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            {{-- Contact Info --}}
            <div class="space-y-8">

                {{-- Address --}}
                <div>
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">Our Location</h2>
                    <p class="text-gray-600">
                        Code IT<br>
                        Prithvi Path, Dharan<br>
                        Nepal
                    </p>
                </div>

                {{-- Reach Us --}}
                <div>
                    <h2 class="text-xl font-semibold text-gray-900 mb-3">Reach Us</h2>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="text-indigo-600">📞</span>
                            <a href="tel:+97025-575163" class="hover:text-indigo-600">+977 025-575163</a>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="text-indigo-600">✉️</span>
                            <a href="mailto:info@codeit.com.np" class="hover:text-indigo-600">info@codeit.com.np</a>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <span class="text-indigo-600">💬</span>
                            <a href="https://wa.me/9779862130505" target="_blank"
                                class="hover:text-indigo-600">9862130505 (WhatsApp)</a>
                        </li>
                    </ul>
                </div>

                {{-- Quick Contacts --}}
                <div>
                    <h2 class="text-xl font-semibold text-gray-900 mb-3">Quick Contacts</h2>
                    <div class="grid sm:grid-cols-2 gap-4">

                        <div class="border border-gray-200 rounded-lg p-4">
                            <p class="font-medium text-gray-900">Intern Support</p>
                            <p class="text-sm text-gray-500 mb-1">For internship queries</p>
                            <a href="tel:+9779707776595" class="text-indigo-600 font-medium">+977 9707776595</a>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4">
                            <p class="font-medium text-gray-900">Technical Support</p>
                            <p class="text-sm text-gray-500 mb-1">Course & tech help</p>
                            <a href="tel:+9779704508525" class="text-indigo-600 font-medium">+977 9704508525</a>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 sm:col-span-2">
                            <p class="font-medium text-gray-900">Administration</p>
                            <p class="text-sm text-gray-500 mb-1">Enquiry & General Information</p>
                            <a href="tel:+977025-575163" class="text-indigo-600 font-medium">+977 025-575163</a>
                            <p class="text-sm text-gray-500 mt-1">Sun-Fri (10:00 am - 05:00 pm)</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        {{-- Need Specific Help --}}
        <section class="bg-indigo-50 rounded-xl p-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-900">Need specific help?</h2>
            <p class="text-gray-600 mt-2">Choose the right team and we'll get back to you faster.</p>
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                <a href="tel:+977-025-575163"
                    class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition">Enquiry</a>
                <a href="tel:+977-9704508525"
                    class="bg-white border border-indigo-600 text-indigo-600 px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-100 transition">Technical
                    Support</a>
                <a href="https://whatsapp.com/channel/0029VaM7t5d23n3WIlV7cm27" target="_blank"
                    class="bg-white border border-indigo-600 text-indigo-600 px-5 py-2.5 rounded-lg font-medium hover:bg-indigo-100 transition">Community</a>
            </div>
        </section>

        {{-- Location Tour Videos (Admin Uploaded) --}}
        <section>
            <div class="text-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-900">Watch Our Location Tour</h2>
                <p class="text-gray-600 mt-2">Step inside our space and discover where your learning journey begins</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Video Card 1 --}}
                <div class="rounded-xl overflow-hidden shadow-md bg-black">
                    <div class="rounded-xl overflow-hidden shadow-md bg-black">
                        <iframe class="w-full h-56"
                            src="https://www.youtube.com/embed/HDD6AmfsQR8?si=07JTVcko9dNwIii5"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <p class="text-center text-white bg-gray-900 py-2 text-sm font-medium">Bhanuchowk to Code IT</p>
                </div>

                {{-- Video Card 2 --}}
                <div class="rounded-xl overflow-hidden shadow-md bg-black">
                    <div class="rounded-xl overflow-hidden shadow-md bg-black">
                        <iframe class="h-60 w-full" src="https://www.youtube.com/embed/URNG-V4VIWs"
                            frameborder="0"></iframe>
                    </div>
                    <p class="text-center text-white bg-gray-900 py-2 text-sm font-medium">Mangalbarey to Code IT</p>
                </div>

                {{-- Video Card 3 --}}
                <div class="rounded-xl overflow-hidden shadow-md bg-black">
                    <div class="rounded-xl overflow-hidden shadow-md bg-black">
                        <iframe class="w-full h-56" src="https://www.youtube.com/embed/6KmaHDeYupA?si=h44j84_uZa1hfDHP"
                            title="Zeropoint to Code IT" frameborder="0" allowfullscreen>
                        </iframe>
                    </div>


                    <p class="text-center text-white bg-gray-900 py-2 text-sm font-medium">
                        Zeropoint to Code IT
                    </p>
                </div>
            </div>
        </section>

        {{-- Social Media --}}
        <section class="text-center border-t border-gray-200 pt-10">
            <h2 class="text-xl font-semibold text-gray-900 mb-2">Follow us for updates and tech tips</h2>
            <div class="flex justify-center gap-6 mt-4">

                <a href="https://www.tiktok.com/@codeit" target="_blank"
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-gray-900 text-white hover:bg-black transition text-xl">
                    <i class="fa-brands fa-tiktok"></i>
                </a>

                <a href="https://www.youtube.com/@codeit" target="_blank"
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 text-white hover:bg-red-700 transition text-xl">
                    <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="https://www.facebook.com/codeit" target="_blank"
                    class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition text-xl">
                    <i class="fa-brands fa-facebook"></i>
                </a>

            </div>
        </section>

    </div>

</x-layout>

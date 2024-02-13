<footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto flex flex-col items-center justify-center space-y-4">
        <p>&copy; 2023 ruumi. All rights reserved.</p>

        <div class="flex space-x-4">
            <!-- Social Media Icons -->
            <a href="https://twitter.com/NgRuumi29682" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-x"></i>
            </a>

            <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://wa.me/message/EEWQMBWPRXLTE1" class="text-gray-400 hover:text-white transition duration-300">
                <i class="fab fa-whatsapp"></i>
            </a>
            <!-- Add more social media icons as needed -->

        </div>


        <!-- Navigation Links -->
        <div class="flex space-x-4">
            <a href="{{ route('blogs')}}" class="text-gray-400 hover:text-white transition duration-300">{{__('Blog')}}</a>
            <a href="{{ route('about')}}" class="text-gray-400 hover:text-white transition duration-300">{{__('About Us')}}</a>
            <a href="{{ route('contact')}}" class="text-gray-400 hover:text-white transition duration-300">{{__('Contact Us')}}</a>

            <a href="{{ route('affiliate')}}" class="text-gray-400 hover:text-white
             transition duration-300">{{__('affiliate')}}</a>


        </div>
    </div>
</footer>


<!-- resources/views/layouts/footer.blade.php -->

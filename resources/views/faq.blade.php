<x-guest-layout>
    <div class="flex justify-center">
        <img class="w-1/3" src="images/BucksNourishLogo.jpg" alt="logo">
    </div>
    <div class="flex justify-center mb-8">
        <h1 class="font-bold text-xl underline text-black">FAQs</h1>
    </div>

    <div class="flex flex-col items-center">
        <div id="ac1" class="max-w-screen-lg w-full mx-auto mb-3 mt-2">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq1" class="appearance-none peer hidden">
                <label for="faq1" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    {{--                    <h2 class="mr-2 h-8 w-8 bg-customGreen grid place-items-center text-white rounded-full">01</h2>--}}
                    <h3 class="text-green-900 font-bold text-xl mb-2">Who we are?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>We at Bucks Nourish are a small team of dedicated developers with a mission to provide the
                        Buckinghamshire county with a reliable and efficient platform. Our goal is to empower
                        individuals, making it easier for them to find and locate nearby food banks, fostering a
                        sense of community support and assistance during times of need. Through continuous innovation
                        and collaboration, we strive to expand our reach and impact, ensuring that everyone in the
                        community has access to essential resources.</p>
                </div>
            </div>
        </div>
        <div id="ac2" class="max-w-screen-lg w-full mx-auto mb-3">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq2" class="appearance-none peer hidden">
                <label for="faq2" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    {{--                    <h2 class="mr-2 h-8 w-8 bg-customGreen grid place-items-center text-white rounded-full">02</h2>--}}
                    <h3 class="text-green-800 font-bold text-xl mb-2">What do we do?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>Bucks Nourish is more than just a food bank locator; we are actively developing a user-friendly
                        web application dedicated to assisting individuals in the Buckinghamshire area. Our platform
                        goes beyond simple location services, providing comprehensive information about nearby food banks,
                        including their operating hours, contact details, and the types of services they offer. By
                        combining technology with a commitment to community welfare, we aim to simplify the process of
                        accessing essential resources and contribute to the well-being of our neighbors in Buckinghamshire</p>
                </div>
            </div>
        </div>
        <div id="ac3" class="max-w-screen-lg w-full mx-auto mb-3">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq3" class="appearance-none peer hidden">
                <label for="faq3" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h3 class="text-green-700 font-bold text-xl mb-2">What are our goals?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>At Bucks Nourish, our primary goal is to foster a stronger and more resilient community in Buckinghamshire.
                        We strive to expand our web application's reach and functionality, ensuring it becomes an indispensable
                        resource for individuals seeking assistance. Our ongoing commitment involves continuous improvements,
                        partnerships, and outreach initiatives to make a positive impact on food accessibility and community
                        well-being in Buckinghamshire.</p>
                </div>
            </div>
        </div>
        <div id="ac4" class="max-w-screen-lg w-full mx-auto mb-3 mt-2">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq4" class="appearance-none peer hidden">
                <label for="faq4" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h3 class="text-green-600 font-bold text-xl mb-2">How does Bucks Nourish work?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>Our web application offers an intuitive and user-friendly platform designed to streamline the process
                        of finding and locating food banks in Buckinghamshire. Users can easily navigate through the application,
                        accessing comprehensive information about nearby food banks, including their operating hours, contact
                        details, and the array of services they provide.</p>
                </div>
            </div>
        </div>
        <div id="ac5" class="max-w-screen-lg w-full mx-auto mb-3 mt-2">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq5" class="appearance-none peer hidden">
                <label for="faq5" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h3 class="text-green-500 font-bold text-xl mb-2">Is Bucks Nourish free to use?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>We want to emphasize that Bucks Nourish is a completely free resource dedicated to serving the community.
                        There are no hidden costs or fees associated with using our platform – our mission is to provide
                        accessible and valuable information to individuals seeking assistance in the Buckinghamshire area
                        without any financial burden.</p>
                </div>
            </div>
        </div>
        <div id="ac6" class="max-w-screen-lg w-full mx-auto mb-10 mt-2">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq6" class="appearance-none peer hidden">
                <label for="faq6" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h3 class="text-green-400 font-bold text-xl mb-2">How can I contribute or get involved with Bucks Nourish?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p> We welcome community members to actively participate and contribute to our mission. Whether you're
                        interested in volunteering your time, providing valuable feedback, or supporting the platform through
                        various means, there are numerous opportunities for you to get involved. At Bucks Nourish, we believe
                        in the power of community collaboration, and your contributions play a vital role in enhancing the
                        reach and impact of our platform in assisting those in need across Buckinghamshire</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

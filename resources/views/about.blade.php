<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <img class="w-1/3" src="images/BucksNourishLogo.jpg" alt="logo">
    </div>
    <div class="flex justify-center mb-8">
        <h1 class="font-bold text-xl underline text-green-800">About Us</h1>
    </div>



    <div class="flex justify-center">
        <img class="w-1/3" src="images/group.jpg" alt="group">
        <div class="mt-2 ml-6">
            <p class="  text-gray-700 ">
                At Bucks Nourish, we are a team of passionate people who, using a combination of programming skills and social drive, decided to tackle the problem of hunger in the Buckinghamshire region. <br>
                Our mission is to create a reliable and effective platform that allows residents to easily find and locate the food banks closest to them.
            </p>
        </div>
    </div>

    <div class="flex justify-center mt-4">
        <img class="w-1/3" src="images/foodbank.jpg" alt="foodbank">
        <div class="mt-2 ml-6">
            <p class="text-gray-700">
                We believe that access to food should not be difficult or burdensome, which is why we are creating a tool that eliminates barriers and facilitates the assistance process.
                Our assumptions are based on the belief that good returns and helping those in need brings positive results for the entire society.
        </div>
    </div>

    <div class="flex justify-center mt-4">
        <img class="w-1/3" src="images/people.png" alt="people">
        <div class="mt-2 ml-6">
            <p class="text-gray-700">
                At Bucks, Nourish is not just a programming project, it is our response to the challenge of hunger that affects many people in our region. We are proud that we can contribute to improving the quality of life of our neighbors, while inspiring others to actively participate in helping those in need. Together we create a community that cares for each other.
            </p>
        </div>
    </div>


    <div class="flex flex-col items-center">

    </div>

</x-guest-layout>

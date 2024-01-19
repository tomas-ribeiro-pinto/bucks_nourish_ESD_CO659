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
                    <h2 class="mr-2 h-8 w-8 bg-customGreen grid place-items-center text-white rounded-full">01</h2>
                    <h3>Who are we?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>At Bucks Nourish, we are a small team of developers with a mission to provide Buckinghamshire
                        with a reliable and efficient platform to allow people to find and locate the closest food banks to them.</p>
                </div>
            </div>
        </div>
        <div id="ac2" class="max-w-screen-lg w-full mx-auto mb-3">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq2" class="appearance-none peer hidden">
                <label for="faq2" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h2 class="mr-2 h-8 w-8 bg-customGreen grid place-items-center text-white rounded-full">02</h2>
                    <h3>What do we do?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>Bucks Nourish is a food bank locator for the county of Buckinghamshire</p>
                </div>
            </div>
        </div>
        <div id="ac3" class="max-w-screen-lg w-full mx-auto mb-20">
            <div class="tab mb-3 bg-white px-5 py-3 shadow-lg rounded-md relative border-t-2 border-b-2 border-l-2 border-r-2">
                <input type="radio" name="faq" id="faq3" class="appearance-none peer hidden">
                <label for="faq3" class="flex items-center text-lg font-semi-bold
                after:absolute after:content-['+'] after:right-5 after:text-2xl
                after:text-gray-400 hover:after:text-gray-900 peer-checked:after:transform peer-checked:after:rotate-45">
                    <h2 class="mr-2 h-8 w-8 bg-customGreen grid place-items-center text-white rounded-full">03</h2>
                    <h3>What are our goals?</h3>
                </label>
                <div class="answer mt-5 h-0 overflow-hidden transition ease-in-out duration-500 peer-checked:h-full">
                    <p>Bucks Nourish is a food bank locator for the county of Buckinghamshire</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

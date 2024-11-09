<x-app-layout >
    <div class="flex max-sm:flex-col relative ">
        <div class="w-[20%] max-sm:w-full flex flex-col gap-5 justify-center items-center rounded-lg mt-[1rem] h-[40rem] bg-[#1c1c1d]">
            <button type="button "
                class="w-[12rem] boton-elegante text-[#e2e5e9]  rounded-lg border-[1px] bg-transparent border-gray-700 py-2"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create Product +
            </button>
            <h1 class="text-white text-xl">Categories :</h1>
            <div class="w-[95%] flex flex-col cursor-pointer gap-3">
                <div class="category-item flex h-[60px] text-[#e7e9ec] rounded-lg hover:bg-[#3b3d3e] hover:duration-100 items-center gap-3" data-category="fashion">
                    <x-iconpark-clothescardigan-o class="bg-[#4f5151] p-2 ml-5 rounded-full h-[40px]" />
                    <div class="font-semibold">Fashion</div>
                </div>
                <div class="category-item flex h-[60px] text-[#e7e9ec] rounded-lg hover:bg-[#3b3d3e] hover:duration-100 items-center gap-3" data-category="electronics">
                    <div class="bg-[#4f5151] ml-5 p-2 flex justify-center items-center rounded-full">
                        <x-hugeicons-computer-programming-01 />
                    </div>
                    <div class="font-semibold">Electronics</div>
                </div>
                <div class="category-item flex h-[60px] text-[#e7e9ec] rounded-lg hover:bg-[#3b3d3e] hover:duration-100 items-center gap-3" data-category="house">
                    <x-monoicon-home class="bg-[#4f5151] p-2 ml-5 rounded-full h-[40px]" />
                    <div class="font-semibold">House</div>
                </div>
                <div class="category-item flex h-[60px] text-[#e7e9ec] rounded-lg hover:bg-[#3b3d3e] hover:duration-100 items-center gap-3" data-category="car">
                    <x-fontisto-car class="bg-[#4f5151] p-2 ml-5 rounded-full h-[40px]" />
                    <div class="font-semibold">Car</div>
                </div>
                <div class="category-item flex h-[60px] text-[#e7e9ec] rounded-lg hover:bg-[#3b3d3e] hover:duration-100 items-center gap-3" data-category="book">
                    <x-fas-book class="bg-[#4f5151] p-2 ml-5 rounded-full h-[40px]" />
                    <div class="font-semibold">Books</div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4 w-[80%]" id="product-list">
            @foreach ($products as $product)
            <div class="product-item relative" data-category="{{ $product->category }}">
                <div class="absolute top-2 right-2 opacity-[0.75] hover:bg-red-700 cursor-pointer z-[9] hover:duration-200 bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $product->condition }}
                </div>
                <div class="border rounded-lg overflow-hidden bg-[#1c1c1d] shadow-lg">
                    <div class="overflow-hidden"><img class="w-full h-48 object-cover transform transition hover:duration-700  hover:scale-110" src="{{ asset('storage/images/' . $product->image) }}" alt=""></div>
                    <div class="p-4 text-[#e2e5e9]">
                        <h3 class="font-semibold text-xl">{{ $product->title }}</h3>
                        <p class="text-[#e2e5e9]">
                            <div class="h-[10px]"></div>
                            <span class="px-4 py-2 bg-[#333333] cursor-pointer text-[#e2e5e9] rounded-full hover:bg-[#646663] transition-all duration-300">
                                {{ $product->category }}
                            </span>
                        </p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-[#e2e5e9] font-bold text-lg">${{ $product->price }}</span>
                            <button class="px-4 py-2 cursor-pointer bg-[#1c1c1d] border border-[#646663] rounded-lg text-[#e2e5e9] hover:bg-[#333333]">
                                Talk With the Owner
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let categoryItems = document.querySelectorAll('.category-item');
            let productItems = document.querySelectorAll('.product-item');
            
            categoryItems.forEach(item => {
                item.addEventListener('click', () => {
                    let selectedCategory = item.getAttribute('data-category');
                    
                   
                    categoryItems.forEach(i => i.classList.remove('bg-[#333333]'));
                    item.classList.add('bg-[#333333]');
                    
                   
                    productItems.forEach(product => {
                        if (product.getAttribute('data-category') === selectedCategory || selectedCategory === 'all') {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</x-app-layout>

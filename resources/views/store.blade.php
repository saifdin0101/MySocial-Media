<x-app-layout >
    <div class="flex max-sm:flex-col relative ">
        <div class=" w-[20%] max-sm:w-full flex flex-col gap-5 justify-center items-center rounded-lg mt-[1rem] h-[40rem] bg-[#1c1c1d]">
            <button type="button "
                class="w-[12rem] boton-elegante text-[#e2e5e9]  rounded-lg border-[1px] bg-transparent border-gray-700 py-2"
                data-bs-toggle="modal" id="createProductBtn" data-bs-target="#exampleModal">
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
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
        
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
        
        
                        <div class="modal-body ">
        
                            <button data-bs-dismiss="modal"
                                class="text-2xl right-[36rem] top-[4.5rem]   z-30 absolute text-white">&#x2715;</button>
                            <form enctype="multipart/form-data" action="{{ route('store.store') }}" method="post"
                                class="border z-[29] absolute top-[4rem] right-[35rem] p-[3rem] border-black w-1/3 bg-[#1c1c1d] rounded-lg">
                                @csrf
        
                                <h1 class="font-semibold text-2xl text-[#e2e5e9]">Create Ur Own Product :</h1>
                                <div class="flex flex-col just checked: items-center gap-5">
                                    <div class="mt-4">
                                        <label for="file" class="custum-file-upload">
                                            <div class="icon">
                                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                                            fill=""></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="text">
                                                <span>Click to upload image</span>
                                            </div>
                                            <input accept="images/*" name="image" id="file" type="file">
                                        </label>
        
                                    </div>
                                    <input class="w-[19rem] text-[#e2e5e9] rounded-lg border-2 bg-transparent border-gray-700"
                                        name="title" placeholder="Title" type="text">
                                    <input class="w-[19rem] text-[#e2e5e9] remove-arrows rounded-lg border-2 bg-transparent border-gray-700"
                                        name="price" placeholder="Price" type="number">
                                    <select class="w-[19rem]  rounded-lg border-2 bg-transparent border-gray-700 text-[#646663]"
                                        name="category" id="">
                                        <option class="" disabled selected value="">Category</option>
                                        <option value="fashion">fashion</option>
                                        <option value="electronics">electronic</option>
                                        <option value="House">House</option>
                                        <option value="Book">Car</option>
                                        <option value="bag">Book</option>
        
                                    </select>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <select class="w-[19rem] rounded-lg border-2 bg-transparent border-gray-700 text-[#646663]"
                                        name="condition" id="">
                                        <option class="" selected disabled value="">Condition</option>
                                        <option value="new">New</option>
                                        <option value="used">Used</option>
                                    </select>
        
                                    <button data-bs-dismiss="modal"
                                        class="w-[19rem] boton-elegante text-[#e2e5e9] rounded-lg border-2 bg-transparent border-gray-700 py-2">Publish
                                        Ur Product</button>
                                </div>
        
                            </form>
                        </div>
        
                    </div>
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
                                {{ Auth::user()->id === $product->user_id ? 'im the Owner' : 'Talk With the Owner' }}
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
    <!-- Modal -->












    {{-- <div class="w-full "> --}}
    {{-- <form enctype="multipart/form-data" action="" class="border p-[3rem] border-black w-1/3 bg-[#1c1c1d] rounded-lg">
        <h1 class="font-semibold text-2xl text-[#e2e5e9]">Create Ur Own Product :</h1>
        <div class="flex flex-col just checked: items-center gap-5">
            <div class="mt-4">
                <label for="file" class="custum-file-upload">
                    <div class="icon">
                        <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                    fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div class="text">
                        <span>Click to upload image</span>
                    </div>
                    <input name="image" id="file" type="file">
                </label>

            </div>
            <input class="w-[19rem] text-[#e2e5e9] rounded-lg border-2 bg-transparent border-gray-700" name="title"
                placeholder="Title" type="text">
            <input class="w-[19rem] text-[#e2e5e9] rounded-lg border-2 bg-transparent border-gray-700" name="price"
                placeholder="Price" type="tel">
            <select class="w-[19rem]  rounded-lg border-2 bg-transparent border-gray-700 text-[#646663]" name="Category"
                id="">
                <option class="" disabled selected value="">Category</option>
                <option value="fashion">fashion</option>
                <option value="electronics">electronics</option>
                <option value="House">House</option>
                <option value="Book">Book</option>
                <option value="bag">bag</option>
                <option value="">other...</option>
            </select>
            <select class="w-[19rem] rounded-lg border-2 bg-transparent border-gray-700 text-[#646663]" name="Condition"
                id="">
                <option class="" selected disabled value="">Condition</option>
                <option value="">New</option>
                <option value="">Used</option>
            </select>
            <button class="w-[19rem] boton-elegante text-[#e2e5e9] rounded-lg border-2 bg-transparent border-gray-700 py-2">Publish Ur Product</button>
        </div>
       
    </form> --}}

    <!-- Button trigger modal -->
    {{-- 
</div> --}}


</x-app-layout>

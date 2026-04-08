<nav class="sticky top-0 h-24 bg-first grid grid-cols-1 font-semibold z-50">
    <div class="flex flex-row items-center text-xl w-full"> 
        <ul class="w-full grid grid-cols-2 justify-items-center ">
            <li><a href="{{ route('index') }}" class="hover:bg-sky-200 w-full grid place-items-center py-2 rounded-xl  ">Home</a></li>
            <li><a href="{{ route('addProd.create') }}" class="hover:bg-sky-200 w-full grid place-items-center py-2 rounded-xl  ">Add Product</a></li>
        </ul>
    </div>
    
 </nav>
<x-app-layout>
    <x-slot name="header">
        <div class="header-bar">
         <form action="/search" method="get">
            @csrf
            <input
                type="text"
                name="identify"
                class="search-box"
                placeholder="Search for products..."
            >
           <select class="searchbar"> 
                <option value="">Select</option>
                <option>Girl</option>
                <option>Boy</option>
            </select>
            <button class="btn btn-primary">Search</button>
        </form>
    </div>
    </x-slot>

    <!-- Slider -->
    <div class="slider">
        <div class="slides">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlJTIwc2hvcHBpbmd8ZW58MHx8MHx8fDA%3D" alt="Slide 1">
            <img src="https://plus.unsplash.com/premium_photo-1683141052679-942eb9e77760?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Slide 2">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYbUkJwFLfoAXJkMWRE8x8QHsSdyhyHDcGkg&s" alt="Slide 3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiaFHeoXpmmzRXPQpayWV-5ojq2LiYhpdtqw&s" alt="Slide 4">
            
        </div>
    </div>

    <!-- Dashboard section -->   

</x-app-layout>

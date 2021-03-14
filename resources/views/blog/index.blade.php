@extends('layouts.app');


@section('content')
<div class="w-4/5 m-auto text-center border-b border-gray-200">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2019/07/14/16/06/desk-4337478_1280.jpg" width="700" >
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4 ">
            Learn how write Laravel code  
        </h2>
            By <span class="font-bold italic text-gray-800 ">Code with Laravel</span> , 1 dey ago

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eligendi iure ipsum molestiae cupiditate excepturi, molestias hic eos? Ipsa commodi esse explicabo ad officia natus temporibus. Eaque quam beatae cupiditate!
            </p>
            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl" >
                Keep Reading
            </a>
    </div>

</div>
@endsection;
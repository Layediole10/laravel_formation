@extends('layouts/app')
@section('content')
    
    <main class="main-home">
        <div class="blue-main"></div>
        <h2>{{$post}}</h2>
        <div class="white-main">
            <img src={{asset('assets/agrumes.jpg') }} alt="css3">
            <div class="blue-bale"></div>
        </div>
        <div class="text-main">
            <h1>Eat healthy, live happy, and grow a better relationship</h1>
            <p class="para1-main">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit consectetur at minus saepe modi error. Aliquid asperiores eum laborum aut esse architecto tempore facere corporis. Hic incidunt deleniti molestias quos!</p>
            <p class="para2-main">Image from <span>Freepik</span></p>
            <button class="btn">Read More</button>
        </div>
    </main>
    
@endsection
<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name='content'>
    <div class="mt-5">
        <div class="text-center">
          <img src="{{ asset('images/gk1.jpg') }}" alt="gk" class="img-thumnail" width="250px" height="300px" >
        </div>
        <div class="mt-5 text-white mx-5 text-justify">
            <h1 class="fw-bold st-font">Hello,</h1>
            <div class="px-4" style="line-height:2rem;">
                <p style="text-indent:100px;"> I am <b class="text-warning">Gajendra Dave</b> having 3 years of full-stack web development experience for global businesses, I offer the technicl expertise you are seeking for your web developer position.</p>
                <p>Since earning my bachelor's degree in internet and web development from Youtub, I have served as a web developer at <b class="text-warning">GeekyShows Technolory</b> one of the biggest premier digital marketing and web development firm. In this position, I have led web development projects for clients in diverse industries including technology, manufacturing, pharmaceutical, hospitality, retail and financial services.</p>
                <p>Before I am working in mahi hydle project banswara as a <b class="text-primary"> Assistant Enginner (Mechanical )</b> and retired on January,2019.</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
            <a href="{{ route('contact')}}" class="btn btn-outline-info mx-5 my-3">Contact Me</a>
        </div>
        
    </div>
    </x-slot>
    {{-- <x-slot name="content2">this home content2</x-slot> --}}
</x-layout>
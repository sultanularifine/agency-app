@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
    <section id="courses" class="py-24 px-6 md:px-24 relative">
        <div class="max-w-7xl mx-auto mt-12">
            <div class="section-header reveal">
                <h2 class="dark:text-white">Professional Courses</h2>
                <div class="line"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="group glass rounded-[2rem] border-white/5 overflow-hidden transition-all duration-500 hover:border-primary/50 reveal">
                    <div class="relative h-52 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 left-4 flex gap-2">
                            <span
                                class="px-3 py-1 bg-primary text-[10px] font-black uppercase rounded-full">Bestseller</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-[10px] font-bold opacity-50 uppercase tracking-widest">Web
                                Development</span>
                            <div class="flex text-primary text-xs">★★★★★</div>
                        </div>
                        <h3 class="text-xl font-black mb-4 group-hover:text-primary transition-colors">Mastering Laravel
                            & Modern PHP</h3>

                        <div class="flex items-center gap-6 mb-8 opacity-60 text-[11px] font-bold uppercase">
                            <div class="flex items-center gap-2">🕒 12 Weeks</div>
                            <div class="flex items-center gap-2">👥 500+ Students</div>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-white/5">
                            <span class="text-2xl font-black text-primary">$199</span>
                            <a href="course-details.html"
                                class="px-6 py-3 glass rounded-xl text-[10px] font-black uppercase hover:bg-primary transition-all">View
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-32 pb-16 px-6 md:px-24 bg-gradient-to-b from-primary/5 to-transparent">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="reveal">
                <nav class="flex gap-2 text-[10px] font-bold uppercase opacity-40 mb-8">
                    <a href="index.html">Home</a> <span>/</span> <a href="#courses">Courses</a>
                </nav>
                <h1 class="text-5xl font-black mb-6 leading-tight">Mastering Laravel & <span class="text-primary">Modern
                        PHP</span></h1>
                <p class="text-lg opacity-60 mb-10 leading-relaxed">অ্যাডভান্সড ব্যাকএন্ড ডেভেলপমেন্ট শিখুন এবং
                    ইন্ডাস্ট্রি স্ট্যান্ডার্ড প্রজেক্ট তৈরি করুন। এই কোর্সটি ক্লাস ৬ থেকে ১০ এবং বিগিনারদের জন্য ডিজাইন
                    করা।</p>

                <div class="flex flex-wrap gap-8 items-center">
                    <div class="flex items-center gap-3">
                        <img src="your-photo.jpg" class="w-12 h-12 rounded-full border-2 border-primary"
                            alt="Instructor">
                        <div>
                            <p class="text-[10px] opacity-40 uppercase font-black">Instructor</p>
                            <p class="text-sm font-bold">Sultanul Arifinee</p>
                        </div>
                    </div>
                    <div class="w-px h-10 bg-white/10 hidden sm:block"></div>
                    <div>
                        <p class="text-[10px] opacity-40 uppercase font-black">Duration</p>
                        <p class="text-sm font-bold">48 Hours (Live)</p>
                    </div>
                </div>
            </div>

            <div class="glass p-8 rounded-[2.5rem] border-primary/20 sticky top-32 reveal">
                <div class="text-4xl font-black mb-6">$199 <span
                        class="text-sm opacity-40 font-normal line-through">$299</span></div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-sm opacity-80 italic">
                        <span class="text-primary">✔</span> Full lifetime access
                    </li>
                    <li class="flex items-center gap-3 text-sm opacity-80 italic">
                        <span class="text-primary">✔</span> 15+ Real-world projects
                    </li>
                    <li class="flex items-center gap-3 text-sm opacity-80 italic">
                        <span class="text-primary">✔</span> Private Slack community
                    </li>
                </ul>
                <button
                    class="w-full py-5 bg-primary text-white font-black uppercase text-[11px] tracking-[0.3em] rounded-2xl shadow-xl hover:scale-105 transition-all">Enroll
                    Now</button>
                <p class="text-center text-[10px] opacity-40 mt-4 font-bold uppercase">30-Day Money-Back Guarantee</p>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-24">
        <div class="max-w-3xl">
            <h2 class="text-3xl font-black mb-12 uppercase tracking-tighter">Curriculum</h2>

            <div class="space-y-4">

                <!-- Module 01 -->
                <div class="glass border-white/5 rounded-2xl overflow-hidden curriculum-module">
                    <button
                        class="w-full p-6 text-left flex justify-between items-center group-hover:bg-white/5 transition-all">
                        <span class="font-bold">Module 01: Environment Setup & PHP Basics</span>
                        <span class="text-primary">+</span>
                    </button>
                    <div class="p-6 pt-0 border-t border-white/5 opacity-60 text-sm leading-relaxed hidden">
                        Learn how to set up XAMPP, VS Code, and understand core PHP variables, loops, and functions.
                    </div>
                </div>

                <!-- Module 02 -->
                <div class="glass border-white/5 rounded-2xl overflow-hidden curriculum-module">
                    <button
                        class="w-full p-6 text-left flex justify-between items-center group-hover:bg-white/5 transition-all">
                        <span class="font-bold">Module 02: Laravel MVC Architecture</span>
                        <span class="text-primary">+</span>
                    </button>
                    <div class="p-6 pt-0 border-t border-white/5 opacity-60 text-sm leading-relaxed hidden">
                        Learn how to structure Laravel projects using MVC architecture and routing.
                    </div>
                </div>

            </div>
        </div>
    </section>
   
@endsection

@push('scripts')
  
@endpush

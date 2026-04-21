@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
   <section class="relative min-h-screen flex items-center px-6 md:px-24 pt-32 pb-20 overflow-hidden">
            <div class="absolute top-0 right-0 -z-10 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>

            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal order-2 lg:order-1 text-center lg:text-left">
                    <h3
                        class="text-primary font-mono text-[10px] md:text-[12px] uppercase tracking-[0.5em] mb-6 italic block">
                        Welcome to the Future
                    </h3>

                    <h1 class="text-4xl md:text-7xl  font-black mb-8 leading-[1.1] uppercase tracking-tighter">
                        Scale Your Skills with <br>
                        <span class="text-primary inline-block hover:skew-x-2 transition-transform duration-500">Arifine
                            Academy</span>
                    </h1>

                    <p
                        class="text-base md:text-lg opacity-60 mb-10 max-w-lg mx-auto lg:mx-0 leading-relaxed font-medium italic">
                        মাস্টার করুন ওয়েব ডেভেলপমেন্ট এবং ডিজিটাল সলিউশন। ইন্ডাস্ট্রি এক্সপার্টদের সাথে আপনার
                        ক্যারিয়ারের নতুন যাত্রা শুরু করুন।
                    </p>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-6">
                        <a href="#pricing"
                            class="bg-primary px-10 py-5 font-black text-[11px] uppercase rounded-2xl glass shadow-2xl hover:scale-105 active:scale-95 transition-all magnetic-btn text-white tracking-widest">
                            Start Learning
                        </a>
                        <a href="#courses"
                            class="px-10 py-5 font-black text-[11px] uppercase rounded-2xl border border-white/10 hover:bg-white/5 transition-all text-white tracking-widest">
                            View Courses
                        </a>
                    </div>
                </div>

                <div class="reveal order-1 lg:order-2 flex justify-center lg:justify-end">
                    <div class="relative group">
                        <div
                            class="absolute -inset-4 border border-primary/20 rounded-[3.5rem] rotate-3 group-hover:rotate-0 transition-all duration-700">
                        </div>

                        <div
                            class="relative w-72 h-96 md:w-80 md:h-[450px] glass rounded-[3rem] border-white/10 rotate-6 group-hover:rotate-0 transition-all duration-700 overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-1000"
                                alt="Learning">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <div class="section-header">
                        <h2>About Academy</h2>
                        <div class="line"></div>
                    </div>
                    <p class="text-sm opacity-60 leading-relaxed mb-8 italic">
                        আরিফাইন একাডেমি শুধুমাত্র একটি শিক্ষা প্রতিষ্ঠান নয়, এটি একটি দক্ষ কমিউনিটি। আমরা আপনাকে
                        থিওরিটিক্যাল নলেজের পাশাপাশি রিয়েল-ওয়ার্ল্ড প্রজেক্টের মাধ্যমে অভিজ্ঞ করে তুলি।
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="glass p-6 rounded-2xl border-white/5 text-center">
                            <h4 class="text-3xl font-black text-primary">10K+</h4>
                            <p class="text-[9px] uppercase font-bold opacity-40 tracking-widest">Active Students</p>
                        </div>
                        <div class="glass p-6 rounded-2xl border-white/5 text-center">
                            <h4 class="text-3xl font-black text-primary">95%</h4>
                            <p class="text-[9px] uppercase font-bold opacity-40 tracking-widest">Success Rate</p>
                        </div>
                    </div>
                </div>
                <div class="reveal glass p-8 rounded-[3rem] border-white/5 italic opacity-80 text-sm leading-loose">
                    "আমাদের লক্ষ্য হলো বাংলাদেশের প্রযুক্তিগত দক্ষতাকে আন্তর্জাতিক পর্যায়ে নিয়ে যাওয়া। প্রতিটি
                    শিক্ষার্থী যেন নিজের পায়ে দাঁড়াতে পারে, সেটাই আমাদের সার্থকতা।" <br>
                    <span class="text-primary font-black mt-4 block uppercase">— Sultanul Arifinee</span>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24">
            <div class="max-w-4xl mx-auto">
                <div class="section-header reveal text-center w-full">
                    <h2 class="mx-auto">Our Curriculum</h2>
                    <div class="line mx-auto"></div>
                </div>
                <div class="space-y-4 mt-12">
                    <div class="glass border-white/5 rounded-2xl overflow-hidden reveal">
                        <details class="group">
                            <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                <span class="font-bold uppercase tracking-widest text-xs">Module 01: PHP & Backend
                                    Logic</span>
                                <span class="text-primary transition-transform group-open:rotate-45">+</span>
                            </summary>
                            <div class="p-6 pt-0 border-t border-white/5 opacity-50 text-[11px] leading-relaxed">
                                ব্যসিক থেকে অ্যাডভান্সড PHP, ডাটাবেজ আর্কিটেকচার এবং সার্ভার সাইড সিকিউরিটি সম্পর্কে
                                বিস্তারিত।
                            </div>
                        </details>
                    </div>
                    <div class="glass border-white/5 rounded-2xl overflow-hidden reveal">
                        <details class="group">
                            <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                                <span class="font-bold uppercase tracking-widest text-xs">Module 02: Laravel MVC
                                    Framework</span>
                                <span class="text-primary transition-transform group-open:rotate-45">+</span>
                            </summary>
                            <div class="p-6 pt-0 border-t border-white/5 opacity-50 text-[11px] leading-relaxed">
                                লাারাভেলের মাধ্যমে ডাইনামিক ওয়েব অ্যাপ্লিকেশন এবং এপিআই ডেভেলপমেন্টের পূর্ণাঙ্গ গাইড।
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-primary/5">
            <div class="max-w-7xl mx-auto">
                <div class="section-header reveal">
                    <h2>The Instructors</h2>
                    <div class="line"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8 mt-12">
                    <div class="glass rounded-[2.5rem] p-6 border-white/5 reveal group">
                        <div class="h-64 overflow-hidden rounded-2xl mb-6">
                            <img src="image.png"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                        <h4 class="text-xl font-black uppercase">Sultanul Arifinee</h4>
                        <p class="text-primary text-[9px] font-black uppercase tracking-widest mb-4">Lead Instructor &
                            CEO</p>
                        <p class="text-[11px] opacity-50 italic">Expert in Laravel, UI/UX and Full-stack solutions.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 overflow-hidden">
            <div class="section-header reveal text-center w-full">
                <h2 class="mx-auto">Success Stories</h2>
                <div class="line mx-auto"></div>
            </div>
            <div class="swiper testimonial-swiper mt-12 reveal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide glass p-8 rounded-3xl border-white/5">
                        <p class="text-sm italic opacity-70 mb-6">"লাারাভেল কোর্সটি করার পর আমি এখন মার্কেটপ্লেসে
                            সফলভাবে কাজ করছি। আরিফিন ভাইয়ের মেন্টরশিপ ছিল অসাধারণ!"</p>
                        <div class="font-black text-xs uppercase tracking-widest text-primary">— Rashed Ahmed</div>
                    </div>
                    <div class="swiper-slide glass p-8 rounded-3xl border-white/5">
                        <p class="text-sm italic opacity-70 mb-6">"১২ সপ্তাহের এই জার্নি আমার ক্যারিয়ার বদলে দিয়েছে।
                            কোডিং এখন আমার কাছে অনেক সহজ মনে হয়।"</p>
                        <div class="font-black text-xs uppercase tracking-widest text-primary">— Sumaiya Akter</div>
                    </div>
                </div>
                <div class="swiper-pagination mt-8 !static"></div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
            <div class="max-w-7xl mx-auto flex flex-col items-center reveal">
                <h3 class="text-3xl font-black uppercase tracking-tighter mb-8">Join Our Community</h3>
                <p class="text-sm opacity-50 text-center max-w-2xl mb-12 italic">আমাদের অ্যাম্বাসেডর প্রোগ্রামে যুক্ত
                    হয়ে অন্যদের সাহায্য করুন এবং আকর্ষণীয় রিওয়ার্ড জিতে নিন।</p>
                <div class="flex gap-4">
                    <div class="glass px-6 py-3 rounded-full border-primary/20 text-[10px] font-black uppercase">Discord
                    </div>
                    <div class="glass px-6 py-3 rounded-full border-primary/20 text-[10px] font-black uppercase">
                        Facebook Group</div>
                </div>
            </div>
        </section>

        <section id="pricing" class="py-24 px-6 md:px-24">
            <div class="max-w-xl mx-auto text-center reveal">
                <div class="glass p-12 rounded-[3rem] border-primary/30 relative">
                    <span
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-white text-[9px] font-black px-4 py-1 rounded-full uppercase">Limited
                        Offer</span>
                    <h3 class="text-2xl font-black mb-4 uppercase">Full Stack Mastery</h3>
                    <div class="text-5xl font-black text-primary mb-6">$149 <span
                            class="text-sm opacity-30 line-through">$299</span></div>
                    <ul class="text-[11px] opacity-60 space-y-3 mb-10 italic">
                        <li>✓ Lifetime Course Access</li>
                        <li>✓ Private Community Access</li>
                        <li>✓ 24/7 Dedicated Support</li>
                        <li>✓ Certificate of Completion</li>
                    </ul>
                    <button
                        class="w-full py-4 bg-primary text-white font-black rounded-xl uppercase tracking-[0.2em] text-[11px] hover:scale-105 transition-all">Enroll
                        Now</button>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24">
            <div class="max-w-3xl mx-auto reveal">
                <div class="section-header text-center w-full">
                    <h2 class="mx-auto">Common Questions</h2>
                    <div class="line mx-auto"></div>
                </div>
                <div class="space-y-4 mt-12">
                    <details class="glass p-6 rounded-2xl border-white/5 cursor-pointer group">
                        <summary
                            class="flex justify-between items-center list-none font-bold uppercase text-[10px] tracking-widest">
                            কোর্সটি কি একদম বিগিনারদের জন্য? <span class="text-primary">+</span></summary>
                        <p class="mt-4 text-[11px] opacity-50 leading-relaxed italic">হ্যাঁ, আমরা একদম জিরো লেভেল থেকে
                            শুরু করি যাতে যে কেউ শিখতে পারে।</p>
                    </details>
                    <details class="glass p-6 rounded-2xl border-white/5 cursor-pointer group">
                        <summary
                            class="flex justify-between items-center list-none font-bold uppercase text-[10px] tracking-widest">
                            সাপোর্ট কিভাবে দেওয়া হয়? <span class="text-primary">+</span></summary>
                        <p class="mt-4 text-[11px] opacity-50 leading-relaxed italic">আমাদের ডেডিকেটেড সাপোর্ট গ্রুপে
                            আপনি যেকোনো সময় প্রশ্ন করতে পারবেন।</p>
                    </details>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-primary/10 blur-3xl rounded-full"></div>
            <div class="max-w-4xl mx-auto text-center relative z-10 reveal">
                <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-8 italic">Ready to change your
                    <span class="text-primary">Life?</span></h2>
                <button
                    class="px-12 py-5 bg-white text-darkBg font-black uppercase text-[12px] tracking-[0.3em] rounded-2xl shadow-2xl hover:bg-primary hover:text-white transition-all duration-500">Join
                    Academy Today</button>
            </div>
        </section>
@endsection

@push('scripts')
  
@endpush

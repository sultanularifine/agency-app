@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
    <section class="relative pt-32 pb-20 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center mt-8">
            <div class="reveal">
                <span
                    class="px-4 py-2 glass border-primary/30 text-primary text-[10px] font-black uppercase rounded-full tracking-widest">Enrollment
                    Open</span>
                <h1 class="text-5xl md:text-7xl font-black mt-6 mb-8 leading-tight uppercase tracking-tighter">
                    Full-Stack <br><span class="text-primary">Laravel Mastery</span>
                </h1>
                <p class="text-lg opacity-60 mb-10 max-w-lg leading-relaxed font-medium">
                    শূন্য থেকে শুরু করে ইন্ডাস্ট্রি লেভেলের ওয়েব অ্যাপ্লিকেশন তৈরি শিখুন। ক্লাস ৬ থেকে ১০ এবং বিগিনারদের
                    জন্য বিশেষ মডিউলে সাজানো এই কোর্স।
                </p>
                <div class="flex flex-wrap md:flex-nowrap gap-4 items-center mt-6">
                    <!-- Start Learning Button -->
                    <a href="#curriculum"
                        class="px-8 py-4 bg-primary text-white font-black rounded-xl shadow-xl hover:scale-105 transition-all text-xs uppercase text-center">
                        Start Learning
                    </a>

                    <!-- Price Box -->
                    <div class="flex items-center gap-2 px-6 py-4 glass rounded-xl border border-white/5 text-center">
                        <span class="text-2xl font-black">$149</span>
                        <span class="text-xs opacity-40 line-through">$249</span>
                    </div>
                </div>
            </div>

            <div class="relative reveal">
                <div
                    class="glass p-3 rounded-[2.5rem] border-white/10 rotate-2 hover:rotate-0 transition-all duration-700">
                    <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=2062&auto=format&fit=crop"
                        class="rounded-[2rem] w-full aspect-video object-cover" alt="Course Thumbnail">
                    <div class="absolute -bottom-6 -right-6 glass p-6 rounded-2xl border-primary/20 shadow-2xl animate-bounce"
                        style="animation-duration: 5s;">
                        <p class="text-[10px] font-black opacity-50 uppercase">Active Students</p>
                        <p class="text-xl font-black text-primary">1.2K+</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 md:px-24 glass border-y border-white/5">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12">
            <div class="reveal">
                <h3 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">What You'll Learn</h3>
                <ul class="space-y-3 text-sm opacity-70 italic font-medium">
                    <li>• Professional Backend Architecture</li>
                    <li>• Responsive UI with Tailwind</li>
                    <li>• API Development & Security</li>
                </ul>
            </div>
            <div class="reveal" style="transition-delay: 100ms;">
                <h3 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">Requirements</h3>
                <ul class="space-y-3 text-sm opacity-70 italic font-medium">
                    <li>• Basic Computer Literacy</li>
                    <li>• Dedication to Practice</li>
                    <li>• No Prior Coding Knowledge Required</li>
                </ul>
            </div>
            <div class="reveal" style="transition-delay: 200ms;">
                <h3 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">Target Audience</h3>
                <p class="text-sm opacity-70 leading-relaxed font-medium italic">
                    Students (Class 6-10), Aspiring Developers, and Digital Entrepreneurs.
                </p>
            </div>
        </div>
    </section>
    <section id="curriculum" class="py-24 px-6 md:px-24">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-black mb-16 text-center uppercase tracking-tighter">Course Curriculum</h2>

            <div class="space-y-6">
                <div class="glass border-white/5 rounded-3xl overflow-hidden reveal">
                    <div class="p-6 md:p-8 flex justify-between items-center bg-white/5">
                        <div>
                            <span class="text-primary font-mono text-[10px] uppercase tracking-widest">Module 01</span>
                            <h4 class="text-xl font-bold mt-1">Foundations of Web</h4>
                        </div>
                        <span class="text-xs font-bold opacity-40 uppercase">08 Lessons</span>
                    </div>
                    <div class="p-8 space-y-4">
                        <div
                            class="flex items-center justify-between opacity-60 hover:opacity-100 transition-all cursor-pointer">
                            <div class="flex items-center gap-4">
                                <span
                                    class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-[10px]">01</span>
                                <p class="text-sm font-medium">Understanding the Web Ecosystem</p>
                            </div>
                            <span class="text-[10px] font-black text-primary uppercase">Preview</span>
                        </div>
                        <div class="flex items-center justify-between opacity-40">
                            <div class="flex items-center gap-4">
                                <span
                                    class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-[10px]">02</span>
                                <p class="text-sm font-medium">Setting up Development Environment</p>
                            </div>
                            <span class="text-lg">🔒</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 md:px-24 ">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-20">
            <div class="reveal">
                <h3 class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-8">Meet Your Mentor</h3>
                <div class="flex gap-8 items-start mb-8">
                    <img src="mentor.jpg" class="w-24 h-24 rounded-3xl border-2 border-primary" alt=" Agency">
                    <div>
                        <h4 class="text-3xl font-black uppercase tracking-tighter"> Agency</h4>
                        <p class="text-primary font-bold text-sm mb-4">CEO, Alpha Coder</p>
                        <p class="text-sm opacity-60 leading-relaxed italic">৫ বছরেরও বেশি সময় ধরে ডিজিটাল সলিউশন এবং
                            মেন্টরশিপের অভিজ্ঞতা নিয়ে আমি আপনাদের গাইড করব।</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="glass p-4 rounded-xl text-center border-white/5">
                        <p class="text-lg font-black">10K+</p>
                        <p class="text-[10px] opacity-40 uppercase">Students Mentored</p>
                    </div>
                    <div class="glass p-4 rounded-xl text-center border-white/5">
                        <p class="text-lg font-black">50+</p>
                        <p class="text-[10px] opacity-40 uppercase">Global Projects</p>
                    </div>
                </div>
            </div>

            <div class="reveal">
                <h3 class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-8">Student Feedback</h3>
                <div class="space-y-6">
                    <div class="glass p-6 rounded-2xl border-white/5 italic">
                        <div class="text-primary mb-2">★★★★★</div>
                        <p class="text-sm opacity-60 mb-4">"আরিফিন ভাইয়ের বোঝানোর স্টাইলটা চমৎকার। ক্লাস ৬-এ পড়লেও আমি
                            এখন নিজের ওয়েবসাইট বানাতে পারি।"</p>
                        <p class="text-xs font-bold uppercase">— Ahsan Habib (Student)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 md:px-24">
        <div class="max-w-4xl mx-auto text-center reveal">
            <h2 class="text-4xl font-black mb-8 uppercase tracking-tighter">Still Have Questions?</h2>
            <div class="space-y-4 text-left mb-16">
                <details class="glass p-6 rounded-2xl border-white/5 cursor-pointer group">
                    <summary class="font-bold flex justify-between items-center outline-none">
                        আমি কি লাইভ সাপোর্ট পাবো?
                        <span class="text-primary group-open:rotate-45 transition-transform">+</span>
                    </summary>
                    <p class="mt-4 text-sm opacity-60">হ্যাঁ, আমাদের একটি প্রাইভেট ডিসকর্ড গ্রুপ আছে যেখানে আমি এবং
                        আমাদের টিম সরাসরি সাপোর্ট দেই।</p>
                </details>
            </div>

            <div class="glass p-12 rounded-[3rem] border-primary/20 bg-gradient-to-br from-primary/10 to-transparent">
                <h3 class="text-3xl font-black mb-6 uppercase tracking-tighter">Ready to Start Your Career?</h3>
                <button
                    class="px-12 py-5 bg-primary text-white font-black rounded-2xl shadow-2xl hover:scale-105 transition-all uppercase tracking-widest text-xs">Enroll
                    Now - $149 Only</button>
                <p class="mt-6 text-[10px] opacity-40 uppercase font-bold tracking-widest">SSL Secure Payment • Instant
                    Access</p>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
  
@endpush

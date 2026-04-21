@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
  

        <section class="py-20 py-8 px-6 md:px-24">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <h3 class="text-primary font-mono text-[10px] uppercase tracking-[0.5em] mb-6 italic">Next Gen
                        Developers</h3>
                    <h1 class="text-5xl md:text-7xl font-black mb-8 leading-tight uppercase tracking-tighter">
                        Empower Your Future with <br> <span class="text-primary">Agency Internship</span>
                    </h1>
                    <p class="text-lg opacity-60 mb-10 max-w-lg leading-relaxed font-medium italic">
                        শুধুমাত্র থিওরি নয়, আমাদের রিয়েল-ওয়ার্ল্ড প্রজেক্টে কাজ করে নিজেকে একজন প্রফেশনাল ডেভেলপার
                        হিসেবে গড়ে তুলুন। ইন্ডাস্ট্রি স্ট্যান্ডার্ড কোডিং এবং টিম কোলাবরেশন শিখুন হাতে-কলমে।
                    </p>
                    <div class="flex gap-6">
                        <a href="#apply"
                            class="bg-primary px-8 py-4 font-black text-[10px] uppercase rounded-xl glass shadow-xl hover:scale-105 transition-all text-white">Apply
                            Now</a>
                    </div>
                </div>
                <div class="hidden lg:block reveal">
                    <div class="relative glass rounded-[3rem] p-4 border-white/5 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                            class="rounded-[2.5rem] grayscale hover:grayscale-0 transition-all duration-700"
                            alt="Team Work">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
            <div class="max-w-7xl mx-auto">
                <div class="section-header reveal mb-16">
                    <h2>Program Benefits</h2>
                    <div class="line"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="glass p-8 rounded-[2.5rem] border-white/5 reveal group">
                        <div class="text-3xl mb-6 text-primary">💻</div>
                        <h4 class="text-xl font-black uppercase mb-4">Live Projects</h4>
                        <p class="text-sm opacity-50 italic">সরাসরি আমাদের ক্লায়েন্ট প্রজেক্টে কাজ করার সুযোগ এবং কোড
                            রিভিউ।</p>
                    </div>
                    <div class="glass p-8 rounded-[2.5rem] border-white/5 reveal group">
                        <div class="text-3xl mb-6 text-primary">📜</div>
                        <h4 class="text-xl font-black uppercase mb-4">Certification</h4>
                        <p class="text-sm opacity-50 italic">ইন্টার্নশিপ শেষে প্রফেশনাল সার্টিফিকেট যা আপনার সিভিতে
                            ভ্যালু যোগ করবে।</p>
                    </div>
                    <div class="glass p-8 rounded-[2.5rem] border-white/5 reveal group">
                        <div class="text-3xl mb-6 text-primary">🤝</div>
                        <h4 class="text-xl font-black uppercase mb-4">Job Placement</h4>
                        <p class="text-sm opacity-50 italic">সেরা পারফর্মারদের জন্য আমাদের টিমে ফুল-টাইম পজিশনে নিয়োগের
                            সুযোগ।</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24">
            <div class="max-w-4xl mx-auto reveal">
                <div
                    class="glass p-12 rounded-[3.5rem] border-primary/20 flex flex-col md:flex-row justify-between items-center gap-12 relative overflow-hidden">
                    <div class="absolute inset-0 bg-primary/5 -z-10 blur-3xl"></div>
                    <div class="text-center md:text-left">
                        <h4 class="text-primary font-black uppercase tracking-widest mb-2 text-sm">Time Commitment</h4>
                        <h3 class="text-4xl font-black uppercase tracking-tighter">03 - 06 Months</h3>
                        <p class="text-[11px] opacity-40 uppercase font-bold tracking-widest mt-4">Full-time / Part-time
                            Options</p>
                    </div>
                    <div class="h-px w-full md:h-24 md:w-px bg-white/10"></div>
                    <div class="text-center md:text-left">
                        <h4 class="text-primary font-black uppercase tracking-widest mb-2 text-sm">Working Hours</h4>
                        <h3 class="text-4xl font-black uppercase tracking-tighter">Flexible</h3>
                        <p class="text-[11px] opacity-40 uppercase font-bold tracking-widest mt-4">Remote & In-office
                            Available</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="section-header reveal mb-16 text-center w-full">
            <h2 class="mx-auto">Meet the Mentors</h2>
            <div class="line mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <div class="glass p-8 rounded-[2.5rem] flex items-center gap-6 border-white/5 reveal group hover:border-primary/20 transition-all duration-500">
                <div class="w-24 h-24 flex-shrink-0 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all shadow-xl border border-white/10">
                    <img src="image.png" class="w-full h-full object-cover" alt=" Agency">
                </div>
                <div>
                    <h4 class="text-xl font-black uppercase tracking-tighter"> Agency</h4>
                    <p class="text-primary text-[9px] font-black uppercase tracking-widest mb-2">Backend & Laravel Expert</p>
                    <p class="text-[11px] opacity-50 italic">CEO, Alpha Coder.</p>
                </div>
            </div>

            <div class="glass p-8 rounded-[2.5rem] flex items-center gap-6 border-white/5 reveal group hover:border-primary/20 transition-all duration-500">
                <div class="w-24 h-24 flex-shrink-0 rounded-2xl overflow-hidden grayscale group-hover:grayscale-0 transition-all shadow-xl border border-white/10">
                    <img src="https://mushfiqul21.github.io/portfolio/img/me2.png" class="w-full h-full object-cover" alt="Mushfiqul Islam">
                </div>
                <div>
                    <h4 class="text-xl font-black uppercase tracking-tighter">Mushfiqul Islam</h4>
                    <p class="text-primary text-[9px] font-black uppercase tracking-widest mb-2">Full Stack Developer</p>
                    <p class="text-[11px] opacity-50 italic">CTO, Alpha Coder.</p>
                </div>
            </div>

            </div>
    </div>
</section>

        <section id="apply" class="py-32 px-6 md:px-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-primary/10 blur-[150px] rounded-full -z-10"></div>
            <div class="max-w-4xl mx-auto text-center reveal">
                <h2 class="text-5xl md:text-8xl font-black uppercase tracking-tighter mb-12 italic">Ready to <span
                        class="text-primary">Start?</span></h2>
                <p class="text-sm opacity-50 mb-12 max-w-xl mx-auto italic">আপনার সিভি এবং পোর্টফোলিও নিয়ে প্রস্তুত হোন।
                    আমরা নতুন ট্যালেন্ট খুঁজছি যারা চ্যালেঞ্জ নিতে ভয় পায় না।</p>
                <a href="intern-application-form.html"><button
                    class="px-16 py-6 bg-white text-black font-black uppercase text-[12px] tracking-[0.4em] rounded-2xl hover:bg-primary hover:text-white transition-all duration-500 shadow-2xl scale-110">Apply
                    For Internship</button></a>
            </div>
        </section>


@endsection

@push('scripts')
  
@endpush

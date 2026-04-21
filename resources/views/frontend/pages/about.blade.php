@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       <section id="about-intro" class="pt-32 pb-20 px-6 md:px-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h3 class="text-primary font-mono text-[10px] uppercase tracking-[0.4em] mb-6">About Alpha Coder</h3>
                <h2 class="text-5xl md:text-7xl font-black mb-8 leading-tight uppercase tracking-tighter">
                    Crafting the <span class="text-primary">Future</span> of Digital Solutions.
                </h2>
                <p class="text-lg opacity-60 mb-8 leading-relaxed font-medium italic">
                    Alpha Coder শুধুমাত্র একটি এজেন্সি নয়, এটি একটি প্রযুক্তিগত বিপ্লব। আমরা জটিল ব্যবসায়িক সমস্যাগুলোকে
                    সহজ এবং দৃষ্টিনন্দন ডিজিটাল অভিজ্ঞতায় রূপান্তর করি।
                </p>
                <div class="flex gap-12">
                    <div>
                        <h4 class="text-3xl font-black">500+</h4>
                        <p class="text-[10px] uppercase opacity-40 font-bold tracking-widest">Projects Delivered</p>
                    </div>
                    <div class="w-px h-12 bg-white/10"></div>
                    <div>
                        <h4 class="text-3xl font-black">10K+</h4>
                        <p class="text-[10px] uppercase opacity-40 font-bold tracking-widest">Digital Students</p>
                    </div>
                </div>
            </div>
            <div class="relative reveal">
                <div
                    class="glass p-4 rounded-[3rem] border-white/5 rotate-3 hover:rotate-0 transition-all duration-700">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                        class="rounded-[2.5rem] grayscale hover:grayscale-0 transition-all duration-1000"
                        alt="Team Work">
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-24 ">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12">
            <div class="glass p-12 rounded-[3rem] border-primary/20 reveal hover:bg-primary/5 transition-all">
                <div class="w-12 h-12 bg-primary rounded-xl mb-8 flex items-center justify-center text-2xl">🎯</div>
                <h3 class="text-3xl font-black mb-4 uppercase tracking-tighter">Our Mission</h3>
                <p class="text-sm opacity-60 leading-relaxed font-medium">
                    আমাদের লক্ষ্য হলো ক্ষুদ্র ও মাঝারি ব্যবসায়িক প্রতিষ্ঠানগুলোকে আধুনিক প্রযুক্তির (Laravel, AI, Web
                    Solutions) মাধ্যমে বিশ্বদরবারে প্রতিযোগিতামূলক অবস্থানে নিয়ে আসা।
                </p>
            </div>
            <div class="glass p-12 rounded-[3rem] border-white/10 reveal hover:bg-white/10 transition-all"
                style="transition-delay: 200ms;">
                <div class="w-12 h-12 bg-white/10 rounded-xl mb-8 flex items-center justify-center text-2xl">👁️</div>
                <h3 class="text-3xl font-black mb-4 uppercase tracking-tighter">Our Vision</h3>
                <p class="text-sm opacity-60 leading-relaxed font-medium">
                    বাংলাদেশে একটি দক্ষ প্রযুক্তিগত প্রজন্ম গড়ে তোলা, যেখানে প্রতিটি শিক্ষার্থী কোডিং এবং ডিজিটাল
                    লিটারেসিতে পারদর্শী হবে।
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-24">
        <div class="max-w-4xl mx-auto">
            <div class="section-header reveal text-center">
                <h2 class="dark:text-white uppercase">Our Journey</h2>
                <div class="line mx-auto"></div>
            </div>
            <div
                class="space-y-12 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-white/10 before:to-transparent">
                <div
                    class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active reveal">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-primary bg-darkBg text-primary absolute left-0 md:left-1/2 md:-translate-x-1/2 z-10 group-hover:bg-primary group-hover:text-white transition-all">
                        24</div>
                    <div class="w-[calc(100%-4rem)] md:w-[45%] glass p-6 rounded-2xl border-white/5">
                        <h4 class="font-black text-primary mb-2">The Inception</h4>
                        <p class="text-xs opacity-60 italic">Alpha Coder-র যাত্রা শুরু এবং স্থানীয় ক্লায়েন্টদের জন্য
                            ডিজিটাল সলিউশন প্রদান।</p>
                    </div>
                </div>
                <div
                    class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group reveal">
                    <div
                        class="flex items-center justify-center w-10 h-10 rounded-full border border-white/10 bg-darkBg text-white absolute left-0 md:left-1/2 md:-translate-x-1/2 z-10 group-hover:border-primary transition-all">
                        25</div>
                    <div class="w-[calc(100%-4rem)] md:w-[45%] glass p-6 rounded-2xl border-white/5">
                        <h4 class="font-black text-white mb-2">Expansion & Mentorship</h4>
                        <p class="text-xs opacity-60 italic">শিক্ষার্থীদের জন্য প্রযুক্তিনির্ভর ওয়ার্কশপ এবং বড় মাপের
                            Laravel প্রজেক্টে অংশগ্রহণ।</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2 class="dark:text-white uppercase">The Brains Behind</h2>
                <div class="line"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group glass rounded-[3rem] border-white/5 overflow-hidden reveal">
                    <div class="relative h-80 overflow-hidden">
                        <img src="image.png"
                            class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-darkBg to-transparent opacity-60"></div>
                    </div>
                    <div class="p-8 text-center -mt-12 relative z-10">
                        <div
                            class="glass inline-block px-4 py-1 rounded-full border-primary/30 text-[10px] font-black text-primary uppercase mb-4">
                            Founder & CEO</div>
                        <h4 class="text-2xl font-black uppercase tracking-tighter">Sultanul Arifinee</h4>
                        <p class="text-xs opacity-40 mt-2 font-medium italic">Full-stack Expert & Mentor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection

@push('scripts')
  
@endpush

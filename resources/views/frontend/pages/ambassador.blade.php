@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
    <section class="py-20 px-6 md:px-24 overflow-hidden">
            <div class="max-w-7xl mx-auto text-center reveal">
                <h3 class="text-primary font-mono text-[10px] uppercase tracking-[0.5em] mb-6 italic">Join the Movement
                </h3>
                <h1 class="text-5xl md:text-8xl font-black mb-8 leading-tight uppercase tracking-tighter">
                    Become an <br> <span class="text-primary">Alpha Ambassador</span>
                </h1>
                <p class="text-lg opacity-60 mb-10 max-w-2xl mx-auto leading-relaxed font-medium italic">
                    আমাদের মিশন ছড়িয়ে দিন এবং প্রতিটি সফল রেফারেলের জন্য আকর্ষণীয় কমিশন ও এক্সক্লুসিভ বেনিফিট জিতে নিন।
                </p>
                <a href="#apply"
                    class="bg-primary px-10 py-5 font-black text-[11px] uppercase rounded-2xl glass shadow-2xl hover:scale-105 transition-all text-white tracking-[0.2em]">Join
                    Now</a>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
            <div class="max-w-7xl mx-auto">
                <div class="section-header reveal mb-16 text-center lg:text-left">
                    <h2>Why Join Us?</h2>
                    <div class="line"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="glass p-8 rounded-[2.5rem] border-white/5 reveal group hover:border-primary/30 transition-all">
                        <div class="text-3xl mb-6">🎁</div>
                        <h4 class="text-xl font-black uppercase mb-4">Exclusive Access</h4>
                        <p class="text-sm opacity-50 italic">আমাদের আপকামিং কোর্স এবং ইভেন্টে সবার আগে ফ্রি এক্সেস
                            পাবেন।</p>
                    </div>
                    <div
                        class="glass p-8 rounded-[2.5rem] border-white/5 reveal group hover:border-primary/30 transition-all">
                        <div class="text-3xl mb-6">🚀</div>
                        <h4 class="text-xl font-black uppercase mb-4">Skill Growth</h4>
                        <p class="text-sm opacity-50 italic">মার্কেটিং এবং নেটওয়ার্কিং নিয়ে আমাদের বিশেষ মেন্টরশিপ সেশন।
                        </p>
                    </div>
                    <div
                        class="glass p-8 rounded-[2.5rem] border-white/5 reveal group hover:border-primary/30 transition-all">
                        <div class="text-3xl mb-6">🏆</div>
                        <h4 class="text-xl font-black uppercase mb-4">Recognition</h4>
                        <p class="text-sm opacity-50 italic">সেরা পারফর্মারদের জন্য থাকছে সার্টিফিকেট এবং ফিজিক্যাল গিফট
                            হ্যাম্পার।</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24">
            <div class="max-w-5xl mx-auto reveal">
                <div class="section-header text-center w-full mb-16">
                    <h2 class="mx-auto">Commission Structure</h2>
                    <div class="line mx-auto"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="glass p-10 rounded-[3rem] border-white/5 relative overflow-hidden group">
                        <div
                            class="absolute -right-10 -top-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl group-hover:bg-primary/20 transition-all">
                        </div>
                        <h4 class="text-sm font-black text-primary uppercase tracking-widest mb-2">Standard Tier</h4>
                        <h3 class="text-4xl font-black mb-6">10% <span
                                class="text-lg opacity-40 uppercase font-bold">Commission</span></h3>
                        <p class="text-[11px] opacity-50 italic mb-8">প্রতিটি সফল এনরোলমেন্টে পাচ্ছেন ফ্ল্যাট ১০% কমিশন।
                            কোনো লিমিট নেই!</p>
                        <ul class="text-[10px] uppercase font-bold tracking-widest space-y-3 opacity-80">
                            <li>✓ Instant Payout</li>
                            <li>✓ Personal Dashboard</li>
                            <li>✓ Promo Materials</li>
                        </ul>
                    </div>
                    <div
                        class="glass p-10 rounded-[3rem] border-primary/30 relative overflow-hidden group scale-105 bg-primary/5">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-primary/30 rounded-full blur-3xl"></div>
                        <h4 class="text-sm font-black text-primary uppercase tracking-widest mb-2">Elite Tier</h4>
                        <h3 class="text-4xl font-black mb-6">20% <span
                                class="text-lg opacity-40 uppercase font-bold">Commission</span></h3>
                        <p class="text-[11px] opacity-50 italic mb-8">মাসে ৫টির বেশি রেফারেল হলে আপনি চলে যাবেন এলিট
                            টিয়ারে।</p>
                        <ul class="text-[10px] uppercase font-bold tracking-widest space-y-3">
                            <li class="text-primary">✓ High Priority Payout</li>
                            <li>✓ Custom Promo Codes</li>
                            <li>✓ VIP Community Access</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6 md:px-24 bg-white/5">
            <div class="max-w-7xl mx-auto">
                <div class="section-header reveal mb-16">
                    <h2>How It Works</h2>
                    <div class="line"></div>
                </div>
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="reveal text-center">
                        <div
                            class="w-16 h-16 glass rounded-2xl flex items-center justify-center mx-auto mb-6 text-xl font-black border-primary/30">
                            01</div>
                        <h5 class="uppercase font-black text-xs tracking-widest mb-2">Sign Up</h5>
                        <p class="text-[11px] opacity-50 italic">নিচের ফর্মটি পূরণ করে আবেদন করুন।</p>
                    </div>
                    <div class="reveal text-center" style="transition-delay: 100ms;">
                        <div
                            class="w-16 h-16 glass rounded-2xl flex items-center justify-center mx-auto mb-6 text-xl font-black border-primary/30">
                            02</div>
                        <h5 class="uppercase font-black text-xs tracking-widest mb-2">Get Link</h5>
                        <p class="text-[11px] opacity-50 italic">আপনার ইউনিক অ্যাফিলিয়েট লিঙ্ক পান।</p>
                    </div>
                    <div class="reveal text-center" style="transition-delay: 200ms;">
                        <div
                            class="w-16 h-16 glass rounded-2xl flex items-center justify-center mx-auto mb-6 text-xl font-black border-primary/30">
                            03</div>
                        <h5 class="uppercase font-black text-xs tracking-widest mb-2">Promote</h5>
                        <p class="text-[11px] opacity-50 italic">সোশ্যাল মিডিয়া বা ফ্রেন্ডদের মাঝে শেয়ার করুন।</p>
                    </div>
                    <div class="reveal text-center" style="transition-delay: 300ms;">
                        <div
                            class="w-16 h-16 glass rounded-2xl flex items-center justify-center mx-auto mb-6 text-xl font-black border-primary/30">
                            04</div>
                        <h5 class="uppercase font-black text-xs tracking-widest mb-2">Earn</h5>
                        <p class="text-[11px] opacity-50 italic">সফল এনরোলমেন্টে কমিশন বুঝে নিন।</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="apply" class="py-24 px-6 md:px-24">
            <div class="max-w-3xl mx-auto reveal">
                <div class="glass p-12 rounded-[3.5rem] border-white/5 relative overflow-hidden">
                    <div class="absolute inset-0 bg-primary/5 -z-10"></div>
                    <h2 class="text-3xl font-black uppercase tracking-tighter mb-8 text-center">Apply to <span
                            class="text-primary">Join</span></h2>

                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Full Name"
                                class="w-full bg-white/5 border border-white/10 p-4 rounded-xl focus:border-primary outline-none transition-all italic text-sm">
                            <input type="email" placeholder="Email Address"
                                class="w-full bg-white/5 border border-white/10 p-4 rounded-xl focus:border-primary outline-none transition-all italic text-sm">
                        </div>
                        <input type="text" placeholder="Social Media Link (FB/LinkedIn)"
                            class="w-full bg-white/5 border border-white/10 p-4 rounded-xl focus:border-primary outline-none transition-all italic text-sm">
                        <textarea placeholder="Why do you want to be an ambassador?" rows="4"
                            class="w-full bg-white/5 border border-white/10 p-4 rounded-xl focus:border-primary outline-none transition-all italic text-sm"></textarea>

                        <button
                            class="w-full py-5 bg-primary text-white font-black rounded-2xl uppercase tracking-[0.3em] text-[11px] hover:scale-[1.02] transition-all shadow-2xl">Submit
                            Application</button>
                    </form>
                </div>
            </div>
        </section>
@endsection

@push('scripts')
  
@endpush

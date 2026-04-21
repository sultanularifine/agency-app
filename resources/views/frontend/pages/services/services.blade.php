@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
    <section id="services" class="py-24 px-6 md:px-24 ">
        <div class="max-w-7xl mx-auto mt-12">
            <div class="section-header reveal">
                <h2 class="dark:text-white">Our Services</h2>
                <div class="line"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass p-8 rounded-3xl reveal hover:border-primary/50 transition-all duration-500 group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        💻</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tighter">Web Development</h3>
                    <p class="text-sm opacity-60 leading-relaxed font-medium">Custom Laravel solutions, high-performance
                        backend systems, and scalable web architectures tailored for your growth.</p>
                </div>

                <div class="glass p-8 rounded-3xl reveal hover:border-primary/50 transition-all duration-500 group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🌐</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tighter">WordPress Dev</h3>
                    <p class="text-sm opacity-60 leading-relaxed font-medium">From custom themes to complex e-commerce
                        integrations using WooCommerce, ensuring a seamless user experience.</p>
                </div>

                <div class="glass p-8 rounded-3xl reveal hover:border-primary/50 transition-all duration-500 group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🎨</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tighter">Graphic Design</h3>
                    <p class="text-sm opacity-60 leading-relaxed font-medium">Modern logos, branding identities, and
                        premium UI/UX designs that communicate your brand's unique story.</p>
                </div>

                <div class="glass p-8 rounded-3xl reveal hover:border-primary/50 transition-all duration-500 group">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🚀</div>
                    <h3 class="text-xl font-bold mb-4 uppercase tracking-tighter">Digital Marketing</h3>
                    <p class="text-sm opacity-60 leading-relaxed font-medium">Strategic SEO, organic brand building, and
                        data-driven marketing plans to dominate your digital niche.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="py-24 px-6 md:px-24 ">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal text-center w-full">
                <h2 class="dark:text-white">Our Process</h2>
                <div class="line mx-auto left-0 right-0"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-12 mt-12">
                <div class="relative text-center reveal">
                    <div class="text-6xl font-black text-primary absolute -top-11 left-1/2 -translate-x-1/2">01</div>
                    <h4 class="text-lg font-bold uppercase tracking-widest mb-4">Discovery</h4>
                    <p class="text-xs opacity-60 font-bold uppercase leading-loose">Deep diving into your brand
                        requirements and target audience to build a solid roadmap.</p>
                </div>
                <div class="relative text-center reveal">
                    <div class="text-6xl font-black text-primary absolute -top-11 left-1/2 -translate-x-1/2">02</div>
                    <h4 class="text-lg font-bold uppercase tracking-widest mb-4">Execution</h4>
                    <p class="text-xs opacity-60 font-bold uppercase leading-loose">The magic happens here. Crafting
                        clean code and pixel-perfect designs with rapid prototyping.</p>
                </div>
                <div class="relative text-center reveal">
                    <div class="text-6xl font-black text-primary absolute -top-11 left-1/2 -translate-x-1/2">03</div>
                    <h4 class="text-lg font-bold uppercase tracking-widest mb-4">Launch</h4>
                    <p class="text-xs opacity-60 font-bold uppercase leading-loose">Quality testing followed by a smooth
                        rollout. We stay with you for post-launch optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-24 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2 class="dark:text-white">Pricing Plans</h2>
                <div class="line"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-10 rounded-[2rem] reveal border-white/5 flex flex-col">
                    <h4 class="text-xs font-black text-primary uppercase tracking-[0.2em] mb-4">Startup</h4>
                    <div class="text-4xl font-black mb-6 dark:text-white">$199<span
                            class="text-sm opacity-40 font-medium">/Project</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Single Page Design</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Basic SEO Setup</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Responsive Layout</li>
                    </ul>
                    <button
                        class="w-full py-4 bg-white/5 rounded-xl font-bold uppercase text-[10px] tracking-widest hover:bg-primary transition-all magnetic-btn">Get
                        Started</button>
                </div>

                <div
                    class="glass p-10 rounded-[2rem] reveal border-primary/30 relative overflow-hidden flex flex-col scale-105 shadow-2xl">
                    <div
                        class="absolute top-0 right-0 bg-primary text-white text-[8px] font-black px-4 py-2 uppercase tracking-tighter">
                        Popular</div>
                    <h4 class="text-xs font-black text-primary uppercase tracking-[0.2em] mb-4">Professional</h4>
                    <div class="text-4xl font-black mb-6 dark:text-white">$499<span
                            class="text-sm opacity-40 font-medium">/Project</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Up to 5 Pages (Laravel)</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Admin Dashboard</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Advanced Graphics</li>
                    </ul>
                    <button
                        class="w-full py-4 bg-primary text-white rounded-xl font-bold uppercase text-[10px] tracking-widest shadow-lg shadow-primary/20 magnetic-btn">Choose
                        Pro</button>
                </div>

                <div class="glass p-10 rounded-[2rem] reveal border-white/5 flex flex-col">
                    <h4 class="text-xs font-black text-primary uppercase tracking-[0.2em] mb-4">Enterprise</h4>
                    <div class="text-4xl font-black mb-6 dark:text-white">$999<span
                            class="text-sm opacity-40 font-medium">/Project</span></div>
                    <ul class="space-y-4 mb-10 flex-grow">
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Full E-commerce</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Custom API Integration</li>
                        <li class="text-[11px] font-bold uppercase opacity-70 flex items-center gap-2"><span
                                class="text-primary">✔</span> Monthly Maintenance</li>
                    </ul>
                    <button
                        class="w-full py-4 bg-white/5 rounded-xl font-bold uppercase text-[10px] tracking-widest hover:bg-primary transition-all magnetic-btn">Contact
                        Sales</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
  
@endpush

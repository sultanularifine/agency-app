@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
    <section id="portfolio" class="py-24 px-6 md:px-24 relative overflow-hidden">
        <div class="absolute top-1/2 left-0 w-72 h-72 bg-primary/10 blur-[100px] rounded-full"></div>

        <div class="max-w-7xl mx-auto mt-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div class="section-header !mb-0">
                    <h2 class="dark:text-white">Featured Projects</h2>
                    <div class="line"></div>
                </div>
                <p class="text-[10px] font-bold uppercase tracking-[0.3em] opacity-40 mb-2">Selected Works (2024-2026)
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">

                <div class="group relative reveal">
                    <div
                        class="glass rounded-[2.5rem] overflow-hidden border-white/5 transition-all duration-700 group-hover:border-primary/30 group-hover:translate-y-[-10px]">
                        <div class="relative h-[350px] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                                alt="Organic Food Platform"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-darkBg via-transparent to-transparent opacity-80">
                            </div>

                            <div class="absolute bottom-6 left-6 flex gap-2">
                                <span class="skill-badge text-white bg-primary/80 border-none">Laravel</span>
                                <span class="skill-badge text-white bg-black/50 backdrop-blur-md">MySQL</span>
                            </div>
                        </div>

                        <div class="p-8">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3
                                        class="text-2xl font-black uppercase tracking-tighter mb-2 group-hover:text-primary transition-colors">
                                        Organic Food E-commerce</h3>
                                    <p class="text-xs font-bold opacity-50 uppercase tracking-widest">Full-stack
                                        Development • UI/UX Design</p>
                                </div>
                                <a href="#"
                                    class="w-12 h-12 glass rounded-full flex items-center justify-center group-hover:bg-primary transition-all duration-500 magnetic-btn">
                                    <svg class="w-5 h-5 -rotate-45" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                            <p class="text-sm opacity-60 leading-relaxed line-clamp-2">A fully dynamic marketplace
                                featuring automated inventory management, secure payment gateways, and a mobile-first
                                responsive dashboard.</p>
                        </div>
                    </div>
                </div>

                <div class="group relative reveal" style="transition-delay: 200ms;">
                    <div
                        class="glass rounded-[2.5rem] overflow-hidden border-white/5 transition-all duration-700 group-hover:border-primary/30 group-hover:translate-y-[-10px]">
                        <div class="relative h-[350px] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop"
                                alt="Digital Solutions Portal"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-darkBg via-transparent to-transparent opacity-80">
                            </div>
                            <div class="absolute bottom-6 left-6 flex gap-2">
                                <span class="skill-badge text-white bg-primary/80 border-none">WordPress</span>
                                <span class="skill-badge text-white bg-black/50 backdrop-blur-md">SEO</span>
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3
                                        class="text-2xl font-black uppercase tracking-tighter mb-2 group-hover:text-primary transition-colors">
                                        Alpha Coder Agency Portal</h3>
                                    <p class="text-xs font-bold opacity-50 uppercase tracking-widest">Digital Branding •
                                        CMS Customization</p>
                                </div>
                                <a href="#"
                                    class="w-12 h-12 glass rounded-full flex items-center justify-center group-hover:bg-primary transition-all duration-500 magnetic-btn">
                                    <svg class="w-5 h-5 -rotate-45" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                            <p class="text-sm opacity-60 leading-relaxed line-clamp-2">The official digital solutions
                                platform for Alpha Coder, optimized for search engines and high-conversion user
                                engagement.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-16 text-center reveal">
                <a href="#" class="inline-flex items-center gap-4 group">
                    <span
                        class="text-[10px] font-black uppercase tracking-[0.4em] opacity-40 group-hover:opacity-100 transition-all group-hover:text-primary">Explore
                        All Projects</span>
                    <div
                        class="w-12 h-px bg-white/20 group-hover:w-24 group-hover:bg-primary transition-all duration-500">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 px-6 md:px-24">
        <div class="max-w-7xl mx-auto glass rounded-3xl p-8 md:p-12 reveal border-primary/10">
            <div class="grid lg:grid-cols-3 gap-12">
                <div>
                    <h4 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">Core Focus</h4>
                    <p class="text-lg font-bold leading-relaxed">Scaling businesses through clean architecture and
                        aggressive digital branding.</p>
                </div>
                <div class="lg:border-x border-white/5 lg:px-12">
                    <h4 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">Technical Stack</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="opacity-40 text-[11px] font-bold uppercase">PHP 8.3</span> •
                        <span class="opacity-40 text-[11px] font-bold uppercase">Tailwind CSS</span> •
                        <span class="opacity-40 text-[11px] font-bold uppercase">React</span> •
                        <span class="opacity-40 text-[11px] font-bold uppercase">Figma</span>
                    </div>
                </div>
                <div>
                    <h4 class="text-primary font-mono text-[10px] uppercase tracking-widest mb-4">Project Goal</h4>
                    <p class="text-sm opacity-60 font-medium italic">"Turning complex problems into elegant,
                        user-centric digital experiences."</p>
                </div>
            </div>
        </div>
    </section>
   
@endsection

@push('scripts')
  
@endpush

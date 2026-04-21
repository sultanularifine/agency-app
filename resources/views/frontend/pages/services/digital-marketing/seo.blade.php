@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       <section class="relative pt-32 pb-20 px-6 overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[500px] bg-gradient-to-b from-primary/10 to-transparent opacity-30 blur-3xl pointer-events-none"></div>
        
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-start gap-12">
                <div class="flex-1">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-[10px] font-bold uppercase tracking-widest mb-6">
                        <i data-lucide="zap" class="w-3 h-3"></i> Top Rated Service
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mb-6 leading-[0.9]">
                        SEO <span class="text-primary text-outline">Optimization</span> Service
                    </h1>
                    <p class="text-lg text-white/60 mb-8 leading-relaxed max-w-xl">
                        We help your website rank higher on search engines and bring organic traffic that converts into real customers.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4 mb-10">
                        <div class="flex items-center gap-3 text-sm font-medium text-white/80">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary"></i> Keyword Research
                        </div>
                        <div class="flex items-center gap-3 text-sm font-medium text-white/80">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary"></i> On-Page SEO
                        </div>
                        <div class="flex items-center gap-3 text-sm font-medium text-white/80">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary"></i> Technical SEO Fix
                        </div>
                        <div class="flex items-center gap-3 text-sm font-medium text-white/80">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-primary"></i> Monthly Report
                        </div>
                    </div>

                    <a href="#pricing" class="px-8 py-4 bg-primary text-white rounded-2xl font-black uppercase text-xs tracking-widest hover:scale-105 transition-transform inline-block">
                        Order Now
                    </a>
                </div>

                <div class="w-full md:w-[350px] space-y-6">
                    <div class="glass p-6 rounded-3xl">
                        <h4 class="text-[10px] font-black uppercase text-primary tracking-widest mb-4">Tools We Use</h4>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[10px] font-bold">Google Analytics</span>
                            <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[10px] font-bold">Ahrefs</span>
                            <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[10px] font-bold">SEMrush</span>
                            <span class="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[10px] font-bold">Search Console</span>
                        </div>
                    </div>
                    <div class="glass p-6 rounded-3xl border-green-500/20">
                        <h4 class="text-[10px] font-black uppercase text-green-400 tracking-widest mb-4">Why Choose Us</h4>
                        <ul class="space-y-3 text-xs font-bold opacity-70">
                            <li class="flex items-center gap-2"><i data-lucide="shield-check" class="w-4 h-4 text-green-400"></i> Proven Results</li>
                            <li class="flex items-center gap-2"><i data-lucide="shield-check" class="w-4 h-4 text-green-400"></i> White Hat SEO</li>
                            <li class="flex items-center gap-2"><i data-lucide="shield-check" class="w-4 h-4 text-green-400"></i> 24/7 Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <section class="py-20 px-6">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
            <div class="glass p-10 rounded-[3rem]">
                <h3 class="text-2xl font-black uppercase tracking-tighter mb-8 flex items-center gap-3">
                    <i data-lucide="package-check" class="text-primary"></i> What You Will Get
                </h3>
                <ul class="grid grid-cols-1 gap-4 text-white/70 font-medium">
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Keyword Research</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> On-Page SEO</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Technical SEO Fix</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Competitor Analysis</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Monthly Report</li>
                </ul>
            </div>

            <div class="glass p-10 rounded-[3rem] border-green-500/10">
                <h3 class="text-2xl font-black uppercase tracking-tighter mb-8 flex items-center gap-3 text-green-400">
                    <i data-lucide="shield-check"></i> Why Choose Us
                </h3>
                <ul class="grid grid-cols-1 gap-4 text-white/70 font-medium">
                    <li class="flex items-center gap-3"><i data-lucide="star" class="text-green-400 w-5"></i> Proven Results</li>
                    <li class="flex items-center gap-3"><i data-lucide="zap" class="text-green-400 w-5"></i> White Hat SEO</li>
                    <li class="flex items-center gap-3"><i data-lucide="clock" class="text-green-400 w-5"></i> Fast Delivery</li>
                    <li class="flex items-center gap-3"><i data-lucide="headphones" class="text-green-400 w-5"></i> 24/7 Support</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="process" class="py-20 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-black uppercase tracking-tighter mb-16 text-center">Process <span class="text-primary">(Step-by-Step)</span></h2>
            <div class="relative space-y-12 step-line ml-4 md:ml-0">
                <div class="flex gap-8 relative items-center">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center font-black shrink-0">1</div>
                    <div class="glass p-6 rounded-2xl flex-1">
                        <h4 class="font-bold uppercase tracking-widest text-xs mb-1">Website Audit</h4>
                        <p class="text-xs opacity-50">Analyzing your current site health.</p>
                    </div>
                </div>
                <div class="flex gap-8 relative items-center">
                    <div class="w-10 h-10 bg-black border border-primary rounded-full flex items-center justify-center font-black text-primary shrink-0">2</div>
                    <div class="glass p-6 rounded-2xl flex-1">
                        <h4 class="font-bold uppercase tracking-widest text-xs mb-1">Keyword Research</h4>
                        <p class="text-xs opacity-50">Identifying high-converting keywords.</p>
                    </div>
                </div>
                <div class="flex gap-8 relative items-center">
                    <div class="w-10 h-10 bg-black border border-primary rounded-full flex items-center justify-center font-black text-primary shrink-0">3</div>
                    <div class="glass p-6 rounded-2xl flex-1">
                        <h4 class="font-bold uppercase tracking-widest text-xs mb-1">Optimization</h4>
                        <p class="text-xs opacity-50">Applying On-page and Technical fixes.</p>
                    </div>
                </div>
                <div class="flex gap-8 relative items-center">
                    <div class="w-10 h-10 bg-black border border-primary rounded-full flex items-center justify-center font-black text-primary shrink-0">4</div>
                    <div class="glass p-6 rounded-2xl flex-1">
                        <h4 class="font-bold uppercase tracking-widest text-xs mb-1">Monitoring & Reporting</h4>
                        <p class="text-xs opacity-50">Final check and performance report.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-32 px-6 bg-white/[0.02]">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-7xl font-black uppercase tracking-tighter">Premium <span class="text-primary">Packages</span></h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-10 rounded-[3rem] border-green-500/20 hover:scale-105 transition-transform">
                    <div class="mb-8">
                        <h3 class="text-2xl font-black uppercase mb-1">Basic Package</h3>
                        <p class="text-[10px] font-bold text-green-400 uppercase tracking-widest">For Small Projects</p>
                    </div>
                    <div class="text-4xl font-black mb-10 text-primary">$20 – $50</div>
                    <ul class="space-y-4 mb-12 text-sm font-medium opacity-70">
                        <li>• 5 Keywords Optimization</li>
                        <li>• Basic On-Page SEO</li>
                        <li>• Meta Tags Setup</li>
                        <li>• 1 Week Delivery</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl bg-white/5 border border-white/10 font-black uppercase text-[10px] tracking-widest hover:bg-white hover:text-black transition-all">Order Basic</button>
                </div>

                <div class="glass p-10 rounded-[3rem] border-primary/50 relative shadow-[0_0_50px_rgba(255,77,77,0.1)] scale-105 z-10">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-primary text-[10px] font-black uppercase px-4 py-1.5 rounded-full">Recommended</div>
                    <div class="mb-8">
                        <h3 class="text-2xl font-black uppercase mb-1">Standard Package</h3>
                        <p class="text-[10px] font-bold text-primary uppercase tracking-widest">For Growing Businesses</p>
                    </div>
                    <div class="text-4xl font-black mb-10 text-white">$80 – $150</div>
                    <ul class="space-y-4 mb-12 text-sm font-bold">
                        <li class="flex items-center gap-2"><i data-lucide="check" class="text-primary w-4"></i> 15 Keywords Optimization</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="text-primary w-4"></i> Full On-Page SEO</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="text-primary w-4"></i> Technical SEO Fix</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="text-primary w-4"></i> Competitor Analysis</li>
                        <li class="flex items-center gap-2"><i data-lucide="check" class="text-primary w-4"></i> 2 Weeks Support</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl bg-primary text-white font-black uppercase text-[10px] tracking-widest shadow-lg shadow-primary/30">Get Started Now</button>
                </div>

                <div class="glass p-10 rounded-[3rem] border-red-500/20 hover:scale-105 transition-transform">
                    <div class="mb-8">
                        <h3 class="text-2xl font-black uppercase mb-1">Premium Package</h3>
                        <p class="text-[10px] font-bold text-red-500 uppercase tracking-widest">Advanced Business</p>
                    </div>
                    <div class="text-4xl font-black mb-10 text-primary">$200 – $500+</div>
                    <ul class="space-y-4 mb-12 text-sm font-medium opacity-70">
                        <li>• 30+ Keywords Optimization</li>
                        <li>• Full SEO (On+Tech+Off)</li>
                        <li>• Backlink Building</li>
                        <li>• Monthly Report</li>
                        <li>• 1 Month Support</li>
                    </ul>
                    <button class="w-full py-4 rounded-2xl bg-white/5 border border-white/10 font-black uppercase text-[10px] tracking-widest hover:bg-white hover:text-black transition-all">Order Premium</button>
                </div>
            </div>
        </div>
    </section>
    
   
@endsection

@push('scripts')
  
@endpush

@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       <section class="relative pt-32 pb-16 px-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl md:text-7xl font-black uppercase tracking-tighter mb-6">Website <span class="text-primary">Development</span></h1>
        <p class="text-xl text-white/60 mb-8 max-w-xl">We build fast, modern, and responsive websites for your business.</p>
        
        <div class="grid md:grid-cols-2 gap-8 mb-20">
            <div class="glass p-10 rounded-[3rem]">
                <h3 class="text-2xl font-black uppercase mb-6 flex items-center gap-3"><i data-lucide="code" class="text-primary"></i> What You Get</h3>
                <ul class="grid grid-cols-2 gap-4 text-sm opacity-70">
                    <li>• Responsive Design</li><li>• SEO Friendly</li><li>• Speed Optimization</li><li>• Contact Forms</li>
                </ul>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass p-8 rounded-[2.5rem]">
                <h4 class="font-black uppercase mb-2">Starter</h4>
                <div class="text-3xl font-black text-primary mb-6">$50 – $100</div>
                <p class="text-[10px] opacity-50 mb-6">1–3 Pages, Basic Design</p>
                <button class="w-full py-3 rounded-xl border border-white/10 font-black uppercase text-[10px]">Select</button>
            </div>
            <div class="glass p-8 rounded-[2.5rem] border-primary scale-105">
                <h4 class="font-black uppercase mb-2">Growth</h4>
                <div class="text-3xl font-black text-white mb-6">$150 – $300</div>
                <p class="text-[10px] opacity-90 mb-6">5–7 Pages, Custom Design, Basic SEO</p>
                <button class="w-full py-3 rounded-xl bg-primary text-white font-black uppercase text-[10px]">Select</button>
            </div>
            <div class="glass p-8 rounded-[2.5rem]">
                <h4 class="font-black uppercase mb-2">Pro</h4>
                <div class="text-3xl font-black text-primary mb-6">$400+</div>
                <p class="text-[10px] opacity-50 mb-6">Full Website, E-commerce, Speed Opt.</p>
                <button class="w-full py-3 rounded-xl border border-white/10 font-black uppercase text-[10px]">Select</button>
            </div>
        </div>
    </div>
</section>
   
@endsection

@push('scripts')
  
@endpush

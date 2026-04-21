@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       <section class="py-32 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-5xl font-black uppercase mb-6">Content & <span class="text-primary">Affiliate</span></h2>
        <p class="text-white/50 mb-12">We create high-converting content to boost your affiliate income.</p>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="glass p-10 rounded-[3rem]">
                <h4 class="font-black uppercase mb-4 text-green-400 text-xs tracking-widest">Starter</h4>
                <div class="text-4xl font-black mb-6">$20 – $40</div>
                <p class="text-sm opacity-60 mb-8">• 2 Articles<br>• Keyword Research</p>
                <button class="w-full py-3 rounded-xl border border-white/5 bg-white/5 font-black uppercase text-[10px]">Order</button>
            </div>
            <div class="glass p-10 rounded-[3rem] border-primary">
                <h4 class="font-black uppercase mb-4 text-primary text-xs tracking-widest">Growth</h4>
                <div class="text-4xl font-black mb-6">$80 – $150</div>
                <p class="text-sm opacity-90 mb-8">• 5 Articles<br>• SEO Optimization<br>• Strategy</p>
                <button class="w-full py-4 rounded-xl bg-primary font-black uppercase text-[10px]">Order</button>
            </div>
            <div class="glass p-10 rounded-[3rem]">
                <h4 class="font-black uppercase mb-4 text-red-500 text-xs tracking-widest">Pro</h4>
                <div class="text-4xl font-black mb-6">$200+</div>
                <p class="text-sm opacity-60 mb-8">• 10+ Articles<br>• Full Strategy<br>• Support</p>
                <button class="w-full py-3 rounded-xl border border-white/5 bg-white/5 font-black uppercase text-[10px]">Order</button>
            </div>
        </div>
    </div>
</section>

   
@endsection

@push('scripts')
  
@endpush

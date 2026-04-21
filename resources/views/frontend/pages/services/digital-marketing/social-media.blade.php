@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       <section class="py-20 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 mb-20">
        <div class="glass p-10 rounded-[3rem]">
            <h3 class="text-2xl font-black uppercase mb-8 flex items-center gap-3"><i data-lucide="users" class="text-primary"></i> What You Will Get</h3>
            <ul class="space-y-4 text-white/70 font-medium">
                <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Account Setup & Optimization</li>
                <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Content Creation (Post/Design)</li>
                <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Hashtag Research</li>
                <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Page Management</li>
                <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary w-5"></i> Ads Campaign (Optional)</li>
            </ul>
        </div>
        <div class="glass p-10 rounded-[3rem] border-green-500/10">
            <h3 class="text-2xl font-black uppercase mb-8 flex items-center gap-3 text-green-400"><i data-lucide="shield-check"></i> Why Choose Us</h3>
            <ul class="space-y-4 text-white/70 font-medium">
                <li class="flex items-center gap-3"><i data-lucide="star" class="text-green-400 w-5"></i> Proven Engagement</li>
                <li class="flex items-center gap-3"><i data-lucide="zap" class="text-green-400 w-5"></i> Target Audience Research</li>
                <li class="flex items-center gap-3"><i data-lucide="clock" class="text-green-400 w-5"></i> Consistent Posting</li>
            </ul>
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="glass p-8 rounded-[2.5rem]">
            <h4 class="text-xl font-black uppercase mb-2">Starter</h4>
            <div class="text-3xl font-black text-primary mb-6">$30 – $60</div>
            <ul class="text-xs space-y-3 opacity-60 mb-8"><li>3 Posts/Week</li><li>Basic Design</li><li>1 Platform</li></ul>
            <button class="w-full py-3 rounded-xl border border-white/10 font-black uppercase text-[10px]">Order Now</button>
        </div>
        <div class="glass p-8 rounded-[2.5rem] border-primary scale-105 shadow-xl">
            <h4 class="text-xl font-black uppercase mb-2">Growth</h4>
            <div class="text-3xl font-black text-white mb-6">$80 – $150</div>
            <ul class="text-xs space-y-3 mb-8"><li>5 Posts/Week</li><li>Custom Design</li><li>2 Platforms</li><li>Engagement Support</li></ul>
            <button class="w-full py-3 rounded-xl bg-primary text-white font-black uppercase text-[10px]">Order Now</button>
        </div>
        <div class="glass p-8 rounded-[2.5rem]">
            <h4 class="text-xl font-black uppercase mb-2">Pro</h4>
            <div class="text-3xl font-black text-primary mb-6">$200+</div>
            <ul class="text-xs space-y-3 opacity-60 mb-8"><li>Daily Posts</li><li>Ads Management</li><li>3 Platforms</li><li>Full Management</li></ul>
            <button class="w-full py-3 rounded-xl border border-white/10 font-black uppercase text-[10px]">Order Now</button>
        </div>
    </div>
</section>
   
@endsection

@push('scripts')
  
@endpush

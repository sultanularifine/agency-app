@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
       
   <section class="py-20 px-6">
    <div class="max-w-4xl mx-auto">
        <div class="glass p-12 rounded-[4rem]">
            <h2 class="text-4xl font-black uppercase mb-6">Email <span class="text-primary text-outline">Marketing</span></h2>
            <p class="text-lg opacity-60 mb-12">Convert visitors into customers through smart email campaigns.</p>
            
            <div class="space-y-6">
                <div class="flex justify-between items-center p-6 glass rounded-2xl hover:border-primary transition-all">
                    <div><h5 class="font-black uppercase">Starter</h5><p class="text-[10px] opacity-40">1 Campaign Setup</p></div>
                    <div class="text-xl font-black text-primary">$20 – $40</div>
                </div>
                <div class="flex justify-between items-center p-6 glass rounded-2xl border-primary bg-primary/5">
                    <div><h5 class="font-black uppercase">Growth</h5><p class="text-[10px] opacity-80">3 Campaigns + Automation</p></div>
                    <div class="text-xl font-black text-white">$80 – $150</div>
                </div>
                <div class="flex justify-between items-center p-6 glass rounded-2xl hover:border-primary transition-all">
                    <div><h5 class="font-black uppercase">Pro</h5><p class="text-[10px] opacity-40">Full Funnel + Advanced Automation</p></div>
                    <div class="text-xl font-black text-primary">$200+</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
  
@endpush

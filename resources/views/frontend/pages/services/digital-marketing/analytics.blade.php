@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
        <section class="py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-5xl font-black uppercase mb-6 leading-tight">Analytics & <br><span class="text-primary">Optimization</span></h2>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary"></i> Google Analytics Setup</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary"></i> Conversion Tracking</li>
                    <li class="flex items-center gap-3"><i data-lucide="check" class="text-primary"></i> Performance Report</li>
                </ul>
            </div>
            <div class="space-y-4">
                <div class="glass p-8 rounded-3xl flex justify-between items-center">
                    <span class="font-black uppercase">Basic Setup</span>
                    <span class="text-primary font-black">$20 – $50</span>
                </div>
                <div class="glass p-8 rounded-3xl flex justify-between items-center border-primary">
                    <span class="font-black uppercase">Full Tracking Setup</span>
                    <span class="text-white font-black">$80 – $150</span>
                </div>
                <div class="glass p-8 rounded-3xl flex justify-between items-center">
                    <span class="font-black uppercase">Advanced + CRO</span>
                    <span class="text-primary font-black">$200+</span>
                </div>
            </div>
        </div>
    </div>
</section>
   
@endsection

@push('scripts')
  
@endpush

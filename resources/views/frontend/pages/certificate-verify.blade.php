@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
    <section class="py-24 px-6 md:px-24 relative overflow-hidden">
        <div
            class="absolute -top-40 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/5 blur-[120px] rounded-full -z-10">
        </div>

        <div class="max-w-6xl mx-auto">
            <div class="section-header reveal text-center w-full mb-16">
                <h2 class="mx-auto text-4xl md:text-6xl">Verify Certificate</h2>
                <div class="line mx-auto"></div>
                <p class="text-[11px] opacity-50 uppercase tracking-[0.3em] mt-4 italic">Validate your achievement with
                    Arifine Academy</p>
            </div>

            <div class="glass p-4 rounded-[2rem] border-white/10 shadow-2xl reveal mb-12 max-w-2xl mx-auto">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" id="cert-id" placeholder="Enter ID (e.g. AA-2026-001)"
                        class="flex-1 bg-white/5 border border-white/5 p-5 rounded-2xl focus:border-primary outline-none transition-all italic text-white">
                    <button onclick="verifyCertificate()"
                        class="bg-primary px-10 py-5 font-black text-[11px] uppercase rounded-2xl shadow-xl hover:scale-105 active:scale-95 transition-all text-white tracking-widest">
                        Verify Now
                    </button>
                </div>
            </div>

            <div id="cert-result" class="hidden reveal">
                <div
                    class="glass p-8 md:p-12 rounded-[3rem] border-primary/20 relative overflow-hidden bg-black/40 shadow-2xl">
                    <div class="absolute right-[-20px] bottom-[-20px] opacity-[0.03] select-none pointer-events-none">
                        <h1 class="text-9xl font-black italic">VERIFIED</h1>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
                        <div class="relative group">
                            <div class="overflow-hidden rounded-xl border border-white/10 shadow-2xl bg-white p-2">
                                <canvas id="certificateCanvas" width="800" height="600"
                                    class="w-full h-auto rounded-lg"></canvas>
                            </div>
                            <p class="text-[9px] text-center mt-4 opacity-40 uppercase tracking-widest">Digital Verified
                                Version</p>
                        </div>

                        <div class="space-y-8">
                            <div>
                                <span
                                    class="bg-green-500/10 text-green-500 text-[8px] font-black px-3 py-1 rounded-full uppercase tracking-widest border border-green-500/20 mb-4 inline-block">Authentic
                                    Record</span>
                                <h2 class="text-4xl font-black uppercase tracking-tighter">Certificate Validated</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <p class="text-[9px] uppercase font-black tracking-widest text-primary mb-1">Student
                                        Name</p>
                                    <h4 id="res-name" class="text-xl font-bold uppercase tracking-tight">---</h4>
                                </div>
                                <div>
                                    <p class="text-[9px] uppercase font-black tracking-widest text-primary mb-1">Course
                                        Title</p>
                                    <h4 id="res-course" class="text-lg font-bold opacity-80 uppercase italic">---</h4>
                                </div>
                                <div>
                                    <p class="text-[9px] uppercase font-black tracking-widest text-primary mb-1">Issue
                                        Date</p>
                                    <p id="res-date" class="text-xs font-mono opacity-60">---</p>
                                </div>
                                <div>
                                    <p class="text-[9px] uppercase font-black tracking-widest text-primary mb-1">
                                        Certificate ID</p>
                                    <p id="res-id-display" class="text-xs font-mono opacity-60">---</p>
                                </div>
                            </div>

                            <div class="pt-6 flex flex-col sm:flex-row gap-4">
                                <button onclick="downloadCertificate()"
                                    class="flex-1 py-5 bg-primary text-white font-black rounded-2xl uppercase tracking-[0.2em] text-[11px] hover:scale-[1.02] transition-all shadow-lg flex items-center justify-center gap-3">
                                    📥 Download PNG
                                </button>
                                <button
                                    class="flex-1 py-5 border border-white/10 rounded-2xl text-[10px] font-black uppercase tracking-widest hover:bg-white/5 transition-all">
                                    Share Achievement
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
  
@endpush

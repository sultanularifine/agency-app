@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
    <section id="enroll"
        class="py-24 px-6 md:px-24 relative overflow-hidden bg-white dark:bg-[#070707] text-gray-900 dark:text-white">
        <div
            class="absolute -bottom-40 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/10 dark:bg-primary/5 blur-[120px] rounded-full -z-10">
        </div>
        <div class="max-w-4xl mx-auto reveal">
            <div
                class="glass p-8 md:p-16 rounded-[3.5rem] border border-gray-200 dark:border-white/5 relative overflow-hidden shadow-2xl bg-white dark:bg-[#0b0b0b]">
                <div class="text-center mb-12">
                    <span
                        class="text-[10px] bg-primary/10 text-primary px-4 py-1.5 rounded-full font-black uppercase tracking-[0.3em] mb-4 inline-block">
                        Enrollment Open
                    </span>
                    <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter mb-4">
                        Master Your <span class="text-primary">Skills</span></h2>
                    <p class="text-sm opacity-60 italic">
                        পছন্দের কোর্সটি বেছে নিন এবং পেমেন্ট সম্পন্ন করে এনরোল করুন।
                    </p>
                </div>
                <form id="courseEnrollForm" class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="group space-y-2">
                            <label
                                class="text-[10px] uppercase font-black tracking-widest opacity-50 ml-2 group-focus-within:text-primary transition-colors">
                                Full Name
                            </label>
                            <input type="text" required placeholder="Enter your full name"
                                class="w-full bg-gray-100 dark:bg-white/5 border border-gray-300 dark:border-white/10 p-4 rounded-2xl focus:border-primary outline-none transition-all italic text-sm text-gray-900 dark:text-white">
                        </div>
                        <div class="group space-y-2">
                            <label
                                class="text-[10px] uppercase font-black tracking-widest opacity-50 ml-2 group-focus-within:text-primary transition-colors">
                                WhatsApp Number
                            </label>
                            <input type="tel" required placeholder="+880 1XXX XXXXXX"
                                class="w-full bg-gray-100 dark:bg-white/5 border border-gray-300 dark:border-white/10 p-4 rounded-2xl focus:border-primary outline-none transition-all italic text-sm text-gray-900 dark:text-white">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="group space-y-2">
                            <label
                                class="text-[10px] uppercase font-black tracking-widest opacity-50 ml-2 group-focus-within:text-primary transition-colors">
                                Select Course
                            </label>
                            <select id="courseSelect" onchange="updatePrice()" required
                                class="w-full bg-gray-100 dark:bg-[#0a0a0a] border border-gray-300 dark:border-white/10 p-4 rounded-2xl focus:border-primary outline-none transition-all italic text-sm text-gray-900 dark:text-white">
                                <option value="" disabled selected>Choose a program...</option>
                                <option value="laravel" data-price="5000">Laravel Mastery (Backend)</option>
                                <option value="fullstack" data-price="8000">Full Stack Web Dev</option>
                                <option value="uiux" data-price="3500">Premium UI/UX Design</option>
                                <option value="wp" data-price="3000">WordPress Customization</option>
                            </select>
                        </div>
                        <div class="group space-y-2">
                            <label
                                class="text-[10px] uppercase font-black tracking-widest opacity-50 ml-2 group-focus-within:text-primary transition-colors">
                                Payment Method
                            </label>
                            <select id="paymentMethod"
                                class="w-full bg-gray-100 dark:bg-[#0a0a0a] border border-gray-300 dark:border-white/10 p-4 rounded-2xl focus:border-primary outline-none transition-all italic text-sm text-gray-900 dark:text-white">
                                <option value="bkash">bKash (Personal)</option>
                                <option value="nagad">Nagad (Personal)</option>
                            </select>
                        </div>
                    </div>
                    <div id="priceCard"
                        class="glass p-6 rounded-3xl border-dashed border-primary/40 flex flex-col md:flex-row justify-between items-center gap-6 bg-primary/5 dark:bg-primary/10">
                        <div class="text-center md:text-left">

                            <p class="text-[10px] uppercase font-bold opacity-50 tracking-widest mb-1">
                                Total Payable
                            </p>
                            <h3 id="displayPrice" class="text-3xl font-black text-primary">
                                00 BDT
                            </h3>
                        </div>
                        <div class="h-px w-full md:w-px md:h-12 bg-gray-300 dark:bg-white/10"></div>
                        <div class="text-center md:text-right">
                            <p class="text-[10px] uppercase font-bold opacity-60 tracking-widest mb-1 text-green-500">
                                Send Money To (Personal)
                            </p>
                            <div class="flex items-center gap-3 justify-center md:justify-end">
                                <span class="text-xl font-mono font-bold tracking-tighter">
                                    +880 1766 359 998
                                </span>
                                <button type="button" onclick="copyNumber()"
                                    class="text-[10px] bg-gray-200 dark:bg-white/10 hover:bg-gray-300 dark:hover:bg-white/20 px-2 py-1 rounded-md transition-all uppercase font-bold">
                                    Copy
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="group space-y-2">
                        <label
                            class="text-[10px] uppercase font-black tracking-widest opacity-50 ml-2 group-focus-within:text-primary transition-colors">
                            Transaction ID (TrxID)
                        </label>
                        <input type="text" required placeholder="Paste your TrxID after payment"
                            class="w-full bg-gray-100 dark:bg-white/5 border border-gray-300 dark:border-white/10 p-5 rounded-2xl focus:border-primary outline-none transition-all italic text-sm text-gray-900 dark:text-white font-mono">
                    </div>
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full py-5 bg-primary text-white font-black rounded-2xl uppercase tracking-[0.3em] text-[11px] hover:scale-[1.02] active:scale-95 transition-all shadow-[0_10px_40px_rgba(255,77,77,0.3)]">

                        🚀 Confirm My Enrollment
                        </button>
                        <p class="text-center text-[9px] opacity-40 uppercase tracking-widest mt-6">
                            Verified by Sultanul Arifinee • Alpha Coder
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

   
@endsection

@push('scripts')
  
@endpush

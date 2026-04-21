@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
    <section id="contact-page" class="py-24 px-6 md:px-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[150px] rounded-full -z-10"></div>

        <div class="max-w-7xl mx-auto mt-12">
            <div class="section-header reveal">
                <h2 class="dark:text-white">Get In Touch</h2>
                <div class="line"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <div class="reveal space-y-12">
                    <div>
                        <h3 class="text-3xl font-black uppercase tracking-tighter mb-6">Let's build something <span
                                class="text-primary">extraordinary</span> together.</h3>
                        <p class="text-sm opacity-60 leading-relaxed max-w-md font-medium">
                            আপনার কোনো প্রজেক্ট আইডিয়া থাকলে বা জাস্ট হাই বলতে চাইলে নিচে মেসেজ দিন। আমি সাধারণত ২৪
                            ঘণ্টার মধ্যে রেসপন্স করি।
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="glass p-6 rounded-2xl border-white/5 group hover:border-primary/30 transition-all">
                            <div class="text-primary text-2xl mb-4 group-hover:scale-110 transition-transform">📍</div>
                            <h4 class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-2">Location</h4>
                            <p class="text-sm font-bold">Mithapukur, Jhenaidah, BD</p>
                        </div>
                        <div class="glass p-6 rounded-2xl border-white/5 group hover:border-primary/30 transition-all">
                            <div class="text-primary text-2xl mb-4 group-hover:scale-110 transition-transform">📧</div>
                            <h4 class="text-[10px] font-black uppercase tracking-widest opacity-40 mb-2">Email</h4>
                            <p class="text-sm font-bold">Agency@gmail.com</p>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-[10px] font-black uppercase tracking-[0.3em] opacity-40 mb-6">Connect with me
                        </h4>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-12 h-12 glass rounded-xl flex items-center justify-center hover:bg-primary transition-all magnetic-btn">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-12 h-12 glass rounded-xl flex items-center justify-center hover:bg-primary transition-all magnetic-btn">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-12 h-12 glass rounded-xl flex items-center justify-center hover:bg-primary transition-all magnetic-btn">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .296c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.016-2.04-3.338.724-4.042-1.612-4.042-1.612-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.729.083-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.304.762-1.604-2.665-.3-5.466-1.332-5.466-5.931 0-1.31.468-2.381 1.235-3.222-.123-.303-.536-1.523.117-3.176 0 0 1.008-.322 3.301 1.23a11.52 11.52 0 0 1 3.003-.404c1.018.005 2.043.138 3.003.404 2.291-1.552 3.297-1.23 3.297-1.23.654 1.653.242 2.873.119 3.176.77.841 1.233 1.912 1.233 3.222 0 4.609-2.804 5.628-5.476 5.921.43.37.814 1.102.814 2.222 0 1.604-.015 2.896-.015 3.286 0 .319.216.694.825.576C20.565 22.092 24 17.592 24 12.296c0-6.627-5.373-12-12-12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="reveal glass p-8 md:p-12 rounded-[2.5rem] border-white/5 relative">
                    <form action="#" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Name</label>
                                <input type="text" placeholder="John Doe"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm focus:outline-none focus:border-primary transition-all">
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Email</label>
                                <input type="email" placeholder="john@example.com"
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm focus:outline-none focus:border-primary transition-all">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Subject</label>
                            <select
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm focus:outline-none focus:border-primary transition-all appearance-none">
                                <option class="bg-darkBg">Web Development</option>
                                <option class="bg-darkBg">Graphic Design</option>
                                <option class="bg-darkBg">Digital Marketing</option>
                                <option class="bg-darkBg">Other</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="text-[10px] font-black uppercase tracking-[0.2em] opacity-40 ml-2">Message</label>
                            <textarea rows="4" placeholder="Tell me about your project..."
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm focus:outline-none focus:border-primary transition-all"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-5 bg-primary text-white font-black uppercase text-[11px] tracking-[0.3em] rounded-xl shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all magnetic-btn">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="py-24 px-6 md:px-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="glass p-4 md:p-8 rounded-[3rem] border-white/5 reveal relative overflow-hidden h-[500px]">

                <!-- Office Info Card -->
                <div
                    class="absolute top-10 left-10 z-10 glass p-6 rounded-2xl border-primary/20 hidden md:block backdrop-blur-xl">
                    <h4 class="text-primary font-black uppercase text-[10px] tracking-widest mb-1">Office Location</h4>
                    <p class="text-sm font-bold">Barobazar, Kaliganj, Jhenaidah</p>
                    <p class="text-[10px] opacity-40 mt-2 font-medium italic">Available: Sat - Thu (10 AM - 8 PM)</p>
                </div>

                <!-- Google Map -->
                <div class="w-full h-full rounded-[2.5rem] overflow-hidden relative">
                    <!-- Light Mode: normal iframe -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.633907406436!2d89.1558548!3d23.329068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8e7e10e20e8d%3A0xc3f835084992994e!2sBarobazar%2C%20Kaliganj!5e0!3m2!1sen!2sbd!4v1710321234567!5m2!1sen!2sbd"
                        class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <!-- Dark Mode Overlay -->
                    <div class="absolute inset-0 bg-black/50 dark:bg-black/60 pointer-events-none rounded-[2.5rem]">
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection

@push('scripts')
  
@endpush

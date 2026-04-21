@extends('frontend.layouts.app')

@section('title', 'Home')

@push('style')
    
@endpush

@section('content')
   
    <header id="home" class="relative min-h-screen flex items-center px-6 md:px-24 pt-20">
        <div class="grid lg:grid-cols-2 gap-12 w-full items-center">
            <div class="z-10 reveal">

                <h3 class="text-primary font-mono text-sm mb-4 tracking-widest uppercase">Empowering Digital Excellence
                </h3>
                <h1 class="text-6xl font-black mb-6 leading-tight">
                    <span id="typed-text"></span>
                </h1>
                <p class="text-sm opacity-60 mb-10 max-w-lg leading-relaxed">We provide high-end web solutions and
                    creative designs to help businesses grow in the digital era. Join our community of 10K+ satisfied
                    clients.</p>
                <div class="flex gap-4">
                    <a href="#programs"
                        class="px-8 py-4 bg-primary text-white font-black rounded-xl shadow-xl hover:scale-105 transition-all text-xs uppercase">Get
                        Started</a>
                    <a href="#portfolio"
                        class="px-8 py-4 glass border border-white/10 font-black rounded-xl hover:bg-white/5 transition-all text-xs uppercase">Our
                        Work</a>
                </div>
            </div>
        </div>
    </header>

    <section id="services" class="py-24 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2>Our Core Services</h2>
                <div class="line"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass p-8 rounded-3xl hover:border-primary transition group reveal">
                    <div class="text-3xl mb-4 group-hover:scale-110 transition">💻</div>
                    <h4 class="text-xl font-bold mb-2">Web Development</h4>
                    <p class="text-xs opacity-60">Laravel, React, and high-performance backend solutions.</p>
                </div>
                <div class="glass p-8 rounded-3xl hover:border-primary transition group reveal">
                    <div class="text-3xl mb-4 group-hover:scale-110 transition">🎨</div>
                    <h4 class="text-xl font-bold mb-2">WordPress</h4>
                    <p class="text-xs opacity-60">Custom themes and Elementor expert designs.</p>
                </div>
                <div class="glass p-8 rounded-3xl hover:border-primary transition group reveal">
                    <div class="text-3xl mb-4 group-hover:scale-110 transition">✒️</div>
                    <h4 class="text-xl font-bold mb-2">Graphic Design</h4>
                    <p class="text-xs opacity-60">Logo, UI/UX, and professional branding assets.</p>
                </div>
                <div class="glass p-8 rounded-3xl hover:border-primary transition group reveal">
                    <div class="text-3xl mb-4 group-hover:scale-110 transition">🚀</div>
                    <h4 class="text-xl font-bold mb-2">Digital Marketing</h4>
                    <p class="text-xs opacity-60">SEO, SMM, and targeted growth strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="py-24 px-6 md:px-24 ">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2>Learning & Career</h2>
                <div class="line"></div>
            </div>
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="glass p-10 rounded-[2.5rem] reveal">
                    <h3 class="text-2xl font-black mb-4">Skill Courses</h3>
                    <ul class="space-y-3 text-sm opacity-70">
                        <li>• Full Stack Laravel Mastery</li>
                        <li>• Professional Graphic Design</li>
                        <li>• WordPress Customization</li>
                    </ul>
                    <button class="mt-8 text-primary font-bold text-xs uppercase tracking-tighter">View Courses
                        →</button>
                </div>
                <div class="glass p-10 rounded-[2.5rem] border-t-4 border-primary reveal">
                    <h3 class="text-2xl font-black mb-4 text-primary">Internship</h3>
                    <p class="text-sm opacity-70 mb-6">Get hands-on experience working on real agency projects under
                        expert mentorship.</p>
                    <button class="px-6 py-3 bg-primary text-white rounded-lg text-[10px] font-bold uppercase">Apply
                        Now</button>
                </div>
                <div class="glass p-10 rounded-[2.5rem] reveal">
                    <h3 class="text-2xl font-black mb-4">Ambassador</h3>
                    <p class="text-sm opacity-70 mb-6">Represent Alpha Coder in your campus and earn exclusive rewards
                        and
                        certificates.</p>
                    <button class="mt-4 text-primary font-bold text-xs uppercase tracking-tighter">Learn More →</button>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 py-3 px-6 md:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2>Key Projects</h2>
                <div class="line"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass rounded-[2rem] overflow-hidden group reveal">
                    <div
                        class="h-48 bg-gradient-to-br from-primary/20 to-purple-600/20 flex items-center justify-center font-black text-primary p-6 text-center italic">
                        STUDENT OF THE YEAR</div>
                    <div class="p-8">
                        <h4 class="text-xl font-bold">Olympiad System</h4>
                        <p class="text-xs opacity-60 my-4 uppercase">Laravel, Ajax, Bootstrap</p>
                        <a href="https://studentoftheyear.online"
                            class="text-primary font-black text-xs uppercase tracking-widest border-b border-primary/20 pb-1 hover:border-primary transition-all">Live
                            Link ↗</a>
                    </div>
                </div>
                <div class="glass rounded-[2rem] overflow-hidden group border-t-2 border-primary reveal">
                    <div
                        class="h-48 bg-gradient-to-br from-blue-600/20 to-primary/20 flex items-center justify-center font-black text-blue-400 p-6 text-center italic uppercase">
                        Avro E-Commerce</div>
                    <div class="p-8">
                        <h4 class="text-xl font-bold">Dynamic E-com</h4>
                        <p class="text-xs opacity-60 my-4 uppercase">Product & Cart Management</p>
                        <a href="http://avro.studentsoftheyear.com"
                            class="text-primary font-black text-xs uppercase tracking-widest border-b border-primary/20 pb-1 hover:border-primary transition-all">Live
                            Link ↗</a>
                    </div>
                </div>
                <div class="glass rounded-[2rem] overflow-hidden group reveal">
                    <div
                        class="h-48 bg-gradient-to-br from-emerald-600/20 to-primary/20 flex items-center justify-center font-black text-emerald-400 p-6 text-center italic">
                        Alpha Coder</div>
                    <div class="p-8">
                        <h4 class="text-xl font-bold">Agency Site</h4>
                        <p class="text-xs opacity-60 my-4 uppercase">Intern Management Portal</p>
                        <a href="http://requinbd.com"
                            class="text-primary font-black text-xs uppercase tracking-widest border-b border-primary/20 pb-1 hover:border-primary transition-all">Live
                            Link ↗</a>
                    </div>
                </div>
            </div>

            <h4 class="text-xs font-black uppercase text-primary mt-16 mb-8 reveal">
                WordPress & Client Works
                <span class="text-info text-[10px] font-normal">(Live Link)</span>
            </h4>
            <div class="flex flex-wrap gap-4 reveal">
                <a href="https://uc-chembd.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">UC-Chem BD</a>
                <a href="https://fernygrovevet.com.au"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Fernygrove Vet</a>
                <a href="https://secondpurchase.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Second Purchase</a>
                <a href="https://www.averontradesinternational.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Averon Trades
                    International</a>
                <a href="https://bdsmartunion.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">BD Smart Union</a>
                <a href="https://rehabphysiocare.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Rehab Physio Care</a>
                <a href="https://psdibd.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">PSDI BD</a>
                <a href="https://dynamic.edu.bd"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Dynamic EDU</a>
                <a href="https://kmmusicstudio.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">KM Music Studio</a>
                <a href="https://saifshoeb.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Saif Shoeb</a>
                <a href="https://cincinnaticarpetrepair.com"
                    class="glass px-4 py-2 rounded-xl text-[10px] hover:text-primary transition">Cincinnati Carpet
                    Repair</a>
            </div>
        </div>
    </section>

    <section id="success" class="py-24 px-6 md:px-24">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h2 class="text-4xl font-black mb-6 uppercase">Student <span class="text-primary">Success</span> Stories
                </h2>
                <p class="opacity-60 mb-8">Hundreds of our students are now working in top local and international
                    agencies. We don't just teach; we build careers.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="glass p-6 rounded-2xl">
                        <h4 class="text-3xl font-black text-primary">500+</h4>
                        <p class="text-[10px] uppercase font-bold opacity-50">Students Placed</p>
                    </div>
                    <div class="glass p-6 rounded-2xl">
                        <h4 class="text-3xl font-black text-primary">50+</h4>
                        <p class="text-[10px] uppercase font-bold opacity-50">Active Interns</p>
                    </div>
                </div>
            </div>
            <div class="glass p-4 rounded-[2rem] reveal">
                <div id="video-wrapper"
                    class="aspect-video bg-white/5 rounded-2xl flex items-center justify-center text-primary italic font-black relative overflow-hidden cursor-pointer group"
                    onclick="playVideo()">

                    <img id="thumb-img" src="https://i.ytimg.com/vi/OcbhF7CaUXw/maxresdefault.jpg" alt="Thumbnail"
                        class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-40 transition-opacity duration-500">

                    <div id="play-btn"
                        class="relative z-10 w-16 h-16 bg-primary/20 backdrop-blur-md border border-primary/50 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </div>

                    <div id="video-placeholder" class="absolute inset-0 w-full h-full hidden"></div>
                </div>
            </div>


        </div>
    </section>

    <section id="testimonials" class="py-24 py-3 px-6 md:px-24 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="section-header reveal">
                <h2>Client Testimonials</h2>
                <div class="line"></div>
            </div>

            <div class="swiper testimonial-swiper reveal">
                <div class="swiper-wrapper py-10">

                    <div class="swiper-slide">
                        <div class="glass p-8 rounded-[2rem] relative h-full">
                            <span
                                class="text-5xl text-primary opacity-20 absolute top-6 right-8 italic font-serif">"</span>
                            <p class="text-sm italic opacity-80 leading-relaxed mb-6">" is a highly skilled
                                developer. He delivered my e-commerce project on time with an amazing admin panel."</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">
                                    JD</div>
                                <div>
                                    <h5 class="text-xs font-black uppercase">John Doe</h5>
                                    <p class="text-[10px] opacity-50">CEO, Tech Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="glass p-8 rounded-[2rem] relative h-full">
                            <span
                                class="text-5xl text-primary opacity-20 absolute top-6 right-8 italic font-serif">"</span>
                            <p class="text-sm italic opacity-80 leading-relaxed mb-6">"Excellent graphic design skills.
                                He created our brand identity perfectly. Highly recommended for any creative work."</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">
                                    SA</div>
                                <div>
                                    <h5 class="text-xs font-black uppercase">Sarah Ahmed</h5>
                                    <p class="text-[10px] opacity-50">Marketing Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="glass p-8 rounded-[2rem] relative h-full">
                            <span
                                class="text-5xl text-primary opacity-20 absolute top-6 right-8 italic font-serif">"</span>
                            <p class="text-sm italic opacity-80 leading-relaxed mb-6">"His Laravel expertise is
                                outstanding. The automation systems he built for our office saved us hundreds of hours."
                            </p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">
                                    MK</div>
                                <div>
                                    <h5 class="text-xs font-black uppercase">Michael Knight</h5>
                                    <p class="text-[10px] opacity-50">CTO, SoftHost IT</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="glass p-8 rounded-[2rem] relative h-full">
                            <span
                                class="text-5xl text-primary opacity-20 absolute top-6 right-8 italic font-serif">"</span>
                            <p class="text-sm italic opacity-80 leading-relaxed mb-6">"One of the best WordPress
                                designers I have worked with. Responsive, clean, and modern aesthetics."</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">
                                    RB</div>
                                <div>
                                    <h5 class="text-xs font-black uppercase">Robert Bruce</h5>
                                    <p class="text-[10px] opacity-50">Freelance Client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="glass p-8 rounded-[2rem] relative h-full">
                            <span
                                class="text-5xl text-primary opacity-20 absolute top-6 right-8 italic font-serif">"</span>
                            <p class="text-sm italic opacity-80 leading-relaxed mb-6">"Agency developed my WordPress
                                website perfectly and graphic design also. Delivered on time and exceeded expectations.
                                Proud to have 5+ satisfied WordPress projects and 30+ graphic Design!"</p>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary">
                                    SM</div>
                                <div>
                                    <h5 class="text-xs font-black uppercase">SM Mehedi Hassan</h5>
                                    <p class="text-[10px] opacity-50">Freelance Client</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination !-bottom-2"></div>
            </div>
        </div>
    </section>

    <section id="faq" class="py-24 px-6 md:px-24">
        <div class="max-w-4xl mx-auto">
            <div class="section-header text-center block reveal">
                <h2 class="inline-block">Common Questions</h2>
                <div class="line mx-auto"></div>
            </div>
            <div class="space-y-4 reveal">
                <details class="glass p-6 rounded-2xl cursor-pointer group">
                    <summary class="font-bold list-none flex justify-between">How to join the Internship Program? <span
                            class="text-primary">+</span></summary>
                    <p class="text-xs opacity-60 mt-4 leading-relaxed">You can apply through our dedicated career portal
                        at Alpha Coder. We review applications monthly based on skill assessments.</p>
                </details>
                <details class="glass p-6 rounded-2xl cursor-pointer group">
                    <summary class="font-bold list-none flex justify-between">Are the courses online or offline? <span
                            class="text-primary">+</span></summary>
                    <p class="text-xs opacity-60 mt-4 leading-relaxed">We offer both flexible online modules and
                        intensive offline workshops at our Jhenaidah center.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-20 px-6">
        <div class="max-w-5xl mx-auto glass p-12 rounded-[3rem] text-center border-2 border-primary/20 reveal">
            <h2 class="text-4xl font-black mb-6 uppercase">Ready to Start Your Journey?</h2>
            <p class="opacity-60 mb-10 max-w-xl mx-auto">Join the Alpha Coder family today and unlock your potential in
                the tech world.</p>
            <a href="https://wa.me/8801766359998"
                class="px-10 py-5 bg-primary text-white font-black rounded-2xl shadow-2xl hover:scale-105 transition-all inline-block uppercase tracking-widest text-sm">Join
                Now</a>
        </div>
    </section>

  
@endsection

@push('scripts')
  
@endpush

<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sultanul Arifinee | Web Developer & CEO')</title>

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;500&family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        * {
            cursor: none;
        }

        body {
            transition: background-color 0.5s ease;
            overflow-x: hidden;
            scroll-behavior: auto;
        }

        .text-primary {
            color: #ff4d4d !important;
        }

        #canvas-container {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100vh;
            pointer-events: none;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dark .glass {
            background: rgba(15, 23, 42, 0.2);
        }

        /* Modern Header Style */
        .section-header {
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: -0.05em;
            text-transform: uppercase;
        }

        .section-header .line {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #ff4d4d;
            border-radius: 2px;
        }

        #cursor-dot {
            position: fixed;
            width: 8px;
            height: 8px;
            background: #ff4d4d;
            border-radius: 50%;
            pointer-events: none;
            z-index: 10001;
            transform: translate(-50%, -50%);
        }

        #cursor-outline {
            position: fixed;
            width: 40px;
            height: 40px;
            border: 2px solid rgba(255, 77, 77, 0.5);
            border-radius: 50%;
            pointer-events: none;
            z-index: 10000;
            transform: translate(-50%, -50%);
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }

        .skill-badge {
            @apply px-3 py-1 rounded-lg text-[10px] font-mono border border-primary/20 bg-primary/5 uppercase tracking-tighter;
        }

        .magnetic-btn {
            display: inline-block;
        }

        /* Floating Social Dock */
        .social-dock {
            position: fixed;
            right: 2px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }

        .dock-item {
            position: relative;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            perspective: 1000px;
        }

        .dock-item:hover {
            transform: translateX(-10px) rotateY(-20deg) scale(1.1);
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .dock-name {
            position: absolute;
            right: 65px;
            background: #ff4d4d;
            color: white;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0;
            pointer-events: none;
            transform: translateX(20px);
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .dock-item:hover .dock-name {
            opacity: 1;
            transform: translateX(0);
        }

        /* Icons styling */
        .dock-item svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        .swiper-pagination-bullet {
            background: #ff4d4d !important;
            /* Your primary color */
            opacity: 0.3;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        #menu-btn {
            font-size: 1.25rem;
            /* slightly bigger hamburger */
            line-height: 1;
            margin-top: 10px;
            display: flex !important;
            align-items: center;
            justify-content: center;
        }

        @media (min-width: 1024px) {
            #menu-btn {
                display: none !important;
                /* hide on desktop */
            }
        }
    </style>

    @stack('styles')
</head>

<body class="bg-lightBg dark:bg-darkBg text-slate-900 dark:text-slate-100">

    <!-- Cursor -->
    <div id="cursor-dot"></div>
    <div id="cursor-outline"></div>
    <div id="canvas-container"></div>

    <!-- NAVBAR -->
    @include('frontend.components.header')

    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('frontend.components.footer')

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#ff4d4d',
                        darkBg: '#050505',
                        lightBg: '#f8fafc',
                    }
                }
            }
        }
    </script>

    <!-- JS Scripts -->
  <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#ff4d4d',
                        darkBg: '#050505',
                        lightBg: '#f8fafc',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    }
                }
            }
        }
    </script>
    <script>
        // --- Custom Cursor ---
        const dot = document.getElementById('cursor-dot');
        const outline = document.getElementById('cursor-outline');
        window.addEventListener('mousemove', (e) => {
            gsap.to(dot, { x: e.clientX, y: e.clientY, duration: 0.1 });
            gsap.to(outline, { x: e.clientX, y: e.clientY, duration: 0.3 });
        });

        // --- GSAP Scroll Reveal (Veshe othar effect) ---
        gsap.registerPlugin(ScrollTrigger);
        document.querySelectorAll('.reveal').forEach((el) => {
            gsap.to(el, {
                opacity: 1, y: 0, duration: 1, ease: "power3.out",
                scrollTrigger: { trigger: el, start: "top 85%", toggleActions: "play none none none" }
            });
        });

        // --- Magnetic Buttons ---
        document.querySelectorAll('.magnetic-btn').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                gsap.to(btn, { x: x * 0.3, y: y * 0.3, duration: 0.3 });
            });
            btn.addEventListener('mouseleave', () => {
                gsap.to(btn, { x: 0, y: 0, duration: 0.3 });
            });
        });

        new Typed('#typed-text', {
            strings: [
                'Scale Your Brand with <span class="bg-gradient-to-r from-red-500 via-pink-500 to-orange-400 bg-clip-text text-transparent">Arifine Dev</span>',
            ],
            typeSpeed: 60,
            backSpeed: 0,
            showCursor: true,
            loop: false,
            contentType: 'html'
        });

        // --- Three.js Particles ---
        let scene, camera, renderer, particles;
        function init3D() {
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.getElementById('canvas-container').appendChild(renderer.domElement);
            const pGeometry = new THREE.BufferGeometry();
            const pVertices = [];
            for (let i = 0; i < 1500; i++) {
                pVertices.push(THREE.MathUtils.randFloatSpread(50), THREE.MathUtils.randFloatSpread(50), THREE.MathUtils.randFloatSpread(50));
            }
            pGeometry.setAttribute('position', new THREE.Float32BufferAttribute(pVertices, 3));
            particles = new THREE.Points(pGeometry, new THREE.PointsMaterial({ color: 0xff4d4d, size: 0.1, transparent: true, opacity: 0.4 }));
            scene.add(particles);
            camera.position.z = 15;
        }
        function animate() {
            requestAnimationFrame(animate);
            particles.rotation.y += 0.001;
            renderer.render(scene, camera);
        }
        init3D(); animate();

        document.getElementById('theme-toggle').addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".testimonial-swiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Swiper(".certificate-swiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000, // সার্টিফিকেটের জন্য সময় একটু বেশি দেওয়া হয়েছে
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true, // মাউস রাখলে স্লাইডার থেমে যাবে
                },
                navigation: {
                    nextEl: ".cert-next",
                    prevEl: ".cert-prev",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                },
            });
        });

    </script>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        // Toggle Function
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
            menuBtn.innerText = mobileMenu.classList.contains('hidden') ? '☰' : '✕';
        });

        // Close menu when a link is clicked
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
                menuBtn.innerText = '☰';
            });
        });

    </script>
    <script>
        function playVideo() {
            const wrapper = document.getElementById('video-wrapper');
            const placeholder = document.getElementById('video-placeholder');
            const thumb = document.getElementById('thumb-img');
            const btn = document.getElementById('play-btn');

            // ভিডিও লোড করা
            placeholder.innerHTML = `
        <iframe class="w-full h-full border-0" 
                src="https://www.youtube.com/embed/OcbhF7CaUXw?autoplay=1" 
                title="Phire Eso Ekbar | Melofyra" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen>
        </iframe>`;

            // থাম্বনেইল ও বাটন হাইড করে ভিডিও দেখানো
            placeholder.classList.remove('hidden');
            thumb.classList.add('hidden');
            btn.classList.add('hidden');
            wrapper.classList.remove('cursor-pointer');
            wrapper.onclick = null; // বারবার ক্লিক হওয়া বন্ধ করতে
        }
    </script>

    @stack('scripts')

</body>
</html>
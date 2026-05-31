<!DOCTYPE html>
<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#191c22",
                        "surface-container-low": "#181c23",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface": "#e0e2ed",
                        "on-primary-container": "#00285c",
                        "primary-container": "#4b8eff",
                        "surface-container-highest": "#31353d",
                        "surface": "#10131b",
                        "secondary-fixed-dim": "#c4c6cf",
                        "error-container": "#93000a",
                        "tertiary-container": "#ef6719",
                        "on-secondary": "#2e3037",
                        "on-error-container": "#ffdad6",
                        "on-tertiary": "#571e00",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-fixed-variant": "#44474e",
                        "inverse-primary": "#005bc1",
                        "tertiary": "#ffb595",
                        "error": "#ffb4ab",
                        "on-tertiary-fixed": "#351000",
                        "primary": "#adc6ff",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container-lowest": "#0b0e16",
                        "surface-container-high": "#272a32",
                        "secondary-container": "#464950",
                        "surface-container": "#1c2028",
                        "on-primary-fixed": "#001a41",
                        "on-primary": "#002e69",
                        "inverse-on-surface": "#2d3039",
                        "surface-bright": "#363942",
                        "on-background": "#e0e2ed",
                        "tertiary-fixed": "#ffdbcc",
                        "outline-variant": "#414755",
                        "on-primary-fixed-variant": "#004493",
                        "secondary-fixed": "#e1e2eb",
                        "secondary": "#c4c6cf",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-variant": "#31353d",
                        "surface-dim": "#10131b",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-fixed": "#d8e2ff",
                        "on-error": "#690005",
                        "on-tertiary-container": "#4c1a00",
                        "inverse-surface": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "background": "#10131b",
                        "outline": "#8b90a0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-mobile": "20px",
                        "gutter": "24px",
                        "unit": "4px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        }

        .neon-glow:focus {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.3);
            border-color: #adc6ff;
        }

        .sidebar-active-line {
            box-shadow: 2px 0 10px rgba(173, 198, 255, 0.4);
        }

        body {
            background-color: #0b0e14;
            color: #e0e2ed;
        }
    </style>
</head>

<body class="antialiased selection:bg-primary/30">
    <!-- TopNavBar -->
    <nav
        class="bg-surface/60 backdrop-blur-xl text-primary font-body-md text-body-md docked full-width top-0 sticky z-50 border-b border-white/10 flex justify-between items-center w-full px-gutter h-16">
        <div class="flex items-center gap-6">
            <span class="font-label-caps text-label-caps tracking-widest text-primary">AETHER EDU</span>
            <div
                class="hidden md:flex items-center bg-surface-container-low px-4 py-1.5 rounded-full border border-white/5">
                <span class="material-symbols-outlined text-sm mr-2 opacity-50">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm w-64 placeholder:opacity-40"
                    placeholder="Search system..." type="text">
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="hover:text-primary transition-colors duration-200 Active: opacity-80 scale-95 transition-all">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button
                class="hover:text-primary transition-colors duration-200 Active: opacity-80 scale-95 transition-all">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="w-8 h-8 rounded-full overflow-hidden border border-primary/20">
                <img alt="User profile" class="w-full h-full object-cover"
                    data-alt="A professional headshot of a student in a futuristic setting, illuminated by soft blue ambient light from digital screens. The background is a clean, dark minimalist space with subtle glass textures. High-end professional portrait photography with a focus on tech-driven clarity."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCM2zYOei_tfbMkhmbVAN5AlXSnUWlb_jH0m6ARsW42RrzG-ASsNIS2ScSdTONFW1mopsLp6FBdk2K87kb9KIhbpgC00KGtmUh-FBPB6v20l4mLZUKMpnV2KHvNri3lrcsf14ZM7ej5XDd_qdDAnU_x9vPR095vzmJyyoIv54wqfCg0caD27Hi1oC9WP3DEGSubkc6NtQquDKBsOzs1fierpWqAk1xMtz4E1Vk3GBONXF3Uld7mAJXPyM76MyBIuqQtcPXyRtlpgtF0">
            </div>
        </div>
    </nav>
    <!-- Sidebar (Desktop) -->
    <aside
        class="hidden md:flex flex-col py-8 px-4 gap-y-2 bg-surface-container-low/40 backdrop-blur-2xl fixed left-0 top-0 h-screen w-sidebar-width border-r border-white/10 z-40">
        <div class="mb-10 px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="text-[10px] uppercase tracking-widest text-primary/60 font-medium">Academic Command</p>
        </div>
        <div class="space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all Active: translate-x-1 duration-300"
                href="#">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps">Tarefas</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all Active: translate-x-1 duration-300"
                href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
        </div>
        <div class="mt-auto space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-caps text-label-caps">Sair</span>
            </a>    
        </div>
    </aside>
    <!-- Main Content -->
    <main class="md:ml-sidebar-width p-6 md:p-12 min-h-screen flex flex-col items-center">
        <div class="max-w-4xl w-full">
            <header class="mb-10 text-center md:text-left">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Editar Usuário</h2>
                <p class="font-body-md text-body-md text-on-surface-variant opacity-70">Manage your institutional
                    identity and notification protocols.</p>
            </header>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Profile Picture Section -->
                <section class="lg:col-span-4">
                    <div class="glass-card p-8 rounded-2xl flex flex-col items-center text-center">
                        <div class="relative group cursor-pointer">
                            <div
                                class="w-32 h-32 rounded-full overflow-hidden border-2 border-primary/30 p-1 group-hover:border-primary transition-all duration-500">
                                <img alt="Profile Avatar" class="w-full h-full object-cover rounded-full"
                                    data-alt="Close-up portrait of a student in a high-tech environment with soft cyan and electric blue light leaks. The person has a neutral, confident expression. The style is ultra-modern, cinematic, and emphasizes crystalline clarity and professional aesthetics."
                                    id="profile-preview"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_tXiR11mNK0BlHOLO-PZSHJyWqVrol-t7hxXICtGkWdKsu4SKg_FuqGvwG3I_X_v18o5u5N-fdVaAtKFdsBnHoyoCTKCsRUpnthaqnO6tMVTgTMxmXBhS-oFO3GFT2x6qZaJTI1a-MOqTM7RkMjN_QamNzTv25Y37TMt3x85RnGZ0IO2f_7cqy1X2XMb3uR5_zOvinVPqEWNBdS9wIImPdGy53tHpSK2a3J5RzOgaBPlPcpIaNS6Q_nFcdNEZPPhbe5_Z0qYDgQ54">
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black/40 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="material-symbols-outlined text-white">photo_camera</span>
                            </div>
                            <input class="hidden" id="avatar-input" type="file">
                        </div>
                        <h3 class="mt-6 font-headline-md text-headline-md text-on-surface">Alex Rivera</h3>
                        <p class="font-label-caps text-label-caps text-primary mt-1">Senior Researcher</p>
                        <p class="font-body-md text-sm text-on-surface-variant mt-4 leading-relaxed">
                            Upload a high-resolution image for institutional records. Max 5MB.
                        </p>
                        <button
                            class="mt-6 w-full py-2 border border-white/10 rounded-xl font-label-caps text-label-caps hover:bg-white/5 transition-all"
                            onclick="document.getElementById('avatar-input').click()">Alterar Avatar</button>
                    </div>
                </section>
                <!-- Information Form Section -->
                <section class="lg:col-span-8 flex flex-col gap-8">
                    <!-- Base Info -->
                    <div class="glass-card p-8 rounded-2xl">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-primary">person_edit</span>
                            <h4 class="font-label-caps text-label-caps text-primary tracking-widest">Identificação
                                Pessoal</h4>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label
                                    class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">Nome
                                    Completo</label>
                                <input
                                    class="bg-surface-container-lowest/50 border border-white/10 rounded-xl px-4 py-3 text-on-surface font-body-md neon-glow transition-all outline-none"
                                    type="text" value="Alex Rivera">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label
                                    class="font-label-caps text-[10px] text-on-surface-variant uppercase tracking-widest">E-mail
                                    Institucional</label>
                                <input
                                    class="bg-surface-container-lowest/50 border border-white/10 rounded-xl px-4 py-3 text-on-surface font-body-md neon-glow transition-all outline-none"
                                    type="email" value="alex.rivera@aether.edu">
                            </div>
                            </label>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex flex-col sm:flex-row items-center justify-end gap-4 mt-4">
                        <button
                            class="w-full sm:w-auto px-10 py-4 border border-white/10 text-on-surface rounded-xl font-label-caps text-label-caps hover:bg-white/5 transition-all">Cancelar</button>
                        <button
                            class="w-full sm:w-auto px-10 py-4 bg-primary text-on-primary rounded-xl font-label-caps text-label-caps font-bold shadow-[0_0_20px_rgba(173,198,255,0.2)] hover:shadow-[0_0_30px_rgba(173,198,255,0.4)] hover:brightness-110 transition-all">Salvar
                            Alterações</button>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Bottom Nav (Mobile) -->
    <div
        class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface/80 backdrop-blur-xl border-t border-white/10 flex items-center justify-around z-50">
        <button class="text-on-surface-variant">
            <span class="material-symbols-outlined">grid_view</span>
        </button>
        <button class="text-on-surface-variant">
            <span class="material-symbols-outlined">calendar_month</span>
        </button>
        <button class="text-primary border-t-2 border-primary pt-1">
            <span class="material-symbols-outlined">settings</span>
        </button>
        <button class="text-on-surface-variant">
            <span class="material-symbols-outlined">chat_bubble</span>
        </button>
    </div>
    <script>
        // Micro-interaction for profile preview
        const avatarInput = document.getElementById('avatar-input');
        const preview = document.getElementById('profile-preview');

        avatarInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    preview.src = event.target.result;
                    // Mock success animation
                    preview.style.filter = 'brightness(1.5) blur(5px)';
                    setTimeout(() => {
                        preview.style.filter = 'none';
                    }, 500);
                };
                reader.readAsDataURL(file);
            }
        });

        // Atmospheric mouse glow effect on glass cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>


</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-pt-24">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DSAC - Soluciones Contables</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800,900" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white antialiased font-sans text-black">

    {{-- HEADER --}}
    <header class="sticky top-0 z-50 bg-white shadow-md py-4 px-6 w-full">
        <div class="max-w-[1200px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <a href="#home">
                    <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776494039/test1_efvniy.png"
                        alt="DSAC - Logo" class="h-[55px] w-auto transform scale-125 origin-left">
                </a>
            </div>
            <div class="flex items-center text-black text-sm uppercase">
                <ul class="flex items-center justify-center gap-4">
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li>
                        <a href="https://wa.me/529996662366" target="_blank"
                            class="bg-[#B0393F] hover:bg-[#9a2f35] text-white font-bold py-2 px-4 rounded transition-colors duration-300 mt-6">
                            Contáctanos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    {{-- MAIN --}}
    <main class="w-full scroll-smooth">

        {{-- HOME --}}
        <section id="home" class="w-full min-h-screen flex items-center">
            <div
                class="w-full max-w-[1500px] mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-16">

                <div class="w-full md:w-[60%] flex flex-col gap-10">

                    <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776494039/test1_efvniy.png"
                        class="h-[210px] w-auto">

                    <h1 class="uppercase font-black text-3xl md:text-5xl leading-tight">
                        <span class="text-[#B0393F]">Soluciones</span> Contables y fiscales
                        <span class="text-[#B0393F]">a tu alcance</span>
                    </h1>

                    <div class="bg-white/80 backdrop-blur-sm p-6 rounded-xl border border-gray-100 shadow-sm">
                        <ul class="flex flex-col gap-4 text-lg text-gray-700 font-medium">
                            <li>✓ Diagnóstico de necesidades contables</li>
                            <li>✓ Servicios fiscales especializados</li>
                            <li>✓ Asesoramiento personalizado</li>
                        </ul>
                        <a href="#services" class="bg-[#B0393F] text-white font-bold py-2 px-4 rounded mt-5 inline-block shadow-sm hover:bg-[#9a2f35] transition-colors duration-300 uppercase">
                            Conoce nuestros servicios
                        </a>
                    </div>
                </div>

                <div class="w-full relative z-10 flex justify-center">
                    <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776393165/Rectangle_26_r0drtz.svg"
                        class="w-full md:w-[120%] h-auto" alt="Imagen Empleados">
                </div>

            </div>
        </section>

        {{-- otros --}}
        <section class="relative z-20 py-12 md:py-16">
            <div class="max-w-[1200px] mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <div class="flex items-center gap-8">
                        <i class="fa-solid fa-calculator text-6xl text-[#B0393F]"></i>
                        <div>
                            <p class="font-bold text-lg">Tranquilidad fiscal</p>
                            <p class="text-sm text-gray-500 font-medium">Gestionamos tus trámites y declaraciones para
                                que cumplas con el SAT sin estrés ni errores.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-8 ">
                        <i class="fa-solid fa-bullseye text-6xl text-[#B0393F]"></i>
                        <div>
                            <p class="font-bold text-lg">Estrategia Financiera</p>
                            <p class="text-sm text-gray-500 font-medium">Traducimos tus números en acciones claras para
                                optimizar tus recursos y hacer crecer tu negocio.</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-8">
                        <i class="fa-regular fa-clock text-6xl text-[#B0393F]"></i>
                        <div>
                            <p class="font-bold text-lg">Recupera tu tiempo</p>
                            <p class="text-sm text-gray-500 font-medium">Absorbemos la carga de tareas contables y
                                fiscales, para que puedas enfocarte en lo que realmente importa: hacer crecer tu
                                negocio.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- SERVICES --}}
        <section class="w-full py-20" id="services">
            <div class="max-w-[1200px] mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">

                    <div class="w-full flex flex-col gap-6 max-w-2xl">

                        <h2 class="text-3xl md:text-4xl font-black text-black uppercase mb-4">
                            Nuestros <span class="text-[#B0393F]">Servicios</span>
                        </h2>

                        <div class="w-full divide-y divide-gray-200 border-t border-b border-gray-200">

                            <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                                <summary
                                    class="flex items-center justify-between py-5 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-lg uppercase">
                                    Asesoría y consultoría personal
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                                            class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-5 text-gray-600 text-base leading-relaxed text-pretty pr-8">
                                    <ul class="ml-10 list-disc text-gray-600 text-base leading-relaxed text-pretty">
                                        <li>Asesoría fiscal continuada</li>
                                        <li>Planificación fiscal</li>
                                        <li>Asistencia en procesos de inspecciones y aclaraciones por parte del Servicio
                                            de Administración Tributaria</li>
                                        <li>Asesoramiento en la gestión y sucesión de empresas familiares</li>
                                    </ul>
                                </div>
                            </details>

                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-5 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-lg uppercase">
                                    Gestión y cumplimiento fiscal
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                                            class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-5 text-gray-600 text-base leading-relaxed text-pretty pr-8">
                                    <ul class="ml-10 list-disc text-gray-600 text-base leading-relaxed text-pretty">
                                        <li>Declaraciones mensuales y anuales</li>
                                        <li>Trámites ante el SAT</li>
                                        <li>Gestión de facturación electrónica (CFDI)</li>
                                        <li>Asesoría en deducciones fiscales y optimización de cargas impositivas</li>
                                    </ul>
                                </div>
                            </details>

                            <details class="group [&_summary::-webkit-details-marker]:hidden ">
                                <summary
                                    class="flex items-center justify-between py-5 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-lg uppercase">
                                    Nómina, IMSS y Hacienda
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"
                                            class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-5 text-gray-600 text-base leading-relaxed text-pretty pr-8">
                                    <ul class="ml-10 list-disc text-gray-600 text-base leading-relaxed text-pretty">
                                        <li>Asesoría fiscal continuada</li>
                                        <li>Planificación fiscal</li>
                                        <li>Asistencia en procesos de inspecciones y aclaraciones por parte del Servicio
                                            de Administración Tributaria</li>
                                        <li>Asesoramiento en la gestión y sucesión de empresas familiares</li>
                                    </ul>
                                </div>
                            </details>

                        </div>
                    </div>

                    <div class="w-full relative z-10 flex justify-center">
                        <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776393165/Rectangle_26_r0drtz.svg"
                            alt="Equipo DSAC" class="w-full max-w-[500px] lg:max-w-none h-auto drop-shadow-2xl">
                    </div>

                </div>
                <div class="flex items-center justify-start py-16 gap-10">
                    <a href="https://wa.me/529996662366"
                        class="bg-[#B0393F] hover:bg-[#9a2f35] text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 inline-block text-center shadow-sm text-md uppercase">
                        Cotizar Servicio
                    </a>
                    <a href="#"
                        class="bg-[#B0393F] hover:bg-[#9a2f35] text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 inline-block text-center shadow-sm text-md uppercase">
                        Agendar Asesoria
                    </a>
                </div>
            </div>
        </section>

        {{-- NOSOTROS --}}
        <section class="max-w-[1200px] mx-auto px-6 py-16 md:py-16" id="about">
            {{-- Historia --}}
            <h2 class=" text-center text-3xl md:text-4xl font-black text-black uppercase mb-8">ACERCA DE <span
                    class="text-[#b0393f]">NOSOTROS</span></h2>
            <div class="flex items-center justify-center gap-6 py-12">
                <div class="flex flex-col gap-6 max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-black text-black leading-tight text-pretty">
                        Protegemos tu patrimonio y <br>
                        <span class="text-[#B0393F]">blindamos tu negocio.</span>
                    </h2>

                    <p class="text-lg text-gray-600 font-medium leading-relaxed text-pretty">
                        Sabemos que la carga fiscal y administrativa puede generar incertidumbre. Por eso, desde nuestra
                        fundación en 2012, en <span class="text-[#B0393F] font-semibold">DSAC</span> no solo
                        organizamos
                        números; <strong class="text-black font-bold">asumimos la responsabilidad de mantener tu
                            empresa
                            segura, al día y libre de riesgos ante el SAT.</strong>
                    </p>

                    <p class="text-lg text-gray-600 font-medium leading-relaxed text-pretty">
                        A diferencia de un despacho tradicional, actuamos como tus aliados estratégicos. Nos anticipamos
                        a los problemas, evitamos multas y optimizamos tus recursos financieros mediante un trato
                        directo, confidencial y 100% personalizado.
                    </p>

                    <p class="text-xl text-black font-bold leading-relaxed mt-4 border-l-4 border-[#B0393F] pl-4">
                        Delega la complejidad fiscal en manos expertas. Tú enfócate en liderar y hacer crecer tu
                        empresa; nosotros garantizamos tu tranquilidad absoluta.
                    </p>

                </div>
                {{-- IMAGE --}}
                <div class="w-full relative z-10 flex justify-center">
                    <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776393165/Rectangle_26_r0drtz.svg"
                        alt="Imagen Empleados" class="w-full max-w-none md:w-[120%] h-auto">
                </div>
            </div>
            <div class="text-center grid grid-cols-1 md:grid-cols-3 gap-6 p-6 max-w-[1000px] mx-auto">

                <div
                    class="flex flex-col gap-3 bg-gray-50 border border-gray-100 rounded-2xl p-6 hover:shadow-md transition-all duration-300">

                    <div class="flex items-center justify-evenly gap-3">
                        <i class="fas fa-briefcase text-2xl text-[#B0393F]"></i>
                        <div class="flex flex-col leading-none font-extrabold text-[#B0393F] uppercase text-base">
                            <span>Trámites</span>
                            <span>Exitosos</span>
                        </div>
                    </div>

                    <div class="py-1">
                        <h2 class="font-black text-5xl text-black tracking-tight">100%</h2>
                    </div>

                    <div class="flex flex-col leading-none font-bold text-[#B0393F] uppercase text-sm">
                        <span>Realizadas</span>
                        <span>con nosotros</span>
                    </div>
                </div>

                <div
                    class="flex flex-col gap-3 bg-gray-50 border border-gray-100 rounded-2xl p-6 hover:shadow-md transition-all duration-300">
                    <div class="flex justify-evenly items-center gap-3">
                        <i class="fa-solid fa-people-line text-2xl text-[#B0393F]"></i>
                        <div class="flex flex-col leading-none font-extrabold text-[#B0393F] uppercase text-base">
                            <span>Clientes</span>
                            <span>Satisfechos</span>
                        </div>
                    </div>
                    <div class="py-1">
                        <h2 class="font-black text-5xl text-black tracking-tight">100%</h2>
                    </div>
                    <div class="flex flex-col leading-none font-bold text-[#B0393F] uppercase text-sm">
                        <span>Confían en</span>
                        <span>nosotros</span>
                    </div>
                </div>

                <div
                    class="flex flex-col gap-3 bg-gray-50 border border-gray-100 rounded-2xl p-6 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center justify-evenly gap-3">
                        <i class="fa-solid fa-landmark text-2xl text-[#B0393F]"></i>
                        <div class="flex flex-col leading-none font-extrabold text-[#B0393F] uppercase text-base">
                            <span>Nuestros</span>
                            <span>Más de</span>
                        </div>
                    </div>
                    <div class="py-1">
                        <h2 class="font-black text-5xl text-black tracking-tight">14+</h2>
                    </div>
                    <div class="flex flex-col leading-none font-bold text-[#B0393F] uppercase text-sm">
                        <span>Años nos</span>
                        <span>respaldan</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="w-full min-h-screen flex items-start py-12 md:py-16">
            <div class="max-w-[1200px] mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

                    <div class="w-full">
                        <h2 class="text-3xl md:text-4xl font-black text-black uppercase mb-8">
                            Preguntas <span class="text-[#B0393F]">Frecuentes</span>
                        </h2>

                        <div class="w-full divide-y divide-gray-200 border-t border-b border-gray-200">
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Me asesoran con la emisión de mis facturas electrónicas (CFDI)?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>Sí. Sabemos que los cambios del SAT pueden ser confusos. Te asesoramos para que
                                        emitas tus facturas correctamente cumpliendo con las últimas normativas (como la
                                        versión 4.0), asegurando que todos tus ingresos y deducciones estén en regla.
                                    </p>
                                </div>
                            </details>

                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Cómo puedo cambiarme de contador a DSAC?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>El proceso es muy sencillo. Nosotros nos encargamos de hacer la transición de tu
                                        información contable de manera segura y transparente para que tú no tengas que
                                        preocuparte por nada.</p>
                                </div>
                            </details>

                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Tienen experiencia con el SAT?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>Sí, contamos con amplia experiencia en trámites, declaraciones, atención a
                                        requerimientos y auditorías ante el SAT, garantizando que tu empresa cumpla con
                                        todas sus obligaciones fiscales.</p>
                                </div>
                            </details>

                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Ofrecen asesoría para emprendedores o solo empresas grandes?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>Trabajamos con negocios en todas sus etapas. Desde emprendedores que van
                                        iniciando y necesitan darse de alta correctamente, hasta empresas consolidadas
                                        que buscan optimización fiscal.</p>
                                </div>
                            </details>
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Como funciona el proceso de diagnóstico gratuito?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>Es muy sencillo. En nuestra primera reunión (presencial o virtual), revisamos el
                                        estado actual de tu situación fiscal y contable sin ningún costo ni compromiso.
                                        Esto nos permite detectar áreas de oportunidad, riesgos y ofrecerte una
                                        propuesta de trabajo transparente y exacta.</p>
                                </div>
                            </details>
                            <details class="group [&_summary::-webkit-details-marker]:hidden">
                                <summary
                                    class="flex items-center justify-between py-4 cursor-pointer hover:text-[#B0393F] transition-colors font-bold text-black text-base">
                                    ¿Necesito ir a sus oficinas cada mes para entregar mis papeles?
                                    <span
                                        class="transition-transform duration-300 group-open:-rotate-180 text-gray-400 group-hover:text-[#B0393F] ml-4 flex-shrink-0">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </summary>
                                <div class="pb-4 text-gray-600 text-sm leading-relaxed text-pretty pr-8">
                                    <p>¡No es obligatorio! Aunque nos encanta recibir a nuestros clientes en nuestras
                                        oficinas, trabajamos con herramientas digitales que nos permiten llevar tu
                                        contabilidad de manera 100% remota y segura si así lo prefieres.</p>
                                </div>
                            </details>

                        </div>
                    </div>

                    <div class="w-full flex flex-col gap-6">
                        <h2 class="text-3xl md:text-4xl font-black text-black uppercase mb-2">
                            Nos <span class="text-[#B0393F]">Ubicamos</span>
                        </h2>

                        <div
                            class="flex flex-col sm:flex-row sm:items-center justify-between bg-gray-50 p-6 rounded-xl border border-gray-100 gap-6">
                            <div>
                                <p class="font-bold text-black text-lg"><i
                                        class="fas fa-map-marker-alt text-[#B0393F] text-xl p-1"></i> Oficina Principal
                                </p>
                                <p class="text-gray-600 text-sm mt-1 text-pretty">
                                    C. 21ᴬ 182, Cordeleros de Chuburná,<br>97203 Mérida, Yuc.
                                </p>
                            </div>
                            <a href="https://wa.me/529996662366" target="_blank" class="bg-[#B0393F] hover:bg-[#9a2f35] text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 w-full sm:w-auto text-center whitespace-nowrap shadow-sm uppercase text-sm">
                                Contáctanos
                            </a>
                        </div>

                        <div
                            class="w-full rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-gray-100 relative aspect-video md:aspect-[4/3] lg:aspect-video">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14902.946397223048!2d-89.6247345!3d20.966952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715c5a1a1a1a%3A0x1a1a1a1a1a1a1a1a!2sCordeleros%20de%20Chuburn%C3%A1%2C%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses-419!2smx!4v1610000000000!5m2!1ses-419!2smx"
                                class="absolute top-0 left-0 w-full h-full border-0" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-50 border-t border-gray-200 pt-20 pb-10">
        <div class="max-w-[1200px] mx-auto px-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">

                <div class="flex flex-col gap-6">
                    <a href="#home">
                        <img src="https://res.cloudinary.com/dxsufvxeu/image/upload/v1776494039/test1_efvniy.png"
                            alt="DSAC - Logo" class="h-[85px] w-auto transform origin-left">
                    </a>
                    <p class="text-gray-500 text-sm text-pretty pr-4">
                        Transformamos tu contabilidad en una herramienta de crecimiento. Seguridad, confianza y
                        profesionalismo para tu empresa.
                    </p>
                </div>

                <div class="flex flex-col gap-6">
                    <h3 class="font-black text-black uppercase tracking-wider text-sm">Métodos de Contacto</h3>
                    <ul class="flex flex-col gap-4 text-sm text-gray-600 font-medium">
                        <li>
                            <a href="mailto:contacto@dsac.mx"
                                class="flex items-center gap-3 hover:text-[#B0393F] transition-colors">
                                <i class="fa-solid fa-envelope text-[#B0393F] text-lg w-5 text-center"></i>
                                contacto@dsac.mx
                            </a>
                        </li>
                        <li>
                            <a href="tel:+529996662366" target="_blank"
                                class="flex items-center gap-3 hover:text-[#B0393F] transition-colors">
                                <i class="fa-solid fa-phone text-[#B0393F] text-lg w-5 text-center"></i>
                                (+52) 999 371 1244
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/529990000000" target="_blank"
                                class="flex items-center gap-3 hover:text-[#B0393F] transition-colors">
                                <i class="fa-brands fa-whatsapp text-[#B0393F] text-xl w-5 text-center"></i>
                                (+52) 999 666 2366
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-6">
                    <h3 class="font-black text-black uppercase tracking-wider text-sm">Horarios de Atención</h3>
                    <ul class="flex flex-col gap-4 text-sm text-gray-600 font-medium">
                        <li class="flex items-center justify-between border-b border-gray-200 pb-2">
                            <span>Lunes a Viernes</span>
                            <span class="text-black font-bold">9:00 am - 6:00 pm</span>
                        </li>
                        <li class="flex items-center justify-between text-gray-400">
                            <span>Sabado</span>
                            <span>Cerrado</span>
                        </li>
                        <li class="flex items-center justify-between text-gray-400">
                            <span>Domingo</span>
                            <span>Cerrado</span>
                        </li>
                    </ul>
                </div>

            </div>

            <div
                class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-500">

                <div class="flex flex-col sm:flex-row items-center gap-2 sm:gap-6 text-center">
                    <p>&copy; {{ date('Y') }} DSAC. Todos los derechos reservados.</p>
                    <span class="hidden sm:inline text-gray-300">|</span>
                    <a href="#"
                        class="hover:text-[#B0393F] transition-colors underline underline-offset-2">Política de
                        Privacidad <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <div class="">
                    <span>Eres un empleado?</span>
                    <a href="{{ route('login') }}" class="hover:text-[#B0393F] transition-colors underline underline-offset-2">
                        Iniciar Sesión
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span>Desarrollado por</span>
                    <a href="https://woot.com" target="_blank"
                        class="font-black text-black hover:text-[#B0393F] transition-colors uppercase tracking-wider">Woot
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>

            </div>

        </div>
    </footer>

</body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</html>

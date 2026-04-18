<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- Lado izquierdo (branding / info) -->
        <div class="hidden md:flex flex-col justify-center items-start bg-gradient-to-b from-gray-50 to-gray-100 p-12">

            <div class="mb-4">
                {{ $logo }}
            </div>

            <p class="text-xs font-semibold text-[#B0393F] uppercase tracking-wide mb-2">
                Conéctate con tu empresa
            </p>

            <h1 class="text-2xl font-semibold text-gray-800 mb-4 leading-snug">
                Bienvenido al Portal DSAC
            </h1>

            <p class="text-gray-600 text-sm max-w-sm leading-relaxed">
                Accede a tu cuenta para gestionar tus beneficios, consultar tus datos laborales y mantenerte informado sobre las últimas noticias de la empresa. ¡Tu portal de empleados, al alcance de tu mano!
            </p>

            <div class="w-12 h-1 bg-[#B0393F] rounded-full mt-6"></div>
        </div>

        <!-- Lado derecho (formulario) -->
        <div class="flex flex-col justify-center p-8 sm:p-10">

            <!-- Logo en móvil -->
            <div class="flex justify-center mb-6 md:hidden">
                {{ $logo }}
            </div>

            <!-- Encabezado -->
            <div class="mb-8 text-left">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">
                    {{ $pageTitle }}
                </h2>
                <p class="text-gray-500 text-sm">
                    {{ $pageDescription }}
                </p>
            </div>

            <!-- Formulario -->
            <div class="space-y-5">
                {{ $slot }}
            </div>

        </div>

    </div>
</div>

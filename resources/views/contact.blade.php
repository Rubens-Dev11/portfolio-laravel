@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
    <div class="bg-white rounded-2xl shadow-lg w-full max-w-6xl grid md:grid-cols-2">
        <!-- Partie gauche : formulaire -->
        <div class="p-8 lg:p-12">
            <h2 class="text-4xl font-bold mb-2 text-gray-800">contact.</h2>
            <p class="text-gray-600 mb-8">Contactez-moi via les réseaux sociaux<br>ou envoyez-moi un e-mail directement ici.</p>

            <!-- Icônes des réseaux sociaux -->
            <div class="mb-8 space-y-4">
                <!-- WhatsApp -->
                <a href="https://wa.me/+237699314723" target="_blank" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition group">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center group-hover:scale-110 transition">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.531 3.488"/>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">WhatsApp</span>
                </a>

                <!-- Telegram -->
                <a href="https://t.me/+237699314723" target="_blank" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition group">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center group-hover:scale-110 transition">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Telegram</span>
                </a>

                <!-- Gmail -->
                <a href="mailto:your.rubensdonfack03@gmail.com" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition group">
                    <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center group-hover:scale-110 transition">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">Gmail</span>
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/YOUR_PROFILE" target="_blank" class="flex items-center space-x-4 p-3 rounded-lg hover:bg-gray-50 transition group">
                    <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center group-hover:scale-110 transition">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-gray-700">LinkedIn</span>
                </a>
            </div>

            @if(session('success'))
                <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block mb-1 font-medium text-gray-700">Nom</label>
                    <input type="text" name="name" class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium text-gray-700">Message</label>
                    <textarea name="message" rows="5" class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                    Envoyer
                </button>
            </form>
        </div>

        <!-- Partie droite : photo avec effet artistique -->
        <div class="hidden md:flex bg-gradient-to-br from-blue-600 to-purple-700 rounded-r-2xl items-center justify-center overflow-hidden relative">
            <div class="relative">
                <!-- Votre photo -->
                <img src="images/rubenpixar.png" alt="Ruben" class="w-80 h-80 object-cover rounded-full border-4 border-white/20 shadow-2xl">
                
                <!-- Effets artistiques colorés -->
                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-yellow-400/30 via-red-500/30 to-blue-500/30 mix-blend-multiply"></div>
                <div class="absolute top-4 left-4 w-16 h-16 bg-yellow-400/60 rounded-full blur-xl"></div>
                <div class="absolute bottom-8 right-8 w-20 h-20 bg-red-400/60 rounded-full blur-xl"></div>
                <div class="absolute top-1/2 left-0 w-12 h-12 bg-blue-400/60 rounded-full blur-lg"></div>
            </div>
            
            <!-- Texte décoratif -->
            <div class="absolute bottom-8 left-8 text-white/80">
                <p class="text-sm">📍 Basé au Cameroun</p>
            </div>
        </div>
    </div>
</section>
@endsection
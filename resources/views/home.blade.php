@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
    <style>
        .paint-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(239, 68, 68, 0.8) 0%, 
                rgba(59, 130, 246, 0.8) 25%, 
                rgba(16, 185, 129, 0.8) 50%, 
                rgba(245, 158, 11, 0.8) 75%, 
                rgba(139, 92, 246, 0.8) 100%);
            clip-path: polygon(0 0, 50% 0, 45% 100%, 0 100%);
            mix-blend-mode: multiply;
        }

        .profile-container {
            position: relative;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .code-snippet {
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: #6b7280;
            opacity: 0.7;
        }

        .section-title {
            font-size: 4rem;
            font-weight: 300;
            letter-spacing: -2px;
        }

        @media (max-width: 768px) {
            .profile-container {
                width: 350px;
                height: 350px;
            }
            .section-title {
                font-size: 2.5rem;
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .tech-badge {
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.2);
            backdrop-filter: blur(10px);
        }
    </style>

     <!-- Section d'intro avec animation au scroll -->
   <section class="relative min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 flex items-center justify-center px-6 py-24 overflow-hidden">
    
    <!-- Code elements en arrière-plan -->
    <div class="absolute top-20 right-10 code-snippet hidden lg:block">
        &lt;html&gt;<br/>
        &nbsp;&nbsp;&lt;body&gt;<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;class="developer"
    </div>
    
    <div class="absolute bottom-32 left-10 code-snippet hidden lg:block">
        function createMagic() {<br/>
        &nbsp;&nbsp;return innovation;<br/>
        }
    </div>

    <div class="absolute top-1/2 right-20 code-snippet hidden lg:block transform -translate-y-1/2">
        CSS3 HTML5<br/>
        JavaScript<br/>
        Laravel<br/>
        React & Node.js
    </div>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
        
        <!-- Section gauche - Designer -->
        <div class="text-left space-y-6">
            <h2 class="section-title text-gray-900 dark:text-white">
                développeur
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-md leading-relaxed">
                Créateur d'applications web fullstack spécialisé dans le développement d'interfaces utilisateur modernes et de systèmes backend robustes.
            </p>
            
            <!-- Technologies -->
            <div class="flex flex-wrap gap-3 mt-8">
                <span class="tech-badge px-4 py-2 rounded-full text-sm text-blue-600 dark:text-blue-400">React</span>
                <span class="tech-badge px-4 py-2 rounded-full text-sm text-blue-600 dark:text-blue-400">Node.js</span>
                <span class="tech-badge px-4 py-2 rounded-full text-sm text-blue-600 dark:text-blue-400">Wordpress</span>
                <span class="tech-badge px-4 py-2 rounded-full text-sm text-blue-600 dark:text-blue-400">Laravel</span>
            </div>
        </div>

        <!-- Image centrale -->
        <div class="flex justify-center lg:order-2">
            <div class="profile-container animate-float">
                <img 
                    src="images/rubenpixar.png" 
                    alt="Rubens - Développeur Fullstack" 
                    class="profile-image"
                />
                <div class="paint-overlay"></div>
            </div>
        </div>

        <!-- Section droite - Codeur -->
        <div class="text-right space-y-6 lg:order-3">
            <h2 class="section-title text-gray-900 dark:text-white">
                &lt; étudiant
            </h2>
            <div class="text-right">
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-md leading-relaxed ml-auto">
                    Étudiant en Génie Logiciel qui écrit du code propre, élégant et efficace. Passionné par l'innovation technologique.
                </p>
            </div>
            
            <!-- Statistiques -->
            <div class="space-y-4 mt-8">
                <div class="text-right">
                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">10+</div>
                    <div class="text-sm text-gray-500">Projets réalisés</div>
                </div>
                <div class="text-right">
                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">3+</div>
                    <div class="text-sm text-gray-500">Années d'expérience</div>
                </div>
            </div>

            <div class="text-right mt-8">
                <span class="text-lg">&gt;</span>
            </div>
        </div>
    </div>
</section>

    <!-- Galerie de projets -->
    <section id="projets" class="mt-20 px-6 max-w-7xl mx-auto">
        <h2 class="text-3xl font-semibold text-center mb-12">Quelques-uns de mes derniers travaux</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div
                    class="bg-white rounded-xl p-5 shadow-md hover:shadow-xl transition transform hover:-translate-y-1 hover:scale-105 duration-500">
<img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
     class="rounded-md mb-4 w-full h-48 object-cover">



                    <h3 class="text-xl font-bold mb-2">{{ $project->title }}</h3>
                    <p class="text-sm text-gray-500">{{ $project->category }}</p>
                    <div class="mt-4">
                        <a href="{{ route('projects.show', $project->id) }}"
                           class="text-blue-600 hover:underline text-sm font-medium">Voir le projet</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-10 animate-bounce">
    <a href="#" class="text-gray-500 hover:text-blue-600 transition duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" 
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M5 15l7-7 7 7"/>
        </svg>
    </a>
</div>

    </section>
@endsection

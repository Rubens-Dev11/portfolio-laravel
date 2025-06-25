@extends('layouts.app')
<style>
        /* Variables CSS pour les thèmes */
        :root {
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --bg-tertiary: #f1f5f9;
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-medium: rgba(0, 0, 0, 0.12);
            --shadow-heavy: rgba(0, 0, 0, 0.25);
            --accent-blue: #3b82f6;
            --accent-blue-hover: #2563eb;
            --accent-blue-light: rgba(59, 130, 246, 0.1);
            --accent-purple: #8b5cf6;
            --accent-green: #10b981;
            --accent-orange: #f59e0b;
            --glass-bg: rgba(255, 255, 255, 0.7);
            --glass-border: rgba(255, 255, 255, 0.3);
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-secondary: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-accent: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        [data-theme="dark"] {
            --bg-primary: #0f172a;
            --bg-secondary: #1e293b;
            --bg-tertiary: #334155;
            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: #475569;
            --shadow-light: rgba(0, 0, 0, 0.3);
            --shadow-medium: rgba(0, 0, 0, 0.4);
            --shadow-heavy: rgba(0, 0, 0, 0.6);
            --glass-bg: rgba(15, 23, 42, 0.7);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        /* Transition globale pour le changement de thème */
        * {
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                       color 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                       border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                       box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background: var(--bg-primary);
            color: var(--text-primary);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        /* Container principal avec fond moderne */
        .container {
            position: relative;
            background: var(--bg-primary);
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        .container > * {
            position: relative;
            z-index: 1;
        }

        /* Titre principal avec effet moderne */
        .page-title {
            font-size: 3.5rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 3rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.02em;
            line-height: 1.1;
            position: relative;
        }

        .page-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-accent);
            border-radius: 2px;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2.5rem;
            }
        }

        /* Bouton de gestion moderne */
        .admin-button {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            color: var(--accent-blue);
            padding: 0.875rem 1.75rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px var(--shadow-light);
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: inline-block;
        }

        .admin-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .admin-button:hover::before {
            left: 100%;
        }

        .admin-button:hover {
            background: var(--accent-blue);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 32px var(--shadow-medium);
            border-color: var(--accent-blue);
        }

        .admin-button:active {
            transform: translateY(0);
        }

        /* Grille de projets moderne */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        @media (max-width: 640px) {
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        /* Cartes de projet ultra-modernes */
        .project-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 1.5rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 32px var(--shadow-light);
            position: relative;
            overflow: hidden;
            group: hover;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .project-card:hover::before {
            transform: scaleX(1);
        }

        .project-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 60px var(--shadow-heavy);
            border-color: var(--accent-blue);
        }

        /* Image de projet avec effets */
        .project-image {
            border-radius: 16px;
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 1.5rem;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .project-card:hover .project-image {
            transform: scale(1.05);
            filter: brightness(1.1) saturate(1.1);
        }

        .project-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, 
                rgba(59, 130, 246, 0.1) 0%, 
                rgba(139, 92, 246, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-image::after {
            opacity: 1;
        }

        /* Titre de projet */
        .project-title {
            font-size: 1.375rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
            line-height: 1.3;
            letter-spacing: -0.01em;
        }

        /* Description de projet */
        .project-description {
            color: var(--text-secondary);
            font-size: 0.925rem;
            line-height: 1.6;
            margin-bottom: 1.25rem;
        }

        /* Lien "Voir plus" moderne */
        .project-link {
            color: var(--accent-blue);
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .project-link::after {
            content: '→';
            transition: transform 0.3s ease;
        }

        .project-link::before {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-accent);
            transition: width 0.3s ease;
        }

        .project-link:hover::before {
            width: calc(100% - 1.5rem);
        }

        .project-link:hover::after {
            transform: translateX(4px);
        }

        .project-link:hover {
            color: var(--accent-blue-hover);
        }

        /* Animation d'apparition au scroll */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .fade-in:nth-child(1) { animation-delay: 0.1s; }
        .fade-in:nth-child(2) { animation-delay: 0.2s; }
        .fade-in:nth-child(3) { animation-delay: 0.3s; }
        .fade-in:nth-child(4) { animation-delay: 0.4s; }
        .fade-in:nth-child(5) { animation-delay: 0.5s; }
        .fade-in:nth-child(6) { animation-delay: 0.6s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header avec actions */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                text-align: center;
            }
        }

        /* Effet de loading skeleton */
        .skeleton {
            background: linear-gradient(90deg, 
                var(--bg-secondary) 25%, 
                var(--bg-tertiary) 50%, 
                var(--bg-secondary) 75%);
            background-size: 200% 100%;
            animation: loading 2s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* États vides */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: var(--text-muted);
        }

        .empty-state-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .empty-state-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-secondary);
        }

        .empty-state-description {
            font-size: 1rem;
            max-width: 400px;
            margin: 0 auto;
        }

        /* Bouton de basculement thème */
        .theme-toggle {
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 1000;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 50%;
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            color: var(--text-primary);
            font-size: 1.5rem;
            box-shadow: 0 4px 20px var(--shadow-light);
        }

        .theme-toggle:hover {
            transform: scale(1.1) rotate(180deg);
            box-shadow: 0 8px 32px var(--shadow-medium);
        }

        /* Responsive improvements */
        @media (max-width: 640px) {
            .theme-toggle {
                top: 1rem;
                right: 1rem;
                width: 48px;
                height: 48px;
            }
            
            .admin-button {
                padding: 0.75rem 1.5rem;
                font-size: 0.85rem;
            }
        }
    </style>
@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold text-center mb-8">Mes Projets</h1>

    <div class="text-right mb-4">
    <a href="{{ route('admin.projects.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Gérer les projets
    </a>
</div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($projects as $project)
            <div class="bg-white shadow-md rounded-lg p-4 hover:shadow-xl transition">
                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="rounded mb-4 w-full h-48 object-cover">
                <h2 class="text-xl font-semibold mb-2">{{ $project->title }}</h2>
                <p class="text-gray-700 text-sm">{{ Str::limit($project->description, 100) }}</p>
                <a href="{{ route('projects.show', $project->id) }}" class="text-blue-500 hover:underline mt-2 inline-block">Voir plus</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

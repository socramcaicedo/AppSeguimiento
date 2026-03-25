<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Seguimiento - Contrato de Aprendizaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --verde-oscuro:  #1a5c38;
            --verde-medio:   #2e7d52;
            --verde-claro:   #43a06b;
            --verde-suave:   #e8f5ee;
            --acento:        #00c972;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f2; min-height: 100vh; display: flex; }

        /* ── Sidebar ── */
        .sidebar {
            width: 260px; min-height: 100vh; background: var(--verde-oscuro);
            display: flex; flex-direction: column; position: fixed; top: 0; left: 0; z-index: 100;
            box-shadow: 4px 0 20px rgba(0,0,0,.18);
        }
        .sidebar-brand {
            padding: 28px 24px 20px;
            border-bottom: 1px solid rgba(255,255,255,.12);
        }
        .sidebar-brand .app-icon {
            width: 44px; height: 44px; background: var(--acento);
            border-radius: 12px; display: flex; align-items: center; justify-content: center;
            font-size: 22px; margin-bottom: 10px;
        }
        .sidebar-brand h5 {
            color: #fff; font-size: 14px; font-weight: 700; line-height: 1.4; margin: 0;
        }
        .sidebar-brand p {
            color: rgba(255,255,255,.5); font-size: 11px; margin: 2px 0 0;
        }
        .sidebar-user {
            padding: 16px 24px;
            border-bottom: 1px solid rgba(255,255,255,.12);
            display: flex; align-items: center; gap: 12px;
        }
        .user-avatar {
            width: 38px; height: 38px; border-radius: 50%;
            background: var(--verde-claro); display: flex; align-items: center;
            justify-content: center; font-weight: 700; color: #fff; font-size: 15px; flex-shrink: 0;
        }
        .user-info .user-name { color: #fff; font-size: 13px; font-weight: 600; }
        .user-info .user-rol  { font-size: 11px; color: var(--acento); font-weight: 500; }

        .sidebar-nav { flex: 1; padding: 16px 0; overflow-y: auto; }
        .nav-section-title {
            color: rgba(255,255,255,.35); font-size: 10px; font-weight: 700;
            letter-spacing: .1em; text-transform: uppercase;
            padding: 12px 24px 6px;
        }
        .nav-item a {
            display: flex; align-items: center; gap: 12px;
            padding: 11px 24px; color: rgba(255,255,255,.75);
            text-decoration: none; font-size: 13.5px; font-weight: 500;
            border-left: 3px solid transparent; transition: all .2s;
        }
        .nav-item a:hover, .nav-item a.active {
            background: rgba(255,255,255,.08);
            color: #fff; border-left-color: var(--acento);
        }
        .nav-item a i { font-size: 17px; width: 22px; text-align: center; }

        .sidebar-footer {
            padding: 16px 24px;
            border-top: 1px solid rgba(255,255,255,.12);
        }
        .btn-logout {
            width: 100%; padding: 10px; border-radius: 10px;
            background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.15);
            color: rgba(255,255,255,.8); font-size: 13px; cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            transition: all .2s;
        }
        .btn-logout:hover { background: rgba(220,53,69,.25); border-color: rgba(220,53,69,.4); color: #ff6b7a; }

        /* ── Main content ── */
        .main { margin-left: 260px; flex: 1; display: flex; flex-direction: column; min-height: 100vh; }

        .topbar {
            background: #fff; padding: 16px 32px;
            border-bottom: 1px solid #dde8e2;
            display: flex; align-items: center; justify-content: space-between;
            position: sticky; top: 0; z-index: 50;
        }
        .topbar h4 { font-size: 18px; font-weight: 700; color: var(--verde-oscuro); margin: 0; }
        .topbar .fecha { font-size: 12px; color: #7a9b89; }

        .rol-badge {
            padding: 5px 14px; border-radius: 20px; font-size: 12px; font-weight: 600;
            background: var(--verde-suave); color: var(--verde-oscuro);
            border: 1px solid #b6d9c5;
        }

        .content { padding: 32px; flex: 1; }

        /* ── Cards ── */
        .card-stat {
            background: #fff; border-radius: 16px; padding: 24px;
            border: 1px solid #dde8e2; transition: transform .2s, box-shadow .2s;
        }
        .card-stat:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(26,92,56,.1); }
        .card-stat .icon {
            width: 48px; height: 48px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px;
        }
        .card-stat .stat-value { font-size: 28px; font-weight: 800; color: var(--verde-oscuro); }
        .card-stat .stat-label { font-size: 13px; color: #7a9b89; margin-top: 2px; }

        .welcome-banner {
            background: linear-gradient(135deg, var(--verde-oscuro), var(--verde-claro));
            border-radius: 20px; padding: 32px 36px; color: #fff; margin-bottom: 28px;
            position: relative; overflow: hidden;
        }
        .welcome-banner::after {
            content: ''; position: absolute; right: -40px; top: -40px;
            width: 200px; height: 200px; border-radius: 50%;
            background: rgba(255,255,255,.06);
        }
        .welcome-banner h2 { font-size: 22px; font-weight: 800; margin-bottom: 6px; }
        .welcome-banner p  { font-size: 14px; opacity: .8; margin: 0; }
    </style>
</head>
<body>

{{-- ── Sidebar ── --}}
<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="app-icon">📋</div>
        <h5>App Seguimiento</h5>
        <p>Contrato de Aprendizaje</p>
    </div>

    <div class="sidebar-user">
        <div class="user-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
        <div class="user-info">
            <div class="user-name">{{ auth()->user()->name }}</div>
            <div class="user-rol">
                @if(auth()->user()->rol == 5)      ADMINISTRADOR
                @elseif(auth()->user()->rol == 6)  INSTRUCTOR
                @elseif(auth()->user()->rol == 7)  APRENDIZ
                @elseif(auth()->user()->rol == 8)  USUARIO
                @endif
            </div>
        </div>
    </div>

    <nav class="sidebar-nav">
        @yield('nav-items')
    </nav>

    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn-logout" type="submit">
                <i class="bi bi-box-arrow-left"></i> Cerrar sesión
            </button>
        </form>
    </div>
</aside>

{{-- ── Main ── --}}
<div class="main">
    <div class="topbar">
        <h4>@yield('page-title')</h4>
        <div class="d-flex align-items-center gap-3">
            <span class="fecha"><i class="bi bi-calendar3 me-1"></i>{{ now()->locale('es')->isoFormat('dddd, D [de] MMMM YYYY') }}</span>
            <span class="rol-badge">@yield('rol-label')</span>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

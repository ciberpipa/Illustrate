<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/icono2.png" type="image/x-icon">
    <title>Guia</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

<!-- This example requires Tailwind CSS v2.0+ -->
            @if (Route::has('login'))
                <div class="text-base font-medium text-gray-500 hover:text-gray-900 lg:flex-1">
                    @auth
                    <x-app-layout>
                      <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
                      </x-slot>
                    </x-app-layout>
                        
              @else
                <div class="relative bg-white">
                  <div class="max-w-7xl mx-auto px-4 sm:px-6">
                    <div class="flex justify-between items-center  border-gray-100 py-6 md:justify-start md:space-x-10">
                      <div class="flex justify-start lg:w-0 lg:flex-1">
                      <img class="h-8 w-auto sm:h-10" src="/img/icono.png" alt="">
                      </div>
                        <a href="{{ url('/') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 lg:flex-1"> Inicio</a>
                        <a href="{{ url('/guias') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 lg:flex-1"> Guia</a>
                        <a href="{{ url('/topics') }}" class="text-base font-medium text-gray-500 hover:text-gray-900 lg:flex-1">Topic</a>
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                  @endif
                    
                    @endauth
                </div>
            @endif
                    </div>
                  </div>
               </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <style>
        .author {
            text-align: center;
            font-family: verdana;
            font-size: 200%;
        }

        .title_image {
            margin-top: 2%;
            margin-bottom: 2%;
            text-align: center;
            font-family: verdana;
            font-size: 100%;
        }

        .imagen_Author {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }

        .description {
            margin-top: 3%;
            margin-bottom: 1%;
            text-align: center;
            font-family: verdana;

        }
    </style>
    <!-- Seccion De la imagen, titulo, descripcion, etc -->
    
    @if(Auth::user() !== null)
    <div class="py-12" style="margin-top: -48.5%;">
    @else
    <div class="py-12">
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-100 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-400">
                                    <tbody class="bg-white divide-y divide-gray-100">
                                        <h1 class="author">{{$guia->name}}</h1>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <h3 class="title_image">{{$guia->title}}</h3>
                <img class="imagen_Author" src="/imagenes/1.jpg" />
                <!--"{{$guia->image}}"-->
                <p class="description">{{$guia->description}}</p>

                <!-- comentarios :D -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                User
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Comment
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--bucle foreach para mostrar los comentarios -->
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($guia->comments as $comment)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="/img/user.png" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{$comment->user->name}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{ $comment->comment }}</div>
                                            </td>
                                        </tr>

                                        @endforeach
                                        @if(Auth::user() !== null)

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seccion añadir comentarios -->
                <form method="POST" action="{{route('comments.store')}}">
                    @csrf
                    <div class="flex mx-auto items-center justify-center  mt-20 mx-8 mb-4 max-w-lg">
                        <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Añadir un comentario:</h2>
                                <div class="w-full md:w-full px-3 mb-2 mt-2">
                                    <textarea
                                        class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                        name="comments" placeholder='Escribe tu comentario' required></textarea>
                                    <input type="hidden" name="guia_id" value="{{$guia->id}}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                </div>
                                <div class="w-full md:w-full flex items-start md:w-full px-3">
                                    <div class="-mr-1">
                                        <input type='submit'
                                            class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                                            value='Comentar'>
                                    </div>
                                </div>
                        </form>
                    </div>
            </div>
            @else
            <!-- en caso de que el usuario no este logeado mostrara este mensaje  -->
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Si vols deixar un comentari, <a href="{{route('login')}}"
                        class="font-medium text-indigo-600 hover:text-indigo-500"> Inicia Sesion</a>
                </h3>
            </div>
            @endif

        </div>

</body>

</html>
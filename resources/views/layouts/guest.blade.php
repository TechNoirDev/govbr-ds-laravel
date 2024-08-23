<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="https://www.gov.br//ds/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.gov.br//ds/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://www.gov.br//ds/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="https://www.gov.br//ds/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="https://www.gov.br//ds/assets/favicons/safari-pinned-tab.svg" color="#00a300">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Fonte Rawline-->
        <link rel="stylesheet" href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css"/>
        <!-- Fonte Raleway-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap"/>
        <!-- Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>

        @vite(['resources/css/style.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="template-base">
            <main class="d-flex flex-fill mb-5" id="main">
                <div class="container d-flex justify-content-center form-login">
                    <div class="row p-10x">
                        <div class="col mb-5">
                            <div class="main-content pl-sm-3 mt-4" id="main-content">
                                <div class="mb-5 br-card border-solid-sm">
                                    <div class="card-content">
                                       <x-application-logo />
                                        <div class="p-4x">
                                            {{ $slot }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head />
    <body>
        <div class="template-base">
            <x-header />
            <main class="d-flex flex-fill justify-content-center align-items-center bg-blue-warm-vivid-80">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

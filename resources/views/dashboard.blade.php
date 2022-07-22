<!DOCTYPE html>

<html lang="pt-BR">

<x-head />

<body>

    <x-header />

    <main class="container-md">

        <div class="br-breadcrumb my-4">
            <ul class="crumb-list">
                <li class="crumb home">
                    <div class="br-button circle">
                        <span class="sr-only">
                            Página inicial
                        </span>
                        <i class="icon fas fa-home"></i>
                    </div>
                </li>

                <li class="crumb" data-active="active">
                    <i class="icon fas fa-chevron-right"></i>
                    <span>Painel inicial</span>
                </li>
            </ul>
        </div>

        <h2 class="my-5">Painel inicial</h2>

        <div class="d-flex flex-sm-wrap justify-content-around align-content-around">

            <div class="br-card py-2 px-4 mb-sm-6 rounder-sm">
                <a class="text-gray-80" href="{{ url('departamento'); }}">
                    <div class="card-header">
                        <div class="text-center text-weight-semi-bold text-up-02">Departamentos</div>
                    </div>
                    <div class="mt-3 card-content d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" width="168"
                            viewBox="0 0 24 24" fill="#144fb0">
                            <rect fill="none" height="24" width="24" />
                            <path
                                d="M3,10.5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C4,10.05,3.55,10.5,3,10.5z M6,21 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C7,20.55,6.55,21,6,21z M11,3c0-0.55,0.45-1,1-1s1,0.45,1,1c0,0.55-0.45,1-1,1 S11,3.55,11,3z M12,15c-1.38,0-2.5-1.12-2.5-2.5c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5C14.5,13.88,13.38,15,12,15z M18,19 c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1s-1-0.45-1-1C17,19.45,17.45,19,18,19z M21,10.5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1 s1,0.45,1,1C22,10.05,21.55,10.5,21,10.5z"
                                opacity=".3" />
                            <path
                                d="M21,6.5c-1.66,0-3,1.34-3,3c0,0.07,0,0.14,0.01,0.21l-2.03,0.68c-0.64-1.21-1.82-2.09-3.22-2.32V5.91 C14.04,5.57,15,4.4,15,3c0-1.66-1.34-3-3-3S9,1.34,9,3c0,1.4,0.96,2.57,2.25,2.91v2.16c-1.4,0.23-2.58,1.11-3.22,2.32L5.99,9.71 C6,9.64,6,9.57,6,9.5c0-1.66-1.34-3-3-3s-3,1.34-3,3s1.34,3,3,3c1.06,0,1.98-0.55,2.52-1.37l2.03,0.68 c-0.2,1.29,0.17,2.66,1.09,3.69l-1.41,1.77C6.85,17.09,6.44,17,6,17c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3 c0-0.68-0.22-1.3-0.6-1.8l1.41-1.77c1.36,0.76,3.02,0.75,4.37,0l1.41,1.77C15.22,18.7,15,19.32,15,20c0,1.66,1.34,3,3,3s3-1.34,3-3 s-1.34-3-3-3c-0.44,0-0.85,0.09-1.23,0.26l-1.41-1.77c0.93-1.04,1.29-2.4,1.09-3.69l2.03-0.68c0.53,0.82,1.46,1.37,2.52,1.37 c1.66,0,3-1.34,3-3S22.66,6.5,21,6.5z M3,10.5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C4,10.05,3.55,10.5,3,10.5z M6,21 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C7,20.55,6.55,21,6,21z M11,3c0-0.55,0.45-1,1-1s1,0.45,1,1c0,0.55-0.45,1-1,1 S11,3.55,11,3z M12,15c-1.38,0-2.5-1.12-2.5-2.5c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5C14.5,13.88,13.38,15,12,15z M18,19 c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1s-1-0.45-1-1C17,19.45,17.45,19,18,19z M21,10.5c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1 s1,0.45,1,1C22,10.05,21.55,10.5,21,10.5z" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="br-card py-2 px-4 mb-sm-6 rounder-sm">
                <a class="text-gray-80" href="{{ url('documento'); }}">
                    <div class="card-header">
                        <div class="text-center text-weight-semi-bold text-up-02">Documentos</div>
                    </div>
                    <div class="mt-3 card-content d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="168" viewBox="0 0 24 24" fill="#144fb0">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M11.17 8l-.58-.59L9.17 6H4v12h16V8h-8z" opacity=".3" />
                            <path
                                d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V6h5.17l1.41 1.41.59.59H20v10z" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="br-card py-2 px-4 mb-sm-6 rounder-sm">
                <a class="text-gray-80" href="{{ url('cliente'); }}">
                    <div class="card-header">
                        <div class="text-center text-weight-semi-bold text-up-02">Clientes</div>
                    </div>

                    <div class="mt-3 card-content d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="168" viewBox="0 0 24 24" fill="#144fb0">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 11h2v2h-2v2h2v2h-2v2h8V9h-8v2zm4 0h2v2h-2v-2zm0 4h2v2h-2v-2z" opacity=".3" />
                            <path
                                d="M16 15h2v2h-2zm0-4h2v2h-2zm6-4H12V3H2v18h20V7zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10z" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="br-card py-2 px-4 mb-sm-6 rounder-sm">
                <a class="text-gray-80" href="{{ url('tipodocumento'); }}">
                    <div class="card-header">
                        <div class="text-center text-weight-semi-bold text-up-02">Tipos de documentos</div>
                    </div>

                    <div class="mt-3 card-content d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="168" viewBox="0 0 24 24" fill="#144fb0">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3" />
                            <path
                                d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                            </svg>
                    </div>
                </a>
            </div>


    </main>

    <x-footer-fixed />

    <script src="{{ asset('@govbr/dsgov/dist/dsgov-init.js') }}"></script>
    <script src="{{ asset('@govbr/dsgov/dist/dsgov.min.js') }}"></script>

</body>

</html>

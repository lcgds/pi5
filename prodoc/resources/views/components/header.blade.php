<header class="header compact">

    <style>
        .header {
            --header-background: var(--color-secondary-01);
            --header-shadow: var(--surface-shadow-sm);
            --header-padding: var(--header-padding-medium);
            --header-padding-small: var(--spacing-scale-base);
            --header-padding-medium: var(--spacing-scale-2x);
            --header-padding-large: var(--spacing-scale-3x);
            --header-logo-size: var(--header-logo-medium);
            --header-logo-small: 16px;
            --header-logo-medium: 24px;
            --header-logo-large: 40px;
            --header-sign-color: var(--color-secondary-07);
            --header-title-size: var(--font-size-scale-base);
            --header-title-color: var(--color-secondary-09);
            --header-subtitle-size: var(--font-size-scale-down-01);
            --header-subtitle-color: var(--color-secondary-07);
            --header-logo-desktop-width: 120px;
            --header-logo-desktop-height: 48px;
            --header-logo-compact: 60px;
            --header-logo-compact-height: 32px;
            --header-logo-mobile-width: 80px;
            --header-logo-mobile-height: 40px;
            --header-sticky-z-index: var(--z-index-layer-2);
            background: var(--header-background);
            box-shadow: var(--header-shadow);
            display: flex;
            padding: var(--header-padding) 0;
            position: relative;
        }

        .header .header-top,
        .header .header-bottom {
            display: flex;
        }

        .header .header-top {
            justify-content: flex-end;
        }

        .header .header-bottom {
            justify-content: space-between;
            margin-top: var(--header-padding-small);
        }

        @media (min-width: 576px) {
            .header {
                --header-padding: var(--header-padding-medium);
            }
        }

        .header.small {
            --header-padding: var(--header-padding-small);
        }

        .header.medium {
            --header-padding: var(--header-padding-medium);
        }

        .header.large {
            --header-padding: var(--header-padding-large);
        }

        .header .header-logo {
            align-items: center;
            display: flex;
            flex: 1;
            float: left;
        }

        .header .header-logo img {
            margin-right: var(--spacing-scale-base);
            max-height: var(--header-logo-size);
        }

        .header .header-logo .br-divider {
            display: none;
        }

        .header .header-logo .header-sign {
            color: var(--header-sign-color);
            display: none;
            font-weight: 500;
            overflow: hidden;
        }

        .header[data-no-logo] .header-logo img {
            display: none;
        }

        .header[data-no-sign] .header-logo .header-sign {
            display: none;
        }

        @media (min-width: 576px) {
            .header .header-logo {
                --header-logo-size: var(--header-logo-large);
                margin: 0;
            }

            .header .header-logo .br-divider {
                display: block;
            }

            .header .header-logo .header-sign {
                display: box;
                display: block;
                -webkit-line-clamp: 2;
            }
        }

        .header .header-actions {
            align-items: center;
            display: flex;
            justify-content: flex-end;
        }

        .header .header-actions .dropdown.show .br-list {
            display: block;
            z-index: var(--z-index-layer-1);
        }

        .header .header-actions .dropdown.show .br-button.active .svg-inline--fa,
        .header .header-actions .dropdown.show .br-button.active .fa,
        .header .header-actions .dropdown.show .br-button.active .fab,
        .header .header-actions .dropdown.show .br-button.active .fad,
        .header .header-actions .dropdown.show .br-button.active .fal,
        .header .header-actions .dropdown.show .br-button.active .far,
        .header .header-actions .dropdown.show .br-button.active .fas {
            transform: rotate(180deg);
        }

        .header .header-actions .dropdown.show .br-notification {
            display: block;
            right: -16px;
            width: 100vw;
            z-index: var(--z-index-layer-1);
        }

        .header .header-actions .dropdown.show .br-notification div.close {
            display: none;
        }

        .header .header-actions .dropdown:not(.show) .br-notification {
            display: none;
        }

        @media (max-width: 1279px) {
            .header .header-actions .dropdown:not(.show) .br-list {
                display: none;
            }
        }

        .header .header-actions .header-links .br-list,
        .header .header-actions .header-functions .br-list {
            background: var(--header-background);
            left: -4em;
        }

        .header .header-actions .header-links .br-item,
        .header .header-actions .header-functions .br-item {
            white-space: nowrap;
        }

        .header .header-actions .header-links ul,
        .header .header-actions .header-functions ul {
            display: none;
        }

        .header .header-actions .header-functions .br-list .br-button {
            --button-size: auto;
            --button-font-size: var(--font-size-scale-base);
            --button-font-weight: var(--item-font-weight);
            border-radius: 0;
            color: var(--color);
            font-size: var(--font-size-scale-base);
            font-weight: var(--item-font-weight);
            justify-content: flex-start;
            padding: var(--item-padding);
            width: 100%;
        }

        .header .header-actions .header-functions .br-list .br-button .text {
            margin-left: var(--spacing-scale-2x);
        }

        .header .header-actions .header-functions .br-item {
            padding: 0;
        }

        .header .header-actions .header-functions ul {
            display: none;
        }

        .header .header-actions .header-login {
            margin-left: var(--spacing-scale-base);
        }

        .header .header-actions .sign-in {
            --button-padding: 0 var(--spacing-scale-2x);
        }

        .header .header-actions .avatar {
            align-items: center;
            display: flex;
        }

        .header .header-actions .avatar .br-list {
            min-width: 200px;
            right: 0;
            top: 100%;
        }

        .header[data-no-links] .header-actions .header-links {
            display: none;
        }

        .header[data-no-functions] .header-actions .header-functions {
            display: none;
        }

        .header[data-no-login] .header-actions .header-login {
            display: none;
        }

        @media (min-width: 576px) {

            .header .header-actions .header-links .br-list,
            .header .header-actions .header-functions .br-list {
                background: var(--header-background);
                left: auto;
                right: 0;
            }

            .header .header-actions .header-links .br-notification,
            .header .header-actions .header-functions .br-notification {
                width: 100vw;
            }
        }

        @media (min-width: 1280px) {

            .header .header-actions .header-links [data-toggle=dropdown],
            .header .header-actions .header-functions [data-toggle=dropdown] {
                display: none;
            }

            .header .header-actions .header-links .br-list,
            .header .header-actions .header-functions .br-list {
                box-shadow: none;
                display: flex;
                margin-right: var(--spacing-scale-2x);
                position: static;
            }

            .header .header-actions .header-links .br-list .header,
            .header .header-actions .header-functions .br-list .header {
                display: none;
            }

            .header .header-actions .header-links .br-item,
            .header .header-actions .header-functions .br-item {
                --focus-offset: var(--spacing-scale-half);
                --interactive-rgb: var(--interactive-light-rgb);
                color: var(--interactive-light);
                padding: 0;
            }

            .header .header-actions .header-links .br-item:not(:last-child),
            .header .header-actions .header-functions .br-item:not(:last-child) {
                border-bottom: 0;
                margin-right: var(--spacing-scale-3x);
            }

            .header .header-actions .header-links .br-notification,
            .header .header-actions .header-functions .br-notification {
                width: 50vw;
            }

            .header .header-actions .header-functions .br-list {
                margin-right: 0;
            }

            .header .header-actions .header-functions .br-list .br-button {
                --button-size: var(--button-small);
                border-radius: 50%;
                color: var(--interactive);
                justify-content: center;
                padding: 0;
                width: var(--button-size);
            }

            .header .header-actions .header-functions .br-list .br-button .text {
                display: none;
            }

            .header .header-actions .header-functions .br-item {
                margin-right: var(--spacing-scale-base);
            }

            .header .header-actions .header-functions .br-item:not(:last-child) {
                margin-right: var(--spacing-scale-base);
            }

            .header .header-actions .header-search-trigger {
                display: none;
            }
        }

        .header .header-menu {
            align-items: center;
            display: flex;
            flex: 1;
        }

        .header .header-menu .header-menu-trigger+.header-info {
            margin-left: var(--spacing-scale-2x);
        }

        .header .header-menu .header-title {
            color: var(--header-title-color);
            display: box;
            font-size: var(--header-title-size);
            -webkit-line-clamp: 2;
            overflow: hidden;
        }

        .header .header-menu .header-subtitle {
            color: var(--header-subtitle-color);
            display: none;
            font-size: var(--header-subtitle-size);
            font-weight: 500;
            margin-top: var(--spacing-scale-half);
        }

        .header[data-no-subtitle] .header-menu .header-subtitle {
            display: none;
        }

        @media (min-width: 576px) {
            .header .header-menu {
                --header-title-size: var(--font-size-scale-up-02);
                align-items: flex-start;
            }

            .header .header-menu .header-menu-trigger {
                margin-top: 3px;
            }

            .header .header-menu .header-info {
                padding-top: var(--spacing-scale-half);
            }

            .header .header-menu .header-subtitle {
                display: block;
            }
        }

        @media (min-width: 1280px) {
            .header .header-menu {
                --header-title-size: var(--font-size-scale-up-03);
                --header-subtitle-size: var(--font-size-scale-base);
            }

            .header .header-menu .header-info {
                padding-top: 0;
            }
        }

        .header .header-search,
        .header.compact .header-search {
            align-items: center;
            background: var(--header-background);
            bottom: 0;
            display: none;
            left: 0;
            padding: 0 var(--spacing-scale-2x);
            position: absolute;
            right: 0;
            top: 0;
        }

        .header .header-search .br-input,
        .header.compact .header-search .br-input {
            --input-size: var(--input-highlight);
            align-items: center;
            display: flex;
            flex: 1;
        }

        .header .header-search .br-input label,
        .header.compact .header-search .br-input label {
            display: none;
        }

        .header .header-search .br-input input,
        .header.compact .header-search .br-input input {
            border-color: transparent;
        }

        .header .header-search .br-input input:not(:focus),
        .header.compact .header-search .br-input input:not(:focus) {
            background: var(--color-secondary-02);
        }

        .header .header-search .br-input .icon,
        .header .header-search .br-input .br-button,
        .header.compact .header-search .br-input .icon,
        .header.compact .header-search .br-input .br-button {
            --focus-offset: 0;
            bottom: auto;
            right: 4px;
            top: auto;
        }

        .header .header-search .search-close,
        .header.compact .header-search .search-close {
            --focus-offset: calc(var(--spacing-scale-half) * -1);
            display: none;
        }

        .header .header-search.active,
        .header.compact .header-search.active {
            display: flex;
        }

        .header .header-search.active .search-close,
        .header.compact .header-search.active .search-close {
            display: inline-flex;
        }

        .header[data-no-search] .header-search {
            display: none;
        }

        @media (min-width: 1280px) {
            .header .header-search {
                display: flex;
                padding: 0;
                position: static;
            }

            .header .header-search.active .search-close {
                display: none;
            }

            .header .br-input {
                min-width: 385px;
            }
        }

        .header .br-input.has-icon .br-button.circle {
            margin-top: 0;
            position: absolute;
            right: 4px;
        }

        .header.compact {
            --header-logo-size: var(--header-logo-small);
            --header-padding: var(--header-padding-small);
        }

        .header.compact .header-actions .header-search-trigger {
            display: block;
        }

        @media (min-width: 576px) {
            .header.compact .container-lg {
                position: relative;
            }

            .header.compact .header-top {
                display: block;
            }

            .header.compact .header-logo {
                --header-logo-size: var(--header-logo-small);
                float: left;
            }

            .header.compact .header-logo .br-divider {
                display: none;
            }

            .header.compact .header-sign {
                display: none;
            }

            .header.compact .header-actions {
                float: right;
                margin-top: var(--spacing-scale-2x);
                position: relative;
            }

            .header.compact .header-bottom {
                clear: left;
            }

            .header.compact .header-menu {
                --header-title-size: var(--font-size-scale-up-01);
            }

            .header.compact .header-menu .header-menu-trigger {
                margin-top: 0;
            }
        }

        @media (min-width: 1280px) {
            .header.compact .header-menu {
                --header-title-size: var(--font-size-scale-up-02);
            }
        }

        .header[data-sticky] {
            position: sticky;
            top: 0;
            transition: all 150ms ease;
            z-index: var(--header-sticky-z-index);
        }

        .header[data-sticky] .header-logo img,
        .header[data-sticky] .header-actions,
        .header[data-sticky] .header-menu-trigger,
        .header[data-sticky] .header-title {
            transition: all 150ms ease;
        }

        .header[data-sticky] .header-logo img {
            margin-right: var(--spacing-scale-base);
        }

    </style>

    <div class="container-fluid">

        <div class="row">

            <div class="col header-bottom">

                <div class="header-menu">

                    <div class="header-info">
                        <h1 class="header-title h6 my-0">Pro Doc</h1>
                        <div class="header-subtitle pb-3 text-base">Professional Documentation</div>
                    </div>
                </div>

            </div>

            <div class="col header-actions d-flex justify-content-end my-0">

                <div class="header-search-trigger">
                    <button onclick="window.location = '{{ url('pesquisa'); }}'" class="br-button circle" type="button" aria-label="Abrir Busca"><i class="fas fa-search"
                            aria-hidden="true"></i>
                    </button>
                </div>

                <div class="header-login">
                    <div class="header-sign-in">
                        <button onclick="window.location = '{{ url('login'); }}'" class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user mr-1"
                                aria-hidden="true"></i><span class="d-sm-inline">Minha conta</span>
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</header>

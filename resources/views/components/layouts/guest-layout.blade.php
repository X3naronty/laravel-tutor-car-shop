@props(['title-value' => 'Log in'])

<x-layouts.root-layout>
    <main>
        <section style="padding: 4rem 0;">
            <div class="container-small page-login">
                <div class="flex" style="gap: 5rem;">
                    <div class="auth-page-form">
                        <div class="text-center">
                            <a href="/">
                                <img src="/img/logoipsum-265.svg" alt="" />
                            </a>
                        </div>
                        <h1 class="auth-page-title">{{ $title }}</h1>
                        {{ $slot }}
                    </div>
                    <div class="auth-page-image">
                        <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
        </section>

    </main>
</x-layouts.root-layout>

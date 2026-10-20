<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | 清掃サービス</title>
        <meta name="description" content="オフィス・店舗・ご自宅の清掃を承ります。定期清掃からハウスクリーニングまで、お気軽にお問い合わせください。">

        @fonts

        @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    </head>
    <body class="bg-white text-slate-800 antialiased">
        <!-- Header -->
        <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur">
            <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
                <a href="{{ route('home') }}" class="text-lg font-semibold text-sky-700">
                    {{ config('app.name') }}
                </a>

                <nav class="hidden items-center gap-8 text-sm font-medium md:flex">
                    <a href="#about" class="nav-link">会社概要</a>
                    <a href="#services" class="nav-link">サービス</a>
                    <a href="#pricing" class="nav-link">料金</a>
                    <a href="#contact" class="nav-link">お問い合わせ</a>
                </nav>

                <a
                    href="#contact"
                    class="hidden rounded-md bg-sky-700 px-5 py-2 text-sm font-semibold text-white shadow-sm transition duration-200 hover:bg-sky-800 hover:shadow-md active:scale-[0.98] md:inline-block"
                >
                    無料相談する
                </a>

                <button
                    type="button"
                    data-menu-button
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    class="inline-flex items-center justify-center rounded-md p-2 text-slate-600 hover:bg-slate-100 md:hidden"
                >
                    <span class="sr-only">メニューを開く</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                    </svg>
                </button>
            </div>

            <nav id="mobile-menu" data-mobile-menu class="hidden border-t border-slate-200 px-6 py-4 md:hidden">
                <ul class="flex flex-col gap-1 text-sm font-medium">
                    <li><a href="#about" class="block rounded-md px-3 py-2 transition hover:bg-sky-50 hover:text-sky-700">会社概要</a></li>
                    <li><a href="#services" class="block rounded-md px-3 py-2 transition hover:bg-sky-50 hover:text-sky-700">サービス</a></li>
                    <li><a href="#pricing" class="block rounded-md px-3 py-2 transition hover:bg-sky-50 hover:text-sky-700">料金</a></li>
                    <li><a href="#contact" class="block rounded-md bg-sky-700 px-3 py-2 text-center font-semibold text-white transition hover:bg-sky-800">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>

        <!-- Hero -->
        <section class="relative overflow-hidden bg-gradient-to-b from-sky-50 to-white">
            <div class="pointer-events-none absolute -top-24 -right-24 h-72 w-72 rounded-full bg-sky-200/50 blur-3xl" aria-hidden="true"></div>
            <div class="pointer-events-none absolute top-40 -left-24 h-72 w-72 rounded-full bg-sky-100/60 blur-3xl" aria-hidden="true"></div>

            <div class="relative mx-auto max-w-6xl px-6 py-20 text-center sm:py-28">
                <p class="section-eyebrow">Professional Cleaning Service</p>
                <h1 class="mt-4 text-3xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                    清潔な空間で、<br class="sm:hidden">毎日をもっと快適に
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-slate-600">
                    オフィス・店舗・ご自宅の清掃を、経験豊富なスタッフが丁寧に対応します。
                    定期清掃からスポット清掃まで、お客様のご要望に合わせてプランをご提案します。
                </p>
                <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#contact" class="btn-primary w-full sm:w-auto">
                        無料相談・お見積り
                    </a>
                    <a href="#services" class="btn-secondary w-full sm:w-auto">
                        サービス内容を見る
                    </a>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="scroll-mt-20 mx-auto max-w-6xl px-6 py-20">
            <div class="grid gap-12 md:grid-cols-2 md:items-center">
                <div>
                    <p class="section-eyebrow">About Us</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">会社概要</h2>
                    <div class="mt-4 h-1 w-12 rounded-full bg-sky-700"></div>
                    <p class="mt-6 text-slate-600">
                        {{ config('app.name') }}は、地域のご家庭・企業様に向けた清掃サービスを提供しています。
                        お客様一人ひとりのご要望に寄り添い、安心・丁寧な作業をお約束します。
                    </p>
                </div>
                <dl class="grid grid-cols-2 gap-6">
                    <div class="rounded-lg border border-slate-200 p-6 text-center transition duration-200 hover:border-sky-300 hover:shadow-sm">
                        <dt class="text-sm text-slate-500">対応エリア</dt>
                        <dd class="mt-2 text-2xl font-bold text-sky-700">◯◯県全域</dd>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-6 text-center transition duration-200 hover:border-sky-300 hover:shadow-sm">
                        <dt class="text-sm text-slate-500">対応件数</dt>
                        <dd class="mt-2 text-2xl font-bold text-sky-700">1,000件〜</dd>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-6 text-center transition duration-200 hover:border-sky-300 hover:shadow-sm">
                        <dt class="text-sm text-slate-500">営業時間</dt>
                        <dd class="mt-2 text-2xl font-bold text-sky-700">9:00-18:00</dd>
                    </div>
                    <div class="rounded-lg border border-slate-200 p-6 text-center transition duration-200 hover:border-sky-300 hover:shadow-sm">
                        <dt class="text-sm text-slate-500">定休日</dt>
                        <dd class="mt-2 text-2xl font-bold text-sky-700">日曜・祝日</dd>
                    </div>
                </dl>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="scroll-mt-20 bg-slate-50 py-20">
            <div class="mx-auto max-w-6xl px-6">
                <div class="text-center">
                    <p class="section-eyebrow">Services</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">サービス一覧</h2>
                    <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-sky-700"></div>
                </div>

                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['title' => '定期清掃', 'desc' => '週次・月次など、定期的な清掃プランでいつも清潔な空間を保ちます。'],
                        ['title' => 'ハウスクリーニング', 'desc' => 'キッチン・浴室・水回りなど、ご自宅の気になる箇所を徹底洗浄します。'],
                        ['title' => 'オフィス・店舗清掃', 'desc' => '営業時間外の対応も可能。従業員様・お客様が気持ちよく過ごせる空間づくりをサポートします。'],
                        ['title' => 'エアコンクリーニング', 'desc' => '分解洗浄でカビ・ホコリを除去し、空気環境を改善します。'],
                        ['title' => '引っ越し前後清掃', 'desc' => '入居前・退去時の清掃で、原状回復やお部屋探しをサポートします。'],
                        ['title' => '特殊清掃', 'desc' => 'ご相談内容に応じて、専門的な清掃プランをご提案します。'],
                    ] as $service)
                        <div class="card">
                            <div class="icon-badge">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900">{{ $service['title'] }}</h3>
                            <p class="mt-2 text-sm text-slate-600">{{ $service['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Pricing -->
        <section id="pricing" class="scroll-mt-20 mx-auto max-w-6xl px-6 py-20">
            <div class="text-center">
                <p class="section-eyebrow">Pricing</p>
                <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">料金プラン</h2>
                <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-sky-700"></div>
                <p class="mt-4 text-sm text-slate-500">※ 料金は目安です。詳細はお問い合わせ・現地調査の上でお見積りいたします。</p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['name' => 'ライトプラン', 'price' => '¥8,000〜', 'desc' => '1R〜1LDK向け、水回り中心のスポット清掃'],
                    ['name' => 'スタンダードプラン', 'price' => '¥15,000〜', 'desc' => '2LDK〜3LDK向け、水回り＋居室の一般清掃', 'featured' => true],
                    ['name' => 'プレミアムプラン', 'price' => '¥25,000〜', 'desc' => '4LDK以上・店舗・オフィス向け、全体清掃'],
                ] as $plan)
                    <div class="relative rounded-xl border p-8 text-center transition-all duration-200 hover:-translate-y-1 {{ $plan['featured'] ?? false ? 'border-sky-700 shadow-md md:scale-105' : 'border-slate-200 shadow-sm hover:shadow-lg' }}">
                        @if ($plan['featured'] ?? false)
                            <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-sky-700 px-4 py-1 text-xs font-semibold text-white shadow-sm">
                                人気プラン
                            </span>
                        @endif
                        <h3 class="text-lg font-semibold text-slate-900">{{ $plan['name'] }}</h3>
                        <p class="mt-4 text-3xl font-bold text-sky-700">{{ $plan['price'] }}</p>
                        <p class="mt-4 text-sm text-slate-600">{{ $plan['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="scroll-mt-20 bg-slate-50 py-20">
            <div class="mx-auto max-w-2xl px-6">
                <div class="text-center">
                    <p class="section-eyebrow">Contact</p>
                    <h2 class="mt-2 text-2xl font-bold text-slate-900 sm:text-3xl">お問い合わせ</h2>
                    <div class="mx-auto mt-4 h-1 w-12 rounded-full bg-sky-700"></div>
                    <p class="mt-4 text-sm text-slate-600">無料相談・お見積りのご依頼は、以下のフォームからお気軽にどうぞ。</p>
                </div>

                @if (session('contact_success'))
                    <div class="mt-8 flex items-center gap-2 rounded-md bg-green-50 p-4 text-sm text-green-700 ring-1 ring-green-200">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        お問い合わせありがとうございます。担当者よりご連絡いたします。
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="mt-8 space-y-5">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700">お名前 <span class="text-red-600">*</span></label>
                        <input
                            type="text" id="name" name="name" value="{{ old('name') }}"
                            class="input-field"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">メールアドレス <span class="text-red-600">*</span></label>
                        <input
                            type="email" id="email" name="email" value="{{ old('email') }}"
                            class="input-field"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-slate-700">電話番号</label>
                        <input
                            type="text" id="phone" name="phone" value="{{ old('phone') }}"
                            class="input-field"
                        >
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-700">お問い合わせ内容 <span class="text-red-600">*</span></label>
                        <textarea
                            id="message" name="message" rows="5"
                            class="input-field"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full">
                        送信する
                    </button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t border-slate-200 py-10">
            <div class="mx-auto max-w-6xl px-6 text-center text-sm text-slate-500">
                <p>{{ config('app.name') }}</p>
                <p class="mt-2">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>

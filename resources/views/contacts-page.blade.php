@extends('layouts.main')

@section('title', 'Контакты | Свети Ярче - Милана Соболевская')
@section('meta_description', 'Свяжитесь с энергоцелителем Миланой Соболевской. WhatsApp, Telegram, график работы. Возможны онлайн-консультации для клиентов из любых городов.')
@section('og_type', 'website')
@section('og_title', 'Контакты | Свети Ярче - Милана Соболевская')
@section('og_description', 'Свяжитесь с нами: WhatsApp, Telegram, график работы. Онлайн-консультации.')
@section('canonical', url('/contacts'))
@section('og_url', url('/contacts'))

@section('structured_data')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Контакты Свети Ярче",
  "description": "Свяжитесь с энергоцелителем Миланой Соболевской",
  "url": "{{ url('/contacts') }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7-918-095-23-30",
    "contactType": "customer service",
    "availableLanguage": "Russian",
    "areaServed": "RU"
  }
}
</script>
@endsection

@section('content')
<div class="bg-arcane">
    <section class="container py-5 py-lg-6">
        <div class="mb-5">
            <h1 class="fw-bold text-glow mb-2">Контакты</h1>
            <p class="muted mb-0">Свяжитесь с нами удобным способом</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6 col-lg-4">
                <div class="card card-arcane h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon">
                            <i class="bi bi-whatsapp text-success" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="fw-semibold">WhatsApp</div>
                            <a href="https://wa.me/79180952330" class="link" target="_blank" rel="noopener noreferrer">
                                +7 (918) 095-23-30
                            </a>
                        </div>
                    </div>
                    <p class="muted small">Напишите нам в WhatsApp для быстрой связи</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-arcane h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon">
                            <i class="bi bi-telegram text-primary" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="fw-semibold">Telegram</div>
                            <a href="https://t.me/Sobol_Mil" class="link" target="_blank" rel="noopener noreferrer">
                                @Sobol_Mil
                            </a>
                        </div>
                    </div>
                    <p class="muted small">Свяжитесь с нами через Telegram</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card card-arcane h-100 p-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="card-icon">
                            <i class="bi bi-clock-fill text-warning" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div class="fw-semibold">График работы</div>
                            <div class="muted">Пн-Вс: 10:00 — 21:00</div>
                        </div>
                    </div>
                    <p class="muted small">Работаем ежедневно для вашего удобства</p>
                </div>
            </div>
        </div>

        <div class="card card-arcane p-4 p-md-5 text-center">
            <div class="mb-3">
                <i class="bi bi-laptop text-info" style="font-size: 3rem;" aria-hidden="true"></i>
            </div>
            <h3 class="fw-bold text-glow mb-3">Онлайн-консультации</h3>
            <p class="muted mb-4">
                Проводим консультации онлайн для клиентов из любых городов. 
                Не важно, где вы находитесь — мы поможем вам раскрыть свой потенциал и найти путь к внутренней гармонии.
            </p>
            <a href="{{ url('/booking') }}" class="btn btn-accent btn-lg px-5">
                <i class="bi bi-calendar-check me-2" aria-hidden="true"></i> Записаться на консультацию
            </a>
        </div>

        <div class="mt-5">
            <h2 class="fw-bold mb-3">Часто задаваемые вопросы</h2>
            <div class="accordion accordion-arcane" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Как проходит онлайн-сессия?
                        </button>
                    </h3>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body muted">
                            Онлайн-сессия проходит через видеозвонок в WhatsApp или Telegram. 
                            Вам понадобится стабильное интернет-соединение и тихое место, где вас никто не побеспокоит.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Сколько длится сессия?
                        </button>
                    </h3>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body muted">
                            Длительность сессии зависит от выбранной услуги. Обычно индивидуальная сессия длится 60-90 минут, 
                            групповая практика — 1.5-2 часа.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Нужно ли готовиться к сессии?
                        </button>
                    </h3>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body muted">
                            Специальной подготовки не требуется. Рекомендуем прийти в спокойном состоянии, 
                            сформулировать свой запрос или намерение. Мы подскажем, как лучше настроиться на практику.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

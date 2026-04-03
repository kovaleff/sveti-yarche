<footer class="bg-arcane border-top border-arcane-lighter py-4 mt-auto">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 footer-slogan">
                <div class="fw-semibold">Свети Ярче</div>
                <div class="small">Энергоцелитель Милана Соболевская</div>
            </div>
            <div class="col-md-6 text-md-end">
                <a class="me-3 text-light text-decoration-none nav-item" href="{{ url('/practice') }}">О практике</a>
                <a class="me-3 text-light text-decoration-none nav-item" href="{{ url('/reviews') }}">Отзывы</a>
                <a class="text-light text-decoration-none nav-item" href="#contacts">Контакты</a>
            </div>
        </div>

        <div class="small gold-text mt-3">
            © <span id="year">{{ date('Y') }}</span> Все права защищены. Свет внутри — наружу.
        </div>
    </div>
</footer>

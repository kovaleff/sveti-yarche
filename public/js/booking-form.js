document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('booking-form');
    if (!form) return;

    const bookingBlock = document.getElementById('booking-block');
    const bookingDone = document.getElementById('booking-done');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const submitBtn = form.querySelector('#make-submit-button');
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Отправка...';

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                bookingBlock.classList.add('d-none');
                bookingBlock.classList.remove('d-flex');
                bookingDone.classList.remove('d-none');
                bookingDone.innerHTML = `
                    <div class="card card-arcane p-4 p-md-5 text-center">
                        <div class="mb-3">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="fw-bold text-glow mb-2">Вы записаны!</h3>
                        <p class="muted mb-4">${data.message}</p>
                        <p class="small muted">Мы свяжемся с вами в ближайшее время для подтверждения.</p>
                    </div>
                `;
            } else {
                alert(data.message || 'Произошла ошибка.');
            }
        })
        .catch(error => {
            alert('Произошла ошибка при отправке формы.');
            console.error(error);
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="bi bi-calendar-check me-2"></i> Записаться';
        });
    });
});

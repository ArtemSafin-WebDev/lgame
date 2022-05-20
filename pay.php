<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php include "head.php"; ?>
    <title>L Game</title>
</head>

<body>
    <!--YOUR CODE HERE-->
    <div class="page_wrapper">
        <?php $study_text = true; ?>
        <?php include "header.php"; ?>
        <main>
            <div class="container">
                <div class="main">
                    <?php include "left.php"; ?>
                    <div class="main_box">
                        <div class="pay">
                            <h1 class="pay__heading">
                                Баланс
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.97 24.97">
                                    <path d="M31.42,7.4V4.68A4.67,4.67,0,0,0,26.75,0H4.67A4.68,4.68,0,0,0,0,4.67H0V20.29A4.68,4.68,0,0,0,4.67,25H26.75a4.66,4.66,0,0,0,4.67-4.68v-4A2.66,2.66,0,0,0,33,13.86v-4A2.66,2.66,0,0,0,31.42,7.4Zm-1.5,6.06H25.19a1.62,1.62,0,0,1,0-3.24h4.73ZM3.05,20.29V4.68A1.62,1.62,0,0,1,4.67,3.05h.67V21.91H4.67a1.62,1.62,0,0,1-1.62-1.62Zm23.7,1.62H8.4V3.05H26.75a1.62,1.62,0,0,1,1.62,1.63V7.15H25.19a4.69,4.69,0,0,0-4.67,4.69h0a4.68,4.68,0,0,0,4.67,4.68h3.18v3.77a1.62,1.62,0,0,1-1.62,1.62Z" />
                                </svg>
                            </h1>
                            <div class="pay__tabs-wrapper js-tabs">


                                <div class="pay__top-row">
                                    <div class="pay__balance">
                                        <div class="pay__balance-amount">
                                            1 253 000 ₽
                                        </div>
                                        <h2 class="pay__balance-heading">
                                            Текущий баланс
                                        </h2>
                                    </div>
                                    <div class="pay__nav">
                                        <a href="#" class="pay__nav-btn js-tabs-btn">
                                            Пополнить
                                        </a>
                                        <a href="#" class="pay__nav-btn js-tabs-btn">
                                            Вывести
                                        </a>
                                        <a href="#" class="pay__nav-btn js-tabs-btn">
                                            Отправить
                                        </a>
                                    </div>

                                </div>
                                <div class="pay__tabs">
                                    <div class="pay__tab js-tabs-item">
                                        <div class="pay__block">
                                            <h3 class="pay__block-heading">
                                                Создание заявки на пополнение #27516
                                            </h3>
                                            <div class="pay__block-enter-sum">
                                                <h4 class="pay__block-enter-sum-title">
                                                    Введите сумму пополнения в рублях
                                                </h4>
                                                <div class="pay__block-enter-sum-input-wrapper">
                                                    <input type="tel" class="pay__block-enter-sum-input js-numeric-input-decimals" value="1 000">
                                                </div>
                                            </div>
                                            <div class="pay__block-converted">
                                                <h4 class="pay__block-converted-heading">
                                                    Сумма пополнения в USDT составит:
                                                </h4>
                                                <div class="pay__block-converted-amount">
                                                    15,81 USDT
                                                </div>
                                            </div>
                                            <div class="pay__block-method">
                                                <h4 class="pay__block-method-heading">
                                                    Выберите способ оплаты:

                                                </h4>
                                                <div class="pay__block-method-btns">
                                                    <a href="#" class="pay__block-method-btn js-pay-usdt-btn">
                                                        Оплатить в USDT (TRC20)
                                                    </a>
                                                    <a href="#instruction-modal" class="pay__block-method-btn">
                                                        Оплатить в рублях
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay__block js-pay-usdt-block hidden">
                                            <div class="pay__block-next-step">


                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.04 32.03">

                                                    <path fill="#272928" d="M22.71,14.2,16,20.89,9.34,14.2l1.74-1.75,5,4.94L21,12.45ZM16,0A16,16,0,1,0,32,16h0A16,16,0,0,0,16,0Zm0,29.55A13.54,13.54,0,1,1,29.56,16h0A13.56,13.56,0,0,1,16,29.55Z" />
                                                </svg>
                                            </div>
                                            <h3 class="pay__block-heading">
                                                Оплата заявки на пополнение #27516
                                            </h3>
                                            <div class="pay__block-timer">
                                                <div class="pay__block-timer-countdown js-countdown">
                                                    28:16
                                                </div>
                                                <div class="pay__block-timer-text">
                                                    Внимание! Средства необходимо внести в течение 30 минут
                                                </div>
                                            </div>
                                            <div class="pay__block-you-get">
                                                <h4 class="pay__block-you-get-heading">
                                                    Вы получаете на баланс:
                                                </h4>
                                                <div class="pay__block-you-get-amount">
                                                    1 000 ₽
                                                </div>
                                            </div>
                                            <div class="pay__block-copy-links">
                                                <div class="pay__block-copy-links-item">
                                                    <div class="pay__block-copy-links-item-text">
                                                        Необходимо отправить: <b>15,81 USDT</b>
                                                    </div>
                                                    <a href="#" class="pay__block-copy-link js-copy-link" data-copy-text="15,81 USDT">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.04 23.97">
                                                            <path d="M18.22,0H7.66A3.83,3.83,0,0,0,4.05,2.66H6.62a1.54,1.54,0,0,1,1-.4H18.22a1.65,1.65,0,0,1,1.61,1.66V15.18a1.65,1.65,0,0,1-.68,1.34V11.29A3.24,3.24,0,0,0,18.25,9L14.11,4.76a3,3,0,0,0-2.19-.93H3.8A3.87,3.87,0,0,0,0,7.76V20A3.87,3.87,0,0,0,3.8,24H15.35A3.87,3.87,0,0,0,19.15,20V19A3.92,3.92,0,0,0,22,15.18V3.92A3.87,3.87,0,0,0,18.22,0ZM17,20a1.63,1.63,0,0,1-1.6,1.65H3.8A1.63,1.63,0,0,1,2.2,20V7.76A1.64,1.64,0,0,1,3.8,6.1h8.12a.9.9,0,0,1,.45.13c0,.52,0,1.15,0,1.76a2.47,2.47,0,0,0,2.39,2.56h1.85l.1.1a.9.9,0,0,1,.26.64Z" />
                                                        </svg>
                                                        Скопировать<br>
                                                        сумму
                                                    </a>
                                                </div>
                                                <div class="pay__block-copy-links-item">
                                                    <div class="pay__block-copy-links-item-text">
                                                        Адрес пополнения в USDT (TRC20):<br>
                                                        <b>
                                                            xlajoifNeTSjio7efNeldeTSjio7efNeldeTSjio7ef
                                                        </b>
                                                    </div>
                                                    <a href="#" class="pay__block-copy-link js-copy-link" data-copy-text="xlajoifNeTSjio7efNeldeTSjio7efNeldeTSjio7ef">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.04 23.97">
                                                            <path d="M18.22,0H7.66A3.83,3.83,0,0,0,4.05,2.66H6.62a1.54,1.54,0,0,1,1-.4H18.22a1.65,1.65,0,0,1,1.61,1.66V15.18a1.65,1.65,0,0,1-.68,1.34V11.29A3.24,3.24,0,0,0,18.25,9L14.11,4.76a3,3,0,0,0-2.19-.93H3.8A3.87,3.87,0,0,0,0,7.76V20A3.87,3.87,0,0,0,3.8,24H15.35A3.87,3.87,0,0,0,19.15,20V19A3.92,3.92,0,0,0,22,15.18V3.92A3.87,3.87,0,0,0,18.22,0ZM17,20a1.63,1.63,0,0,1-1.6,1.65H3.8A1.63,1.63,0,0,1,2.2,20V7.76A1.64,1.64,0,0,1,3.8,6.1h8.12a.9.9,0,0,1,.45.13c0,.52,0,1.15,0,1.76a2.47,2.47,0,0,0,2.39,2.56h1.85l.1.1a.9.9,0,0,1,.26.64Z" />
                                                        </svg>
                                                        Скопировать<br>
                                                        сумму
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pay__block-actions">
                                                <div class="pay__block-actions-text">
                                                    <p>
                                                        <b>


                                                            Средства будут зачислены на ваш баланс после поступления USDT на наш кошелек
                                                        </b>
                                                    </p>
                                                    <p>
                                                        После отправки средств обязательно нажмите кнопку:
                                                    </p>
                                                </div>
                                                <div class="pay__block-actions-links">
                                                    <a href="#" class="pay__block-actions-link pay__block-actions-link--filled">
                                                        Я отправил
                                                    </a>
                                                    <a href="#" class="pay__block-actions-link">
                                                        Отменить
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pay__tab js-tabs-item">
                                        <form class="pay__block" action="/" metod="POST">
                                            <h3 class="pay__block-heading">
                                                Создание заявки на вывод #27516
                                            </h3>
                                            <div class="pay__block-enter-sum">
                                                <h4 class="pay__block-enter-sum-title">
                                                    Введите сумму вывода в рублях
                                                </h4>
                                                <div class="pay__block-enter-sum-input-wrapper">
                                                    <input type="tel" class="pay__block-enter-sum-input js-numeric-input-decimals" value="100 000">
                                                </div>
                                            </div>
                                            <div class="pay__block-converted">
                                                <h4 class="pay__block-converted-heading">
                                                    Сумма вывода в USDT составит:
                                                </h4>
                                                <div class="pay__block-converted-amount">
                                                    15,81 USDT
                                                </div>
                                            </div>
                                            <div class="pay__block-enter-sum pay__block-enter-sum--stretch">
                                                <h4 class="pay__block-enter-sum-title">
                                                    Укажите ваш кошелек для получения USDT:
                                                </h4>
                                                <div class="pay__block-enter-sum-input-wrapper pay__block-enter-sum-input-wrapper--large">
                                                    <input type="text" class="pay__block-enter-sum-input pay__block-enter-sum-input--blue pay__block-enter-sum-input--small-text" value="xlajoifNeTSjio7efNeldeTSjio7efNeldeTSjio7efs" required="">
                                                </div>
                                            </div>

                                            <div class="pay__block-actions">
                                                <div class="pay__block-actions-text">
                                                    <p>
                                                        Внимание! Проверьте правильность введенных данных.<br>
                                                        После подтверждения, заявку невозможно будет отменить.
                                                    </p>
                                                </div>
                                                <div class="pay__block-actions-links">
                                                    <button type="sumbit" class="pay__block-actions-link pay__block-actions-link--filled">
                                                        Отправить
                                                    </button>
                                                    <a href="#" class="pay__block-actions-link">
                                                        Отменить
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="pay__tab js-tabs-item">
                                        <form class="pay__block" action="/" metod="POST">
                                            <h3 class="pay__block-heading">
                                                Создание заявки на отправку #27516
                                            </h3>
                                            <div class="pay__block-enter-sum">
                                                <h4 class="pay__block-enter-sum-title">
                                                    Введите сумму в рублях
                                                </h4>
                                                <div class="pay__block-enter-sum-input-wrapper">
                                                    <input type="tel" class="pay__block-enter-sum-input js-numeric-input-decimals" value="100 000">
                                                </div>
                                            </div>
                                            <div class="pay__block-converted">
                                                <h4 class="pay__block-converted-heading">
                                                    Сумма вывода в USDT составит:
                                                </h4>
                                                <div class="pay__block-converted-amount">
                                                    15,81 USDT
                                                </div>
                                            </div>
                                            <div class="pay__block-enter-sum pay__block-enter-sum--stretch">
                                                <h4 class="pay__block-enter-sum-title">
                                                    Укажите имя пользователя (или почту), которому хотите отправить USDT:
                                                </h4>
                                                <div class="pay__block-enter-sum-input-wrapper pay__block-enter-sum-input-wrapper--large">
                                                    <input type="text" class="pay__block-enter-sum-input pay__block-enter-sum-input--blue pay__block-enter-sum-input--small-text" value="@myBestFriend" required="" value="@myBestFriend">
                                                </div>
                                            </div>

                                            <div class="pay__block-actions">
                                                <div class="pay__block-actions-text">
                                                    <p>
                                                        Внимание! Проверьте правильность введенных данных.<br>
                                                        После подтверждения, заявку невозможно будет отменить.
                                                    </p>
                                                </div>
                                                <div class="pay__block-actions-links">
                                                    <button type="sumbit" class="pay__block-actions-link pay__block-actions-link--filled">
                                                        Отправить
                                                    </button>
                                                    <a href="#" class="pay__block-actions-link">
                                                        Отменить
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="pay__history js-tabs">
                                <div class="pay__history-nav">
                                    <a href="#" class="pay__history-nav-btn js-tabs-btn active">
                                        Заявки
                                    </a>
                                    <a href="#" class="pay__history-nav-btn js-tabs-btn">
                                        История баланса
                                    </a>
                                </div>
                                <div class="pay__history-tabs">
                                    <div class="pay__history-tab js-tabs-item">
                                        <ul class="pay__history-orders-list">
                                            <li class="pay__history-orders-list-item">
                                                <div class="pay__history-orders-card">
                                                    <div class="pay__history-orders-card-text">
                                                        Заявка #566813<br>
                                                        Оплата Образовательного уровня 3
                                                    </div>
                                                    <div class="pay__history-orders-card-time">
                                                        15.05.2022<br>
                                                        21:19
                                                    </div>
                                                    <div class="pay__history-orders-card-status">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33">
                                                            <circle cx="16.5" cy="16.5" r="15" style="fill:none;stroke:#d44c53;stroke-width:3px" />
                                                            <path d="m22.37 19.5-3-3 3-3L20 11.09l-3 3-3-3-2.4 2.39 3 3-3 3 2.36 2.36 3-3 3 3Z" style="fill:#d44c53;fill-rule:evenodd" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pay__history-orders-list-item">
                                                <div class="pay__history-orders-card">
                                                    <div class="pay__history-orders-card-text">
                                                        Заявка #566813<br>
                                                        Оплата Образовательного уровня 2
                                                    </div>
                                                    <div class="pay__history-orders-card-time">
                                                        13.05.2022<br>
                                                        13:54
                                                    </div>
                                                    <div class="pay__history-orders-card-status">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33">

                                                            <path fill="#00a5e2" d="M16.5 33A16.5 16.5 0 1 1 33 16.5 16.52 16.52 0 0 1 16.5 33Zm0-30A13.5 13.5 0 1 0 30 16.5 13.52 13.52 0 0 0 16.5 3Z" />
                                                            <path fill="#00a5e2" d="m22.53 19.03-8.34-.07-.06-10.63 3-.02.04 7.67 5.38.05-.02 3z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pay__history-orders-list-item">
                                                <div class="pay__history-orders-card">
                                                    <div class="pay__history-orders-card-text">
                                                        Заявка #566813<br>
                                                        Оплата Образовательного уровня 1
                                                    </div>
                                                    <div class="pay__history-orders-card-time">
                                                        12.05.2022<br>
                                                        19:28
                                                    </div>
                                                    <div class="pay__history-orders-card-status">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33 33">

                                                            <path fill="#3de512" d="M16.5 33A16.5 16.5 0 1 1 33 16.5 16.52 16.52 0 0 1 16.5 33Zm0-30A13.5 13.5 0 1 0 30 16.5 13.52 13.52 0 0 0 16.5 3Z" />
                                                            <path fill="#3de512" d="m15.84 22.51-5.86-5.87 2.12-2.12 3.74 3.75 6.74-6.75 2.12 2.12-8.86 8.87z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pay__history-tab js-tabs-item">
                                        <div class="pay__history-balance-wrapper">


                                            <div class="pay__history-balance">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Никнейм
                                                            </th>
                                                            <th>
                                                                Уровень
                                                            </th>
                                                            <th>
                                                                Сумма в USDT
                                                            </th>
                                                            <th>
                                                                Дата и время
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="failure">
                                                            <td>
                                                                Вывод средств
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                35,01
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Hoolytam
                                                            </td>
                                                            <td>
                                                                2
                                                            </td>
                                                            <td>
                                                                14,50
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Vishenka123
                                                            </td>
                                                            <td>
                                                                8
                                                            </td>
                                                            <td>
                                                                1 220,00
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Mushroom_Dream
                                                            </td>
                                                            <td>
                                                                1
                                                            </td>
                                                            <td>
                                                                28,46
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>
                                                        </tr>
                                                        <tr class="success">
                                                            <td>
                                                                Зачисление средств
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                55,00
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                noname_1875544
                                                            </td>
                                                            <td>
                                                                10
                                                            </td>
                                                            <td>
                                                                1 405,80
                                                            </td>
                                                            <td>
                                                                15.05.2022 21:19
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <?php include "footer.php"; ?>
    </div>

    <?php include "modals.php"; ?>


    <?php include "scripts.php"; ?>
</body>

</html>
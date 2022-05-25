<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php include "head.php"; ?>
    <title>L Game</title>
</head>

<body>
    <!--YOUR CODE HERE-->
    <div class="page_wrapper">
        <div class="sign-up">
            <div class="container">
                <div class="sign-up__content">
                    <a href="#" class="sign-up__logo">
                        <img src="img/sign-up-logo.png" alt="" class="sign-up__logo-image">
                    </a>
                    <div class="sign-up__top-text">
                        Образовательная программа с элементами игры
                        и гибридным алгоритмом распределения средств
                    </div>
                    <h1 class="sign-up__heading">
                        Вход
                    </h1>
                    <form action="/" method="POST" class="sign-up__form">
                        <div class="sign-up__form-fields">
                            <div class="sign-up__form-field">
                                <div class="sign-up__form-label">
                                    Введите имя пользователя, почту или telegram
                                </div>
                                <input type="text" class="sign-up__form-input" required="" value="mymail@gmail.com">
                            </div>

                            <div class="sign-up__form-field">
                                <div class="sign-up__form-label">
                                    Введите пароль
                                </div>
                                <input type="password" class="sign-up__form-input sign-up__form-input--password" required="">
                            </div>

                        </div>
                        <button type="submit" class="sign-up__form-submit">
                            Войти
                        </button>

                    </form>
                    <div class="sign-up__form-links">
                        <a href="#" class="sign-up__form-link">
                            Забыли пароль?
                        </a>
                        <a href="#" class="sign-up__form-link">
                            Регистрация
                        </a>
                    </div>
                    <div class="sign-up__copyright">
                        © Libertygame Ltd. 2022
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include "modals.php"; ?>


    <?php include "scripts.php"; ?>
</body>

</html>
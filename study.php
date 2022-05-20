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
                        <div class="study">
                            <h1 class="study__heading">
                                Обучение
                            </h1>
                            <div class="study__heading-text">
                                Образовательные уровни
                            </div>
                            <div class="study__levels">
                                <div class="study__levels-accordion study__levels-accordion--unlocked js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 1
                                        </div>

                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/1.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.72 23.69" class="study__levels-video-card-play">

                                                                    <path d="M.63,22.18c-.9-4.8-.73-18.12,0-20.65C1,.16,2.21-.29,3.79.16,7.06,1.1,19.93,8.26,23,10.49a1.71,1.71,0,0,1,.35,2.38,1.93,1.93,0,0,1-.35.35C20.1,15.53,7.35,22.64,3.79,23.55,2.23,24,.89,23.56.63,22.18Z" />
                                                                </svg>
                                                                Смотреть урок
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/2.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.72 23.69" class="study__levels-video-card-play">

                                                                    <path d="M.63,22.18c-.9-4.8-.73-18.12,0-20.65C1,.16,2.21-.29,3.79.16,7.06,1.1,19.93,8.26,23,10.49a1.71,1.71,0,0,1,.35,2.38,1.93,1.93,0,0,1-.35.35C20.1,15.53,7.35,22.64,3.79,23.55,2.23,24,.89,23.56.63,22.18Z" />
                                                                </svg>
                                                                Смотреть урок
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/3.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.72 23.69" class="study__levels-video-card-play">

                                                                    <path d="M.63,22.18c-.9-4.8-.73-18.12,0-20.65C1,.16,2.21-.29,3.79.16,7.06,1.1,19.93,8.26,23,10.49a1.71,1.71,0,0,1,.35,2.38,1.93,1.93,0,0,1-.35.35C20.1,15.53,7.35,22.64,3.79,23.55,2.23,24,.89,23.56.63,22.18Z" />
                                                                </svg>
                                                                Смотреть урок
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="study__levels-accordion js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 2
                                        </div>
                                        <a href="#open-level" class="study__levels-accordion-btn-unlock">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26">
                                                <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                            </svg>
                                            Открыть за 2000 ₽
                                        </a>
                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/4.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/5.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/6.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="study__levels-accordion js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 3
                                        </div>
                                        <a href="#open-level" class="study__levels-accordion-btn-unlock">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26">
                                                <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                            </svg>
                                            Открыть за 3000 ₽
                                        </a>
                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/4.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/5.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/6.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="study__levels-accordion js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 4
                                        </div>
                                        <a href="#open-level" class="study__levels-accordion-btn-unlock">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26">
                                                <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                            </svg>
                                            Открыть за 4000 ₽
                                        </a>
                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/4.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/5.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/6.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="study__levels-accordion js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 5
                                        </div>
                                        <a href="#open-level" class="study__levels-accordion-btn-unlock">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26">
                                                <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                            </svg>
                                            Открыть за 5000 ₽
                                        </a>
                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/4.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/5.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/6.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="study__levels-accordion js-accordion">
                                    <div class="study__levels-accordion-btn js-accordion-btn">
                                        <div class="study__levels-accordion-btn-title">
                                            Уровень 6
                                        </div>
                                        <a href="#open-level" class="study__levels-accordion-btn-unlock">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26">
                                                <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                            </svg>
                                            Открыть за 7000 ₽
                                        </a>
                                        <div class="study__levels-accordion-btn-videos-count">
                                            3 Видео
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.23 12.74">
                                                <polygon points="2.12 12.74 0 10.62 10.62 0 21.23 10.62 19.11 12.74 10.62 4.24 2.12 12.74" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="study__levels-accordion-content js-accordion-content">
                                        <div class="study__levels-accordion-content-inner">
                                            <ul class="study__levels-videos-list">
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/4.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/5.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="study__levels-videos-list-item">
                                                    <a href="#" class="study__levels-video-card">
                                                        <div class="study__levels-video-card-image-container">
                                                            <img src="img/videos/6.jpg" alt="" class="study__levels-video-card-image">
                                                            <div class="study__levels-video-card-status">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 26" width="19" height="26" class="study__levels-video-card-status-locked">
                                                                    <path d="M17.7,11.16H16.12v-5A6,6,0,0,0,10.4,0H8.6A6,6,0,0,0,2.88,6.13v5H1.3A1.3,1.3,0,0,0,0,12.46v5.67A7.86,7.86,0,0,0,7.86,26h3.28A7.86,7.86,0,0,0,19,18.13V12.46A1.3,1.3,0,0,0,17.7,11.16Zm-11.23-5A2.36,2.36,0,0,1,8.6,3.6h1.8a2.36,2.36,0,0,1,2.13,2.53v5H6.47Zm4.1,13v2.17A.68.68,0,0,1,9.9,22H9.1a.67.67,0,0,1-.67-.67h0V19.17a2.39,2.39,0,1,1,3.21-1.07A2.36,2.36,0,0,1,10.57,19.17Z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="study__levels-video-card-duration">
                                                            Длительность 3 мин 21 сек
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
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
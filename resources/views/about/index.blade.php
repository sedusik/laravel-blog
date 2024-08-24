@extends('layouts.main')

@section('content')
    <main class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <h1 class="edica-page-title" data-aos="fade-up">Об авторе</h1>
                    <section class="edica-about-intro py-5">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                                <h2 class="intro-title pb-3 pb-md-0 mb-4 mb-md-0">Меня зовут <span>Татьяна</span></h2>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-vision py-5">
                        <div class="row">
                            <div class="col-md-6 pb-3 pb-md-0 mb-4 mb-md-0" data-aos="fade-right" data-aos-delay="200">
                                <img src="assets/images/me.jpg" alt="vision" class="img-fluid">
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <h2 class="vision-title" data-aos="fade-left">Обо мне</h2>
                                <p class="vision-text" data-aos="fade-left">Мне 28 лет, имею высшее юридическое образование, 5 лет трудилась в должности юрисконсульта, обожаю путешествовать. В данный момент меняю профессию на бэкенд-разработчика Laravel.</p>
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-goal py-5 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-4 mb-md-0 d-flex flex-column justify-content-center" data-aos="fade-right">
                                <h2 class="goal-title">О сайте</h2>
                                <p class="goal-text">Сайт сделан в качестве первого пет-проекта на PHP Laravel. Тематика путешествий выбрана по любви :)</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <img src="assets/images/me3.jpg" alt="goal" class="img-fluid">
                            </div>
                        </div>
                    </section>
                    <section class="edica-about-faq py-5 mb-5">
                        <h2 class="faq-title" data-aos="fade-up">Вопросы про путешествия</h2>
                        <div class="accordion" id="edicaAboutFaqCollapse" role="tablist" aria-multiselectable="true">
                            <div class="card" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-header" role="tab" id="edicaAboutFaq1">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent1" aria-expanded="true" aria-controls="edicaAboutFaqContent1">
                                            Давно ли ты путешествуешь? Куда была первая твоя поездка?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent1" class="collapse in" role="tabpanel" aria-labelledby="edicaAboutFaq1">
                                    <div class="card-body">
                                        Сейчас даже затрудняюсь сказать. В детстве мы ездили всей семьей в основном на побережье Черного моря в разные места, но настоящий вкус путешествий я ощутила, когда выросла и «ветер странствий» проник в мою душу. Путешествия для меня стали смыслом жизни.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="300">
                                <div class="card-header" role="tab" id="edicaAboutFaq2">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent2" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Какое из путешествий тебе запомнилось больше всего и почему?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent2" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq2">
                                    <div class="card-body">
                                        Однозначного ответа нет. Все путешествия побудительны, значимы и интересны. Главное во временном контексте к путешествиям. В определенный период времени становится более значим один интерес в направленности маршрутов. Потом ставишь другие цели, открываешь новые горизонты и они на данный момент занимают главенствующее место в памяти, но когда впечатления уляжутся, я с благодарностью судьбе вспоминаю каждое из свои путешествий.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-header" role="tab" id="edicaAboutFaq3">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent3" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Куда планируешь отправиться в ближайшее время?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent3" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq3">
                                    <div class="card-body">
                                        Тайланд.
                                    </div>
                                </div>
                            </div>
                            <div class="card" data-aos="fade-up" data-aos-delay="500">
                                <div class="card-header" role="tab" id="edicaAboutFaq4">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#edicaAboutFaqCollapse" href="#edicaAboutFaqContent4" aria-expanded="false" aria-controls="edicaAboutFaqContent1">
                                            Какие страны посетила?
                                        </a>
                                    </h5>
                                </div>
                                <div id="edicaAboutFaqContent4" class="collapse" role="tabpanel" aria-labelledby="edicaAboutFaq4">
                                    <div class="card-body">
                                        Турция, Египет.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


@endsection

<!-- BEGIN POPUPS-->
<div class="popup-box">

    <div id="popup-signin" class="popup popup-signin">
        <form class="popup__form">
            <div class="popup__title">Войти</div>
            <div class="backcall-form__row input-border">
                <input type="email" class="backcall-form__input" placeholder="Email*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="password" class="backcall-form__input" placeholder="Пароль*">
            </div>
            <div class="popup-register">
                <div class="popup-register__wrap">
                    <a href="#popup-reg" class="popup-register__link js-fancybox">Зарегистрироваться</a>
                </div>
                <div class="popup-register__wrap">
                    <a href="#popup-vacancy" class="popup-register__link js-fancybox">Забыли пароль?</a>
                </div>
            </div>
            <div class="social-list-wrap">
                <div class="social-list-title"><span>Войти через соц. сети</span></div>
                <ul class="social-list">
                    <li class="social-list__item">
                        <a href="#" class="social-list__link icon-bigger">
                            <i class="icon-vk"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link icon-big">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link">
                            <i class="icon-fb"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link">
                            <i class="icon-phone-1"></i>
                        </a>
                    </li>
                    <li class="social-list__item">
                        <a href="#" class="social-list__link">
                            <i class="icon-ok"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="popup__btn btn btn-fill" data-link="Готово">
                <input type="submit" class="form-filter__submit">
                <span>Готово</span>
            </div>
        </form>
    </div>

    <div id="popup-reg" class="popup popup-reg">
        <form class="popup__form">
            <div class="popup__title">Регистрация</div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Имя*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Отчество*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Фамилия*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Пол">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input js-datapicker-birth" placeholder="Дата рождения">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Адрес">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input js-mask" placeholder="Телефон*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="email" class="backcall-form__input" placeholder="Email*">
            </div>
            <div class="backcall-form__row">
                <input type="checkbox" id="check4" class="backcall-form__checkbox" name="check4">
                <label class="backcall-form__label" for="check4">Нажимая на кнопку, вы соглашаетесь с <strong>Положением об обработке и защите персональных данных</strong></label>
            </div>
            <div class="popup__btn btn btn-fill" data-link="Зарегистрироваться">
                <input type="submit" class="form-filter__submit">
                <span>Зарегистрироваться</span>
            </div>
        </form>
    </div>

    <div id="popup-submit" class="popup popup-submit">
        <form class="popup__form">
            <div class="popup__title">Оставить заявку</div>
            <div class="popup__desc">Три варианта планировочного решения, включающие расстановку мебели</div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Имя*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input js-mask" placeholder="Телефон*">
            </div>
            <div class="backcall-form__row input-border">
                <input type="email" class="backcall-form__input" placeholder="Email*">
            </div>
            <div class="backcall-form__row">
                <input type="checkbox" id="check5" class="backcall-form__checkbox" name="check5">
                <label class="backcall-form__label" for="check5">Нажимая на кнопку, вы соглашаетесь с <strong>Положением об обработке и защите персональных данных</strong></label>
            </div>
            <div class="popup__btn btn btn-fill" data-link="Отправить">
                <input type="submit" class="form-filter__submit">
                <span>Отправить</span>
            </div>
        </form>
    </div>

    <div id="popup-vacancy" class="popup popup-vacancy">
        <form class="popup__form">
            <div class="popup__title">Заполните заявку</div>
            <p class="popup__desc">Задайте вопрос - мы ответим на Ваше письмо в течение 24-х часов</p>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Тема письма*">
            </div>
            <div class="backcall-form__row input-border">
                <textarea class="backcall-form__textarea" placeholder="Ваш вопрос*"></textarea>
            </div>
            <div class="backcall-form__row input-border">
                <input type="file" class="backcall-form__file">
                <div class="backcall-form__file-text">Приложить файл</div>
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Контактное лицо">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input js-mask" placeholder="+7 (xxx) xxx-xx-xx">
            </div>
            <div class="backcall-form__row input-border">
                <input type="text" class="backcall-form__input" placeholder="Email*">
            </div>
            <div class="backcall-form__field">*Поля обязательные для заполнения</div>
            <div class="backcall-form__row">
                <input type="checkbox" id="check6" class="backcall-form__checkbox" name="check6" checked>
                <label class="backcall-form__label" for="check6">Заполняя форму, я подтверждаю, что ознакомлен и принимаю условия <a href="#" class="backcall-form__link">Политики конфиденциальности</a></label>
            </div>
            <div class="popup__btn btn btn-fill" data-link="Заказать">
                <input type="submit" class="form-filter__submit">
                <span>Заказать</span>
            </div>
        </form>
    </div>

</div>
<!-- POPUPS EOF   -->
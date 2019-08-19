<form class="backcall-form js-feedbackCallForm">
    <h3 class="backcall-form__title">Закажите <br>обратный звонок</h3>
    <p class="backcall-form__desc">Оставьте контактные данные, укажите удобное время для звонка - мы перезвоним, ответим на вопросы, расскажем о наших акциях и системе скидок</p>
    <div class="backcall-form__row input-border">
        <input name="name" type="text" class="backcall-form__input" placeholder="Контактное лицо*" id="call_name">
    </div>
    <div class="backcall-form__row input-border">
        <input name="phone" type="text" class="backcall-form__input js-mask" placeholder="+7 (xxx) xxx-xx-xx" id="call_phone">
    </div>
    <div class="backcall-form__row input-border">
        <input name="date" type="text" class="backcall-form__input js-datapicker" placeholder="Желаемая дата и время звонка" id="call_date">
    </div>
    <div class="backcall-form__row input-border">
        <textarea name="comment" class="backcall-form__textarea" placeholder="Комментарий" id="call_comment"></textarea>
    </div>
    <div class="backcall-form__row">
        <input type="checkbox" id="check" class="backcall-form__checkbox" name="check" checked>
        <label class="backcall-form__label" for="check">
            Заполняя форму, я подтверждаю, что ознакомлен и принимаю условия
            <a href="<?= get_template_directory_uri(); ?>/policy/" class="backcall-form__link">
                Политики конфиденциальности
            </a>
        </label>
    </div>
    <div class="backcall-form__btn btn btn-fill" data-link="Заказать">
        <input type="submit" class="backcall-form__submit">
        <span>Заказать</span>
    </div>
</form>
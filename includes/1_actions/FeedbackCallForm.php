<?php


class FeedbackCallForm extends FormAjax
{
    public function create_fields()
    {
        $this->add_check_fields("name", "notempty");
        $this->add_check_fields("phone", "notempty");
        $this->add_check_fields("date", "notempty");
        $this->add_check_fields("comment", "notempty");
        $this->add_check_fields("check", "notempty");
    }

    public function exec()
    {

        if (!isset($_REQUEST['nonce']) || !wp_verify_nonce($_REQUEST['nonce'], 'new_user')) {
             throw new Exception( 'Оооопс, все вышло из под контроля, попробуйте еще разок, но чуть позже?' );
        }
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $date = $_POST["date"];
        $comment = $_POST["comment"];
        $check = $_POST["check"];

        $text = "Контактное лицо: " . $name . "
                Телефон: $phone
                Желаемая дата и время звонка: $date
                Комментарий: $comment
                Политика конфиденциальности: $check";

        global $themeAR;
        $mail = $themeAR->get_option("emailanket");

        wp_mail($mail, "Заказ обратного звонка", $text);

        $result["msg"] = "Заказ принят";

        return $result;
    }
}
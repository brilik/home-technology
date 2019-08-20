<?php

class PageMainSectionMainWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__main";
        $this->title = "Секция слайдер (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("items",
                "Слайды",
                "repeater",
                [
                    array("image", "Изображение", "image"),
                    array("title", "Заголовок", "text"),
                    array("desc", "Описание", "textarea"),
                    array("btn-name", "<hr>Кнопка - название", "text"),
                    array("btn-url", "Кнопка - ссылка", "text"),
                ],
                'text'),

        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionMainWidgetAR);


class PageMainSectionDesignWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__design";
        $this->title = "Секция дизайн (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title", "Заголовок", "text"),
            array("subtitle", "Подзаголовок", "text"),
            array("desc", "Описание", "textarea"),
            array("btn-name", "Кнопка - название", "text"),
            array("btn-url", "Кнопка - ссылка", "text"),
            array("items", "Слайды", "repeater",
                [
                    array("image", "Изображение", "image"),
                ],
                'text'),

        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionDesignWidgetAR);


class PageMainSectionDesignReversWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__design-reverse";
        $this->title = "Секция дизайн перевёрнутый (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title", "Заголовок", "text"),
            array("subtitle", "Подзаголовок", "text"),
            array("desc", "Описание", "textarea"),
            array("btn-name", "Кнопка - название", "text"),
            array("btn-url", "Кнопка - ссылка", "text"),
            array("items", "Слайды", "repeater",
                [
                    array("image", "Изображение", "image"),
                ],
                'text'),
        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionDesignReversWidgetAR);


class PageMainSectionRepairWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__repair";
        $this->title = "Секция подобрать (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("image", "Изображение", "image"),
            array("title", "Заголовок", "text"),
            array("btn-name", "Кнопка - название", "text"),
            array("btn-url", "Кнопка - ссылка", "text"),
            array("big-title", "Большой текст", "select",
                [
                    'Да',
                    'Нет'
                ],
            ),
        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionRepairWidgetAR);


class PageMainSectionMaterialsWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__materials";
        $this->title = "Секция материалов (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title", "<b>Заголовок секции</b><hr>", "text"),
            // tab 1
            array("title_tab_1", "<b>Название таба 1</b>", "text"),
            array("items_tab_1", "Блоки", "repeater",
                [

                    array("icon", "Иконка", "select",
                        [
                            "Доставка",
                            "Сложность",
                            "Выгода",
                            "Расчет",
                        ]),

                    array("title","Заголовок","text"),
                    array("desc","Описание","textarea"),
                ],
                'text'),
            // tab 2
            array("title_tab_2", "<b>Название таба 2</b>", "text"),
            array("items_tab_2", "Блоки", "repeater",
                [

                    array("icon", "Иконка", "select",
                        [
                            'icon-materials-1',
                            'icon-materials-2',
                            'icon-materials-3',
                            'icon-materials-4',
                        ]),

                    array("title","Заголовок","text"),
                    array("desc","Описание","textarea"),
                ],
                'text'),

        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionMaterialsWidgetAR);


class PageMainSectionFeedbackWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__feedback";
        $this->title = "Секция отзывов (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title", "<b>Заголовок секции</b>", "text"),
            array("subtitle", "Подзаголовок", "textarea"),
            array("numberposts", "Кол-во отзывов (все: -1)", "text"),
        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionFeedbackWidgetAR);


class PageMainSectionQuestionWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-main__section__question";
        $this->title = "Секция форма заказа (главная)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title", "<b>Заголовок секции</b>", "text"),
            array("subtitle", "Подзаголовок", "textarea"),
            array("bg", "Задний фон", "image"),
            array("tab_title_1", "Вкладка 1", "text"),
            array("tab_title_2", "Вкладка 2", "text"),
        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageMainSectionQuestionWidgetAR);


class PageInteriorWidgetAR extends ElementorWidgetAR
{

    public function setup_settings()
    {
        $this->name = "page-interior__main";
        $this->title = "Страница Интерьеров (каталог)";
        $this->icon = "fa fa-address-card-o";

        $this->fields = array(
            array("title_present", "Заголовок подарочной секции", "textarea"),
            array("title_discount", "Заголовок скидочной секции", "textarea"),
            array("number_discount", "Процент", "text"),
        );
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new PageInteriorWidgetAR);
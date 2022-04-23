<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "mainPageTopSlider", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "3",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>



<?$APPLICATION->IncludeComponent("bitrix:news.list", "mainActivities", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "4",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>



<?php $APPLICATION->IncludeComponent("bitrix:news.list", "infographics", [
    "ACTIVE_DATE_FORMAT"              => "d.m.Y",    // Формат показа даты
    "ADD_SECTIONS_CHAIN"              => "N",    // Включать раздел в цепочку навигации
    "AJAX_MODE"                       => "N",    // Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL"          => "",    // Дополнительный идентификатор
    "AJAX_OPTION_HISTORY"             => "N",    // Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP"                => "N",    // Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE"               => "N",    // Включить подгрузку стилей
    "CACHE_FILTER"                    => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS"                    => "N",    // Учитывать права доступа
    "CACHE_TIME"                      => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE"                      => "A",    // Тип кеширования
    "CHECK_DATES"                     => "Y",    // Показывать только активные на данный момент элементы
    "DETAIL_URL"                      => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER"            => "N",    // Выводить под списком
    "DISPLAY_DATE"                    => "N",    // Выводить дату элемента
    "DISPLAY_NAME"                    => "N",    // Выводить название элемента
    "DISPLAY_PICTURE"                 => "N",    // Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT"            => "N",    // Выводить текст анонса
    "DISPLAY_TOP_PAGER"               => "N",    // Выводить над списком
    "FIELD_CODE"                      => [    // Поля
                                              0 => "NAME",
                                              1 => "PREVIEW_TEXT",
                                              2 => "DETAIL_TEXT",
    ],
    "FILTER_NAME"                     => "",    // Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL"        => "N",    // Скрывать ссылку, если нет детального описания
    "IBLOCK_ID"                       => "5",    // Код информационного блока
    "IBLOCK_TYPE"                     => "content",    // Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",    // Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS"             => "N",    // Показывать элементы подразделов раздела
    "MESSAGE_404"                     => "",    // Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT"                      => "4",    // Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE"          => "N",    // Включить обработку ссылок
    "PAGER_DESC_NUMBERING"            => "N",    // Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL"                  => "N",    // Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS"               => "N",    // Выводить всегда
    "PAGER_TEMPLATE"                  => "",    // Шаблон постраничной навигации
    "PAGER_TITLE"                     => "Новости",    // Название категорий
    "PARENT_SECTION"                  => "",    // ID раздела
    "PARENT_SECTION_CODE"             => "",    // Код раздела
    "PREVIEW_TRUNCATE_LEN"            => "",    // Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE"                   => [    // Свойства
    ],
    "SET_BROWSER_TITLE"               => "N",    // Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED"               => "N",    // Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION"            => "N",    // Устанавливать описание страницы
    "SET_META_KEYWORDS"               => "N",    // Устанавливать ключевые слова страницы
    "SET_STATUS_404"                  => "N",    // Устанавливать статус 404
    "SET_TITLE"                       => "N",    // Устанавливать заголовок страницы
    "SHOW_404"                        => "N",    // Показ специальной страницы
    "SORT_BY1"                        => "SORT",    // Поле для первой сортировки новостей
    "SORT_BY2"                        => "",    // Поле для второй сортировки новостей
    "SORT_ORDER1"                     => "ASC",    // Направление для первой сортировки новостей
    "SORT_ORDER2"                     => "",    // Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK"            => "N",    // Строгая проверка раздела для показа списка
], false); ?>


<section class="work-area pad-90">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Портфолио</h2>
                <p>Лучший способ найти хорошую команду - это посмотреть результаты её работы</p>
            </div>
        </div>
        <div class="row">

            <? $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "PortfolioSectionsList", [
                "ADD_SECTIONS_CHAIN"  => "N",    // Включать раздел в цепочку навигации
                "CACHE_GROUPS"        => "N",    // Учитывать права доступа
                "CACHE_TIME"          => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE"          => "A",    // Тип кеширования
                "COUNT_ELEMENTS"      => "N",    // Показывать количество элементов в разделе
                "IBLOCK_ID"           => "6",    // Инфоблок
                "IBLOCK_TYPE"         => 'content',    // Тип инфоблока
                "SECTION_FIELDS"      => [    // Поля разделов
                  0 => "CODE",
                  1 => "NAME",
                ],
                "SHOW_PARENT_NAME"    => "Y",    // Показывать название раздела
                "TOP_DEPTH"           => "1",    // Максимальная отображаемая глубина разделов
            ], false); ?>

            <? $APPLICATION->IncludeComponent("bitrix:news.list", "PortfolioElementsList", [
                "IBLOCK_TYPE"                     => 'content',
                "IBLOCK_ID"                       => "6",
                "NEWS_COUNT"                      => 6,
                "SORT_BY1"                        => 'SORT',
                "SORT_ORDER1"                     => 'ASC',
                "FIELD_CODE"                      => ["CODE", "NAME", "PREVIEW_PICTURE",],
                "PROPERTY_CODE"                   => [],
                "DETAIL_URL"                      => "/portfolio/#SECTION_CODE#/#ELEMENT_CODE#/",
                "SET_TITLE"                       => 'N',
                "SET_LAST_MODIFIED"               => 'Y',
                "SET_STATUS_404"                  => 'Y',
                "SHOW_404"                        => 'N',
                "INCLUDE_IBLOCK_INTO_CHAIN"       => 'Y',
                "CACHE_FILTER"                    => "N",    // Кешировать при установленном фильтре
                "CACHE_GROUPS"                    => "N",    // Учитывать права доступа
                "CACHE_TIME"                      => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE"                      => "A",    // Тип кеширования
                "DISPLAY_TOP_PAGER"               => 'N',
                "DISPLAY_BOTTOM_PAGER"            => 'N',
                "DISPLAY_DATE"                    => 'N',
                "DISPLAY_NAME"                    => "Y",
                "CHECK_DATES"                     => 'Y',
            ], false); ?>

        </div>
    </div>
</section>

<? $APPLICATION->IncludeComponent("bitrix:news.list", "PortfolioElementsList", [
    "IBLOCK_TYPE"                     => 'content',
    "IBLOCK_ID"                       => "6",
    "NEWS_COUNT"                      => 6,
    "SORT_BY1"                        => 'SORT',
    "SORT_ORDER1"                     => 'ASC',
    "FIELD_CODE"                      => ["CODE", "NAME", "PREVIEW_PICTURE",],
    "PROPERTY_CODE"                   => [],
    "SET_TITLE"                       => 'N',
    "SET_LAST_MODIFIED"               => 'Y',
    "SET_STATUS_404"                  => 'Y',
    "SHOW_404"                        => 'N',
    "INCLUDE_IBLOCK_INTO_CHAIN"       => 'Y',
    "CACHE_FILTER"                    => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS"                    => "N",    // Учитывать права доступа
    "CACHE_TIME"                      => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE"                      => "A",    // Тип кеширования
    "DISPLAY_TOP_PAGER"               => 'N',
    "DISPLAY_BOTTOM_PAGER"            => 'N',
    "DISPLAY_DATE"                    => 'N',
    "DISPLAY_NAME"                    => "Y",
    "CHECK_DATES"                     => 'Y',
], false); ?>

<? $APPLICATION->IncludeComponent("bitrix:news.list", "Reviews", [
    "IBLOCK_TYPE"                     => 'content',
    "IBLOCK_ID"                       => "7",
    "NEWS_COUNT"                      => 9,
    "SORT_BY1"                        => 'SORT',
    "SORT_ORDER1"                     => 'ASC',
    "FIELD_CODE"                      => ["NAME", "PREVIEW_TEXT", 'DETAIL_TEXT'],
    "PROPERTY_CODE"                   => [],
    "SET_TITLE"                       => 'N',
    "SET_LAST_MODIFIED"               => 'Y',
    "SET_STATUS_404"                  => 'Y',
    "SHOW_404"                        => 'N',
    "INCLUDE_IBLOCK_INTO_CHAIN"       => 'Y',
    "CACHE_FILTER"                    => "N",    // Кешировать при установленном фильтре
    "CACHE_GROUPS"                    => "N",    // Учитывать права доступа
    "CACHE_TIME"                      => "36000000",    // Время кеширования (сек.)
    "CACHE_TYPE"                      => "A",    // Тип кеширования
    "DISPLAY_TOP_PAGER"               => 'N',
    "DISPLAY_BOTTOM_PAGER"            => 'N',
    "DISPLAY_DATE"                    => 'N',
    "DISPLAY_NAME"                    => "Y",
    "CHECK_DATES"                     => 'Y',
    
], false); 

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
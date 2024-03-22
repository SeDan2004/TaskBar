<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width;height=device-height">
        <title>Панель задач</title>
        <link rel="stylesheet" href="/static/index.css">

        <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="task_bar_header">
                <div class="amount_of_unshipped_goods">
                    <div class="currency_icon">
                        <p>₽</p>
                    </div>

                    <div>
                        <p>Сумма неотгруженных товаров</p>
                        <p class="amount">0</p>
                    </div>
                </div>
            </div>

            <div class="task_bar_content">
                <div class="task_bar">
                    <div class="search_box">
                        <p>Search:</p>
                        <input type="text">
                    </div>

                    <div class="task_bar_box">
                        <div class="task_bar_box_header">
                            <div class="task_num">
                                <p>№</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_theme">
                                <p>Тема</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_status">
                                <p>Статус задачи</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_date_of_completion">
                                <p>Дата выполнения</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_customer">
                                <p>Покупатель</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_note">
                                <p>Примечание</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_sales_plan">
                                <p>План продажа</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_account">
                                <p>Счёт</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_sales">
                                <p>Реализация</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_quarter">
                                <p>Квартал</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>

                            <div class="task_year">
                                <p>Год</p>
                                <div class="sort_btn_icons">
                                    <?php require("./icons/arrow.svg");?>
                                    <?php require("./icons/arrow.svg");?>
                                </div>
                            </div>
                        </div>

                        <div class="task_bar_box_content"></div>

                        <div class="task_bar_box_footer"></div>
                    </div>
                </div>
            </div>

            <div class="task_bar_footer">
                <p>С отмеченными: </p>
                <input type="button" value="Закрыть">
                <input type="button" value="Перенести на:">
                <input type="date" value=<?php echo date("Y-m-d");?>>
            </div>
        </main>    

        <script src="/static/index.js"></script>
    </body>
</html>
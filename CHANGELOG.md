        Журнал изменений:
            1. Начальная установка и настройка Laravel 7:
                - Новые файлы laravel/ui bootstrap scaffolding и миграции;
                - установлен laravel-debugbar;
                - языковые файлы;
                - остадьное - по дефолту
            2. Настройка дефолтной регистрации и отправка письма для верификации email:
                - resources/views/vendor/notifications/email.blade.php - скопирован и изменён шаблон письма;
                - routes/web.php - добавлена защита маршрутов от неверифицированного пользователя
                - app/User.php add implements MustVerifyEmail для использования стандартной верификации
            3. 14.01.2021 (разработка)
                - backend/resources/views/vendor/notifications/email.blade.php - удалил кастомный шаблон еmail сообщения - пусть используется дефолтный
                - backend/resources/lang/ru.json - языковой файл для всех остальных языковых строк
                
        Журнал изменений:
            1. Начальная установка и настройка Laravel 7:
                - Новые файлы laravel/ui bootstrap scaffolding и миграции;
                - установлен laravel-debugbar;
                - языковые файлы;
                - остальное - по дефолту
            2. Настройка дефолтной регистрации и отправка письма для верификации email:
                - resources/views/vendor/notifications/email.blade.php - скопирован и изменён шаблон письма;
                - routes/web.php - добавлена защита маршрутов от неверифицированного пользователя
                - app/User.php add implements MustVerifyEmail для использования стандартной верификации
            3. 14.01.2021 (разработка)
                - backend/resources/views/vendor/noti5fications/email.blade.php - удалил кастомный шаблон еmail сообщения - пусть используется дефолтный
                - backend/resources/lang/ru.json - языковой файл для всех остальных языковых строк
            4. В данном коммите:
                - backend/app/Http/Controllers/HomeController.php переделан в backend/app/Http/Controllers/TaskController.php;
                - backend/app/Task.php создана модель "Задача" и описаные её свойства и отншения с моделью "Пользователь";
                - backend/database/migrations/2021_01_14_054538_create_tasks_table.php - миграция для таблицы Tasks
                - backend/package-lock.json - установлен Font Awesome;
                - backend/app/Providers/RouteServiceProvider.php - теперь public const HOME = '/tasks', а не home;
                - backend/resources/sass/app.scss - подключены стили Font Awesome;
                - backend/resources/lang/ru/tasks.php - новый языковой файл;
                - backend/resources/views/home.blade.php теперь backend/resources/tasks/index.blade.php;
                - backend/resources/views/welcome.blade.php - небольшие правки;
                - backend/routes/web.php - маршруты для контролера "Задач" - объекдинены в группу
                - backend/app/User.php - в моделе определен метод отношений с задачами;
                - README.md - правки в инструкции;
                - .gitignore - новые инструкции.
            5. Коммите перед пушем в master:
                - .gitignore - новые инструкции;
                - backend/app/Http/Controllers/TaskController.php - функционал отображения списка задач и удаление конкретной задачи;
                - backend/app/Providers/AuthServiceProvider.php - регистрация политики App\Policies\TaskPolicy для модели App/Task;
                - backend/app/Task.php, backend/app/User.php, backend/routes/web.php - комментарии, рефакторинг;
                - backend/resources/lang/ru/tasks.php - новые яызковые переменные;
                - backend/resources/views/tasks/index.blade.php, backend/resources/views/welcome.blade.php - разметка новыъх элементов, правки;
                - backend/app/Policies/TaskPolicy.php - новая политика;
                - backend/app/Repositories/TaskRepository.php - новый репозиторий;
                - backend/resources/views/common/errors.blade.php - новый шаблон для ошибок;
                - backend/resources/views/tasks/all_tasks.blade.php - шаблон вывода списка дел;
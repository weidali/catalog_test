## _Тестовое задание_
## Технические требования: 
- Laravel 8
- AdminLTE
- Laravel DataTables
- MySQL
- PHP 7.4+

> `Важно!`
> При выполнении тестового задания Вы можете дополнительно использовать любые сторонние PHP и/или Javascript/CSS библиотеки, без всяких ограничений. Все 3rd party PHP/Javascript/CSS библиотеки должны быть добавлены в проект через composer/bower/npm/yarn если библиотека поддерживает такой способ установки. 

## Catalogue
**Цель:**
Каталог покупателей представляет собой базу данных с админ интерфейсом доступным только авторизованным пользователям. При создании UI используйте только готовые компоненты AdminLTE. 
1. Информация о каждом покупателе должна иметь следующие данные: 
    - ФИО;
    - Номер телефона;
    - Электронная почта; 
    - Фотография;
    Системные поля: `created_at`, `updated_at`, `admin_created_id`, `admin_updated_id` которые не должны быть доступны для редактирования админу но должны обновляться системой во время CRUD операций. 
2. У каждого покупателя есть как минимум 1 покупка из N-го количества товаров. 
3. Для товаров из покупок покупателя должна быть предусмотрена справочная таблица. Информация о каждом товаре должна иметь следующие данные: 
    - Наименование; 
    - SKU;
    - Цена; 
    - Фотография;
    - Системные поля: `created_at`, `updated_at`, `admin_created_id`, `admin_updated_id` которые не должны быть доступны для редактирования админу но должны обновляться системой во время CRUD операций. 
4. База данных должна содержать  не менее 3 000  товаров,  а также не менее 2 000 покупателей с информацией о покупках.

**Реализация:**
Создайте базу данных используя миграции Laravel. 
Используйте Laravel seeder для заполнения базы данных фейковой информацией. Данные товаров и покупателей должны выглядеть реалистично, а не быть просто строкой рандомных символов. Мы рекомендуем использовать библиотеку Faker для этого, но можно воспользоваться любой другой с которой Вы больше знакомы. 
Используя стандартные функции Laravel реализуйте функционал по аутентификации пользователя. 
Создайте страницу на которой будет выводиться список покупателей в табличном виде (используя datatables) с отображением всех полей, а также поле с количеством совершенных покупок и полем с суммой всех совершенных покупок,  а также возможностью сортировать по любому полю и осуществлять поиск. 
Реализуйте остальные CRUD операции для добавления покупателя, а также новой  покупки покупателя.  После сохранения отправлять пользователя на страницу со списком. Все поля должны быть редактируемыми. Для всех полей должна быть реализована валидация: 

> При создании покупателя:
> - ФИО: минимум 2, максимум 256 символов; 
> - Номер телефона: валидный номер телефона в международном формате, разрешены только канадские номера; 
> - Электронная почта: валидный адрес электронной почты.
> - Фото
> - При создании покупки:
> - Покупатель обязательное поле;
> - В покупке должно быть не менее одного товара

Реализуйте аналогичный CRUD интерфейс для справочной таблицы товаров. Ограничение на длину наименования товара: максимум 256 символов. Цена не может быть нулевой. После сохранения отправлять пользователя на страницу со списком. 
Ограничения к файлу с фотографией(для покупателя и товара): максимум 5 Мб, минимум 300x300 пикселей, форматы: jpg/png. Выходной формат 300x300px, в jpg (80% quality) вырезаем центр/центр, делаем автоповорот фото при необходимости. Добавьте дополнительную колонку с уменьшенной фотографией покупателя/товара на странице списка всех покупателей/товаров.
Создать автоматические тесты созданного функционала.  Покрытие тестами должно составлять до 90% кода.
Добавить описание по установке проекта.

**Результат:**:
Тестовое задание необходимо выложить на репозитории, GitHub/GitLab/Bitbucket дать доступ, если это приватный репозиторий.

`Screenshots`:
[![Screen|1](https://downloader.disk.yandex.ru/preview/f5f2ac62d8095d4106b35b2859940832df8105e035caacf7b939912d4dec683f/616b158b/tM4wEXTyGIq5gWVwGjUYX7IWbh3PnKX7FW2RicnYGifJAnyUsyLwvdtCf3XH8-zMfafY3orSYpVpBqSM-ftmQQ%3D%3D?uid=0&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-29%20%D0%B2%2017.45.40.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/6o3R9me59yvvng) [![Screen|2](https://downloader.disk.yandex.ru/preview/b305aaec22ba4822bfd564fa7a9059ff8dd9aa45f24f0cde36f3cdd0294fecbc/616b1611/6Qjz0Vf94vZFV3UaYjuuaLIWbh3PnKX7FW2RicnYGieFqiVj52k05Q3Mh63ZscRY3ZnQh4kkhHYwpJjjU1mL0Q%3D%3D?uid=0&filename=Снимок экрана 2021-09-29 в 17.59.34.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/eS_q_FlZqA4scA) [![Screen|3](https://downloader.disk.yandex.ru/preview/4f03840d559904bc922e6ba677b7650089a6931ca993b7dc7ee5a45713efd75f/616b1656/3knt6EseCYIwy5QQb7BexbIWbh3PnKX7FW2RicnYGifSDoxIgpBCZ-RuUznuc6z8askFDlz8aFopPkI-EpSKmw%3D%3D?uid=0&filename=Снимок экрана 2021-09-30 в 01.05.15.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/AX2VFU0BTjlJkw) [![Screen|4](https://downloader.disk.yandex.ru/preview/8f3cb1bc7d46bde3d5d6e0fdbb7821c34ce31d9058c8dc308a6be972b353750b/616b1687/hQ027EbCCGxfIQUlqn4oO7IWbh3PnKX7FW2RicnYGic2-K3_0jPukv8a4s3DgsbfQrWRe5enm5CPcZHzaTUwGQ%3D%3D?uid=0&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2001.05.31.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/WDlB6Db2uqz1Yg) [![Screen|5](https://downloader.disk.yandex.ru/preview/5030f719ca5ac5b79e7dc361475de0d40f7bc58e8110036efea68aa59bce9b5c/616b16eb/gDvSIZIulDUuyw-2oSvCz6jMLWzDTkuBTzAw1kes8NBpFzQqAqjvtxa8smUiOR9KvMxfIYlGcI2YgnvYdub4tQ%3D%3D?uid=0&filename=Снимок экрана 2021-09-30 в 22.52.00.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/GlXlBNPzvssUwA) [![Screen|6](https://downloader.disk.yandex.ru/preview/f32eb821b67158d5e2a00f20e121c204207f3b1a39aecda9651f8a8cfc1e347d/616b1711/DeGIA8nU0Xb7Uv-Bg9hTSbIWbh3PnKX7FW2RicnYGidIzcuTfY2rVfHl528l2HqhLnkFBoiROO-q--XKcKOzzg%3D%3D?uid=0&filename=Снимок экрана 2021-09-30 в 22.52.27.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/KTPUFUw9ZzlKIg) [![Screen|7](https://downloader.disk.yandex.ru/preview/04980a1b858d9b6731f258e886378480dd7223c6b5db9049fbb930bb979604ef/616b1730/y2TiUKnWkwaV6z1c0L7T5LIWbh3PnKX7FW2RicnYGidwgjRgr6ePGAhx7O6qq3Kr5tMqwqH8BYoMbyy5HSpQeg%3D%3D?uid=0&filename=Снимок экрана 2021-09-30 в 22.52.43.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=0&tknv=v2&size=100x100)](https://disk.yandex.ru/i/H5lwy6zDRPkGdA)

##### License
MIT (Free Software)

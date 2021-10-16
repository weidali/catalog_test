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
[![Screen|1](https://4.downloader.disk.yandex.ru/preview/b6ef108fe0fd9b99defc1159d4828be339718172fa39a42d3e5e1fa5cf1c13fc/inf/tM4wEXTyGIq5gWVwGjUYX7IWbh3PnKX7FW2RicnYGifJAnyUsyLwvdtCf3XH8-zMfafY3orSYpVpBqSM-ftmQQ%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-29%20%D0%B2%2017.45.40.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/6o3R9me59yvvng) [![Screen|2](https://3.downloader.disk.yandex.ru/preview/652576dfa022e06acad4bf39b34c85ac9bcf72b23a5979e19ce8c9e973e6c762/inf/6Qjz0Vf94vZFV3UaYjuuaLIWbh3PnKX7FW2RicnYGieFqiVj52k05Q3Mh63ZscRY3ZnQh4kkhHYwpJjjU1mL0Q%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-29%20%D0%B2%2017.59.34.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/eS_q_FlZqA4scA) [![Screen|3](https://2.downloader.disk.yandex.ru/preview/4623917586eeae6ae93e8c7affbe9f8e5e5d879b8d948edb2b33889b0d1576ab/inf/3knt6EseCYIwy5QQb7BexbIWbh3PnKX7FW2RicnYGifSDoxIgpBCZ-RuUznuc6z8askFDlz8aFopPkI-EpSKmw%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2001.05.15.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/AX2VFU0BTjlJkw) [![Screen|4](https://4.downloader.disk.yandex.ru/preview/d39294d0a901096c484b9802bb32a02b6b0c96cb9426ad247dab7b30f39632ea/inf/hQ027EbCCGxfIQUlqn4oO7IWbh3PnKX7FW2RicnYGic2-K3_0jPukv8a4s3DgsbfQrWRe5enm5CPcZHzaTUwGQ%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2001.05.31.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/WDlB6Db2uqz1Yg) [![Screen|5](https://4.downloader.disk.yandex.ru/preview/3902762b222c7b39d897d6ac6d44fb6cb66c65ab75b7c0cd65996f43ce2acc30/inf/gDvSIZIulDUuyw-2oSvCz6jMLWzDTkuBTzAw1kes8NBpFzQqAqjvtxa8smUiOR9KvMxfIYlGcI2YgnvYdub4tQ%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2022.52.00.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/GlXlBNPzvssUwA) [![Screen|6](https://2.downloader.disk.yandex.ru/preview/af3da2c72b1d9058a3e9c9aaf6ef2b44351297d56bd1bda03e02ecc8f78d8129/inf/DeGIA8nU0Xb7Uv-Bg9hTSbIWbh3PnKX7FW2RicnYGidIzcuTfY2rVfHl528l2HqhLnkFBoiROO-q--XKcKOzzg%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2022.52.27.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/KTPUFUw9ZzlKIg) [![Screen|7](https://1.downloader.disk.yandex.ru/preview/6b79bd5e69e87ba9159c3b1946d97c71b7c06b2eeecc399832e8b764b5222fcd/inf/y2TiUKnWkwaV6z1c0L7T5LIWbh3PnKX7FW2RicnYGidwgjRgr6ePGAhx7O6qq3Kr5tMqwqH8BYoMbyy5HSpQeg%3D%3D?uid=207575319&filename=%D0%A1%D0%BD%D0%B8%D0%BC%D0%BE%D0%BA%20%D1%8D%D0%BA%D1%80%D0%B0%D0%BD%D0%B0%202021-09-30%20%D0%B2%2022.52.43.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&owner_uid=207575319&tknv=v2&size=160x160)](https://disk.yandex.ru/i/H5lwy6zDRPkGdA)

##### License
MIT (Free Software)

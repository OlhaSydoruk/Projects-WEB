sika-crisis-website

Коміти робити частіше

- с бутстрапом можна робити змінні і також їх використовувати 
- бутстрап можна робити зміну primary кольорів

VOTE !!!

- { path: ^/admin, roles: ROLE_ADMIN }: 
- Це правило говорить Symfony про те, що для всіх URL,
- які відповідають шаблону ^/admin (тобто,
- починаються з / admin), потрібна наявність ролі ROLE_ADMIN.
- Таким чином, лише користувачі з роллю ROLE_ADMIN мають доступ до URL-адреси,
- відповідним адміністративним сторінкам.

#- { path: ^?!/login, roles: ROLE_USER }
Якщо шлях не є входом в систему, користувач повинен мати роль юзер, повністю вся програмка потребує аутентифіцированного користувача.

symfony server:start
symfony server:stop

php bin/console doct:schema:update --force    обновити структуру БД 
php bin/console doctrine:fixtures:load   завантажити дані
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:status
php bin/console doct:schema:update --dump-sql

php bin/console make:entity
composer require easycorp/easyadmin-bundle
composer require admin    
symfony console make:admin:crud
php bin/console make:migration - зробити сутність  та передати її
php bin/console doctrine:migrations:migrate не знаю чому але разом йде
symfony console make:admin:dashboard
php bin/console make:fixture  

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',

        ]);

        DB::table('days')->insert([
            [
                'day' => '1',
                'name' => 'Что может угрожать вашим данным и какие методы используют злоумышленники?',
                'description' => 'Возможность сделать карусель с возможностью перелистывания отдельных текстовых блоков: Что угрожает данным?
 Потеря
 Утечки и компрометация – ваши данные доступны не только вам
 Искажение

Цифровая среда предоставляет злоумышленникам много возможностей для доступа к вам и вашим данным посредством:
 Сайтов и приложений
 Мессенджеров
 Электронной почты
 Социальных сетей

Какими методами пользуются злоумышленники?
 Социальная инженерия
 Вредоносное ПО
 Эксплуатация уязвимостей устройств
 Компрометация учетных данных

Что интересует злоумышленников?
 Учетные данные ваших аккаунтов
 Переписка и компрометирующие материалы
 Данные платежных карт
 Персональные данные',
                'longread' => '',
            ],
            [
                'day' => '2',
                'name' => '123456… насколько стойкий ваш пароль?',
                'description' => 'Проверьте свои пароли на надежность:
	Длина пароля от 12 символов
	Буквы в ВЕРХНЕМ и нижнем регистре
	Специальные знаки (!@#$%^&*()<>?/| и др.)
	Цифры
	В пароле отсутствует информация, связанная с вами
	Знаете только вы',
                'longread' => '',
            ],
            [
                'day' => '3',
                'name' => 'Как часто вы обновляете пароли?',
                'description' => 'Поставьте напоминание, чтобы обновить все важные пароли через 6 месяцев!',
                'longread' => '',
            ],
            [
                'day' => '4',
                'name' => 'Один сервис – один пароль',
                'description' => 'Проверьте, не используете ли вы одинаковые пароли на разных аккаунтах. Замените одинаковые пароли!',
                'longread' => '',
            ],
            [
                'day' => '5',
                'name' => 'Перейдете на новый уровень защищенности ваших аккаунтов!',
                'description' => 'Примените двухфакторную аутентификацию (2ФА) во всех важных аккаунтах:
	личный почтовый ящик
	все аккаунты в социальных сетях и системах мгновенного обмена сообщениями
	аккаунты в государственных информационных системах',
                'longread' => 'Примените двухфакторную аутентификацию (2ФА) во всех важных аккаунтах:
	личный почтовый ящик
	все аккаунты в социальных сетях и системах мгновенного обмена сообщениями
	аккаунты в государственных информационных системах',
            ],
            [
                'day' => '6',
                'name' => 'Узнайте, как усилить двухфакторную аутентификацию',
                'description' => 'Используйте приложения для генерации одноразового кода! Это обеспечит приватность и доступность даже в случае отсутствия мобильного интернета.

Примеры приложений: Яндекс Ключ, FreeOTP и другие.',
                'longread' => 'Используйте приложения для генерации одноразового кода! Это обеспечит приватность и доступность даже в случае отсутствия мобильного интернета.

Примеры приложений: Яндекс Ключ, FreeOTP и другие.',
            ],
            [
                'day' => '7',
                'name' => 'Уменьшайте публикацию личных данных в сети',
                'description' => 'Создайте отдельный почтовый ящик для регистрации в различных сервисах!
Настройте двухфакторную аутентификацию (2ФА) для подобных почтовых ящиков тоже. Таким образом будет меньше шансов компрометации вашего основного адреса электронной почты.',
                'longread' => '',
            ],
            [
                'day' => '8',
                'name' => 'Обновите настройки безопасности вашей электронной почты!',
                'description' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов электронной почты на предмет защищенности. Обновите настройки безопасности в ваших почтовых сервисах!',
                'longread' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов электронной почты на предмет защищенности. Обновите настройки безопасности в ваших почтовых сервисах!',
            ],
            [
                'day' => '9',
                'name' => 'Обновите настройки безопасности ваших социальных сетей!',
                'description' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов социальных сетей на предмет защищенности. Обновите настройки безопасности ваших аккаунтов!',
                'longread' => 'Ознакомьтесь с рекомендациями по проверке аккаунтов социальных сетей на предмет защищенности. Обновите настройки безопасности ваших аккаунтов!',
            ],
            [
                'day' => '10',
                'name' => 'Обновите настройки безопасности ваших мессенджеров!',
                'description' => 'Ознакомьтесь с рекомендациями по проверке защищенности аккаунтов сервисов мгновенного обмена сообщениями. Обновите настройки безопасности ваших мессенджеров!',
                'longread' => 'Ознакомьтесь с рекомендациями по проверке защищенности аккаунтов сервисов мгновенного обмена сообщениями. Обновите настройки безопасности ваших мессенджеров!',
            ],
            [
                'day' => '11',
                'name' => 'Что делать, если ваш мессенджер взломали мошенники?',
                'description' => 'Ознакомьтесь с алгоритмом действий в случае взлома мессенджера и поделитесь с близкими и коллегами!',
                'longread' => 'Ознакомьтесь с алгоритмом действий в случае взлома мессенджера и поделитесь с близкими и коллегами!',
            ],
            [
                'day' => '12',
                'name' => 'Минимизируйте риск компрометации своих аккаунтов',
                'description' => 'При работе на чужих устройствах всегда выходите из аккаунтов, удаляйте историю из браузера и замените пароли от аккаунтов, в которые входили!

На чужих устройствах могут быть следящие программы и вирусы (зачастую без ведома владельца устройства), а информация сохраняется на диске в качестве кэша',
                'longread' => '',
            ],
            [
                'day' => '13',
                'name' => 'Проведите «уборку» в вашем браузере!',
                'description' => 'Регулярно очищайте браузер от различной идентифицирующей вас и ваши привычки информации: файлы cookies и кэш.',
                'longread' => 'Регулярно очищайте браузер от различной идентифицирующей вас и ваши привычки информации: файлы cookies и кэш.',
            ],
            [
                'day' => '14',
                'name' => 'Вы уверены, что ваши данные доступны только вам?',
                'description' => 'Проверьте свои аккаунты на предмет утечек в специальных сервисах: например, chk.safe-surf.ru или haveibeenpwned.com.

Незамедлительно замените пароли в аккаунтах, которые были скомпрометированы',
                'longread' => '',
            ],
            [
                'day' => '15',
                'name' => 'Используйте безопасные сканеры QR-кодов!',
                'description' => 'Используйте безопасные сканеры QR-кодов, которые предварительно демонстрируют адрес сайта и для перехода по ссылке необходимо ваше подтверждение',
                'longread' => '',
            ],
            [
                'day' => '16',
                'name' => 'Не обменивайтесь чувствительными данными при подключении к публичным wi-fi сетям',
                'description' => 'Данные, передаваемые через публичные wi-fi-сети плохо защищены, могут подвергнуться компрометации и краже. До подключения к таким сетям закройте все приложения с чувствительными данными (финансовые, госуслуг и др.)',
                'longread' => '',
            ],
            [
                'day' => '17',
                'name' => 'Заведите отдельную карту для онлайн-покупок!',
                'description' => 'Не храните на ней деньги. Переводите ровно ту сумму, которая необходима для оплаты вашей покупки.',
                'longread' => '',
            ],
            [
                'day' => '18',
                'name' => 'Установите и настройте антивирусное ПО',
                'description' => 'Применяйте отечественное антивирусное ПО с платной лицензией для настольных и мобильных устройств. В бесплатных антивирусных решениях отсутствует функционал защиты в режиме реального времени, например при просмотре вэб-сайтов и проверка поступающих мгновенных сообщений.',
                'longread' => '',
            ],
            [
                'day' => '19',
                'name' => 'Установите обновления операционных систем ваших устройств!',
                'description' => 'Проверьте наличие и установите обновления в операционных системах ваших настольных и мобильных устройств. Перед запуском обновлений рекомендуется закрыть открытые приложения и файлы, сделать резервные копии чувствительных данных',
                'longread' => '',
            ],
            [
                'day' => '20',
                'name' => 'Установите обновления программ и приложений!',
                'description' => 'Проверьте наличие и установите обновления браузеров, антивирусного и другого ПО, установленного на всех ваших устройствах',
                'longread' => '',
            ],
            [
                'day' => '21',
                'name' => 'Отключите уведомления на экране блокировки мобильных устройств!',
                'description' => 'По умолчанию уведомления демонстрируются даже на заблокированных устройствах, что может привести к компрометации чувствительных данных и личной переписки.',
                'longread' => '',
            ],
            [
                'day' => '22',
                'name' => 'Обновите настройки конфиденциальности программ и приложений!',
                'description' => 'Изучите и настройте приемлемые разрешения для мобильных приложений, расширений браузеров и настроек конфиденциальности на всех устройствах в соответствии с рекомендациями',
                'longread' => 'Изучите и настройте приемлемые разрешения для мобильных приложений, расширений браузеров и настроек конфиденциальности на всех устройствах в соответствии с рекомендациями',
            ],
            [
                'day' => '23',
                'name' => 'Создайте резервные копии чувствительных данных!',
                'description' => 'Создайте резервные копии данных с настольных и мобильных устройств согласно рекомендациям',
                'longread' => 'Создайте резервные копии данных с настольных и мобильных устройств согласно рекомендациям',
            ],
            [
                'day' => '24',
                'name' => 'Изучите, какая информация является чувствительной, и не рекомендуется публиковать',
                'description' => 'Не нужно публиковать о себе сведения, которыми могут воспользоваться мошенники:
	Паспортные данные;
	Личный номер телефона;
	Дата и место рождения;
	Домашний адрес;
	Фотографии дорогостоящего имущества;
	Подробности личной жизни;
	Сведения о детях (личный номер телефона, адрес и номер школы, дата им место рождения, места проведения досуга и т.д.);
	Сведения об образовании;
	Ссылки на аккаунты родственников.',
                'longread' => '',
            ],
            [
                'day' => '25',
                'name' => 'Изучите основные приемы интернет-мошенников!',
                'description' => 'Ознакомьтесь со способами обмана/манипуляции с целью кражи финансовых средств, данных и реквизитов доступа.',
                'longread' => 'Ознакомьтесь со способами обмана/манипуляции с целью кражи финансовых средств, данных и реквизитов доступа.',
            ],
            [
                'day' => '26',
                'name' => 'Сможете ли вы распознать мошенническое сообщение?',
                'description' => 'В разработке',
                'longread' => '',
            ],
            [
                'day' => '27',
                'name' => 'Не доверяйте запросам, в которых у вас просят деньги, банковские реквизиты или одноразовые коды! Даже от знакомых и близких!',
                'description' => 'После взлома аккаунтов пользователей сети (почта, социальная сеть, мессенджеры), всем, с кем общались  владельцы взломанных аккаунтов, поступают массовые рассылки мошеннических сообщений (текстовые и голосовые) с запросом денег, банковских реквизитов или одноразовых кодов.
Не доверяйте подобным сообщениям, даже от близких! Свяжитесь с тем, от кого поступило сообщение голосом, видео звонком или очно и уточните суть/истинность поступившего запроса',
                'longread' => '',
            ],
            [
                'day' => '28',
                'name' => 'Изучите способы защиты от онлайн-мошенников!',
                'description' => 'Изучите основные правила противодействия онлайн-мошенникам и поделитесь информацией с близкими',
                'longread' => 'Изучите основные правила противодействия онлайн-мошенникам и поделитесь информацией с близкими',
            ],
            [
                'day' => '29',
                'name' => 'Соблюдайте правила этики в сети',
                'description' => 'Запомните «золотое правило» общения в сети: не стоит писать человеку того, что вы бы ему не сказали лично.

Изучите базовые правила сетевого этикета и поделитесь информацией с близкими!',
                'longread' => 'Запомните «золотое правило» общения в сети: не стоит писать человеку того, что вы бы ему не сказали лично.

Изучите базовые правила сетевого этикета и поделитесь информацией с близкими!',
            ],
            [
                'day' => '30',
                'name' => 'Изучите способы защиты детей от опасных коммуникации в сети',
                'description' => 'Изучите базовые принципы безопасной коммуникации в сети и поделитесь информацией с близкими!',
                'longread' => 'Изучите базовые принципы безопасной коммуникации в сети и поделитесь информацией с близкими!',
            ],
            [
                'day' => '31',
                'name' => 'Изучите признаки неблагонадежных сайтов',
                'description' => 'Неблагонадежные сайты содержат следующие признаки:
	Отсутствуют сведения об адресе, информации о юридическом лице, отсутствует номер телефона
	Адрес сайта похож на адреса известных сайтов, расположены вне доменной зоны ru, su, рф
	Предложения через чур хорошие, чтобы быть правдой
	В адресном поле отсутствует замочек и протокол https. Браузер уведомляет о просроченном сертификате
	Сайт содержит грамматические ошибки, мало страниц, нелогичная структура',
                'longread' => '',
            ],
        ]);
    }
}

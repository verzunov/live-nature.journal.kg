<?php return array (
  'plugins.generic.usageStats.settings.logging' => 'Параметры журнала доступа',
  'plugins.generic.usageStats.settings.createLogFiles' => 'Создавать файлы журнала',
  'plugins.generic.usageStats.settings.createLogFiles.description' => 'Активация этого параметра приведет к созданию модулем файлов журнала доступа в каталоге files. Эти файлы должны быть использованы для извлечения данных по статистике использования. Если вы не хотите создавать дополнительные файлы журнала доступа, вы можете оставить этот параметр отключенным и использовать файлы журнала доступа вашего сервера.',
  'plugins.generic.usageStats.settings.logParseRegex' => 'Регулярное выражение для разбора файлов журнала',
  'plugins.generic.usageStats.settings.logParseRegex.description' => 'Регулярное выражение, используемое по умолчанию, может разибрать файлы журнала доступа apache в комбинированном формате, а также файлы журнала, создаваемые модулем. Если ваши файлы журнала доступа формируются в другом формате, то вам необходимо вставить регулярное выражение, которое может разобрать его и выдать ожидаемые значения. Для получения более подробной информации смотрите UsageStatsLoader::_getDataFromLogEntry().',
  'plugins.generic.usageStats.settings.saved' => 'Настройки модуля «Статистика использования» сохранены',
  'plugins.generic.usageStats.settings.dataPrivacyOption' => 'Параметр конфиденциальности данных',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath' => 'Путь к файлу для соли (salt), используемой в целях анонимности',
  'plugins.generic.usageStats.settings.dataPrivacyOption.saltFilepath.invalid' => 'К файлу соли (salt) нет доступа для записи.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requirements' => 'Чтобы быть уверенным в конфиденциальности данных, вы должны указать файл, доступный для чтения и записи веб-пользователем, в этом файле будет содержаться случайным образом сгенерированное значение соли (salt). Это файл НЕ ДОЛЖЕН попадать в резервные копии, чтобы быть уверенным в конфиденциальности данных. Соль (salt) генерируется случайным образом, используя один из следующих вариантов: функция mcrypt_create_iv, которая требует расширения mcrypt для PHP; функция openssl_random_pseudo_bytes, которая требует расширения openssl для PHP; файл /dev/urandom, который работает только на *nix-системах; функция mt_rand, которая не является криптографически безопасной. Таким образом, если вы используете сервер под Windows, пожалуйста, удостоверьтесь, что вы установили либо расширение mcrypt для PHP или включили openssl, чтобы получить криптографически безопасно сгенерированную соль (salt).',
  'plugins.generic.usageStats.settings.dataPrivacyOption.description' => 'Включите этот параметр, если вы хотите использовать версию плагина, которая учитывает требования законов о конфиденциальности, то есть хранит хэшированные IP-адреса, сообщает пользователям об отслеживании информации и дает возможность пользователям отказаться. Обратите внимание: при включении этого параметра нельзя будет воспользоваться возможностями плагина, связанными с географическим местоположением.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.requiresSalt' => 'Включение конфиденциальности данных требует файла с солью (salt).',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesCity' => 'Включение конфиденциальности данных убирает Город из дополнительных статистик.',
  'plugins.generic.usageStats.settings.dataPrivacyOption.excludesRegion' => 'Включение конфиденциальности данных убирает Регион из дополнительных статистик.',
  'plugins.generic.usageStats.settings.dataPrivacyCheckbox' => 'Учитывать требования конфиденциальности данных',
  'plugins.generic.usageStats.settings.optionalColumns' => 'Дополнительная статистическая информация',
  'plugins.generic.usageStats.settings.optionalColumns.description' => 'Включить или отключить сбор следующей дополнительной информации. Это повлияет на возможные статистические отчеты, которые вы можете получить, а также повлияет на размер базы данных. НЕ МЕНЯЙТЕ НАСТРОЙКУ, если вы не до конца понимаете, что вы делаете.',
  'plugins.generic.usageStats.settings.optionalColumns.cityRequiresRegion' => 'Дополнительная колонка «Город» требует наличия дополнительной колонки «Регион».',
  'plugins.generic.usageStats.settings.archives' => 'Архивы',
  'plugins.generic.usageStats.settings.compressArchives.description' => 'Включите этот параметр для сжатия архивированных файлов журнала с помощью инструмента gzip (вам нужно будет настроить параметр gzip в файле config.inc.php). Если у вас сайт с большим трафиком, стоит включить этот параметр, чтобы сэкономить место на диске.',
  'plugins.generic.usageStats.settings.compressArchives' => 'Сжать архивы',
  'plugins.generic.usageStats.settings.statsDisplayOptions' => 'Параметры отображения статистики',
  'plugins.generic.usageStats.settings.statsDisplayOptions.contextWide' => 'Эти настройки будут применены только для статистики использования в контексте «{$contextName}».',
  'plugins.generic.usageStats.settings.statsDisplayOptions.display' => 'Показывать график статистики материалов читателю',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType' => 'Выберите тип графика для отображения статистики скачивания',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.bar' => 'Столбики',
  'plugins.generic.usageStats.settings.statsDisplayOptions.chartType.line' => 'Линии',
  'plugins.generic.usageStats.settings.statsDisplayOptions.datasetMaxCount' => 'Задайте максимальное количество данных для одновременного представления в конкретной точке оси x. Большое значение может генерировать малопонятные графики. Безопасное значение — между 3 и 5.',
  'plugins.generic.usageStats.usageStatsLoaderName' => 'Задача загрузчика файлов статистики использования',
  'plugins.generic.usageStats.openFileFailed' => 'Файл «{$file}» не может быть открыт и был отклонен.',
  'plugins.generic.usageStats.invalidLogEntry' => 'Строка с номером  {$lineNumber} из файла «{$file}» является некорректной записью журнала и файл был отклонен.',
  'plugins.generic.usageStats.removeUrlError' => 'Строка с номером {$lineNumber} из файла «{$file}» содержит URL-адрес, из которого система не может убрать свой базовый URL-адрес.',
  'plugins.generic.usageStats.loadDataError' => 'Невозможно загрузить данные, извлеченные из файла «{$file}». Файл был перемещен снова в каталог stage.',
  'plugins.generic.usageStats.pluginNotEnabled' => 'Модуль «Статистика использования» отключен. Файлы журнала не обрабатываются.',
  'plugins.generic.usageStats.processingPathNotEmpty' => 'Каталог {$directory} не является пустым. Это может означать, что предыдущая обработка завершилась неудачей или обработка запущена параллельно. Этот файл будет автоматически заново обработан, если вы используете scheduledTasksAutoStage.xml, в противном случае вам необходимо переместить любые оставшиеся файлы в каталоге processing обратно в каталог stage.',
  'plugins.generic.usageStats.displayName' => 'Модуль «Статистика использования»',
  'plugins.generic.usageStats.description' => 'Представляет данные статистики использования объектов. Может использовать файлы журнала доступа сервера для извлечения статистики.',
  'plugins.reports.usageStats.report.displayName' => 'Отчет о статистике использования PKP',
  'plugins.reports.usageStats.report.description' => 'Отчет о статистике использования PKP, формируемый по умолчанию (готовый для COUNTER)',
  'plugins.generic.usageStats.optout.displayName' => 'Информация о конфиденциальности модуля «Статистика использования»',
  'plugins.generic.usageStats.optout.description' => 'Информация о конфиденциальности модуля «Статистика использования»',
  'plugins.generic.usageStats.optout.title' => 'Информация о статистике использования',
  'plugins.generic.usageStats.optout.shortDesc' => 'Мы сохраняем анонимные данные о статистике использования. Пожалуйста прочтите подробности в <a href="{$privacyInfo}">Информации о конфиденциальности</a>.',
  'plugins.generic.usageStats.optout.done' => '
		<p>Вы отказались от сбора статистики использования. Пока вы видите это сообщение, статистика о вашем использовании этого сайта не будет собираться. Щелкните на кнопке ниже, чтобы изменить свое решение.</p>',
  'plugins.generic.usageStats.optin' => 'Разрешить',
  'plugins.generic.usageStats.optout' => 'Отклонить',
  'plugins.generic.usageStats.optout.cookie' => '
		<p>При желании вы можете отказаться от участия в процессе сбора данных. Щелкнув на кнопку «Отклонить» ниже, вы можете явно отказаться от участия в статистическом анализе. При нажатии кнопки «Отклонить» в вашей системе создается файл <em>cookie</em>, который хранит данное решение. Если настройки безопасности вашего браузера автоматически удаляют файлы cookie, вам нужно будет снова нажимать на конпку «Отклонить» при следующем входе в этот журнал. Файл cookie действует только для одного браузера. Если вы используете другой браузер, вам нужно снова нажать кнопку «Отклонить». В этом cookie не хранится никакая личная информация о вас. Cookie с отказом действителен в течение одного года после вашего последнего входа в журнал.</p>
		<p>Пожалуйста помните, что общие журналы доступа сервера не попадают под ваше решение отказаться от процесса подробной оценки. Пожалуйста, прочтите наше общее <a href="{$privacyStatementUrl}">Заявление о конфиденциальности</a>.</p>',
  'plugins.reports.usageStats.metricType' => 'PKP/COUNTER',
  'plugins.reports.usageStats.metricType.full' => 'Статистика Public Knowledge Project (готовая для COUNTER)',
  'plugins.generic.usageStats.statsSum' => 'Сумма всех скачиваний файла',
  'plugins.generic.usageStats.noStats' => 'Данные скачивания пока не доступны.',
  'plugins.generic.usageStats.monthInitials' => 'Янв Фев Мар Апр Май Июн Июл Авг Сен Окт Ноя Дек',
  'plugins.generic.usageStats.downloads' => 'Скачивания',
  'plugins.generic.usageStats.settings.statsDisplayOptions.siteWide.ojs2' => 'Каждый журнал может переопределить эти настройки на странице модулей журнала.',
  'plugins.generic.usageStats.optout.description.long.ojs2' => '
		<h3>Общая информация о конфиденциальности</h3>
		<p>Пожалуйста обратитесь к нашему общему <a href="{$privacyStatementUrl}">Заявлению о конфиденциальности</a>.</p>
		<h3>Статистика использования</h3>
		<p>Для того чтобы можно было проанализировать использование и влияние нашего журнала и опубликованных в нем статей, мы собираем и записываем данные о доступе к главной странице журнала, выпускам, статьям, гранкам и дополнительным файлам. Вся собранная информация является анонимной. Никакая личная информация не записывается. IP-адреса делаются анонимными путем хэширования (с помощью <em>SHA 256</em>) в сочетании с <em>безопасной 64-символьной солью</em>, которая автоматически <em>генерируется случайным образом и меняется каждый день</em>. Поэтому IP-адреса не могут быть реконструированы.</p>
		<p>Следующая информация собирается вместе с анонимными IP-адресами:</p>
		<ul>
		<li>Тип доступа (то есть административный)</li>
		<li>Время запроса</li>
		<li>Запрошенный URL</li>
		<li>Код статуса HTTP</li>
		<li>Браузер</li>
		</ul>
		<p>Собранные данные используются только для оценивания. IP-адреса никак не сопоставляются с ID пользователей. Технически невозможно отследить конкретный набор данных по конкретному IP-адресу.</p>',
); ?>
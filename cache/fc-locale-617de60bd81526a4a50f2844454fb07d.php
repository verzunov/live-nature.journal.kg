<?php return array (
  'admin.hostedJournals' => 'Журналы на сайте',
  'admin.settings.journalRedirect' => 'Перенаправление журнала',
  'admin.settings.options' => 'Параметры',
  'admin.settings.journalRedirectInstructions' => 'Основной страницей сайта станет главная страница этого журнала. Это полезно, например, если на сайте размещается только один журнал.',
  'admin.settings.noJournalRedirect' => 'Не перенаправлять',
  'admin.settings.defaultMetricDescription' => '
		Ваша инсталляция OJS настроена на запись нескольких метрик использования. Статистика использования будет отображаться в нескольких контекстах.
		Есть случаи, когда должна быть применена только одна статистика использования, например, чтобы отобразить упорядоченный список наиболее используемых статей или проранжировать
		результаты поиска. Пожалуйста, выберите одну из настроенных метрик в качестве метрики по умолчанию.
	',
  'admin.languages.confirmDisable' => 'Вы уверены, что хотите отключить этот язык? Это может повлиять на все размещенные журналы, которые сейчас используют его.',
  'admin.languages.downloadUnavailable' => '<p>Скачивание языковых пакетов с веб-сервера Public Knowledge Project сейчас недоступно, поскольку:</p>
	<ul>
		<li>На вашем сервере утилита GNU «tar» не установлена или не разрешено выполнение ее сервером.</li>
		<li>OJS нет может изменить файл списка языков, обычно расположенный в «registry/locales.xml».</li>
	</ul>
<p>Языковые пакеты могут быть вручную скачаны с <a href="http://pkp.sfu.ca">веб-сайта PKP</a>.</p>',
  'admin.languages.primaryLocaleInstructions' => 'Это будет язык по умолчанию для сайта и всех размещенных на нем журналов.',
  'admin.languages.supportedLocalesInstructions' => 'Выберите все языки для поддержки на сайте. Выбранные языки будут доступны для всех журналов, расположенных на этом сайте, а также появятся в меню выбора языков на каждой странице сайта (эта настройка может быть изменена на страницах конкретного журнала). Если выбран только один язык, меню переключения языков не будет показываться, дополнительные языковые настройки для журналов также не будут доступны.',
  'admin.locale.maybeIncomplete' => 'Поддержка отмеченных языков может быть неполной.',
  'admin.languages.confirmUninstall' => 'Вы уверены, что хотите удалить этот язык? Это может повлиять на все размещенные журналы, которые сейчас используют его.',
  'admin.languages.installNewLocalesInstructions' => 'Выберите дополнительные языки для установки их поддержки в этой системе. Языки должны быть установлены до того, как их можно будет использовать в размещенных журналах. Смотрите в документации OJS информацию о том, как добавить поддержку новых языков.',
  'admin.languages.downloadFailed' => 'Загрузка языка завершилась ошибкой. Сообщения ниже описывают эту ошибку.',
  'admin.languages.localeInstalled' => 'Язык «{$locale}» был установлен.',
  'admin.languages.download' => 'Скачать язык',
  'admin.languages.download.cannotOpen' => 'Невозможно открыть дескриптор языка с веб-сайта PKP.',
  'admin.languages.download.cannotModifyRegistry' => 'Невозможно добавить новый язык в файл списка языков, обычно расположенный в «registry/locales.xml».',
  'admin.auth.ojs' => 'База пользователей OJS',
  'admin.auth.enableSyncProfiles' => 'Включить синхронизацию профилей пользователей (если поддерживается этим модулем аутентификации). Информация профиля пользователя будет автоматически обновляться из внешнего источника при входе пользователя в систему, а изменения в профиле (включая смену пароля), сделанные внутри OJS, будут автоматически внесены во внешний источник. Если эта настройка выключена, информация профиля пользователя OJS будет храниться независимо от внешнего источника информации о профиле пользователя.',
  'admin.auth.enableSyncPasswords' => 'Включить изменение пароля пользователя (если поддерживается этим модулем аутентификации). Если эта настройка включена, пользователи могут изменять свой пароль в OJS и использовать возможность восстановления пароля в OJS для сброса забытого пароля. Эти функции не будут доступны для пользователей с этим источником аутентификации, если эта настройка выключена.',
  'admin.auth.enableCreateUsers' => 'Включить создание новых пользователей (если поддерживается этим модулем аутентификации). Пользователи, созданные средствами OJS с этим источником аутентификации, будут автоматически добавлены во внешний источник аутентификации, если они там отсутствуют. Кроме того, если этот источник является источником аутентификации по умолчанию, учетные записи OJS, созданные путем регистрации пользователей, также будут добавлены во внешний источник аутентификации.',
  'admin.systemVersion' => 'Версия OJS',
  'admin.systemConfiguration' => 'Конфигурация OJS',
  'admin.systemConfigurationDescription' => 'Параметры конфигурации OJS из <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'Вы будете автоматически записаны управляющим этого журнала. После создания нового журнала вы будете перенаправлены на мастер настройки журнала для завершения первоначальной настройки журнала.',
  'admin.journals.journalSettings' => 'Настройки журнала',
  'admin.journals.noneCreated' => 'Ни один журнал не был создан.',
  'admin.contexts.create' => 'Создать журнал',
  'admin.journals.urlWillBe' => 'Это должно быть одно короткое слово или аббревиатура, которая идентифицирует журнал. URL-адрес журнала будет {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'Название обязательно.',
  'admin.contexts.form.pathRequired' => 'Путь обязателен.',
  'admin.contexts.form.pathAlphaNumeric' => 'Путь может содержать только буквы и цифры английского алфавита, подчеркивания и дефисы; путь должен начинаться и заканчиваться буквой или цифрой.',
  'admin.contexts.form.pathExists' => 'Выбранный путь уже используется другим журналом.',
  'admin.journals.enableJournalInstructions' => 'Включить показ этого журнала для всех на сайте',
  'admin.journals.journalDescription' => 'Описание журнала',
  'admin.journal.pathImportInstructions' => 'Существующий путь журнала или новый путь для создания (например, «ojs»).',
  'admin.journals.importSubscriptions' => 'Импортировать подписки',
  'admin.journals.transcode' => 'Перекодировать метаданные статей из ISO8859-1',
  'admin.journals.redirect' => 'Генерировать код для переназначения адресов OJS 1 в адреса OJS 2',
  'admin.journals.form.importPathRequired' => 'Путь импорта обязателен.',
  'admin.journals.importErrors' => 'Импортирование завершилось неудачей.',
  'admin.mergeUsers' => 'Объединение пользователей',
  'admin.mergeUsers.mergeUser' => 'Объединить',
  'admin.mergeUsers.into.description' => 'Выберите пользователя, которому будут переданы авторство предыдущего пользователя, его редакционные задания и т. д.',
  'admin.mergeUsers.from.description' => 'Выберите пользователя (или нескольких) для слияния в другую учетную запись пользователя (например, когда кто-то завел себе две учетные записи). Учетная запись (записи), выбранная первой, будет удалена, а все связанные с ней статьи, редакционные задания и т. д. будут присоединены к второй учетной записи.',
  'admin.mergeUsers.allUsers' => 'Все записанные пользователи',
  'admin.mergeUsers.confirm' => 'Вы уверены, что хотите объединить выбранные {$oldAccountCount} учетных записей в учетную запись с именем пользователя «{$newUsername}»? Выбранные {$oldAccountCount} учетные записи после этого перестанут существовать. Это действие нельзя отменить.',
  'admin.mergeUsers.noneEnrolled' => 'Нет записанных пользователей.',
  'admin.categories' => 'Категории',
  'admin.categories.enable.description' => 'Администратор сайта может определить здесь набор категорий, чтобы упростить упорядочение большого количества журналов. Менеджеры журналов затем могут выбрать некоторые из этих категорий для каждого журнала, а читатели смогут просматривать коллекции журналов по категориям.',
  'admin.categories.disableCategories' => 'Не упорядочивать журналы по категориям.',
  'admin.categories.enableCategories' => 'Разрешить управляющим журналов упорядочивать журналы по категориям.',
  'admin.categories.editTitle' => 'Редактировать категорию',
  'admin.categories.createTitle' => 'Создать категорию',
  'admin.categories.create' => 'Создать новую категорию',
  'admin.categories.noneCreated' => 'Ни одна категория не была создана.',
  'admin.categories.confirmDelete' => 'Вы уверены, что хотите удалить эту категорию?',
  'admin.categories.name' => 'Название',
  'admin.categories.nameRequired' => 'Название категории обязательно.',
  'admin.presses.createInstructions' => 'Вы будете автоматически записаны управляющим этого журнала. После создания нового журнала вы будете перенаправлены на мастер настройки журнала для завершения первоначальной настройки журнала.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Напоминание об окончании подписки',
  'admin.scheduledTask.openAccessNotification' => 'Уведомление об открытом доступе',
  'admin.scheduledTask.reviewReminder' => 'Напоминание рецензенту',
); ?>
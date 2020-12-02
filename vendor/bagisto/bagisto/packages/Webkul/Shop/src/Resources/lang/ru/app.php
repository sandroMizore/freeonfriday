<?php

return [
    'invalid_vat_format' => 'Неверный формат налога',
    'security-warning' => 'Обнаружена подозрительная активность!!!',
    'nothing-to-delete' => 'Нечего удалять',

    'layouts' => [
        'my-account' => 'Аккаунт',
        'profile' => 'Профиль',
        'address' => 'Адрес',
        'reviews' => 'Отзывы',
        'wishlist' => 'Список пожеланий',
        'orders' => 'Заказы',
        'downloadable-products' => 'Скачиваемые продукты'
    ],

    'common' => [
        'error' => 'Что-то пошло не так, попробуйте позже.',
        'no-result-found' => 'Ничего не найдено.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Главная',
        'featured-products' => 'Наши товары',
        'new-products' => 'Новые товары',
        'verify-email' => 'Подтвердите ваш E-mail',
        'resend-verify-email' => 'Отправить e-mail еще раз'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Управление заказом',
        'sign-in' => 'Логин',
        'sign-up' => 'Регистрация',
        'account' => 'Аккаунт',
        'cart' => 'Корзина',
        'profile' => 'Кабинет',
        'wishlist' => 'Список пожеланий',
        'cart' => 'Корзина',
        'logout' => 'Выйти',
        'search-text' => 'Поиск'
    ],

    'minicart' => [
        'view-cart' => 'Просмотр корзины',
        'checkout' => 'Оформить заказ',
        'cart' => 'Корзина',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Подписаться на рассылку',
        'subscribe' => 'Подписаться',
        'locale' => 'Язык',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Отписаться',
        'subscribe' => 'Подписаться',
        'subscribed' => 'Вы подписаны на наши письма.',
        'not-subscribed' => 'Вы не можете подписаться, попробуйте позже.',
        'already' => 'Вы уже подписаны.',
        'unsubscribed' => 'Вы отписаны от сообщений.',
        'already-unsub' => 'Вы уже подписаны.',
        'not-subscribed' => 'Ошибка! Письмо не отправлено, попробуйте позже.'
    ],

    'search' => [
        'no-results' => 'Результатов не обнаружено',
        'page-title' => config('app.name') . ' - Поиск',
        'found-results' => 'результатов найдено',
        'found-result' => 'результат поиска'
    ],

    'reviews' => [
        'title' => 'Название',
        'add-review-page-title' => 'Добавить отзыв',
        'write-review' => 'Написать отзыв',
        'review-title' => 'Дайте название отзыву',
        'product-review-page-title' => 'Отзывы про товар',
        'rating-reviews' => 'Рейтинг и отзывы',
        'submit' => 'Подтвердить',
        'delete-all' => 'Все отзывы удалены',
        'ratingreviews' => ':rating рейтинг :review отзывы',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Имя',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Вы уже зарегистрированы',
            'title' => 'Логин'
        ],

        'signup-form' => [
            'page-title' => 'Создать новый аккаунт',
            'title' => 'Зарегистрироваться',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Подтвердите пароль',
            'button_title' => 'Зарегистрироваться',
            'agree' => 'Согласиться',
            'terms' => 'Условия',
            'conditions' => 'Положения',
            'using' => 'пользуясь сайтом',
            'agreement' => 'Договор',
            'success' => 'Аккаунт создано.',
            'success-verify' => 'Аккаунт создано, вам отправлено письмо с подтверждением.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent.',
            'failed' => 'Error! Невозможно создать аккаунт, попробуйте позже.',
            'already-verified' => 'Ваш аккаунт уже подтвержден.',
            'verification-not-sent' => 'Error! Не можем отправить письмо, попробуйте позднее.',
            'verification-sent' => 'Письмо с подтверждением отправлено',
            'verified' => 'Ваш аккаунт подтвержден, попробуйте зайти сейчас.',
            'verify-failed' => 'Мы не смогли подтвердить ваш аакунт.',
            'dont-have-account' => 'У Вас нет аккаунта.',
            'customer-registration' => 'Пользователь успешно зарегистрирован'
        ],

        'login-text' => [
            'no_account' => 'Такого аккаунта не существует',
            'title' => 'Зарегистрироваться',
        ],

        'login-form' => [
            'page-title' => 'Логин',
            'title' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'forgot_pass' => 'Забыли пароль?',
            'button_title' => 'Войти',
            'remember' => 'Запомнить меня',
            'footer' => '© Copyright :year Free On Friday, All rights reserved',
            'invalid-creds' => 'Проверьте данные.',
            'verify-first' => 'Подтвердите Ваш email.',
            'not-activated' => 'Ваш аккаунт ожидает подтверждения администратора',
            'resend-verification' => 'Отправить письмо повтоно'
        ],

        'forgot-password' => [
            'title' => 'Восстановить пароль',
            'email' => 'Email',
            'submit' => 'Отправить письмо под восстановления',
            'page_title' => 'Забыли пароль ?'
        ],

        'reset-password' => [
            'title' => 'Сбросить пароль',
            'email' => 'Зарегистрированный Email',
            'password' => 'Пароль',
            'confirm-password' => 'Подтвердить пароль',
            'back-link-title' => 'Вернуться к логину',
            'submit-btn-title' => 'Сбросить пароль'
        ],

        'account' => [
            'dashboard' => 'Редагувать профиль',
            'menu' => 'Меню',

            'profile' => [
                'index' => [
                    'page-title' => 'Профиль',
                    'title' => 'Профиль',
                    'edit' => 'Редактировать',
                ],

                'edit-success' => 'Профиль обновлен.',
                'edit-fail' => 'Error! Не можем обновить профиль, попробуйте позже.',
                'unmatch' => 'Старый пароль введен неверно',

                'fname' => 'Имя',
                'lname' => 'Фамилия',
                'gender' => 'Пол',
                'other' => 'Другое',
                'male' => 'Мужчина',
                'female' => 'Женщина',
                'dob' => 'Дата рождения',
                'phone' => 'Телефон',
                'email' => 'Email',
                'opassword' => 'Старый пароль',
                'password' => 'Пароль',
                'cpassword' => 'Подтвердить пароль',
                'submit' => 'Обновить профиль',

                'edit-profile' => [
                    'title' => 'Редактировать профиль',
                    'page-title' => 'Редактирование профиля'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адрес',
                    'title' => 'Адрес',
                    'add' => 'Добавить адрес',
                    'edit' => 'Редактировать',
                    'empty' => 'У вас нет сохраненного адреса, добавте новый по ссылке ниже',
                    'create' => 'Создать адрес',
                    'delete' => 'Удалить',
                    'make-default' => 'Сделать по-умолчанию',
                    'default' => 'о-умолчанию',
                    'contact' => 'Контакты',
                    'confirm-delete' =>  'Вы действительно хотите удалить адрес?',
                    'default-delete' => 'Адрес по-умолчанию невозможно удалить.',
                    'enter-password' => 'Введите пароль.',
                ],

                'create' => [
                    'page-title' => 'Добавить форму адреса',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Добавить адрес',
                    'street-address' => 'Адрес',
                    'country' => 'Страна',
                    'state' => 'Область',
                    'select-state' => 'Выберите регион',
                    'city' => 'Город',
                    'postcode' => 'Индекс',
                    'phone' => 'Телефон',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес добавлен.',
                    'error' => 'Адрес невозможно добавить.'
                ],

                'edit' => [
                    'page-title' => 'Редактировать адрес',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'Vat id',
                    'title' => 'Редактировать адрес',
                    'street-address' => 'Адрес',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес обновлен.',
                ],
                'delete' => [
                    'success' => 'Адрес удалён',
                    'failure' => 'Адрес удалить невозможно',
                    'wrong-password' => 'Неверный пароль !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Заказ',
                    'title' => 'Заказ',
                    'order_id' => 'ID Заказа',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Всего',
                    'order_number' => 'Номер заказа',
                    'processing' => 'Обработка',
                    'completed' => 'Готово',
                    'canceled' => 'Отклонено',
                    'closed' => 'Закрыт',
                    'pending' => 'Ожидание',
                    'pending-payment' => 'Ожидает оплаты',
                    'fraud' => 'Fraud'
                ],

                'view' => [
                    'page-tile' => 'Заказ #:order_id',
                    'info' => 'Информация',
                    'placed-on' => 'Размещен',
                    'products-ordered' => 'Заказанные товары',
                    'invoices' => 'Счета',
                    'shipments' => 'Доставки',
                    'SKU' => 'SKU',
                    'product-name' => 'Название',
                    'qty' => 'Кол-во',
                    'item-status' => 'Статус товара',
                    'item-ordered' => 'Заказано (:qty_ordered)',
                    'item-invoice' => 'Оплачено (:qty_invoiced)',
                    'item-shipped' => 'Доставлено (:qty_shipped)',
                    'item-canceled' => 'Отменено (:qty_canceled)',
                    'item-refunded' => 'Возвращено (:qty_refunded)',
                    'price' => 'Цена',
                    'total' => 'Всего',
                    'subtotal' => 'Подитог',
                    'shipping-handling' => 'Доставка',
                    'tax' => 'Налог',
                    'discount' => 'Скидка',
                    'tax-percent' => 'Процент скидки',
                    'tax-amount' => 'Налог',
                    'discount-amount' => 'Скидка',
                    'grand-total' => 'Итог',
                    'total-paid' => 'Оплачено',
                    'total-refunded' => 'Возвращено',
                    'total-due' => 'К оплате',
                    'shipping-address' => 'Адрес доставки',
                    'billing-address' => 'Адрес оплаты',
                    'shipping-method' => 'Метод доставки',
                    'payment-method' => 'Метод оплаты',
                    'individual-invoice' => 'Счет #:invoice_id',
                    'individual-shipment' => 'Доставка #:shipment_id',
                    'print' => 'Распечатать',
                    'invoice-id' => 'Счет Id',
                    'order-id' => 'Заказ Id',
                    'order-date' => 'Дата заказа',
                    'bill-to' => 'Счет для',
                    'ship-to' => 'Отправить до',
                    'contact' => 'Контакт',
                    'refunds' => 'Возвращение',
                    'individual-refund' => 'Возвращение #:refund_id',
                    'adjustment-refund' => 'Корректировать возвращение',
                    'adjustment-fee' => 'Корректировать оплату',
                    'cancel-btn-title' => 'Отменить',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Список желаний',
                'title' => 'Список желаний',
                'deleteall' => 'Удалить все',
                'moveall' => 'Добавить все продукты в корзину',
                'move-to-cart' => 'Добавить в корзину',
                'error' => 'Невозможно добавить продукт в список желаний',
                'add' => 'Товар добавлен в список желаний',
                'remove' => 'Товар удален из списка желаний',
                'moved' => 'Товар добавлен в корзину',
                'option-missing' => 'Не выбраны опции товара, товар не может быть добавлен в список желаний.',
                'move-error' => 'Товар не может быть добавлен в список желаний, попробуйте позже',
                'success' => 'Товар добавлен в список желаний',
                'failure' => 'Несмогли добавить товар в список желаний, попробуйте позже',
                'already' => 'Товар уже в Вашем списке желаний',
                'removed' => 'Товар удален из списка желаний',
                'remove-fail' => 'Несмогли убрать товар из списка желаний, попробуйте позже',
                'empty' => 'У Вас нет товаров в списке желаний',
                'remove-all-success' => 'Мы удалили все товары из вашего списка желаний',
            ],

            'downloadable_products' => [
                'title' => 'Downloadable Products',
                'order-id' => 'Order Id',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'Pending',
                'available' => 'Available',
                'expired' => 'Expired',
                'remaining-downloads' => 'Remaining Downloads',
                'unlimited' => 'Unlimited',
                'download-error' => 'Download link has been expired.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Отзывы',
                    'page-title' => 'Отзывы'
                ],

                'view' => [
                    'page-tile' => 'Отзыв #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Категории',
        'price-label' => 'Найнижче',
        'remove-filter-link-title' => 'Очистить',
        'sort-by' => 'Сортировать',
        'from-a-z' => 'От А до Я',
        'from-z-a' => 'От Я до А',
        'newest-first' => 'Сначала новые',
        'oldest-first' => 'Сначала старые',
        'cheapest-first' => 'От самых дешевых',
        'expensive-first' => 'От самых дорогих',
        'reviews-desc' => 'Самые комментируемые',
        'featured' => 'По популярности',
        'show' => 'Показать',
        'pager-info' => 'Показано :showing из :total товаров',
        'description' => 'Описание',
        'specification' => 'Характеристики',
        'total-reviews' => ':total отзывов',
        'total-rating' => ':total_rating оценок & :total_reviews отзывов',
        'by' => ' :name',
        'up-sell-title' => 'Другие товары, которые могут вам понравится!',
        'related-product-title' => 'Похожие товары',
        'cross-sell-title' => 'Больше продуктов',
        'reviews-title' => 'Оценки & Отзывы',
        'write-review-btn' => 'Написать отзыв',
        'choose-option' => 'Выбрать отзыв',
        'sale' => 'Розпродажа',
        'new' => 'Новый',
        'empty' => 'Нет продуктов в этой категории',
        'add-to-cart' => 'Купить',
        'buy-now' => 'Купить',
        'whoops' => 'Упс!',
        'quantity' => 'Кол-во',
        'in-stock' => 'В наличии',
        'out-of-stock' => 'Нет в наличии',
        'view-all' => 'Посмотреть все',
        'select-above-options' => 'Выберите опцию.',
        'less-quantity' => 'Кол-во не может быть меньше 1.',
        'samples' => 'Зразки',
        'links' => 'Посилання',
        'sample' => 'Зразок',
        'name' => 'Название',
        'qty' => 'Кол-во',
        'starting-at' => 'От',
        'customize-options' => 'Редактировать опцию',
        'choose-selection' => 'Выберите',
        'your-customization' => 'Ваши настройки',
        'total-amount' => 'Всего',
        'none' => 'None',
        'available' => 'Доступно'
    ],

     'reviews' => [
        'empty' => 'Вы еще не оставляли отзывов'
     ],

    'buynow' => [
        'no-options' => 'Выберите опцию перед заказом.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Некоторые из нужных полей не заполнены.',
                'missing_options' => 'Отсутствуют опции для этого продукта',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Хотя бы одого из продуктов должно быть больше 1.',
                'qty_impossible' => 'Невозможно добавить больше этого продукта.'
            ],
            'create-error' => 'Возникла неизвестная ошибка при создании корзины.',
            'title' => 'Корзина',
            'empty' => 'Корзина пуста',
            'update-cart' => 'Обновить корзину',
            'continue-shopping' => 'Продолжить покупки',
            'proceed-to-checkout' => 'Оформить заказ',
            'remove' => 'Удалить',
            'remove-link' => 'Удалить',
            'move-to-wishlist' => 'Перенести в список желаний',
            'move-to-wishlist-success' => 'Товар перенесен в список желаний.',
            'move-to-wishlist-error' => 'Невозможно перенести товар в список желаний, попробуйте позже.',
            'add-config-warning' => 'Выберите опцию перед добавлением в корзину.',
            'quantity' => [
                'quantity' => 'количество',
                'success' => 'Товары успешно обновлены.',
                'illegal' => 'Количество не может быть меньше 1.',
                'inventory_warning' => 'Желаемое количество сейчас не доступно, попробуйте позже.',
                'error' => 'Невозможно сейчас обновить товары, попробуйте позднее.'
            ],

            'item' => [
                'error_remove' => 'Не выбраны товары для удаления из корзины.',
                'success' => 'Товар был добавлен в корзину.',
                'success-remove' => 'Товар был удален из корзины.',
                'error-add' => 'Невозможно добавить товар в корзину, попробуйте в другой раз.',
            ],
            'quantity-error' => 'Желамемое количество не доступно.',
            'cart-subtotal' => 'Сумма заказа',
            'cart-remove-action' => 'Вы уверене, что хотите это сделать?',
            'partial-cart-update' => 'Были обновлены только некоторые товары',
            'link-missing' => '',
            'event' => [
                'expired' => 'This event has been expired.'
            ]
        ],

        'onepage' => [
            'title' => 'Заказ',
            'information' => 'Информация',
            'shipping' => 'Доставка',
            'payment' => 'Оплата',
            'complete' => 'Завершить',
            'billing-address' => 'Адрес оплаты',
            'sign-in' => 'Длгин',
            'company-name' => 'Название компании',
            'first-name' => 'Имя',
            'last-name' => 'Фамилия',
            'email' => 'Email',
            'address1' => 'Улица',
            'city' => 'Город',
            'state' => 'Регион',
            'select-state' => 'Выберите регион',
            'postcode' => 'Индекс',
            'phone' => 'Телефон',
            'country' => 'Страна',
            'order-summary' => 'Сумма заказа',
            'shipping-address' => 'Адрес доставки',
            'use_for_shipping' => 'Доставить по этому адресу',
            'continue' => 'Продолжить',
            'shipping-method' => 'Выберите метод доставки',
            'payment-methods' => 'Выберите метод оплаты',
            'payment-method' => 'Метод оплаты',
            'summary' => 'Сумма заказа',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'billing-address' => 'Адрес оплаты',
            'shipping-address' => 'Адрес доставки',
            'contact' => 'Контакт',
            'place-order' => 'Сделать заказ',
            'new-address' => 'Добавить новый адрес',
            'save_as_address' => 'Сохранить адрес',
            'apply-coupon' => 'Применить промокод',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Бесплатно',
            'coupon-used' => 'Промокод применен',
            'applied' => 'Применено',
            'back' => 'Назад',
            'cash-desc' => 'Оплата при получении',
            'money-desc' => 'Перевод на карту',
            'paypal-desc' => 'Paypal',
            'free-desc' => 'Это бесплатная доставка',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Пароль',
            'login-exist-message' => 'Вы уже зарегистрированы, залогинтесь или продолжите как гость.',
            'enter-coupon-code' => 'Введите промокод',
            'nocall' => 'Не перезванивать для подтверждения',
            'comment' => 'Комментарий к заказу'
        ],

        'total' => [
            'order-summary' => 'Сумма заказа',
            'sub-total' => 'Товары',
            'grand-total' => 'Сумма заказа',
            'delivery-charges' => 'Оплата за доставку',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'price' => 'Цена',
            'disc-amount' => 'Скидка',
            'new-grand-total' => 'Новый Итог',
            'coupon' => 'Промокод',
            'coupon-applied' => 'Приминенный Промокод',
            'remove-coupon' => 'Удалить Промокод',
            'cannot-apply-coupon' => 'Невозможно применить Промокод',
            'invalid-coupon' => 'Неверный промокод.',
            'success-coupon' => 'Промокод применен.',
            'coupon-apply-issue' => 'Промокод возможно применить.'
        ],

        'success' => [
            'title' => 'Заказ получен',
            'thanks' => 'Благодарим за заказ!',
            'order-id-info' => 'Ваш номер заказа #:order_id',
            'info' => 'Мы отправили вам письмо с деталями заказа'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Новый заказ',
            'heading' => 'Подтверждение заказа!',
            'dear' => 'Уважаемый :customer_name',
            'dear-admin' => 'Уважаемый :admin_name',
            'greeting' => 'Благодарим за ваш заказ :order_id от :created_at',
            'greeting-admin' => 'Номер заказа :order_id от :created_at',
            'summary' => 'Детали заказа',
            'shipping-address' => 'Адрес доставки',
            'billing-address' => 'Адрес оплаты',
            'contact' => 'Контакт',
            'shipping' => 'Способ доставки',
            'payment' => 'Способ оплаты',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'subtotal' => 'Всего',
            'shipping-handling' => 'Доставка',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'grand-total' => 'Итог',
            'final-summary' => 'Благодарим за использование нашего магазина!',
            'help' => 'С вопросами и пожеланиями обращайтесь по адресу :support_email',
            'thanks' => 'Спасибо!',
            'cancel' => [
                'subject' => 'Отмена заказа',
                'heading' => 'Заказ отменен',
                'dear' => 'Уважаемый :customer_name',
                'greeting' => 'Ваш заказ #:order_id от :created_at был отменен',
                'summary' => 'Итог заказа',
                'shipping-address' => 'Адрес доставки',
                'billing-address' => 'Адрес оплаты',
                'contact' => 'Контакт',
                'shipping' => 'Метод доставки',
                'payment' => 'Метод оплаты',
                'subtotal' => 'Итог',
                'shipping-handling' => 'Доставка',
                'tax' => 'Налог',
                'discount' => 'Скидка',
                'grand-total' => 'Итог',
                'final-summary' => 'Благодарим за использование нашего магазина',
                'help' => 'С вопросами и пожеланиями обращайтесь по адресу :support_email',
                'thanks' => 'Спасибо!',
            ]
        ],

        'invoice' => [
            'heading' => 'Ваш счет #:invoice_id для заказа #:order_id',
            'subject' => 'Счет заказа #:order_id',
            'summary' => 'Итог по счету',
        ],

        'shipment' => [
            'heading' => 'Доставка #:shipment_id создана для заказа #:order_id',
            'inventory-heading' => 'Новая доставка #:shipment_id создана для заказа #:order_id',
            'subject' => 'Доставка для заказа #:order_id',
            'inventory-subject' => 'Новая доставка создана для заказа #:order_id',
            'summary' => 'Итог доставки',
            'carrier' => 'Подрядчик',
            'tracking-number' => 'Трекоинговый номер',
            'greeting' => 'Заказ :order_id был добавлен :created_at',
        ],

        'refund' => [
            'heading' => 'Your Refund #:refund_id for Order #:order_id',
            'subject' => 'Refund for your order #:order_id',
            'summary' => 'Summary of Refund',
            'adjustment-refund' => 'Adjustment Refund',
            'adjustment-fee' => 'Adjustment Fee'
        ],

        'forget-password' => [
            'subject' => 'Customer Reset Password',
            'dear' => 'Dear :name',
            'info' => 'You are receiving this email because we received a password reset request for your account',
            'reset-password' => 'Reset Password',
            'final-summary' => 'If you did not request a password reset, no further action is required',
            'thanks' => 'Thanks!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Dear :customer_name',
                'username-email' => 'UserName/Email',
                'subject' => 'New Customer Registration',
                'password' => 'Password',
                'summary' => 'Your account has been created.
                Your account details are below: ',
                'thanks' => 'Thanks!',
            ],

            'registration' => [
                'subject' => 'New Customer Registration',
                'customer-registration' => 'Customer Registered Successfully',
                'dear' => 'Dear :customer_name',
                'greeting' => 'Welcome and thank you for registering with us!',
                'summary' => 'Your account has now been created successfully and you can login using your email address and password credentials. Upon logging in, you will be able to access other services including reviewing past orders, wishlists and editing your account information.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Email Verification',
                'subject' => 'Verification Mail',
                'verify' => 'Verify Your Account',
                'summary' => 'This is the mail to verify that the email address you entered is yours.
                Kindly click the Verify Your Account button below to verify your account.'
            ],

            'subscription' => [
                'subject' => 'Subscription Email',
                'greeting' => ' Welcome to ' . config('app.name') . ' - Email Subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me into your inbox. It’s been a while since you’ve read ' . config('app.name') . ' email, and we don’t want to overwhelm your inbox. If you still do not want to receive
                the latest email marketing news then for sure click the button below.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Webkul Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name created successfully.',
        'update-success' => ':name updated successfully.',
        'delete-success' => ':name deleted successfully.',
        'submit-success' => ':name submitted successfully.'
    ],
];

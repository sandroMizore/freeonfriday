<?php

return [
    'invalid_vat_format' => 'Невірний формат податку',
    'security-warning' => 'Виявлена підозріла активність!!!',
    'nothing-to-delete' => 'Нічого видаляти',

    'layouts' => [
        'my-account' => 'Аккаунт',
        'profile' => 'Профіль',
        'address' => 'Адреса',
        'reviews' => 'Коментарі',
        'wishlist' => 'Список побажань',
        'orders' => 'Замовленя',
        'downloadable-products' => 'Завантажувані продукти'
    ],

    'common' => [
        'error' => 'Щось пішло не так, спробуйте пізніше.',
        'no-result-found' => 'Нічого не знайдено.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Головна',
        'featured-products' => 'Нащі товари',
        'new-products' => 'Нові товари',
        'verify-email' => 'Підтвердіть ваш E-mail',
        'resend-verify-email' => 'Надіслати e-mail ще раз'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Управліня замовленнями',
        'sign-in' => 'Логін',
        'sign-up' => 'Реєстрація',
        'account' => 'Аккаунт',
        'cart' => 'Корзина',
        'profile' => 'Профіль',
        'wishlist' => 'Список бажань',
        'cart' => 'Корзина',
        'logout' => 'Вийти',
        'search-text' => 'Пошук'
    ],

    'minicart' => [
        'view-cart' => 'Перегляд корзини',
        'checkout' => 'Замовленя',
        'cart' => 'Корзина',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Subscribe Newsletter',
        'subscribe' => 'Підписатись',
        'locale' => 'Мова',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Відписатись',
        'subscribe' => 'Підписатись',
        'subscribed' => 'Ви підписані на нащі листи.',
        'not-subscribed' => 'Ви не можете підписатись, спробуйте пізніше.',
        'already' => 'Ви вже підписані.',
        'unsubscribed' => 'Ви відписані від повідомлень.',
        'already-unsub' => 'Ви вже відписані.',
        'not-subscribed' => 'Error! Лист не надіслано, спробуйте пізніше.'
    ],

    'search' => [
        'no-results' => 'Результатів не знайдено',
        'page-title' => config('app.name') . ' - Пошук',
        'found-results' => 'результатів знайдено',
        'found-result' => 'результат пошуку'
    ],

    'reviews' => [
        'title' => 'Назва',
        'add-review-page-title' => 'Додати відгук',
        'write-review' => 'Написати відгук',
        'review-title' => 'Надайте назву для відгука',
        'product-review-page-title' => 'Відгуки про товар',
        'rating-reviews' => 'Рейтинг і відгуки',
        'submit' => 'Підтвердити',
        'delete-all' => 'Всі відгуки видалені',
        'ratingreviews' => ':rating рейтинг :review відгуки',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Ім\'я',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Ви вже зареєстровані',
            'title' => 'Логін'
        ],

        'signup-form' => [
            'page-title' => 'Створити новий аккаунт',
            'title' => 'Зареєструватися',
            'firstname' => 'Ім\'я',
            'lastname' => 'Прізвище',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Підтвердити пароль',
            'button_title' => 'Зареєструватися',
            'agree' => 'Погодитись',
            'terms' => 'Terms',
            'conditions' => 'Conditions',
            'using' => 'користуючись цим сайтом',
            'agreement' => 'Договір',
            'success' => 'Аккаунт створено.',
            'success-verify' => 'Аккаунт створено, вам надіслано листа з підтвердженням.',
            'success-verify-email-unsent' => 'Account created successfully, but verification e-mail unsent.',
            'failed' => 'Error! Неможливо створити аккаунт, спробуйте пізніше.',
            'already-verified' => 'Ваш аккаунт вже підтвердженно.',
            'verification-not-sent' => 'Error! Не можемо відправити листа, спробуйте пізніше.',
            'verification-sent' => 'Verification email sent',
            'verified' => 'Your account has been verified, try to login now.',
            'verify-failed' => 'We cannot verify your mail account.',
            'dont-have-account' => 'You do not have account with us.',
            'customer-registration' => 'Customer Registered Successfully'
        ],

        'login-text' => [
            'no_account' => 'Такого аккаунту не існує',
            'title' => 'Зареєструватися',
        ],

        'login-form' => [
            'page-title' => 'Логін',
            'title' => 'Логін',
            'email' => 'Email',
            'password' => 'Пароль',
            'forgot_pass' => 'Забули пароль?',
            'button_title' => 'Увійти',
            'remember' => 'Запам\'ятати мене',
            'footer' => '© Copyright :year Free On Friday, All rights reserved',
            'invalid-creds' => 'Перевірте данні.',
            'verify-first' => 'Підтвердіть ваш email.',
            'not-activated' => 'Ваш аккаунт чекає на підтвердження адміністратора',
            'resend-verification' => 'Відправити листа повторно'
        ],

        'forgot-password' => [
            'title' => 'Відновити пароль',
            'email' => 'Email',
            'submit' => 'Відправити листа для відновлення',
            'page_title' => 'Забули пароль ?'
        ],

        'reset-password' => [
            'title' => 'Скинути пароль',
            'email' => 'Зареєстрований Email',
            'password' => 'Пароль',
            'confirm-password' => 'Підтвердіть пароль',
            'back-link-title' => 'Повернутись до логіну',
            'submit-btn-title' => 'Скинути пароль'
        ],

        'account' => [
            'dashboard' => 'Редагувати профіль',
            'menu' => 'Меню',

            'profile' => [
                'index' => [
                    'page-title' => 'Профіль',
                    'title' => 'Профіль',
                    'edit' => 'Редагувати',
                ],

                'edit-success' => 'Профіль обновлено.',
                'edit-fail' => 'Error! Не можемо оновити профіль, спробуйте пізніше.',
                'unmatch' => 'Старий пароль введено невірно.',

                'fname' => 'Ім\'я',
                'lname' => 'Прізвище',
                'gender' => 'Стать',
                'other' => 'Інше',
                'male' => 'Чоловік',
                'female' => 'Жінка',
                'dob' => 'Дата народження',
                'phone' => 'Телефон',
                'email' => 'Email',
                'opassword' => 'Старий пароль',
                'password' => 'Пароль',
                'cpassword' => 'Підтвердити пароль',
                'submit' => 'Оновити профіль',

                'edit-profile' => [
                    'title' => 'Редагувати профіль',
                    'page-title' => 'Редагування профілю'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адреса',
                    'title' => 'Адреса',
                    'add' => 'Додати адресу',
                    'edit' => 'Редагувати',
                    'empty' => 'У вас немає збереженної адреси, додайте нову за лінком нижче',
                    'create' => 'Створити адресу',
                    'delete' => 'Видалити',
                    'make-default' => 'Зробити за-замовченням',
                    'default' => 'за-замовченням',
                    'contact' => 'Контакти',
                    'confirm-delete' =>  'Ви дійсно бажаєте видалити адресу?',
                    'default-delete' => 'Адресу за-замовченням неможливо змінити.',
                    'enter-password' => 'Введіть пароль.',
                ],

                'create' => [
                    'page-title' => 'Додати форму адреси',
                    'company_name' => 'Назва компанії',
                    'first_name' => 'Ім\'я',
                    'last_name' => 'Прізвище',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Use Country Code with VAT Id. Eg. INV01234567891]',
                    'title' => 'Додати адресу',
                    'street-address' => 'Вулиця',
                    'country' => 'Країна',
                    'state' => 'Область',
                    'select-state' => 'Оберіть регіон',
                    'city' => 'Місто',
                    'postcode' => 'Індекс',
                    'phone' => 'Телефон',
                    'submit' => 'Зберегти адресу',
                    'success' => 'Адресу додано.',
                    'error' => 'Адресу неможливо додати.'
                ],

                'edit' => [
                    'page-title' => 'Редагувати адресу',
                    'company_name' => 'Назва компанії',
                    'first_name' => 'Ім\'я',
                    'last_name' => 'Прізвище',
                    'vat_id' => 'Vat id',
                    'title' => 'Редагувати адресу',
                    'street-address' => 'Вулиця',
                    'submit' => 'Зберегти адресу',
                    'success' => 'Адресу оновлено.',
                ],
                'delete' => [
                    'success' => 'Адресу видалено',
                    'failure' => 'Адресу видалити неможливо',
                    'wrong-password' => 'Невірний пароль !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Замовлення',
                    'title' => 'Замовлення',
                    'order_id' => 'ID замовлення',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Всього',
                    'order_number' => 'Номер замовлення',
                    'processing' => 'Обробка',
                    'completed' => 'Готово',
                    'canceled' => 'Відмінено',
                    'closed' => 'Закрито',
                    'pending' => 'Очікування',
                    'pending-payment' => 'Очікує сплати',
                    'fraud' => 'Fraud'
                ],

                'view' => [
                    'page-tile' => 'Замовлення #:order_id',
                    'info' => 'Інформація',
                    'placed-on' => 'Placed On',
                    'products-ordered' => 'Замовлені товари',
                    'invoices' => 'Рахунки',
                    'shipments' => 'Доставки',
                    'SKU' => 'SKU',
                    'product-name' => 'Назва',
                    'qty' => 'К-сть',
                    'item-status' => 'Статус товару',
                    'item-ordered' => 'Замовлено (:qty_ordered)',
                    'item-invoice' => 'Оплачено (:qty_invoiced)',
                    'item-shipped' => 'Доставлено (:qty_shipped)',
                    'item-canceled' => 'Відмінено (:qty_canceled)',
                    'item-refunded' => 'Поверненно (:qty_refunded)',
                    'price' => 'Ціна',
                    'total' => 'Всього',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Доставка',
                    'tax' => 'Податок',
                    'discount' => 'Знижка',
                    'tax-percent' => 'Відсоток податку',
                    'tax-amount' => 'Податок',
                    'discount-amount' => 'Знижка',
                    'grand-total' => 'Всього',
                    'total-paid' => 'Сплачено',
                    'total-refunded' => 'Поверненно',
                    'total-due' => 'До сплати',
                    'shipping-address' => 'Адреса доставки',
                    'billing-address' => 'Адреса сплати',
                    'shipping-method' => 'Метод доставки',
                    'payment-method' => 'Метод сплати',
                    'individual-invoice' => 'Рахунок #:invoice_id',
                    'individual-shipment' => 'Доставка #:shipment_id',
                    'print' => 'Роздракувати',
                    'invoice-id' => 'Рахунок Id',
                    'order-id' => 'Замовлення Id',
                    'order-date' => 'Дата замовлення',
                    'bill-to' => 'Рахунок для',
                    'ship-to' => 'Відправити до',
                    'contact' => 'Контакт',
                    'refunds' => 'Повернення',
                    'individual-refund' => 'Повернення #:refund_id',
                    'adjustment-refund' => 'Корегувати повернення',
                    'adjustment-fee' => 'Корегувати сплату',
                    'cancel-btn-title' => 'Відмінити',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Delete All',
                'moveall' => 'Move All Products To Cart',
                'move-to-cart' => 'Move To Cart',
                'error' => 'Cannot add product to wishlist due to unknown problems, please checkback later',
                'add' => 'Item successfully added to wishlist',
                'remove' => 'Item successfully removed from wishlist',
                'moved' => 'Item successfully moved To cart',
                'option-missing' => 'Product options are missing, so item can not be moved to the wishlist.',
                'move-error' => 'Item cannot be moved to wishlist, Please try again later',
                'success' => 'Item successfully added to wishlist',
                'failure' => 'Item cannot be added to wishlist, Please try again later',
                'already' => 'Item already present in your wishlist',
                'removed' => 'Item successfully removed from wishlist',
                'remove-fail' => 'Item cannot Be removed from wishlist, Please try again later',
                'empty' => 'You do not have any items in your wishlist',
                'remove-all-success' => 'All the items from your wishlist have been removed',
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
                    'title' => 'Відгуки',
                    'page-title' => 'Відгуки'
                ],

                'view' => [
                    'page-tile' => 'Відгук #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Категорії',
        'price-label' => 'Найнижче',
        'remove-filter-link-title' => 'Очистити',
        'sort-by' => 'Сортувати',
        'from-a-z' => 'Від А до Я',
        'from-z-a' => 'Від Я до А',
        'newest-first' => 'Спочатку нові',
        'oldest-first' => 'Спочатку старі',
        'cheapest-first' => 'Від найдешевших',
        'expensive-first' => 'Від найдорожчих',
        'show' => 'Показати',
        'pager-info' => 'Показано :showing з :total Товарів',
        'description' => 'Опис',
        'specification' => 'Характеристики',
        'total-reviews' => ':total Відгуків',
        'total-rating' => ':total_rating оцінок & :total_reviews відгуків',
        'by' => ' :name',
        'up-sell-title' => 'Інщі товари, що можуть вам сподобатись!',
        'related-product-title' => 'Схожі товари',
        'cross-sell-title' => 'Більше виборів',
        'reviews-title' => 'Оцінки & Відгуки',
        'write-review-btn' => 'Написати відгук',
        'choose-option' => 'Обрати опцію',
        'sale' => 'Розпродаж',
        'new' => 'Новий',
        'empty' => 'Немає продуктів в цій категорії',
        'add-to-cart' => 'Придбати',
        'buy-now' => 'Придбати',
        'whoops' => 'Упс!',
        'quantity' => 'К-сть',
        'in-stock' => 'В наявності',
        'out-of-stock' => 'Немає в наявності',
        'view-all' => 'Продивитись всі',
        'select-above-options' => 'Оберіть опцію.',
        'less-quantity' => 'Кількість не може бути менша за 1.',
        'samples' => 'Зразки',
        'links' => 'Посилання',
        'sample' => 'Зразок',
        'name' => 'Ім\'я',
        'qty' => 'К-сть',
        'starting-at' => 'Від',
        'customize-options' => 'Редагувати опції',
        'choose-selection' => 'Оберіть',
        'your-customization' => 'Ващі налаштування',
        'total-amount' => 'Всього',
        'none' => 'None',
        'available' => 'Доступно'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Оберіть властивість перед замовленням.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Деякі з потрібних полів не заповнені.',
                'missing_options' => 'Options are missing for this product.',
                'missing_links' => 'Downloadable links are missing for this product.',
                'qty_missing' => 'Хочаб один з продуктів повинен мати кількість більше 1.',
                'qty_impossible' => 'Неможливо дадати більше цього продукту.'
            ],
            'create-error' => 'Encountered some issue while making cart instance.',
            'title' => 'Кошик',
            'empty' => 'Кошик порожній',
            'update-cart' => 'Оновити кошик',
            'continue-shopping' => 'Продовжити покупки',
            'proceed-to-checkout' => 'Оформити замовлення',
            'remove' => 'Видалити',
            'remove-link' => 'Видалити',
            'move-to-wishlist' => 'Move to Wishlist',
            'move-to-wishlist-success' => 'Item moved to wishlist successfully.',
            'move-to-wishlist-error' => 'Cannot move item to wishlist, please try again later.',
            'add-config-warning' => 'Оберіть опцію перед додаванням до кошику.',
            'quantity' => [
                'quantity' => 'кількість',
                'success' => 'Товари успішно оновленно.',
                'illegal' => 'Кількість не може бути нижчою за 1.',
                'inventory_warning' => 'Бажана кількість наразі недоступна, спробуйте іншу.',
                'error' => 'Неможливо зараз оновити товари, спробуйте іншим разом.'
            ],

            'item' => [
                'error_remove' => 'Не обрано товарів для видалення з кошику.',
                'success' => 'Товар було додано до кошика.',
                'success-remove' => 'Товар було видалено з кошика.',
                'error-add' => 'Неможливо додати товар до кошику, спробуйте іншим разом.',
            ],
            'quantity-error' => 'Бажана кількість недоступна.',
            'cart-subtotal' => 'Сумма замовлення',
            'cart-remove-action' => 'Ви впевнені що бажаєте це зробити?',
            'partial-cart-update' => 'Тільки деякі товари було оновлено',
            'link-missing' => '',
            'event' => [
                'expired' => 'This event has been expired.'
            ]
        ],

        'onepage' => [
            'title' => 'Замовлення',
            'information' => 'Інформація',
            'shipping' => 'Доставка',
            'payment' => 'Оплата',
            'complete' => 'Завершити',
            'billing-address' => 'Адреса оплати',
            'sign-in' => 'Логін',
            'company-name' => 'Назва компанії',
            'first-name' => 'Ім\'я',
            'last-name' => 'Прізвище',
            'email' => 'Email',
            'address1' => 'Вулиця',
            'city' => 'Город',
            'state' => 'Регіон',
            'select-state' => 'Оберіть регіон',
            'postcode' => 'Індекс',
            'phone' => 'Телефон',
            'country' => 'Країна',
            'order-summary' => 'Сума замовлення',
            'shipping-address' => 'Адреса доставки',
            'use_for_shipping' => 'Доставити за цією адресою',
            'continue' => 'Продовжити',
            'shipping-method' => 'Оберіть метод доставки',
            'payment-methods' => 'Оберіть метод оплати',
            'payment-method' => 'Метод оплати',
            'summary' => 'Сума замовлення',
            'price' => 'Ціна',
            'quantity' => 'Кількість',
            'billing-address' => 'Адреса оплати',
            'shipping-address' => 'Адреса доставки',
            'contact' => 'Контакт',
            'place-order' => 'Зробити замовлення',
            'new-address' => 'Додати нову адресу',
            'save_as_address' => 'Зберегти адресу',
            'apply-coupon' => 'Застосувати промокод',
            'amt-payable' => 'Amount Payable',
            'got' => 'Got',
            'free' => 'Безкоштовно',
            'coupon-used' => 'Промокод застосованно',
            'applied' => 'Застосованно',
            'back' => 'Назад',
            'cash-desc' => 'Оплата при отриманні',
            'money-desc' => 'Переказ на картку',
            'paypal-desc' => 'Paypal',
            'free-desc' => 'Це безкоштовна доставка',
            'flat-desc' => 'This is a flat rate',
            'password' => 'Пароль',
            'login-exist-message' => 'Ви вже зареєстровані, увійдіть або продовжіть як гість.',
            'enter-coupon-code' => 'Введіть промокод'
        ],

        'total' => [
            'order-summary' => 'Сума замовлення',
            'sub-total' => 'Товари',
            'grand-total' => 'Сума замовлення',
            'delivery-charges' => 'Оплата за доставку',
            'tax' => 'Податок',
            'discount' => 'Знижка',
            'price' => 'Ціна',
            'disc-amount' => 'Знижка',
            'new-grand-total' => 'New Grand Total',
            'coupon' => 'Промокод',
            'coupon-applied' => 'Застосований Промокод',
            'remove-coupon' => 'Видалити Промокод',
            'cannot-apply-coupon' => 'Неможливо застосувати Промокод',
            'invalid-coupon' => 'Невірний промокод.',
            'success-coupon' => 'Промокод застосованно.',
            'coupon-apply-issue' => 'Промокод неможливо застосувати.'
        ],

        'success' => [
            'title' => 'Замовленя отримано',
            'thanks' => 'Дякуємо за замовленя!',
            'order-id-info' => 'Ваш номер замовленя #:order_id',
            'info' => 'Ми відправимо вам листа з деталями замовленя'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Нове замовленя',
            'heading' => 'Підтвердженя замовленя!',
            'dear' => 'Шановний :customer_name',
            'dear-admin' => 'Шановний :admin_name',
            'greeting' => 'Дякуємо за ваше замовленя :order_id від :created_at',
            'greeting-admin' => 'Номер замовленя :order_id від :created_at',
            'summary' => 'Деталі замовленя',
            'shipping-address' => 'Адреса доставки',
            'billing-address' => 'Адреса оплати',
            'contact' => 'Контакт',
            'shipping' => 'Спосіб доставки',
            'payment' => 'Спосіб оплати',
            'price' => 'Ціна',
            'quantity' => 'Кількість',
            'subtotal' => 'Всього',
            'shipping-handling' => 'Доставка',
            'tax' => 'Податок',
            'discount' => 'Знижка',
            'grand-total' => 'Підсумок',
            'final-summary' => 'Дякуємо що скористались нашими послугами!',
            'help' => 'Із запитаннями та побажаннями звертайтеся :support_email',
            'thanks' => 'Дякуємо!',
            'cancel' => [
                'subject' => 'Відміна замовлення',
                'heading' => 'Замовленя відмінено',
                'dear' => 'Шановний :customer_name',
                'greeting' => 'Ваше замовленя #:order_id від :created_at було відмінено',
                'summary' => 'Підсумок замовленя',
                'shipping-address' => 'Адреса доставки',
                'billing-address' => 'Адреса оплати',
                'contact' => 'Контакт',
                'shipping' => 'Метод доставки',
                'payment' => 'Метод оплати',
                'subtotal' => 'Підсумок',
                'shipping-handling' => 'Доставка',
                'tax' => 'Податок',
                'discount' => 'Знижка',
                'grand-total' => 'Всього',
                'final-summary' => 'Дякуємо що звернулись до нашого магазину',
                'help' => 'Із запитаннями та побажаннями звертайтеся :support_email',
                'thanks' => 'Дякуємо!',
            ]
        ],

        'invoice' => [
            'heading' => 'Ваш рахунок #:invoice_id для замовленя #:order_id',
            'subject' => 'Рахунок замовленя #:order_id',
            'summary' => 'Підсумок за рахунком',
        ],

        'shipment' => [
            'heading' => 'Доставка #:shipment_id створена для замовленя #:order_id',
            'inventory-heading' => 'Нова доставка #:shipment_id була створена для замовленя #:order_id',
            'subject' => 'Доставка для замовленя #:order_id',
            'inventory-subject' => 'Нова доставка створена для замовленя #:order_id',
            'summary' => 'Підсумок доставки',
            'carrier' => 'Підрядник',
            'tracking-number' => 'Трековий номер',
            'greeting' => 'Замовленя :order_id було додано :created_at',
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

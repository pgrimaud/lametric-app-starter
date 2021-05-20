# LaMetric App Starter

This starter allow you to create LaMetric apps easily. (Indicator App)

## How to use it?

Fork this project or create a new repository using [this link](https://github.com/pgrimaud/lametric-app-starter/generate).

## How it works?

### Step 1

Declare fields you want to retrieve from your LaMetric App you designed, in file `config/fields.php`.

e.g.

```php
return [
    [
        'key'  => 'field-1',
        'type' => Field::TEXT_TYPE,
    ],
    [
        'key'  => 'field-2',
        'type' => Field::NUMBER_TYPE,
    ],
    [
        'key'  => 'field-3',
        'type' => Field::SWITCH_TYPE,
    ],
    [
        'key'     => 'field-4',
        'type'    => Field::CHOICES_TYPE,
        'choices' => [
            'iron-man',
            'captain-america',
            'ant-man',
            'thor',
        ]
    ]
];
```

Fields type association with https://developer.lametric.com :

 - **Field::TEXT_TYPE** : Text field
 - **Field::NUMBER_TYPE** : Number
 - **Field::SWITCH_TYPE** : Switch
 - **Field::CHOICES_TYPE** : Single choice

The `src/Validator.php` object will check parameters sent by the app and manage errors.

### Step 2

Add you logic to the method `fetchData()` in `src/Api.php`.
Maybe you need to extract data from an API. You can inject any dependencies as needed.

You can also inject credentials like secret api-key : copy `config/credentials.php.dist` to `config/credentials.php` and edit content.

```php
/**
 * object $this->client (Guzzle HTTP) is available to make curl requests
 * array $this->credentials contains sensitive data
 * array $parameters (credentials) can contain sensitive data
 */
```

### Step 3

Adapt the method `mapData()` in `src/Api.php` to manage frames and data you need.

More information about frames [here](https://lametric-documentation.readthedocs.io/en/latest/guides/first-steps/first-lametric-indicator-app.html#id1).

### Step 4 & Hosting

You can deploy it everywhere you want. You only need PHP and `ext-json` (`ext-curl` if you consume an API).

You only need to configure the docroot of your vhost to the folder **public**.

## Feedback

If you need help, [create an issue](https://github.com/pgrimaud/lametric-app-starter/issues) or contact me on [Twitter](http://twitter.com/pgrimaud_).

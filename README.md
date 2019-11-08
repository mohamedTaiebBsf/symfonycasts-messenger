# Messenger Component - Symfony
I would thank Symfonycast for this super tuto about Messenger Component.
Link to Tuto:
[Messenger! Queue work for Later](https://symfonycasts.com/screencast/messenger) course on SymfonyCasts.

## Setup

1. Clone or download the repository.
2. Download Composer dependencies :
    ```
    composer install
    ```
3. Setup the Database :
    ```
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```
4. Compile Webpack Encore Assets :
    ```
    yarn install
    yarn encore dev
    ```
5. Run the application :
    ```
    php bin/console s:r
    ```
6. Run the worker :
    ```
    php bin/console messenger:consume -vv async
    ```
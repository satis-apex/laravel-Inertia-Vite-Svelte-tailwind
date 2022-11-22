# About

This repo is created to solve the hassle of the initial configuration for your Full-stack Laravel project. Use this repository if you want to use the following tools as your project stack.

-   [Laravel](https://laravel.com) (laravel 9)
-   [Vite js](https://vitejs.dev)
-   [Svelte](https://svelte.dev)
-   [Inertia js](https://inertiajs.com)
-   [Tailwind CSS](https://tailwindcss.com) (v3)

## Installation

Clone the repository using git

```bash
git clone git@github.com:satis-apex/laravel-Inertia-Vite-Svelte-tailwind.git

```

## Usage

```bash
#cd into the project directory
#copy env example to .env file
cp .env.example .env
php artisan key:generate

#install PHP dependencies
composer install

# install node dependencies
npm install

#Run project
##for devlopment
npm run dev
or
## for production
npm run build

#start php server
php artisan serve
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Since this project doesn't provide any test case create your own add as for your requirement.

## License

[MIT](https://choosealicense.com/licenses/mit/)

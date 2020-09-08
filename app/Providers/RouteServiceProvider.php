<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
	/**
	 * This namespace is applied to your controller routes.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	protected $registration = 'App\Http\Controllers\ControlPanel';

	// Students Routes
	protected $register = 'App\Http\Controllers\Students';

	/**
	 * The path to the "home" route for your application.
	 *
	 * @var string
	 */
	public const HOME = '/home';

	// Students PATH
	public const STUDENTS = '/students';

	// Control panel
	public const CONTROLPANEL = '/registration';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @return void
	 */
	public function boot()
	{
		//

		parent::boot();
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map()
	{
		$this->mapApiRoutes();

		$this->mapWebRoutes();

		// Students Map Routes
		$this->mapRegisterRoutes();

		// Control panel
		$this->mapRegistrationRoutes();
	}

	/**
	 * Define the "web" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapWebRoutes()
	{
		Route::middleware('web')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
	}

	/**
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 *
	 * @return void
	 */
	protected function mapApiRoutes()
	{
		Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace)
			->group(base_path('routes/api.php'));
	}

	// Student function
	protected function mapRegisterRoutes()
	{
		Route::prefix('students')
			->middleware('web')
			->namespace($this->register)
			->group(base_path('routes/students.php'));
	}
	// Control panel function
	protected function mapRegistrationRoutes()
	{
		Route::prefix('registration')
			->middleware('web')
			->namespace($this->registration)
			->group(base_path('routes/registration.php'));
	}
}

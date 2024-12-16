```markdown
# LOGIN_APPLICATION_LARAVEL

### 1. Create a Laravel project:
```bash
composer create-project laravel/laravel prototype
```

### 2. Copy `.env` file:
```bash
cp .env.example .env
```

---

### 3. Create the layout file:
**Path:** `resources/views/layouts/app.blade.php`

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    @yield("content")
</body>
</html>
```

---

### 4. Create the login view:
**Path:** `resources/views/auth/login.blade.php`

```php
@extends("layouts.app")
@section("content")

@if ($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">Login</h3>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
```

---

### 5. Create the AuthController:
**Command:**
```bash
php artisan make:controller AuthController
```

**Code:**
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showForm()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $req = $request->only('email', 'password');
        if (Auth::attempt($req)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(["email" => "invalid"]);
    }
}
```

---

### 6. Create the middleware:
**Command:**
```bash
php artisan make:middleware AuthMiddleware
```

**Code:**
```php
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
```

---

### Notes:
1. Ensure Bootstrap is properly installed and linked.
2. Test the login functionality by setting up a route to `/login` in `web.php`.
```php
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return 'Welcome to the dashboard!';
})->name('dashboard')->middleware('auth');
```

3. Register the middleware in `Kernel.php`:
```php
protected $routeMiddleware = [
    // other middleware
    'auth' => \App\Http\Middleware\AuthMiddleware::class,
];
```
```
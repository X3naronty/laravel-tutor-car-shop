<x-layouts.guest-layout>
    <x-slot:title>Log in</x-slot:title>
    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>

        <button class="btn btn-primary btn-login w-full">Login</button>

        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
            <button class="btn btn-default flex justify-center items-center gap-1">
                <img src="/img/google.png" alt="" style="width: 20px" />
                Google
            </button>
            <button class="btn btn-default flex justify-center items-center gap-1">
                <img src="/img/facebook.png" alt="" style="width: 20px" />
                Facebook
            </button>
        </div>
        <div class="login-text-dont-have-account">
            Don't have an account? -
            <a href="/sign-up"> Click here to create one</a>
        </div>
    </form>

</x-layouts.guest-layout>

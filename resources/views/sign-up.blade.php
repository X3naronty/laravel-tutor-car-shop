<x-layouts.guest-layout>

    <x-slot:title>Sign up</x-slot:title>
    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Your Email" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Your Password" />
        </div>
        <div class="form-group">
            <input type="password" placeholder="Repeat Password" />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" placeholder="First Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Last Name" />
        </div>
        <div class="form-group">
            <input type="text" placeholder="Phone" />
        </div>
        <button class="btn btn-primary btn-login w-full">Register</button>

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
            Already have an account? -
            <a href="/log-in"> Click here to log in </a>
        </div>
    </form>
</x-layouts.guest-layout>

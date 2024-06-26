@extends('profile.auth.app-login')
@section('content')
<body class="teacher">
    <div class="container">
        <a href="/"><img src="/homestyles/assets/Logo.png" alt="Logo" class="logo"></a>
        <div class="form-container login">
            <h1>ورود به فیت‌لایف</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input name="email" type="text" placeholder="ایمیل">
                <input name="password" type="password" placeholder="رمز عبور">
                <button type="submit">ورود</button>
            </form>
            <p>اگر حساب کاربری ندارید، <br> از <a href="{{ route('register') }}">اینجا</a> ثبت نام کنید</p>
        </div>
    </div>
    <script src="/homestyles/scripts.js"></script>
</body>
@endsection

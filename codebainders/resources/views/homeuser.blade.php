<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Intro-->
    <title>MCC AssetWatch - Sign In</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    min-height: 100vh;

    font-family: Arial, Helvetica, sans-serif;

    background: linear-gradient(
        to bottom,
        #5793ef 0%,
        #8db7f4 35%,
        #ffffff 72%
    );

    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container {
    width: 100%;
    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 20px;
}

.login-card {
    width: 350px;

    background: #ffffff;

    border-radius: 9px;

    padding: 25px 20px 20px;

    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.13);

    text-align: center;
}

.logo-container {
    display: flex;
    justify-content: center;
    align-items: center;

    margin-bottom: 2px;
}

.logo-container img {
    width: 55px;
    height: 55px;

    object-fit: contain;
}

.brand-name {
    font-size: 12px;
    line-height: 13px;

    margin-bottom: 10px;
}

.mcc {
    display: block;

    color: #e63946;

    font-size: 10px;
}

.asset {
    color: #075985;
    font-weight: bold;
}

.watch {
    color: #16a34a;
    font-weight: bold;
}

h1 {
    font-size: 18px;

    color: #111827;

    margin-bottom: 5px;
}

.subtitle {
    font-size: 8px;

    color: #9ca3af;

    margin-bottom: 20px;
}

form {
    width: 100%;

    text-align: left;
}

.form-group {
    margin-bottom: 13px;
}

.form-group label {
    display: block;

    font-size: 8px;
    font-weight: 600;

    color: #4b5563;

    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    height: 34px;

    padding: 0 10px;

    border: 1px solid #e5e7eb;

    border-radius: 6px;

    outline: none;

    background: #ffffff;

    font-size: 8px;

    color: #374151;

    transition: 0.2s;
}

.form-group input::placeholder {
    color: #9ca3af;
}

.form-group input:focus {
    border-color: #2563eb;

    box-shadow:
        0 0 0 2px rgba(37, 99, 235, 0.10);
}

.forgot-container {
    text-align: right;

    margin-top: -3px;

    margin-bottom: 13px;
}

.forgot-container a {
    color: #2563eb;

    font-size: 7px;

    text-decoration: none;
}

.forgot-container a:hover {
    text-decoration: underline;
}

button {
    width: 100%;
    height: 35px;

    border: none;

    border-radius: 5px;

    background: #2864df;

    color: #ffffff;

    font-size: 8px;

    font-weight: 600;

    cursor: pointer;

    transition: 0.2s;
}

button:hover {
    background: #1d4ed8;
}

button:active {
    transform: scale(0.98);
}

@media (max-width: 480px) {

    .login-container {
        padding: 20px;
    }

    .login-card {
        width: 100%;
        max-width: 350px;

        padding: 25px 20px 20px;
    }
}
</style>
<body>
<!--Container_for_login-->
    <div class="login-container">

        <div class="login-card">


            <div class="logo-container">
                <img src="logo.png" alt="MCC Logo">
            </div>

<!--Head-->
            <div class="brand-name">
                <span class="mcc">MCC</span>
                <span class="asset">Asset</span><span class="watch">Watch</span>
            </div>

            <h1>Sign in</h1>

            <p class="subtitle">
                Track and report campus asset issues
            </p>

<!--Email-->
            <form>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="name@mcc.edu.ph"
                        required
                    >
                </div>

<!--Password-->
                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <div class="forgot-container">
                    <a href="#">Forgot Password?</a>
                </div>

<!--Button_Submit-->
                <button type="submit">
                    Sign In
                </button>

            </form>

        </div>

    </div>

</body>
</html>
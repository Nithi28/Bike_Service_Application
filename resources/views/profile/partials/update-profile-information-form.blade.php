<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <section>
        <header style="background-color: #2E4EAD; color: #fff; padding: 10px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <h2 style="font-size: 1.5rem; font-weight: 600;">
                Profile Information
            </h2>

            <p style="margin-top: 5px; font-weight: bold;">
                Update your account's profile information and email address.
            </p>
        </header>
        @if (session('status') === 'profile-updated')
        <br>
        <p style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 0.25rem; padding: 0.75rem 1.25rem; margin-bottom: 1rem; font-weight: bold;">Saved.</p>
        @endif
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            @csrf
            @method('patch')

            <div>
                <label for="name" style="font-weight: bold;">Name</label>
                <input id="name" name="name" type="text" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 3px;" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                <!-- Add your input error handling here if needed -->
            </div>

            <div>
                <label for="email" style="font-weight: bold;">Email</label>
                <input id="email" name="email" type="email" style="width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ccc; border-radius: 3px;" value="{{ old('email', $user->email) }}" required autocomplete="email">
                <!-- Add your input error handling here if needed -->

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p style="font-size: small; margin-top: 2px; color: #800;">
                            Your email address is unverified.
                            <button form="send-verification" style="text-decoration: underline; font-size: small; color: #600; border: none; border-radius: 3px; cursor: pointer; outline: none; padding: 2px 4px; background-color: #fff;">Click here to re-send the verification email.</button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p style="margin-top: 2px; font-weight: bold; font-size: small; color: #600;">
                                A new verification link has been sent to your email address.
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div style="display: flex; align-items: center; gap: 4px;">
                <button type="submit" style="background-color: #007bff; color: #fff; font-weight: 700; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; cursor: pointer; margin-top: 15px;">Save</button>
            </div>
        </form>
    </section>
</body>
</html>

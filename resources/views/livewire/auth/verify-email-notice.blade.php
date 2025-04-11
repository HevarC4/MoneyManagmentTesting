<div>
    <div class="mb-4 text-sm text-gray-600">
        Before you can login, please verify your email address by clicking on the link we sent to 
        <strong>{{ $email }}</strong>. If you didn't receive the email, we can send you another.
    </div>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                Resend Verification Email
            </button>
        </form>

        <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">
            Back to Login
        </a>
    </div>
</div>
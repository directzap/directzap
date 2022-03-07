<img class="round"src="@if ($user->avatar)
{{ asset("uploads/avatars/$user->avatar") }}
@else
{{ asset('assets/images/profile/userPlaceholder.png') }} @endif"
 alt="avatar" height="40" width="40">
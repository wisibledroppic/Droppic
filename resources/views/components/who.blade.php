@if (Auth::guard('dropper')->check())
<p class="text-success">
    You are logged in as <strong>DROPPER</strong>
</p>
@else  
<p class="text-danger">
    You are logged out as <strong>DROPPER</strong>
</p>
@endif

@if (Auth::guard('web')->check())
<p class="text-success">
    You are logged in as <strong>ADMIN</strong>
</p>
@else  
<p class="text-danger">
    You are logged out as <strong>ADMIN</strong>
</p>
@endif

@if (Auth::guard('picker')->check())
<p class="text-success">
    You are logged in as <strong>PICKER</strong>
</p>
@else  
<p class="text-danger">
    You are logged out as <strong>PICKER</strong>
</p>
@endif
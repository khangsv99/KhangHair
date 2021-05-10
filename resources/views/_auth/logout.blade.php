
<form id="logout-form" action="{{ route('postLogout') }}" method="POST">
    @csrf
    <div>
                                   

        <button type="submit">Logout</button>                     
    </div>
</form>

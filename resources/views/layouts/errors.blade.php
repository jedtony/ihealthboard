@if($errors->any())
    <div class="error-notification is-danger" style="background-color: #e95353;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
    @endif
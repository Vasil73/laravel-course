
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session ('success'))
        <div class="row">
            <div class="col-6 alert alert-success">
                {{ session ('success') }}
            </div>
        </div>

    @endif

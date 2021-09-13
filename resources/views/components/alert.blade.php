<div>
    {{$slot}}
    @if(session()->has('message'))
                    <div class="alert alert-success text-center" style="width:100%;">{{session()->get('message')}}</div>
                    @elseif(session()->has('error'))
                    <div class="py-4 px-2 bg-danger">{{session()->get('error')}}</div>
                    @endif
    
                    @if ($errors->any())
        <div class="text-danger" style="width: 500px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    </div>
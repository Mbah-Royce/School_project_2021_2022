@extends('layout.'."$role")

@section('style')
<style>
.thumbnail:hover, .caption:hover, .fa:hover{
        color:red;
    }
.del:hover, .del.li:hover{
    cursor: pointer;
}
li:hover{
    color: red
}
li a:hover{
    color: red;
}
li a {
    text-decoration: none;
    color:black
}
</style>
@endsection
@section('content')
@if ($contents->count() > 0)
<div class="container">
    <x-alert/>
    <div class="row">
    @foreach ($contents as $content)
    <div class="col-md-2">
        <div class="thumbnail">
            <div class="dropdown">
                    <i class="fas fa-ellipsis-v " data-toggle="dropdown"></i>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @if ($user->can('edit-course') || auth()->user()->hasRole('admin'))
                    {{-- @if (auth()->user()->hasRole('teacher')) --}}
                    <li class="del" onclick="event.preventDefault();
                    if(confirm('Are you sure you really want to delete') )   {
                    document.getElementById('form-delete-{{$content->id}}')
                    .submit()
                    }">Delete</li>
                    @endif
                  {{-- <li class="del" onclick="event.preventDefault();
                        if(confirm('Are you sure you really want to delete') )   {
                        document.getElementById('form-delete-{{$content->id}}')
                        .submit()
                        }">Delete</li> --}}
                        <form style="display:none" id="{{'form-delete-'.$content->id}}" method="post" action="{{route('content.destroy',$content->id)}}">
                            @csrf
                            @method('delete')
                            </form>
                            <?php $path = "http://127.0.0.1:8000".$content->content_path ?>
                        <li><a href="{{route('content',$content->id)}}">Download</a></li>
                        <li><a href="{{$path}}" target=_blank >View</a></li>
                </ul>
              </div>
          <a href="/w3images/lights.jpg" target="_blank">
            <i class="fa fa-folder fa-5x" aria-hidden="true"></i>
           <div class="caption">
               <p>{{$content->title}}</p>
              <p>{{$content->type}}</p>
            </div>
          </a>
        </div>
      </div>
    @endforeach
</div>
</div>
@else
<h2>No contents/services Avaialable</h2> 
@endif
@endsection
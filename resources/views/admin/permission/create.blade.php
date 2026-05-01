@extends('layout.admin')

@section('style')
<style>
    .btn1{
    border: none;
    outline: none;
    height: 50px;
    width: 50%;
    background: rgb(18, 53, 18);
    color: white;
    border-radius: 4px;
    font-weight: bold
}
.btn1:hover{
    background: rgb(255, 84, 22);
    color: white;
    border: 1px solid
}
</style>
@endsection
@section('content')
<div class="card height-auto">
    <div class="card-body justify-content-center">
        <h5 class="card-title">Role Permission Form</h5>
        <form method="POST" action="{{route('permission.store')}}">
            @csrf
            <x-alert/>
            <div class="container justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-12 form-group justify-content-center">
                    
                        <label for="sel1">Role*</label>
                        <select class="form-control @error('role') is-invalid @enderror" id="sel1" name="role_id">
                          <option>Select Role</option>
                            @foreach ($roles as $role )
                            <option value= {{$role->id}} >{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class=" form-group">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <table class="table table-borderless " id="dynamicAddRemove">
                        <tr>
                            <th>Permissons</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="permissions[0]" value="{{ old('permissions[0]') }}" placeholder="Enter Permission" class="form-control" />
                            </td>
                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Permission</button></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn1 btn-outline-success btn-block mx-auto">Save</button>
                        </div>
            </div>
        </form>
    </div>
  </div>
</div>
</div>
@endsection
@push('child-jscripts')
<script>
var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="permissions[' + i +
            ']" placeholder="Enter subject" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
@endpush
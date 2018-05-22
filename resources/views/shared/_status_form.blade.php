<form action="{{route('statuses.store')}}" method="POST">
    @include('shared._errors')
    {{csrf_field()}}
    <textarea class="form-control" name="content" id="" placeholder="聊聊新鲜事..." rows="3">{{old('content')}}</textarea>
    <button class="btn btn-primary pull-right" type="submit">发布</button>
</form>
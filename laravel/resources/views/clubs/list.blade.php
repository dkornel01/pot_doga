    <form action="/api/clubs/{{$club->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$club->max_number}}">
    </div>
    </form>


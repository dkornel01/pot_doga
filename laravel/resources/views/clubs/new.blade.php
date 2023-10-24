
<form action="/api/clubs" method="post">
{{csrf_field()}}
    <input type="date" name="establishment" placeholder="establishment">
    <input type="String" name="location" placeholder="location">
    <input type="Integer" name="max_number" placeholder="max_number">
    <input type="submit" value="ok">
</form>

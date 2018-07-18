<form action="upload" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
</form>
<a href="">Opa</a>
<h1>Create new post</h1>
<form method="POST">
    @csrf

    <div>
        <p>Title</p>
       <input type="text" name="">
    </div>
    <div>
        <p>Body</p>
        <textarea name="body" cols="30" rows="10"></textarea>
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>
</form>
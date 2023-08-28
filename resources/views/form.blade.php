<form action="unicode" method="post">
    <div>
        <input type="text" name="username" placehoder="nhập ..">
        <input type="hidden" name="_method" value="get">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>
<h1>thêm</h1>
<form action="<?php echo route('category.add');?>" method="POST">
    <div>
        <input type="text" name="category" placeholder="tên chuyên mục">
    </div>
    
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">thêm</button>
</form>
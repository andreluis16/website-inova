<section id="form">
<form class="form" method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/home-banner-add-save')?>">
    <div class="form-group">
        <input class="form-control-file" type="file" name="banner_image">
    </div>      
    <div>
        <button class="btn btn-primary" type="submit">Adicionar</button>
    </div>
</form>
</section>
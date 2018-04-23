<form action="/" method="get" class="form-inline form-search">
    <div class="input-group">
        <input type="text" name="s" class="form-control" id="search" value="<?php the_search_query(); ?>" placeholder="Cari..">
        <div class="input-group-addon"> <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></div>
    </div>
</form>
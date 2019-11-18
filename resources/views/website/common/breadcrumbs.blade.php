<?php
    $_breadcrumbs = isset($breadcrumbs) ? $breadcrumbs : [];
    $_active = $_breadcrumbs['active'] ? $_breadcrumbs['active'] : '';
?>

<div id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$_active?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

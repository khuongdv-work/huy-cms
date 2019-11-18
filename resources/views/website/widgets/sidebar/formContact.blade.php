<?php
    $type = \App\Enviroment\Enviroment::CONTACT_TYPE;
    $location = \App\Enviroment\Enviroment::CONTACT_LOCATION;
?>

<div class="widget-sidebar widget-form rounded">
    <h3 class="widget-title">{{ $data->title }}</h3>
    <div class="widget-content">
        <form name="form-contact" id="form-contact" method="post" action="{{ route('website.postContact') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="passport" id="passport" placeholder="Chứng minh nhân dân">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="company" id="company" placeholder="Công ty hiện tại">
            </div>
            <div class="form-group">
                <select class="form-control" name="type">
                    @foreach($type as $k => $value)
                        <option value="{{ $k }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="location" id="location">
                    @foreach($location as $k => $value)
                        <option value="{{ $k }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-100">Gửi</button>
            </div>
        </form>
    </div>
</div>

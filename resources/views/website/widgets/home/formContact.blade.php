<?php
    $type = \App\Enviroment\Enviroment::CONTACT_TYPE;
    $location = \App\Enviroment\Enviroment::CONTACT_LOCATION;
?>

<!--FORM CONTACT -->
<div id="form-contact" class="form-contact">
    <div class="top-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="contact-title text-center">
                        {{ $data->name }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-contact">
        <div class="container">
            <form name="form-contact" id="form-contact" method="post" action="{{ route('website.postContact') }}">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <p class="form-title">Đăng ký vay</p>
                        <p>Bạn vui lòng điền đầy đủ thông tin để chuyên viên tư vấn của chúng tôi có thể hỗ trợ bạn
                            tốt nhất, trong thời gian ngắn nhất sau khi nhận được liên hệ chúng tôi sẽ gọi điện xác
                            nhận với bạn</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Họ và tên">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone"
                                   placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="passport" id="passport"
                                   placeholder="Chứng minh nhân dân">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="company" id="company"
                                   placeholder="Công ty hiện tại">
                        </div>
                    </div>
                    <div class="col-md-4">
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
                            <button class="btn btn-primary">Gửi ngay</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@component('mail::message')
# Dear Mr. Huy,

Bạn vừa có người cần tư vấn với các thông tin như sau, vui lòng kiểm tra thông tin:
* Họ tên: {{$content['name']}}
* Số điện thoại: {{$content['phone']}}
* Công ty: {{$content['company']}}
* CMND: {{$content['passport']}}
* Loại vay: {{$content['type']}}
* Khu vực: {{$content['location']}}

@component('mail::button', ['url' => $content['url']])
Tới trang quản lý
@endcomponent

Thanks,<br />

{{ config('app.name') }}
@endcomponent

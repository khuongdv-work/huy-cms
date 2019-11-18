<?php

namespace App\Http\Controllers\Website;

use App\Enviroment\Enviroment;
use App\Http\Controllers\Controller;
use App\MyWidget;
use \App\Page;
use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactEmail;
use Mail;
use Voyager;

class HomeController extends BaseController
{

    public function index()
    {
        $widgets = MyWidget::getWidgets('HOME');
        $data = [
            'h1' => $this->h1,
            'h2' => $this->h2,
            'title' => setting('site.title'),
            'seo' => $this->getSeo(),
            'widgets' => $widgets
        ];
        $data['seo']['meta_image'] = Voyager::image(setting('site.seo_image'));

        return view('website.pages.home', $data);
    }

    public function createNewContact(Request $request)
    {
        $dataValidate = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'type' => 'required|max:255',
            'location' => 'required|max:255',
        ]);

        $result = Contact::create($request->all());

        $content = $request->all();
        $type = $request->type;
        $location = $request->location;

        $content['type'] = Enviroment::CONTACT_TYPE[$type];
        $content['location'] = Enviroment::CONTACT_LOCATION[$location];
        $content['url'] = "";
        // send email
        $receiverAddress = setting('site.email');
        Mail::to($receiverAddress)->send(new ContactEmail($content));
        return redirect()->back()->with('message', 'Gửi thông tin thành công. vui lòng chờ nhân viên liên hệ');

    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->with('author')->firstOrFail();
        $breadcrumbs = [
            'active' => $page->title
        ];

        $widgets = MyWidget::getWidgets('SIDEBAR');
        $_seo = $this->getSeo();
        $_seo['meta_image'] = Voyager::image($page->image);
        $data = [
            'h1' => $page['title'],
            'h2' => $page['excerpt'],
            'title' => $page['title'],
            'page' => $page,
            'breadcrumbs' => $breadcrumbs,
            'seo' => $_seo,
            'widgets' => $widgets
        ];
        return view('website.pages.page', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function services()
    {
        $services = Service::orderBy('name', 'asc')->paginate();
        return view('services', compact('services'));
    }

    public function about()
    {
        return view('about');
    }

    public function cart()
    {
        return view('cart');
    }

    public function contact()
    {
        return view('contact');
    }

    public function addcart(Request $request)
    {
        $service_id = $request->input('service_id');
        if (!empty($service_id)) {
            $service = Service::find($service_id);
            Cart::instance('shopping')->add([
                'id' => $service->id,
                'name' => $service->name,
                'qty' => 1,
                'price' => $service->pricereferencial,
                'options' => [
                    'image' => $service->getImageURL()
                ]
            ]);

            $count = Cart::instance('shopping')->count();

            $response = [
                'success' => true,
                'data' => [
                    'count' => $count,
                ],
            ];
        } else {
            $response = [
                'success' => false,
                'error' => "No se pudo encontrar el servicio. $service_id",
            ];
        }

        return response()->json($response);
    }
}

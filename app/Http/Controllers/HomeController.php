<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $sliders = response()->json([
            [
                'id' => 1,
                'url' => asset('assets/images/portada_1.jpg'),
                'urlmobile' => asset('assets/images/portada_mobile_1.jpg'),
                'link' => null,
            ],
            [
                'id' => 2,
                'url' => asset('assets/images/portada_2.jpg'),
                'urlmobile' => asset('assets/images/portada_mobile_2.jpg'),
                'link' => null,
            ],
            [
                'id' => 3,
                'url' => asset('assets/images/portada_3.jpg'),
                'urlmobile' => asset('assets/images/portada_mobile_3.jpg'),
                'link' => null,
            ]
        ])->getData();
        return view('welcome', compact('sliders'));
    }

    public function services()
    {
        $services = Service::orderBy('name', 'asc')->paginate();
        return view('services', compact('services'));
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function tracking()
    {
        return view('tracking');
    }

    public function results(Request $request)
    {
        $search = $request->input('search');
        $order = Order::with(['trackings' => function ($query) {
            $query->orderBy('date', 'desc');
        }])->where('purchase', $search)->get()->first();

        if (!$order) {
            return back()->with('message', 'No se encontraron resultados.');
        }
        return view('results', compact('order'));
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

    public function jsonservices()
    {
        $services = Service::orderBy('name', 'asc')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->pricereferencial,
                'image_url' => $item->getImageURL(),
            ];
        });

        return response()->json($services);
    }
}

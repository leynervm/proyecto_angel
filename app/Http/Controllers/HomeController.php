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
        return view('welcome');
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
        }])->where('id', $search)->get()->first();

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

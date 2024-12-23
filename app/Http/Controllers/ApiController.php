<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function searchcliente(Request $request)
    {
        $document = $request->input('document');
        if (strlen(trim($document)) == 8) {
            return self::consulta_dni($document);
        }

        if (strlen(trim($document)) == 11) {
            return self::consulta_ruc($document);
        }

        return response()->json([
            'success' => false,
            'error' => "Documento inválido",
        ])->getData();
    }

    public function consulta_dni($dni)
    {
        $token = config('services.apisnet.token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Referer' => 'https://apis.net.pe/api-consulta-dni',
            'User-Agent' => 'laravel/http',
            'Accept' => 'application/json',
        ])->timeout(5)->get('https://api.apis.net.pe/v2/reniec/dni', [
            'numero' => $dni,
        ]);

        if ($response->ok()) {
            $result = $response->json();
            $name = $result['nombres'] . " " . $result['apellidoPaterno'] . " " . $result['apellidoMaterno'];

            if (empty(trim($name))) {
                return response()->json([
                    'success' => false,
                    'error' => "No se encontraron resultados"
                ])->getData();
            }
            return response()->json([
                'success' => true,
                'name' => $name,
            ])->getData();
        }

        return response()->json([
            'success' => false,
            'error' => "No se encontraron resultados"
        ])->getData();
    }

    public function consulta_ruc($ruc)
    {

        $token = config('services.apisnet.token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Referer' => 'https://apis.net.pe/api-consulta-ruc',
            'User-Agent' => 'laravel/http',
            'Accept' => 'application/json',
        ])->timeout(5)->get('https://api.apis.net.pe/v2/sunat/ruc', [
            'numero' => $ruc,
        ]);

        if ($response->ok()) {
            $result = $response->json();
            $name = $result['razonSocial'];

            if (empty(trim($name))) {
                return response()->json([
                    'success' => false,
                    'error' => "No se encontraron resultados"
                ])->getData();
            }
            return response()->json([
                'success' => true,
                'name' => $name,
            ])->getData();
        }

        return response()->json([
            'success' => false,
            'error' => "No se encontraron resultados"
        ])->getData();
    }

    public function searchorder(Request $request)
    {
        $purchase = $request->input('search');
        $order = Order::where('purchase', trim($purchase))->first(); //trim(mb_strtoupper($purchase, "UTF-8"))
        if (!empty($order)) {
            return response()->json([
                'success' => true,
                'redirect' => route('orders.search.results', $order),
            ])->getData();
        }
        return response()->json([
            'success' => false,
            'error' => "No se han econtrado resultados"
        ])->getData();
    }
}

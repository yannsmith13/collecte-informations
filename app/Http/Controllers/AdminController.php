<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Detail;
use App\Models\Graph;
use App\Models\Inspiration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('last_update', 'desc')->paginate(8);
        return view('admin.customers.index', compact('customers'));
    }

    public function newForm(Request $request)
    {
        $customer = Customer::create([
            'uuid' => Str::uuid(),
        ]);
        Detail::create(['customer_id' => $customer->id]);
        Graph::create(['customer_id' => $customer->id]);
        Inspiration::create(['customer_id' => $customer->id]);
            
        


        $message =  "Formulaire généré avec succès. Lien : " . $customer->link_form();

        return redirect()->route('admin.index')->with(
            'infos', $message
        );
    }
}

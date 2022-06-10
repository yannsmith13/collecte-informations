<?php

namespace App\Http\Controllers;

use App\Models\Graph;
use App\Models\Image;
use App\Models\Detail;
use App\Models\Reason;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\FormulaireRequest;
use Carbon\Carbon;
use PDF;

class FormController extends Controller
{
    public function index(Customer $customer) 
    {
        $reasons = Reason::where('id', '!=', 1)->get();
        $other_reasons = Reason::find(1);

        //
        $customer_reasons = [];
        foreach($customer->reasons as $reason) {
            $customer_reasons[] = $reason->id;
        }

        return view('form.index', compact(
            'customer',
            'reasons', 'other_reasons', 'customer_reasons',
        ));
    }

    public function store(FormulaireRequest $request) {
        $request->validated;

        $customer = Customer::find($request['customer']);

        // Radio Hosting
        if ( $request['hosting'] == 'true' ) {
            $hosting = true;
        } else {
            $hosting = false;
        }

        $customer->update([
            'last_update' => now(),
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'tel' => $request['tel'],
            'email' => $request['email'],

            'society_name' => $request['society_name'],
            'siret' => $request['siret'],
            'tva' => $request['tva'],
            'society_tel' => $request['society_tel'],
            'society_email' => $request['society_email'],
            'adresse' => $request['adresse'],
            'adresse2' => $request['adresse2'],
            'zip' => $request['zip'],
            'city' => $request['city'],

            'reseaux_sociaux' => $request['reseaux_sociaux'],
            'sites_webs' => $request['sites_webs'],

            'wished_domain' => $request['wished_domain'],
            'hosting' => $hosting,

            'budget' => $request['budget'],
            'wished_prestations' => $request['wished_prestations'],

            'other_reasons' => $request['other-reasons'],

            
            'how_mcts' => $request['how_mcts'],
            'additionnal_informations' => $request['additionnal_informations'],
        ]);

        // Pourquoi un site web ?
        $customer->reasons()->sync($request['reasons']);

        // Identité graphique
        $customer->graph->update([
            'customer_id' => $customer->id,
            'description' => $request['graph-description'],
        ]);

        // Images
        if ($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path('images/clients'), $name);
                $path = 'images/clients/' . $image->getClientOriginalName();

                Image::create([
                    'customer_id' => $customer->id,
                    'path' => $path,
                ]);
            }
        }

        // Society Details
        $customer->detail->update([
            'history' => $request['history'],
            'offer_presentation' => $request['offer_presentation'],
            'offer_prices' => $request['offer_price'],
            'offer_list' => $request['offer_list'],
            'offer_qualities' => $request['offer_qualities'],
            'target_audience' => $request['target_audience'],
            'society_moral' => $request['society_moral'],
            'activity_area' => $request['activity_area'],
        ]);

        // Inspiration
        $customer->inspiration->update([
            'description' => $request['inspiration'],
        ]);


        // redirection
        return redirect()->route('form.index', $customer)->with('infos', 'Vos informations ont bien été enregistrées.');
    }


    public function downloadPDF(Customer $customer)
    {
        
        $pdf = PDF::loadView('pdf.show', compact('customer'));

        // Intitulé document PDF
        if ( $customer->nom ) {
            $pdfName = 'recap-MCTS_' . $customer->nom . '_' . $customer->prenom . '_' . $customer->date_update();
        } else {
            $pdfName = 'recap-MCTS_' . $customer->date_update() . '_' . $customer->uuid;
        }

        

        //return $pdf->stream();
        return $pdf->download($pdfName);
        return view('pdf.show', compact('customer'));
        
    }
}
